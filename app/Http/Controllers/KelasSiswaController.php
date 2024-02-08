<?php

namespace App\Http\Controllers;

use App\Models\KelasSiswa;
use App\Models\MasterKelas;
use App\Models\MasterSiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KelasSiswaController extends Controller
{
    public function index()
    {
        // return view('admin.kelassiswa.index');
        // $kelassiswa = KelasSiswa::all();
        // return view ('kelassiswa.index', compact('kelassiswa'));

        $mastersiswa = MasterSiswa::all();
        $masterkelas = MasterKelas::all(); 
        $kelassiswa = KelasSiswa::with('MasterKelas', 'MasterSiswa')->paginate(2);
    

         return view('admin.kelassiswa.index', compact('kelassiswa','masterkelas', 'mastersiswa'));
    }

    public function listKelasSiswa(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nis',
            2 => 'kelas_id',
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
        $hitung = KelasSiswa::count();

        $kelassiswa = KelasSiswa::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nis', 'like', '%' . $search . '%')->orWhere('kelas_id', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $kelassiswa->skip($start);
        }
        $kelassiswa = $kelassiswa->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($kelassiswa as $k)
        {
            $item['nomor_urut'] = $i;
            $item['nis'] = $k->nis;
            $item['kelas_id'] = $k->kelas_id;

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

    public function addKelasSiswa(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nis'   => 'required|string|max:15',
            'kelas_id'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // $user_detail = new UserDetail();
        // $user_detail->kelas_id = $request->input('role_id');;
        // $user_detail->save();

        $kelassiswa = new KelasSiswa();
        $kelassiswa->nis = $request->input('nis');
        $kelassiswa->kelas_id = $request->input('kelas_id');
        $kelassiswa->save();

        // dd($kelassiswa);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data user',
            'data' =>$kelassiswa, 
        ],201);
    }

    public function updateKelasSiswa(Request $request, $id)
    {
        $kelassiswa = KelasSiswa::find($id);     

        if (!$kelassiswa) {
            // Return a 404 Not Found response if the kelas$kelassiswa is not found
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'nis'   => 'required|string|max:15',
            'kelas_id'   => 'required',
            ]);

            $kelassiswa->nis = $request->nis;
            $kelassiswa->kelas_id = $request->kelas_id;
            $kelassiswa->update();

            return response()->json(['message' => 'Kelas siswa Updated Successfully', 'kelassiswa' => $kelassiswa]);
            }
    }

    public function deleteKelasSiswa($id)
    {
        // $user_detail = UserDetail::find($nip);
        $kelassiswa = KelasSiswa::find($id);

        if(!$kelassiswa)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas siswa tidak ditemukan',
            ],400);

        }else{
            $hapus = $kelassiswa->delete();
            // $kelassiswa_detail = $kelassiswa_detail->delete();

            if($kelassiswa && $hapus)
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
