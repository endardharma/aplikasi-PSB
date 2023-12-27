<?php

namespace App\Http\Controllers;

use App\Models\MasterSiswa;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class MasterSiswaController extends Controller
{
    public function index()
    {
        return view('admin.mastersiswa.index');
    }

    public function listSiswa()
    {
        $siswa = MasterSiswa::all();
        $data = array();
        $i = 1;
        foreach($siswa as $s)
        {
            $cari = User::where('nis', $s->nis)->first();

            $item['nomor_urut'] = $i;
            $item['nis'] = $s->nis;
            $item['name'] = $s->name;
            $item['jenkel'] = $s->jenkel;
            $item['kelas'] = $s->kelas;
            $item['jurusan'] = $s->jurusan;
            $item['semester'] = $s->semester;
            $item['tahunajar'] = $s->tahunajar;
            $item['email'] = $s->email;
            $data[] = $item;
            $i++;
        }

        return response()->json([
            'data' => $data,
        ], 200);
    }

    public function addSiswa(Request $request)
    {
        //set Validation

        //create user
        // $user = new User();
        // $user->name = $request->input('name');
        // $user->email = $request->input('email');
        // $user->email_verified_at = date('Y-m-d H:i:s');
        // $user->password = Hash::make($request->input('password'));
        // $user->role_id = 8;
        // $user->nis = $request->input('nis');
        // $user->save();

        $siswa = new MasterSiswa();
        $siswa->id = $request->input('id');
        $siswa->nis = $request->input('nis');
        $siswa->name = $request->input('name');
        $siswa->jenkel = $request->input('jenkel');
        $siswa->kelas = $request->input('kelas');
        $siswa->jurusan = $request->input('jurusan');
        $siswa->semester = $request->input('semester');
        $siswa->tahunajar = $request->input('tahunajar');
        $siswa->email = $request->input('email');
        $siswa->password = $request->input('password');
        $siswa->save();

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data siswa',
        ], 201);
    }

    public function update(Request $request)
    {
        $cari = MasterSiswa::where('id', $request->id)->first();
        if($cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'Data siswa tidak ditemukan, pastikan id siswa valid',
            ], 400);
        }else{
            $find = User::where('id', $cari->id)->first();
            if($find){
                $find->id = $request->id;
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Data pengguna tidak ditemukan untuk ID tersebut',
                ], 400);
            }
            
            $request->nis != null ? $find->nis = $request->nis : true;
            $find->name = $request->name != null ? $request->name : $find->name;
            $find->jenkel = $request->jenkel != null ? $request->jenkel : $find->jenkel;
            $find->kelas = $request->kelas != null ? $request->kelas : $find->kelas;
            $find->jurusan = $request->jurusan != null ? $request->jurusan : $find->jurusan;
            $find->semester = $request->semester != null ? $request->semester : $find->semester;
            $find->tahunajar = $request->tahunajar != null ? $request->tahunajar : $find->tahunajar;
            $find->email = $request->email != null ? $request->email : $find->email;
            $request->password != null ? $find->password = Hash::make($request->password) : true;
            $find->save();
    
            $cari->nis = $request->nis != null ? $request->nis : $cari->nis;
            $cari->name = $request->name != null ? $request->name : $cari->name;
            $cari->jenkel = $request->jenkel != null ? $request->jenkel : $cari->jenkel;
            $cari->kelas = $request->kelas != null ? $request->kelas : $cari->kelas;
            $cari->jurusan = $request->jurusan != null ? $request->jurusan : $cari->jurusan;
            $cari->semester = $request->semester != null ? $request->semester : $cari->semester;
            $cari->tahunajar = $request->tahunajar != null ? $request->tahunajar : $cari->tahunajar;
            $cari->email = $request->email != null ? $request->email : $cari-> email;
            $cari->password = $request->password != null ? $request->password : $cari->password;
            $cari->save();
    
            return response()->json([
                'success' => true,
                'message' => 'Berhasil meng-update data siswa',
            ], 201);
        }
    }

    public function hapus($id)
    {
        $cari = MasterSiswa::where('id', $id)->first();
        if(!$cari)
        {
            return response()->json([
                'success' => false,
                'message' => 'data master siswa tidak ditemukan',
            ], 400);
        }else{
            $user = User::where('nis', $cari->nis)->delete();
            $hapus = MasterSiswa::where('nis', $cari->nip)->delete();

            if($user && $hapus)
            {
                return response()->json([
                    'success' => true,
                    'message' => 'Berhasil menghapus data master siswa',
                ], 201);
            }else{
                return response()->json([
                    'success' => true,
                    'message' => 'Terjadi kesalahan saat menghaspus data master siswa',
                ], 400);
            }
        }
    }
}