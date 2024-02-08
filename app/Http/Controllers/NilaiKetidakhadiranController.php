<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\NilaiKetidakhadiran;
use App\Models\User;

use App\Imports\NilaiKetidakhadiranImport;
use App\Exports\NilaiKetidakhadiranExport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiKetidakhadiranController extends Controller
{
    public function index()
    {
        return view('admin.nilaiketidakhadiran.index');
        $ketidakhadiran = NilaiKetidakhadiran::all();
        return view('ketidakhadiran.index', compact('ketidakhadiran'));
    }

    public function listKetidakhadiran(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'hadir',
            4 => 'sakit',
            5 => 'izin',
            6 => 'tanpa_keterangan',
            7 => 'nilai_ketidakhadiran',
            8 => 'semester',
            9 => 'tahun_ajar',
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
        $hitung = NilaiKetidakhadiran::count();

        $ketidakhadiran = NilaiKetidakhadiran::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('kelas_id', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $ketidakhadiran->skip($start);
        }
        $ketidakhadiran = $ketidakhadiran->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($ketidakhadiran as $k)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $k->nis;
            $item['kelas_id'] = $k->kelas_id;
            $item['hadir'] = $k->hadir;
            $item['sakit'] = $k->sakit;
            $item['izin'] = $k->izin;
            $item['tanpa_keterangan'] = $k->tanpa_keterangan;
            $item['nilai_ketidakhadiran'] = $k->nilai_ketidakhadiran;
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

    public function addKetidakhadiran(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_siswa' => 'required|string|max:255',
            'hadir' => 'required|string|max:255',
            'sakit' => 'required|string|max:255',
            'izin' => 'required|string|max:255',
            'tanpa_keterangan' => 'required|string|max:255',
            'nilai_ketidakhadiran' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $ketidakhadiran = new NilaiKetidakhadiran;
        $ketidakhadiran->nama_siswa = $request->input('nama_siswa');
        $ketidakhadiran->hadir = $request->input('hadir');
        $ketidakhadiran->sakit = $request->input('sakit');
        $ketidakhadiran->izin = $request->input('izin');
        $ketidakhadiran->tanpa_keterangan = $request->input('tanpa_keterangan');
        $ketidakhadiran->nilai_ketidakhadiran = $request->input('nilai_ketidakhadiran');
        $ketidakhadiran->semester = $request->input('semester');
        $ketidakhadiran->tahun_ajar = $request->input('tahun_ajar');
        $ketidakhadiran->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data nilai tingkat ketidakhadiran',
            'data' => $ketidakhadiran,
        ], 201);
    }

    public function updateKetidakhadiran(Request $request, $id)
    {
        $ketidakhadiran = NilaiKetidakhadiran::find($id);
        
        if(!$ketidakhadiran)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data nilai tingkat ketidakhadiran tidak ditemukan',
            ], 404);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_siswa' => 'required|string|max:255',
                'hadir' => 'required|string|max:255',
                'sakit' => 'required|string|max:255',
                'izin' => 'required|string|max:255',
                'tanpa_keterangan' => 'required|string|max:255',
                'nilai_ketidakhadiran' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255',
            ]); 

            $ketidakhadiran->nama_siswa = $request->input('nama_siswa');
            $ketidakhadiran->hadir = $request->input('hadir');
            $ketidakhadiran->sakit = $request->input('sakit');
            $ketidakhadiran->izin = $request->input('izin');
            $ketidakhadiran->tanpa_keterangan = $request->input('tanpa_keterangan');
            $ketidakhadiran->nilai_ketidakhadiran = $request->input('nilai_ketidakhadiran');
            $ketidakhadiran->semester = $request->input('semester');
            $ketidakhadiran->tahun_ajar = $request->input('tahun_ajar');
            $ketidakhadiran->update();

            return response()->json([
                'message' => 'Nilai Tingkat Ketidakhadiran updated successfully', 'ketidakhadiran' => $ketidakhadiran
            ]);
        }
    }

    public function deleteKetidakhadiran ($id)
    {
        $ketidakhadiran = NilaiKetidakhadiran::find($id);
        if(!$ketidakhadiran)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data nilai tingkat ketidakhadiran tidak ditemukan',
            ],400);

        }else{
            $ketidakhadiran = $ketidakhadiran->delete();

            if($ketidakhadiran)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data nilai tingkat ketidakhadiran',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data nilai tingkat ketidakhadiran',
                ],400);
            }
        }
    }

    public function exportNilaiKetidakhadiran()
    {
        return Excel::download(new NilaiKetidakhadiran, 'DataKetidakhadiran.xlsx');
    }

    public function importNilaiKetidakhadiran(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataKetidakhadiran', $namaFile);

        Excel::import(new NilaiKetidakhadiranImport , public_path('/DataKetidakhadiran/'.$namaFile));
        return \redirect()->back();
        // return response()->json([
        //     'success' => true,
        //     'message' => 'Berhasil meng-import data ketidakhadiran',
        // ],201);
    }
}
