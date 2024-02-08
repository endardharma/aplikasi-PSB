<?php

namespace App\Http\Controllers;

use App\Exports\MasterKriteriaExport;
use App\Imports\MasterKriteriaImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Models\MasterKriteria;
use App\Models\User;


class MasterKriteriaController extends Controller
{
    public function index()
    {
        // return view('admin.masterkriteria.index');
        // $kriteria = MasterKriteria::all();
        // return view ('kriteria.index', compact('kriteria'));
        $users = User::all(); 
        $masterkriteria = MasterKriteria::with('User')->paginate(2);
    

         return view('admin.masterkriteria.index', compact('masterkriteria','users'));
    }

    public function listKriteria(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'kode_kriteria',
            2 => 'nama_kriteria',
            3 => 'bobot_kriteria',
            4 => 'atribut_kriteria',
            5 => 'user_id',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if(!in_array($orderColumn, $columns))
        {
            $orderColumn = 'kode_kriteria';
        }
        $dir = $request->input('order.0.dir');
        
        //validasi nilai $dir
        if($dir !== 'asc' && $dir !== 'desc')
        {
            // jika nilai tidak sesuai, atur nilai default ke 'asc' atau 'desc'
            $dir = 'asc';
        }

        $search = $request->input('search') ? $request->input('search')['value'] : '';

        //hitung keseluruhan
        $hitung = MasterKriteria::count();

        $kriteria = MasterKriteria::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('kode_kriteria', 'like', '%' . $search . '%')->orWhere('bobot_kriteria', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $kriteria->skip($start);
        }
        $kriteria = $kriteria->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($kriteria as $k)
        {
            $item['nomor_urut'] = $i;
            $item['kode_kriteria'] = $k->kode_kriteria;
            $item['nama_kriteria'] = $k->nama_kriteria;
            $item['bobot_kriteria'] = $k->bobot_kriteria;
            $item['atribut_kriteria'] = $k->atribut_kriteria;
            $item['user_id'] = $k->user_id;
            $data[] = $item;
            $i++;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data
        ],200);
    }

    public function addKriteria(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_kriteria' => 'required|string|max:255',
            'nama_kriteria' => 'required|string|max:255',
            'bobot_kriteria' => 'required',
            'atribut_kriteria' => 'required|string|max:255',
            'user_id' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $kriteria = new MasterKriteria();
        $kriteria->kode_kriteria = $request->input('kode_kriteria');
        $kriteria->nama_kriteria = $request->input('nama_kriteria');
        $kriteria->bobot_kriteria = $request->input('bobot_kriteria');
        $kriteria->atribut_kriteria = $request->input('atribut_kriteria');
        $kriteria->user_id = $request->input('user_id');
        $kriteria->save();
        // dd($kriteria);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data kriteria',
            'data' => $kriteria,
        ], 201);
    }

    public function updateKriteria(Request $request, $kode_kriteria)
    {
        $kriteria = MasterKriteria::find($kode_kriteria);

        if (!$kriteria)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kriteria tidak ditemukan',
            ]);
        }else{

            $validator = Validator::make($request->all(), [
                'kode_kriteria' => 'required|string|max:255',
                'nama_kriteria' => 'required|string|max:255',
                'bobot_kriteria' => 'required',
                'atribut_kriteria' => 'required|string|max:255',
                'user_id' => 'required',
            ]);

            $kriteria->kode_kriteria = $request->input('kode_kriteria');
            $kriteria->nama_kriteria = $request->input('nama_kriteria');
            $kriteria->bobot_kriteria = $request->input('bobot_kriteria');
            $kriteria->atribut_kriteria = $request->input('atribut_kriteria');
            $kriteria->user_id = $request->input('user_id');
            $kriteria->update();

            return response()->json([
                'message' => 'Kriteria updated successfully', 'kriteria' => $kriteria
            ]);
        }
    }

    public function deleteKriteria($kode_kriteria)
    {
        // $kriteria = MasterKriteria::find($id);
        $kriteria = MasterKriteria::where('kode_kriteria', $kode_kriteria)->first();

        if(!$kriteria)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kriteria tidak ditemukan'
            ], 400);
        }else{
            $kriteria = $kriteria->delete();

            if($kriteria)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data kriteria',
                ], 201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data kriteria',
                ], 400);
            }
        }
    }

    public function exportKriteria()
    {
        return Excel::download(new MasterKriteriaExport, 'DataKriteria.xlsx');
    }

    public function importKriteria(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataKriteria', $namaFile);

        Excel::import(new MasterKriteriaImport , public_path('/DataKriteria/'.$namaFile));
        return \redirect()->back();
    }
}
