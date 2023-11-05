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
            $item['id'] = $g->id;
            $item['nomor_urut'] = $i;
            $item['nip'] = $g->nip;
            $item['name'] = $g->name;
            $item['jenkel'] = $g->jenkel;
            $item['status_pegawai'] = $g->status_pegawai;
            $item['jabatan'] = $g->jabatan;
            $item['is_active'] = $g->is_active == 1 ? 'Aktif' : 'Tidak Aktif';
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
}
