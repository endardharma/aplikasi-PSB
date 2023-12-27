<?php

namespace App\Http\Controllers;

use App\Models\MasterGuru;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MasterGuruController extends Controller
{
    public function index()
    {
        return view('admin.masterguru.index');
        // $post = MasterGuru::get();

        // return view('post', compact('post'));
    }

    public function listGuru()
    {
        $guru = MasterGuru::all();
        $data = array();
        $i = 1;
        foreach($guru as $g)
        {
            // $cari = User::where('nip',$g->nip)->first();

            $item['nomor_urut'] = $i;
            $item['nip'] = $g->nip;
            $item['nama_guru'] = $g->nama_guru;
            $item['jenkel'] = $g->jenkel;
            $item['status_pegawai'] = $g->status_pegawai;
            $item['jabatan'] = $g->jabatan;
            $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Non-Aktif';
            $item['email'] = $g->email;
            $data[] = $item;
            $i++;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function addguru(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'nip'   => 'required|string|max:255',
            'nama_guru'   => 'required|string|max:255',
            'jenkel'   => 'required|in:L,P',
            'status_pegawai'   => 'required|in:Aktif,Non-Aktif',
            'jabatan'   => 'required|string|max:255',
            'is_active'   => 'required|int',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:255',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Create User
        $user = new User();
        $user->name = $request->input('nama_guru');
        $user->email = $request->input('email');
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = 1;
        // $user->nip = $request->input('nip');
        $user->save();
        
        $guru = new MasterGuru();
        $guru->nip = $request->input('nip');
        $guru->nama_guru = $request->input('nama_guru');
        $guru->jenkel = $request->input('jenkel');
        $guru->status_pegawai = $request->input('status_pegawai');
        $guru->jabatan = $request->input('jabatan');
        $guru->is_active = $request->input('is_active');
        $guru->email = $request->input('email');
        $guru->password = $request->input('password');
        $guru->save();

        // // Create User
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->email_verified_at = date('Y-m-d H:i:s');
        // $user->password = Hash::make($request->password);
        // $user->role_id = 1;
        // $user->nip = $request->nip;
        // $user->save();

        // $guru = new MasterGuru();
        // $guru->id = $request->id;
        // $guru->nip = $request->nip;
        // $guru->name = $request->name;
        // $guru->jenkel = $request->jenkel;
        // $guru->status_pegawai = $request->status_pegawai;
        // $guru->jabatan = $request->jabatan;
        // $guru->is_active = $request->is_active;
        // $guru->email = $request->email;
        // $guru->password = $request->password;
        // $guru->created_at = $request->created_at;
        // $guru->updated_at = $request->updated_at;
        // $guru->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data guru',
            'data' =>$user, 
        ],201);
    }

    public function update(Request $request)
    {
        $cari = MasterGuru::where('id',$request->id)->first();
        if(!$cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data guru tidak ditemukan, pastikan id guru valid',
            ],400);
        }else{
            $find = User::where('id',$cari->id)->first();
            
            if($find){
                $find->id = $request->id;
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data pengguna tidak ditemukan untuk ID tersebut',
                ], 400);
            }

            $request->nip != null ? $find->nip = $request->nip : true;
            $find->nama_guru = $request->nama_guru != null ? $request->nama_guru : $find->nama_guru;
            $find->jenkel = $request->jenkel != null ? $request->jenkel : $find->jenkel;
            $find->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $find->status_pegawai;
            $find->jabatan = $request->jabatan != null ? $request->jabatan : $find->jabatan;
            $find->is_active = $request->is_active != null ? $request->is_active : $find->is_active;
            $find->email = $request->email != null ? $request->email : $find->email;
            $request->password != null ? $find->password = Hash::make($request->password) : true;
            $find->save();

            $cari->nip = $request->nip != null ? $request->nip : $cari->nip;
            $cari->nama_guru = $request->nama_guru != null ? $request->nama_guru : $cari->nama_guru;
            $cari->jenkel = $request->jenkel != null ? $request->jenkel : $cari->jenkel;
            $cari->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $cari->status_pegawai;
            $cari->jabatan = $request->jabatan != null ? $request->jabatan : $cari->jabatan;
            $cari->is_active = $request->is_active != null ? $request->is_active : $cari->is_active;
            $cari->email = $request->email != null ? $request->email : $cari-> email;
            $cari->password = $request->password != null ? $request->password : $cari->password;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil meng-update data guru',
            ],201);
        }
    }

    public function hapus($id)
    {
        $cari = MasterGuru::where('id',$id)->first();
        if($cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data master guru tidak ditemukan',
            ],400);
        }else{
            $user = User::where('nip',$cari->nip)->delete();
            $hapus = MasterGuru::where('nip',$cari->nip)->delete();

            if($user && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data master guru',
                ],201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghapus data master guru',
                ],400);
            }
        }
    }

    public function role(){
        
    }
}
