<?php

namespace App\Http\Controllers;

use App\Exports\JurusanSiswaExport;
use App\Imports\JurusanSiswaImport;
use App\Models\JurusanSiswa;
use App\Models\MasterJurusan;
use App\Models\MasterSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class JurusanSiswaController extends Controller
{
    public function index()
    {
        // return view ('admin.jurusansiswa.index');

        // $jurusansiswa = JurusanSiswa::all();
        // return view('jurusansiswa.index', compact('jurusansiswa'));

        $mastersiswa = MasterSiswa::all();
        $masterjurusan = MasterJurusan::all(); 
        $jurusansiswa = JurusanSiswa::with('MasterJurusan', 'MasterSiswa')->paginate(2);
    

         return view('admin.jurusansiswa.index', compact('jurusansiswa','masterjurusan', 'mastersiswa'));
    }

    public function listJurusanSiswa(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'jurusan_id',
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
        $hitung = JurusanSiswa::count();

        $jurusansiswa = JurusanSiswa::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('jurusan_id', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $jurusansiswa->skip($start);
        }
        $jurusansiswa = $jurusansiswa->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($jurusansiswa as $k)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $k->nis;
            $item['jurusan_id'] = $k->jurusan_id;

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

    public function addJurusanSiswa(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis'   => 'required|string|max:15',
            'jurusan_id'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // $user_detail = new UserDetail();
        // $user_detail->jurusan_id = $request->input('role_id');;
        // $user_detail->save();

        $jurusansiswa = new JurusanSiswa();
        $jurusansiswa->nis = $request->input('nis');
        $jurusansiswa->jurusan_id = $request->input('jurusan_id');
        $jurusansiswa->save();

        // dd($jurusansiswa);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data jurusan siswa',
            'data' => $jurusansiswa, 
        ],201);
    }

    public function updateJurusanSiswa(Request $request, $id)
    {
        $jurusansiswa = JurusanSiswa::find($id);     

        if (!$jurusansiswa) {
            // Return a 404 Not Found response if the kelas$jurusansiswa is not found
            return response()->json([
                'success' => false,
                'message' => 'Data jurusan siswa tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'nis'   => 'required|string|max:15',
                'jurusan_id'   => 'required',
            ]);

            $jurusansiswa->nis = $request->nis;
            $jurusansiswa->jurusan_id = $request->jurusan_id;
            $jurusansiswa->update();

            return response()->json(['message' => 'jurusan siswa Updated Successfully', 'jurusansiswa' => $jurusansiswa]);
            }
    }

    public function deleteJurusanSiswa($id)
    {
        // $user_detail = UserDetail::find($nip);
        $jurusansiswa = JurusanSiswa::find($id);

        if(!$jurusansiswa)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data jurusan siswa tidak ditemukan',
            ],400);

        }else{
            $hapus = $jurusansiswa->delete();
            // $jurusansiswa_detail = $jurusansiswa_detail->delete();

            if($jurusansiswa && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data jurusan siswa',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data jurusan siswa',
                ],400);
            }
            // var_dump($cari);
        }
    }

    public function exportJurusanSiswa()
    {
        return Excel::download(new JurusanSiswaExport, 'DataJurusanSiswa.xlsx');
    }

    public function importJurusanSiswa(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('DataJurusanSiswa', $namaFile);

        Excel::import(new JurusanSiswaImport , public_path('/DataJurusanSiswa/'.$namaFile));
        return \redirect()->back();
    }

}
