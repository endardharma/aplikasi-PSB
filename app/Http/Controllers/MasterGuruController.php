<?php

namespace App\Http\Controllers;

use App\Models\MasterGuru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MasterGuruController extends Controller
{
    public function index()
    {
        return view('admin.masterguru.index');
    }

    public function listGuru()
    {
        $guru = MasterGuru::all();
        $data = array();
        $i = 1;
        foreach($guru as $g)
        {
            $cari = User::where('nip',$g->nip)->first();

            $item['id'] = $g->id;
            $item['nomor_urut'] = $i;
            $item['nip'] = $g->nip;
            $item['nama'] = $g->name;
            $item['jenkel'] = $g->jenkel;
            $item['status_pegawai'] = $g->status_pegawai;
            $item['jabatan'] = $g->jabatan;
            $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Tidak Aktif';
            $item['email'] = $cari->email;
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
            'nip'   => 'required',
            'name'   => 'required',
            'jenkel'   => 'required',
            'status_pegawai'   => 'required',
            'jabatan'   => 'required',
            'is_active'   => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Create User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->password = Hash::make($request->password);
        $user->role_id = 1;
        $user->nip = $request->nip;
        $user->save();

        $guru = new MasterGuru();
        $guru->nip = $request->nip;
        $guru->name = $request->name;
        $guru->jenkel = $request->jenkel;
        $guru->status_pegawai = $request->status_pegawai;
        $guru->jabatan = $request->jabatan;
        $guru->is_active = $request->is_active;
        $guru->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data guru',
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
            $find = User::where('nip',$cari->nip)->first();
            $find->name = $request->name != null ? $request->name : $find->name;
            $find->email = $request->email != null ? $request->email : $find->email;
            $request->password != null ? $find->password = Hash::make($request->password) : true;
            $request->nip != null ? $find->nip = $request->nip : true;
            $find->save();

            $cari->nip = $request->nip != null ? $request->nip : $cari->nip;
            $cari->name = $request->name != null ? $request->name : $cari->name;
            $cari->jenkel = $request->jenkel != null ? $request->jenkel : $cari->jenkel;
            $cari->status_pegawai = $request->status_pegawai != null ? $request->status_pegawai : $cari->status_pegawai;
            $cari->jabatan = $request->jabatan != null ? $request->jabatan : $cari->jabatan;
            $cari->is_active = $request->is_active != null ? $request->is_active : $cari->is_active;
            $cari->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil menambahkan data guru',
            ],201);
        }
    }

    public function hapus($id)
    {
        $cari = MasterGuru::where('id',$id)->first();
        if(!$cari)
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
                    'message' => 'Terjadi kesalahan saat menghapud data master guru',
                ],400);
            }
        }
    }
}
