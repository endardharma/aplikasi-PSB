<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NilaiAkhir;
use App\Models\User;

class NilaiAkhirController extends Controller
{
    public function index(){
        return view('admin.nilaiakhir.index');
    }
}
