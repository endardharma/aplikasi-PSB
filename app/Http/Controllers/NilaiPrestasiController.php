<?php

namespace App\Http\Controllers;

use App\Exports\NilaiPrestasiExport;
use App\Imports\NilaiPrestasiImport;
use App\Models\NilaiPrestasi;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class NilaiPrestasiController extends Controller
{
    public function index(){
        return view('admin.nilaiprestasi.index');
        $prestasi = NilaiPrestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    public function listPrestasi(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
            3 => 'keterangan_prestasi',
            4 => 'nilai_prestasi',
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
        $hitung = NilaiPrestasi::count();

        $prestasi = NilaiPrestasi::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('keterangan_prestasi', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $prestasi->skip($start);
        }
        $prestasi = $prestasi->take($limit)->get();
        
        $data = array();
        $i = 1;
        foreach($prestasi as $p)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $p->nis;
            $item['kelas_id'] = $p->kelas_id;
            $item['keterangan_prestasi'] = $p->keterangan_prestasi;
            $item['nilai_prestasi'] = $p->nilai_prestasi    ;
            $item['semester'] = $p->semester;
            $item['tahun_ajar'] = $p->tahun_ajar;
            
            $item['id'] = $p->id;
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

    public function addPrestasi(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_siswa' => 'required|string|max:255',
            'keterangan_prestasi' => 'required|string|max:255',
            'nilai_prestasi' => 'required|string|max:255',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'semester' => 'required|string|max:255',
            'tahun_ajar' => 'required|string|max:255',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }

        $prestasi = new NilaiPrestasi();
        $prestasi->nama_siswa = $request->input('nama_siswa');
        $prestasi->keterangan_prestasi = $request->input('keterangan_prestasi');
        $prestasi->nilai_prestasi = $request->input('nilai_prestasi');
        $prestasi->kelas = $request->input('kelas');
        $prestasi->jurusan = $request->input('jurusan');
        $prestasi->semester = $request->input('semester');
        $prestasi->tahun_ajar = $request->input('tahun_ajar');

        $prestasi->save();

        return response()->json([
            'success' => true,
            'message' => 'Behasil menambahkan data prestasi',
            'data' => $prestasi,
        ], 201);
    }

    public function updatePrestasi(Request $request, $id)
    {
        $prestasi = NilaiPrestasi::find($id);
        
        if (!$prestasi)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data prestasi tidak ditemukan'
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'nama_siswa' => 'required|string|max:255',
                'keterangan_prestasi' => 'required|string|max:255',
                'nilai_prestasi' => 'required|string|max:255',
                'kelas' => 'required|string|max:255',
                'jurusan' => 'required|string|max:255',
                'semester' => 'required|string|max:255',
                'tahun_ajar' => 'required|string|max:255',
            ]);

            $prestasi->nama_siswa = $request->input('nama_siswa');
            $prestasi->keterangan_prestasi = $request->input('keterangan_prestasi');
            $prestasi->nilai_prestasi = $request->input('nilai_prestasi');
            $prestasi->kelas = $request->input('kelas');
            $prestasi->jurusan = $request->input('jurusan');
            $prestasi->semester = $request->input('semester');
            $prestasi->tahun_ajar = $request->input('tahun_ajar');

            $prestasi->save();

            return response()->json([
                'message' => 'Nilai Prestasi updated successfully', 'prestasi' => $prestasi
            ]);
        }
    }

    public function deletePrestasi ($id)
    {
        $prestasi = NilaiPrestasi::find($id);
        if(!$prestasi)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data mapel tidak ditemukan',
            ],400);

        }else{
            $prestasi = $prestasi->delete();

            if($prestasi)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data prestasi',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data prestasi',
                ],400);
            }
        }
    }

    public function exportNilaiPrestasi()
    {
        return Excel::download(new NilaiPrestasi, 'DataPrestasi.xlsx');
    }

    public function importNilaiPrestasi(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataPrestasi', $namaFile);

        Excel::import(new NilaiPrestasiImport , public_path('/DataPrestasi/'.$namaFile));
        return \redirect()->back();
    }


}
