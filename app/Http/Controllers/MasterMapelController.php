<?php

namespace App\Http\Controllers;

use App\Models\MasterMapel;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MasterMapelController extends Controller
{
    public function index()
    {
        return view('admin.mastermapel.index');
        $mapel = MasterMapel::all();
        return view('mapel.index', compact('siswa'));
    }

    // public function listMapel(){
    //     $mapel = MasterMapel::all();
    //     $data = array();
    //     $i = 1;
    //     foreach($mapel as $m)
    //     {
    //         $item['nomor_urut'] = $i;
    //         $item['name'] = $m->name;
    //         $item['kelompok_mapel'] = $m->kelompok_mapel;
    //         $item['name_nilai'] = $m->name_nilai;
    //         $item['jurusan'] = $m->jurusan;
    //         $data[] = $item;
    //         $i++;
    //     }

    //     return response()->json([
    //         'data' => $data,
    //     ], 200);
    // }

    public function listMapel(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nama_mapel',
            2 => 'kelompok_mapel',
            3 => 'name_nilai',
            4 => 'kelas', 
            5 => 'jurusan', 
            6 => 'semester', 
            7 => 'tahun_ajar', 
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
        $hitung = MasterMapel::count();

        $mapel = MasterMapel::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('nip', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $mapel->skip($start);
        }
        $mapel = $mapel->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($mapel as $m)
        {
            $item['nomor_urut'] = $i;
            $item['nama_mapel'] = $m->nama_mapel;
            $item['kelompok_mapel'] = $m->kelompok_mapel;
            $item['nama_nilai'] = $m->nama_nilai;
            $item['kelas'] = $m->kelas;
            $item['jurusan'] = $m->jurusan;
            $item['semester'] = $m->semester;
            $item['tahun_ajar'] = $m->tahun_ajar;
            
            $item['id'] = $m->id;
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

    public function addMapel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_mapel' => 'required|string|max:255',
            'kelompok_mapel' => 'required|string|max:255',
            'nama_nilai' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $mapel = new MasterMapel();
        $mapel->nama_mapel = $request->input('nama_mapel');
        $mapel->kelompok_mapel = $request->input('kelompok_mapel');
        $mapel->nama_nilai = $request->input('nama_nilai');
        $mapel->kelas = $request->input('kelas');
        $mapel->jurusan = $request->input('jurusan');
        $mapel->semester = $request->input('semester');
        $mapel->tahun_ajar = $request->input('tahun_ajar');

        $mapel->save();

        return response()->json([
            'success' => true,
            'message' => 'Behasil menambahkan data mapel',
            'data' => $mapel,
        ], 201);
    }

    public function updateMapel(Request $request, $id)
    {
        $mapel = MasterMapel::find($id);
        
        if (!$mapel)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data mapel tidak ditemukan'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_mapel' => 'required|string|max:255',
                'kelompok_mapel' => 'required|string|max:255',
                'nama_nilai' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255',
            ]);

            $mapel->nama_mapel = $request->input('nama_mapel');
            $mapel->kelompok_mapel = $request->input('kelompok_mapel');
            $mapel->nama_nilai = $request->input('nama_nilai');
            $mapel->kelas = $request->input('kelas');
            $mapel->jurusan = $request->input('jurusan');
            $mapel->semester = $request->input('semester');
            $mapel->tahun_ajar = $request->input('tahun_ajar');

            $mapel->save();

            return response()->json([
                'message' => 'Mapel updated successfully', 'mapel' => $mapel
            ]);
        }
    }

    public function deleteMapel ($id)
    {
        $mapel = MasterMapel::find($id);
        if(!$mapel)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data mapel tidak ditemukan',
            ],400);

        }else{
            $mapel = $mapel->delete();

            if($mapel)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data mapel',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data mapel',
                ],400);
            }
        }
    }

}
