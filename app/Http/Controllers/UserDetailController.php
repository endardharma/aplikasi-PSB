<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use App\Models\User;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Post;
use LDAP\Result;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    public function index()
    {
        
        // $user_detail = UserDetail::all();
        $users = User::all(); 
        $user_detail = UserDetail::with('User')->paginate(2);
    

         return view('admin.userdetail.index', compact('user_detail','users'));
        
        // dd($user_detail, $users->toArray());
    }

    public function listUserDetail(Request $request)
    {
        $columns = [
            0 => 'nomer_urut',
            1 => 'nip',
            2 => 'user_id',
            3 => 'jenkel',
            4 => 'tgl_lahir',
            5 => 'no_telp',
            6 => 'alamat',
            7 => 'status_user',
            9 => 'is_active',
        
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = isset($columns[$request->input('order.0.column')]) ? $columns[$request->input('order.0.column')] : 'default_column';
        if (!in_array($orderColumn, $columns)) {
            // Kolom urutan tidak valid, atur ke nilai default
            $orderColumn = 'nip'; // Atau sesuaikan dengan kolom default yang valid
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
        $hitung = UserDetail::count();

        $user_detail = UserDetail::where(function ($q) use ($search) {
            if($search != null)
            {
                return $q->where('nip','LIKE','%'.$search.'%')->orWhere('alamat',$search);
            }
        })->orderby($orderColumn,$dir);

        // $hitung = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->count();

        // $user_detail = User::where('role_id','!=',1)->where('role_id','!=',8)->where('created_at',null)->where(function ($g) use ($search) {
        //     return $g->where('nama_user','LIKE','%'.$search.'%');
        // })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();

        if ($start > 0) {
            $user_detail->skip($start);
        }
        $user_detail = $user_detail->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($user_detail as $g)
        {
            $item['nomor_urut'] = $i;
            $item['nip'] = $g->nip;
            $item['user_id'] = $g->user_id;
            $item['jenkel'] = $g->jenkel;
            $item['tgl_lahir'] = $g->tgl_lahir;
            $item['no_telp'] = $g->no_telp;
            $item['alamat'] = $g->alamat;
            $item['status_user'] = $g->status_user;
            // $item['role_id'] = match ($g->role_id) {
            //     1 => 'Team IT',
            //     2 => 'Siswa-Siswi',
            //     3 => 'Guru BK',
            //     4 => 'Admin Raport',
            //     5 => 'Bagian Kurikulum',
            //     6 => 'Bagian Tata Usaha',
            //     7 => 'Guru Agama',
            //     default => 'Wali Kelas',
            // }; 
            $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Non-Aktif';
            // $item['id'] = $g->id;
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
    
    public function addUserDetail(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nip'   => 'required|string|max:15',
            'user_id'   => 'required',
            'jenkel'   => 'required|in:L,P',
            'tgl_lahir'   => 'required|date',
            'no_telp'   => 'required|string|max:255',
            'alamat'   => 'required|string|max:255',
            'status_user'   => 'required|in:Aktif,Non-Aktif',
            'is_active'   => 'required|int',
        ]);

        // $user = User::all();
        // return view('user_detail.index', compact('user'));

        // $user = User::with(array('user'=>function($query){
        //     $query->select('id','name');
        // }))->get();
        // return view('user_detail.index',compact('user_detail'));

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Create User
        // $user = new User();
        // $user->name = $request->input('nama_user');
        // $user->email = $request->input('email');
        // $user->email_verified_at = date('Y-m-d H:i:s');
        // $user->password = Hash::make($request->input('password'));
        // $user->role_id = $request->input('role_id');
        // // $user->nomor_induk = $request->input('nomor_induk');
        // $user->save();
        
        $user_detail = new UserDetail();
        $user_detail->nip = $request->input('nip');
        $user_detail->user_id = $request->input('user_id');
        $user_detail->jenkel = $request->input('jenkel');
        $user_detail->tgl_lahir = date('Y-m-d', strtotime($request->get('tgl_lahir')));
        $user_detail->no_telp = $request->input('no_telp');
        $user_detail->alamat = $request->input('alamat');
        $user_detail->status_user = $request->input('status_user');
        $user_detail->is_active = $request->input('is_active');
        $user_detail->save();


        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data user detail',
            'data' =>$user_detail, 
        ],201);

    }
    
    public function updateUserDetail(Request $request, $nip)
    {
        // Find the user
        // $user_detail = UserDetail::find($nip);   
        
        $user_detail = UserDetail::where('nip', $nip)->first();
        
        // $users = User::all(); 
        // $user_detail = UserDetail::with('User')->paginate(2);
        // return view('admin.userdetail.index', compact('user_detail','users'));
        
        // Check if the user exists
        if (!$user_detail) {
            // Return a 404 Not Found response if the user is not found
            return response()->json([
                'success' => false,
                'message' => 'Data user detail tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'nip'   => 'required|string|max:15',
                'user_id'   => 'required|bigint',
                'jenkel'   => 'required|in:L,P',
                'tgl_lahir'   => 'required|date',
                'no_telp'   => 'required|string|max:255',
                'no_talamatelp'   => 'required|string|max:255',
                'status_user'   => 'required|in:Aktif,Non-Aktif',
                'role_id'   => 'required|string|max:255',
                'is_active'   => 'required|int',
            ]);

            $user_detail->nip = $request->nip;
            $user_detail->user_id = $request->user_id;
            $user_detail->jenkel = $request->jenkel;
            $user_detail->tgl_lahir = $request->tgl_lahir;
            $user_detail->no_telp = $request->no_telp;
            $user_detail->alamat = $request->alamat;
            $user_detail->status_user = $request->status_user;
            $user_detail->is_active = $request->is_active;
            $user_detail->update();

            return response()->json(['message' => 'User Detail Updated Successfully', 'user_detail' => $user_detail]);
            }
    }

    public function deleteUserDetail( $nip)
    {
        //find the user
        $user_detail = UserDetail::find($nip);
        // $user = User::find($nip);
        // echo "<script>console.log('Data: " . $user_detail . "' );</script>";

        if(!$user_detail)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data user detail tidak ditemukan',
            ],400);

        }else{
            $hapus = $user_detail->delete();
            // $user = $user->delete();

            if($user_detail && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data user detail',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data user detail',
                ],400);
            }
            // var_dump($cari);
        }
    }
}
