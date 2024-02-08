<?php

namespace App\Http\Controllers;


use App\Models\NilaiHafalan;
use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Exports\NilaiHafalanExport;
use App\Imports\NilaiHafalanImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiHafalanController extends Controller
{
    public function index(){
        return view ('admin.nilaihafalan.index');
        $hafalan = NilaiHafalan::all();
        return view('hafalan.index', compact('hafalan'));
    }

    public function listHafalan(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'jumlah_juz',
            4 => 'makhrodul_huruf',
            5 => 'ketentuan_ilmu_tajwid',
            6 => 'irama_lagu',
            7 => 'fasokhah',
            8 => 'nilai_hafalan',
            9 => 'semester', 
            10 => 'tahun_ajar', 
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
        $hitung = NilaiHafalan::count();

        $hafalan = NilaiHafalan::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('jumlah_juz', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $hafalan->skip($start);
        }
        $hafalan = $hafalan->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($hafalan as $h)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $h->nis;
            $item['kelas_id'] = $h->kelas_id;
            $item['jumlah_juz'] = $h->jumlah_juz;
            $item['makhrodul_huruf'] = $h->makhrodul_huruf;
            $item['ketentuan_ilmu_tajwid'] = $h->ketentuan_ilmu_tajwid;
            $item['irama_lagu'] = $h->irama_lagu;
            $item['fasokhah'] = $h->fasokhah;
            $item['nilai_hafalan'] = $h->nilai_hafalan;
            $item['semester'] = $h->semester;
            $item['tahun_ajar'] = $h->tahun_ajar;
            
            $item['id'] = $h->id;
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
    
    public function addHafalan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_siswa' => 'required|string|max:255',
            'jumlah_juz' => 'required|integer|max:255',
            'makhrodul_huruf' => 'required|integer|max:255',
            'ketentuan_ilmu_tajwid' => 'required|integer|max:255',
            'irama_lagu' => 'required|integer|max:255',
            'fasokhah' => 'required|integer|max:255',
            'nilai_hafalan' => 'required|integer|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $hafalan = new NilaiHafalan();
        $hafalan->nama_siswa = $request->input('nama_siswa');
        $hafalan->jumlah_juz = $request->input('jumlah_juz');
        $hafalan->makhrodul_huruf = $request->input('makhrodul_huruf');
        $hafalan->ketentuan_ilmu_tajwid = $request->input('ketentuan_ilmu_tajwid');
        $hafalan->irama_lagu = $request->input('irama_lagu');
        $hafalan->fasokhah = $request->input('fasokhah');
        $hafalan->nilai_hafalan = $request->input('nilai_hafalan');
        $hafalan->kelas = $request->input('kelas');
        $hafalan->jurusan = $request->input('jurusan');
        $hafalan->semester = $request->input('semester');
        $hafalan->tahun_ajar = $request->input('tahun_ajar');

        $hafalan->save();

        return response()->json([
            'success' => true,
            'message' => 'Data hafalan berhasil ditambahkan',
            'data' => $hafalan,
        ], 201);   
    }

    public function updateHafalan(Request $request, $id)
    {
        $hafalan = NilaiHafalan::find($id);

        if(!$hafalan)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data hafalan tidak ditemukan'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_siswa' => 'required|string|max:255',
                'jumlah_juz' => 'required|integer|max:255',
                'makhrodul_huruf' => 'required|integer|max:255',
                'ketentuan_ilmu_tajwid' => 'required|integer|max:255',
                'irama_lagu' => 'required|integer|max:255',
                'fasokhah' => 'required|integer|max:255',
                'nilai_hafalan' => 'required|integer|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255', 
            ]);

            $hafalan->nama_siswa = $request->input('nama_siswa');
            $hafalan->jumlah_juz = $request->input('jumlah_juz');
            $hafalan->makhrodul_huruf = $request->input('makhrodul_huruf');
            $hafalan->ketentuan_ilmu_tajwid = $request->input('ketentuan_ilmu_tajwid');
            $hafalan->irama_lagu = $request->input('irama_lagu');
            $hafalan->fasokhah = $request->input('fasokhah');
            $hafalan->nilai_hafalan = $request->input('nilai_hafalan');
            $hafalan->kelas = $request->input('kelas');
            $hafalan->jurusan = $request->input('jurusan');
            $hafalan->semester = $request->input('semester');
            $hafalan->tahun_ajar = $request->input('tahun_ajar');

            $hafalan->save();

            return response()->json([
                'message' => 'Nilai Hafalan updated successfully', 'hafalan' => $hafalan
            ]);
        }
    }   

    public function deleteHafalan ($id)
    {
        $kriteria = NilaiHafalan::find($id);
        if(!$kriteria)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kriteria tidak ditemukan',
            ],400);

        }else{
            $kriteria = $kriteria->delete();

            if($kriteria)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data kriteria',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data kriteria',
                ],400);
            }
        }
    }

    public function exportNilaiHafalan()
    {
        return Excel::download(new NilaiHafalan, 'DataHafalan.xlsx');
    }

    public function importNilaiHafalan(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataHafalan', $namaFile);

        Excel::import(new NilaiHafalanImport , public_path('/DataHafalan/'.$namaFile));
        return \redirect()->back();
    }

}
