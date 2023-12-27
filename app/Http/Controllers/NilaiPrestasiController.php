<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NilaiPrestasi;
use App\Models\User;

class NilaiPrestasiController extends Controller
{
    public function index(){
        return view('admin.nilaiprestasi.index');
    }
}
