<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all(); 
        $users = User::with('Role')->paginate(2);
    

         return view('admin.user.index', compact('users','roles'));
        
        // dd($roles)->toArray();
    }

    public function listUser(Request $request)
    {
        $columns = [
            0 => 'nomor_urut',
            1 => 'name',
            2 => 'email',
            3 => 'password',
            4 => 'role_id',
            5 => 'id',
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
        $hitung = User::count();

        $user = User::where(function ($q) use ($search)
        {
            if($search != null)
            {
                return $q->where('name', 'like', '%' . $search . '%')->orWhere('email', $search);
            }
        })->orderBy($orderColumn, $dir);

        if($start > 0)
        {
            $user->skip($start);
        }
        $user = $user->take($limit)->get();

        $data = array();
        $i = 1;
        foreach($user as $u)
        {
            $item['nomor_urut'] = $i;
            $item['name'] = $u->name;
            $item['email'] = $u->email;
            $item['password'] = $u->password;
            $item['role_id'] = $u->role_id;

            $item['id'] = $u->id;
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

    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'   => 'required|string|max:255',
            'email'   => 'required|string|max:255',
            'password'   => 'required|string|max:255',
            'role_id'   => 'required|int',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // $user_detail = new UserDetail();
        // $user_detail->user_id = $request->input('role_id');;
        // $user_detail->save();

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('role_id');
        // $user->nomor_induk = $request->input('nomor_induk');
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data user',
            'data' =>$user, 
        ],201);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);     

        if (!$user) {
            // Return a 404 Not Found response if the user is not found
            return response()->json([
                'success' => false,
                'message' => 'Data user tidak ditemukan',
            ], 404);
        }else {
            $validator = Validator::make($request->all(), [
                'name'   => 'required|string|max:255',
                'email'   => 'required|string|max:255',
                'password'   => 'required|string|max:255',
                'role_id'   => 'required|int',
            ]);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role_id = $request->role_id;
            $user->update();

            return response()->json(['message' => 'User Updated Successfully', 'user' => $user]);
            }
    }

    public function deleteUser($id)
    {
        // $user_detail = UserDetail::find($nip);
        $user = User::find($id);

        if(!$user)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data user tidak ditemukan',
            ],400);

        }else{
            $hapus = $user->delete();
            // $user_detail = $user_detail->delete();

            if($user && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data user',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data user',
                ],400);
            }
            // var_dump($cari);
        }
    }
}
