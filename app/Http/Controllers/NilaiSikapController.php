<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\NilaiSikap;
use App\Models\User;

use App\Exports\NilaiSikapExport;
use App\Imports\NilaiSikapImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiSikapController extends Controller
{
    public function index(){
        return view('admin.nilaisikap.index');
        $sikap = NilaiSikap::all();
        return view('sikap.index', compact('sikap'));
    }

    public function listSikap(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'keterangan_sikap',
            4 => 'nilai_sikap',
            7 => 'semester', 
            8 => 'tahun_ajar', 
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if(!in_array($orderColumn, $columns))
        {
            $orderColumn = 'id';
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
        $hitung = NilaiSikap::count();

        $sikap = NilaiSikap::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('keterangan_sikap', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $sikap->skip($start);
        }
        $sikap = $sikap->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($sikap as $s)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $s->nis;
            $item['kelas_id'] = $s->kelas_id;
            $item['keterangan_sikap'] = $s->keterangan_sikap;
            $item['nilai_sikap'] = $s->nilai_sikap;
            $item['semester'] = $s->semester;
            $item['tahun_ajar'] = $s->tahun_ajar;
            
            $item['id'] = $s->id;
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

    public function addSikap(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_siswa' => 'required|string|max:255',
            'keterangan_sikap' => 'required|string|max:255',
            'nilai_sikap' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $sikap = new NilaiSikap();
        $sikap->nama_siswa = $request->input('nama_siswa');
        $sikap->keterangan_sikap = $request->input('keterangan_sikap');
        $sikap->nilai_sikap = $request->input('nilai_sikap');
        $sikap->kelas = $request->input('kelas');
        $sikap->jurusan = $request->input('jurusan');
        $sikap->semester = $request->input('semester');
        $sikap->tahun_ajar = $request->input('tahun_ajar');
        $sikap->save();

        return response()->json([
            'success' => true,
            'message' => 'Behasil menambahkan data sikap',
            'data' => $sikap,
        ], 201);
    }

    public function updateSikap(Request $request, $id)
    {
        $sikap = NilaiSikap::find($id);

        if(!$sikap)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data sikap tidak ditemukan'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_siswa' => 'required|string|max:255',
                'keterangan_sikap' => 'required|string|max:255',
                'nilai_sikap' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255',
            ]);

            $sikap->nama_siswa = $request->input('nama_siswa');
            $sikap->keterangan_sikap = $request->input('keterangan_sikap');
            $sikap->nilai_sikap = $request->input('nilai_sikap');
            $sikap->kelas = $request->input('kelas');
            $sikap->jurusan = $request->input('jurusan');
            $sikap->semester = $request->input('semester');
            $sikap->tahun_ajar = $request->input('tahun_ajar');

            $sikap->update();

            return response()->json([
                'message' => 'Nilai Sikap updated successfully', 'sikap' => $sikap
            ]);
        }
    }

    public function deleteSikap ($id)
    {
        $sikap = NilaiSikap::find($id);
        if(!$sikap)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data sikap tidak ditemukan',
            ],400);

        }else{
            $sikap = $sikap->delete();

            if($sikap)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data sikap',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data sikap',
                ],400);
            }
        }
    }

    public function exportNilaiSikap()
    {
        return Excel::download(new NilaiSikap, 'DataSikap.xlsx');
    }

    public function importNilaiSikap(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataSikap', $namaFile);

        Excel::import(new NilaiSikapImport , public_path('/DataSikap/'.$namaFile));
        return \redirect()->back();
    }

}
