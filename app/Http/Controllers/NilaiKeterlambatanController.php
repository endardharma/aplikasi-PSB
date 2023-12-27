<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiKeterlambatanController extends Controller
{
    public function index(){
        return view('admin.nilaiketerlambatan.index');
    }
}
