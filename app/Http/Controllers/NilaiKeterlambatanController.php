<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\NilaiKeterlambatan;
use App\Models\User;

use App\Exports\NilaiKeterlambatanExport;
use App\Imports\NilaiKeterlambatanImport;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiKeterlambatanController extends Controller
{
    public function index(){
        return view('admin.nilaiketerlambatan.index');
        $keterlambatan = NilaiKeterlambatan::all();
        return view('keterlambatan.index', compact('keterlambatan'));
    }

    public function listKeterlambatan(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'jumlah_keterlambatan',
            4 => 'nilai_keterlambatan',
            5 => 'semester', 
            6 => 'tahun_ajar', 
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
        $hitung = NilaiKeterlambatan::count();

        $keterlambatan = NilaiKeterlambatan::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('jumlah_keterlambatan', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $keterlambatan->skip($start);
        }
        $keterlambatan = $keterlambatan->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($keterlambatan as $k)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $k->nis;
            $item['kelas_id'] = $k->kelas_id;
            $item['jumlah_keterlambatan'] = $k->jumlah_keterlambatan;
            $item['nilai_keterlambatan'] = $k->nilai_keterlambatan;
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

    public function addKeterlambatan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_siswa' => 'required|string|max:255',
            'jumlah_keterlambatan' => 'required|string|max:255',
            'nilai_keterlambatan' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $keterlambatan = new NilaiKeterlambatan();
        $keterlambatan->nama_siswa = $request->input('nama_siswa');
        $keterlambatan->jumlah_keterlambatan = $request->input('jumlah_keterlambatan');
        $keterlambatan->nilai_keterlambatan = $request->input('nilai_keterlambatan');
        $keterlambatan->kelas = $request->input('kelas');
        $keterlambatan->jurusan = $request->input('jurusan');
        $keterlambatan->semester = $request->input('semester');
        $keterlambatan->tahun_ajar = $request->input('tahun_ajar');
        
        $keterlambatan->save();

        return response()->json([
            'success' => true,
            'message' => 'Behasil menambahkan data keterlambatan',
            'data' => $keterlambatan,
        ], 201);
    }

    public function updateKeterlambatan(Request $request, $id)
    {
        $keterlambatan = NilaiKeterlambatan::find($id);
        
        if (!$keterlambatan)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data keterlambatan tidak ditemukan'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_siswa' => 'required|string|max:255',
                'jumlah_keterlambatan' => 'required|string|max:255',
                'nilai_keterlambatan' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255',
            ]);

            $keterlambatan->nama_siswa = $request->input('nama_siswa');
            $keterlambatan->jumlah_keterlambatan = $request->input('jumlah_keterlambatan');
            $keterlambatan->nilai_keterlambatan = $request->input('nilai_keterlambatan');
            $keterlambatan->kelas = $request->input('kelas');
            $keterlambatan->jurusan = $request->input('jurusan');
            $keterlambatan->semester = $request->input('semester');
            $keterlambatan->tahun_ajar = $request->input('tahun_ajar');

            $keterlambatan->save();

            return response()->json([
                'message' => 'Keterlambatan updated successfully', 'keterlambatan' => $keterlambatan
            ]);
        }
    }

    public function deleteKeterlambatan ($id)
    {
        $keterlambatan = NilaiKeterlambatan::find($id);
        if(!$keterlambatan)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data keterlambatan tidak ditemukan',
            ],400);

        }else{
            $keterlambatan = $keterlambatan->delete();

            if($keterlambatan)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data keterlambatan',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data keterlambatan',
                ],400);
            }
        }
    }

    public function exportNilaiKeterlambatan()
    {
        return Excel::download(new NilaiKeterlambatan, 'DataKeterlambatan.xlsx');
    }

    public function importNilaiKeterlambatan(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataKeterlambatan', $namaFile);

        Excel::import(new NilaiKeterlambatanImport , public_path('/DataKeterlambatan/'.$namaFile));
        return \redirect()->back();
    }

}
