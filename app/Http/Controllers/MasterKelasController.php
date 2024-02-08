<?php

namespace App\Http\Controllers;

use App\Models\MasterKelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MasterKelasController extends Controller
{
    public function index()
    {
        // return view('admin.masterkelas.index');
        // $kelas = MasterKelas::all();
        // // $kelas = UserDetail::with('User')->paginate(2);
        // return view('kelas.index', compact('kelas'));

        $users = User::all(); 
        $masterkelas = MasterKelas::with('User')->paginate(2);
    

         return view('admin.masterkelas.index', compact('masterkelas','users'));
    }

    public function listKelas(Request $request)
    {
        $columns = [
            0 => 'nomer_urut',
            1 => 'nama_kelas',
            2 => 'user_id',
        
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if (!in_array($orderColumn, $columns)) {
            // Kolom urutan tidak valid, atur ke nilai default
            $orderColumn = 'id'; // Atau sesuaikan dengan kolom default yang valid
        }
        $dir = $request->input('order.0.dir');
        
        // Validasi nilai $dir
        if ($dir !== 'asc' && $dir !== 'desc') {
            // Jika nilai tidak sesuai, atur nilai default ke 'asc' atau 'desc'
            $dir = 'asc'; // Atau Anda bisa menetapkan nilai default lain yang sesuai
        }
        
        // $search = $request->input('search')['value'];
        $search = $request->input('search') ? $request->input('search')['value'] : '';

        // Hitunga keseluruhan
        $hitung = MasterKelas::count();

        $kelas = MasterKelas::where(function ($q) use ($search) {
            if($search != null)
            {
                return $q->where('nama_kelas','LIKE','%'.$search.'%')->orWhere('user_id',$search);
            }
        })->orderby($orderColumn,$dir);

        // $hitung = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->count();

        // $user_detail = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->where(function ($g) use ($search) {
        //     return $g->where('nama_user','LIKE','%'.$search.'%');
        // })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();

        if ($start > 0) {
            $kelas->skip($start);
        }
        $kelas = $kelas->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($kelas as $g)
        {
            $item['nomor_urut'] = $i;
            $item['nama_kelas'] = $g->nama_kelas;
            $item['user_id'] = $g->user_id;

            $item['id'] = $g->id;
            $data[] = $item;
            $i++;
        }
        // return var_dump($data);

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ],200);
    }

    public function addKelas(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nama_kelas'   => 'required|string|max:255',
            'user_id'   => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $kelas = new MasterKelas();
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->user_id = $request->input('user_id');
        $kelas->save();
        // dd($kelas);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data kelas',
            'data' =>$kelas, 
        ],201);

    }

    public function updateKelas(Request $request, $id)
    {
        // Find the user
        $kelas = MasterKelas::find($id);   
        // $kelas = MasterKelas::where('id', $id)->first();

        // Check if the user exists
        if (!$kelas) {
            // Return a 404 Not Found response if the user is not found
            return response()->json([
                'success' => false,
                'message' => 'Data kelas tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'id'   => 'required|string|max:255',
                'nama_kelas'   => 'required|string|max:255',
                'user_id'   => 'required|bigint',
            ]);

            $kelas->nama_kelas = $request->nama_kelas;
            $kelas->user_id = $request->user_id;
            $kelas->update();

            return response()->json(['message' => 'Kelas Updated Successfully', 'kelas' => $kelas]);
            }
    }

    public function deleteKelas( $id)
    {
        //find the user
        $kelas = MasterKelas::find($id);
        // $user = User::find($nip);
        // echo "<script>console.log('Data: " . $kelas . "' );</script>";

        if(!$kelas)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data kelas tidak ditemukan',
            ],400);

        }else{
            $hapus = $kelas->delete();
            // $user = $user->delete();

            if($kelas && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data kelas',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data kelas',
                ],400);
            }
            // var_dump($cari);
        }
    }
}
