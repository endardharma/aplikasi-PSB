<?php

namespace App\Http\Controllers;

use App\Models\MasterJurusan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterJurusanController extends Controller
{
    public function index()
    {
        // return view ('admin.masterjurusan.index');
        // $masterjurusan = MasterJurusan::all();
        // return view ('masterjurusan.index', compact('masterjurusan'));
        $users = User::all(); 
        $masterjurusan = MasterJurusan::with('User')->paginate(2);
    

         return view('admin.masterjurusan.index', compact('masterjurusan','users'));
    }

    public function listJurusan(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'nama_jurusan',
            2 => 'user_id',
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
        $hitung = MasterJurusan::count();

        $masterjurusan = MasterJurusan::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('nama_jurusan', 'like', '%' . $search . '%')->orWhere('user_id', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $masterjurusan->skip($start);
        }
        $masterjurusan = $masterjurusan->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($masterjurusan as $k)
        {
            $item['nomor_urut'] = $i;
            $item['nama_jurusan'] = $k->nama_jurusan;
            $item['user_id'] = $k->user_id;

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

    public function addJurusan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_jurusan'   => 'required|string|max:255',
            'user_id'   => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // $user_detail = new UserDetail();
        // $user_detail->user_id = $request->input('role_id');;
        // $user_detail->save();

        $masterjurusan = new MasterJurusan();
        $masterjurusan->nama_jurusan = $request->input('nama_jurusan');
        $masterjurusan->user_id = $request->input('user_id');
        $masterjurusan->save();

        // dd($MasterJurusan);
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data master jurusan',
            'data' =>$masterjurusan, 
        ],201);
    }

    public function updateJurusan(Request $request, $id)
    {
        $masterjurusan = MasterJurusan::find($id);     

        if (!$masterjurusan) {
            // Return a 404 Not Found response if the kelas$masterjurusan is not found
            return response()->json([
                'success' => false,
                'message' => 'Data master jurusan tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'nama_jurusan' => 'required|string|max:255',
                'user_id' => 'required',
            ]);

            $masterjurusan->nama_jurusan = $request->nama_jurusan;
            $masterjurusan->user_id = $request->user_id;
            $masterjurusan->update();

            return response()->json(['message' => 'master jurusan Updated Successfully', 'masterjurusan' => $masterjurusan]);
            }
    }

    public function deleteJurusan($id)
    {
        // $user_detail = UserDetail::find($nip);
        $masterjurusan = MasterJurusan::find($id);

        if(!$masterjurusan)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data master jurusan tidak ditemukan',
            ],400);

        }else{
            $hapus = $masterjurusan->delete();
            // $masterjurusan_detail = $masterjurusan_detail->delete();

            if($masterjurusan && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data master jurusan',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data master jurusan',
                ],400);
            }
            // var_dump($cari);
        }
    }
}
