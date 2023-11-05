<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'email'=> 'required',
            'password' => 'required',
        ]);

        //response error validation
        if($validator->fails())
        {
            return response()->json($validator->errors(), 400); //400 kode error basic
        }

        $user = User::where('email', $request->email)->first();

        if ($user == null){
            return response([
                'message' => 'Aku anda belum terdaftar di sistem kami'
            ], 401); //401 kode error gagal autentifikasi
        }
        $checkPass = User::where("password", "!=", Hash::check($request->password, $user->password))->first();

        if ($checkPass == null) {
            return response([
                'message' => 'Password anda salah'
            ], 401);
        }

        if (!$user || !Hash::check($request->password, $user->password)){
            return response([
                'message' => 'Gabungan antara email dan password salah'
            ], 401);
        }

        $tokenResult = $user->createToken('Access Token');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login SuperAdmin Berhasil.....Selamat Datang',
            'token' => $token,
        ], 201);
    }
}
