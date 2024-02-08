<?php

namespace App\Http\Controllers;

use App\Models\MasterKriteria;
use App\Models\PeriodeKriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeriodeKriteriaController extends Controller
{
    public function index()
    {
        // return view('admin.periodekriteria.index');
        // $periodekriteria = PeriodeKriteria::all();
        // return view ('periodekriteria.index', compact('periodekriteria'));

        $masterkriteria = MasterKriteria::all(); 
        $periodekriteria = PeriodeKriteria::with('MasterKriteria')->paginate(2);
    

        return view('admin.periodekriteria.index', compact('periodekriteria','masterkriteria'));

    }

    public function listPeriodeKriteria(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'kode_kriteria',
            2 => 'bobot_kriteria',
            3 => 'semester',
            4 => 'tahun_ajar',
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
        $hitung = PeriodeKriteria::count();

        $periodekriteria = PeriodeKriteria::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('kode_kriteria', 'like', '%' . $search . '%')->orWhere('bobot_kriteria', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $periodekriteria->skip($start);
        }
        $periodekriteria = $periodekriteria->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($periodekriteria as $k)
        {
            $item['nomor_urut'] = $i;
            $item['kode_kriteria'] = $k->kode_kriteria;
            $item['bobot_kriteria'] = $k->bobot_kriteria;
            $item['semester'] = $k->semester;
            $item['tahun_ajar'] = $k->tahun_ajar;

            $item['id'] = $k->id;
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

    public function addPeriodeKriteria(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_kriteria'   => 'required|string|max:255',
            'bobot_kriteria'   => 'required',
            'semester'   => 'required|string|max:255',
            'tahun_ajar'   => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $periodekriteria = new PeriodeKriteria();
        $periodekriteria->kode_kriteria = $request->input('kode_kriteria');
        $periodekriteria->bobot_kriteria = $request->input('bobot_kriteria');
        $periodekriteria->semester = $request->input('semester');
        $periodekriteria->tahun_ajar = $request->input('tahun_ajar');
        $periodekriteria->save();

        // dd($PeriodeKriteria);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data periode kriteria',
            'data' =>$periodekriteria, 
        ],201);
    }

    public function updatePeriodeKriteria(Request $request, $id)
    {
        $periodekriteria = PeriodeKriteria::find($id);     

        if (!$periodekriteria) {
            // Return a 404 Not Found response if the kelas$periodekriteria is not found
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'kode_kriteria'   => 'required|string|max:255',
                'bobot_kriteria'   => 'required',
                'semester'   => 'required|string|max:255',
                'tahun_ajar'   => 'required|string|max:255',
            ]);

            $periodekriteria->kode_kriteria = $request->kode_kriteria;
            $periodekriteria->bobot_kriteria = $request->bobot_kriteria;
            $periodekriteria->semester = $request->semester;
            $periodekriteria->tahun_ajar = $request->tahun_ajar;
            $periodekriteria->update();

            return response()->json(['message' => 'Kelas siswa Updated Successfully', 'periodekriteria' => $periodekriteria]);
            }
    }

    public function deletePeriodeKriteria($id)
    {
        // $periode kriteria_detail = periode kriteriaDetail::find($nip);
        $periodekriteria = PeriodeKriteria::find($id);

        if(!$periodekriteria)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan',
            ],400);

        }else{
            $hapus = $periodekriteria->delete();
            // $periodekriteria_detail = $periodekriteria_detail->delete();

            if($periodekriteria && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data kelas siswa',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data kelas siswa',
                ],400);
            }
            // var_dump($cari);
        }
    }
}
