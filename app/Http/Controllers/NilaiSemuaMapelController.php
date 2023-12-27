<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NilaiSemuaMapel;
use App\Models\User;

class NilaiSemuaMapelController extends Controller
{
    public function index(){
        return view('admin.nilaisemuamapel.index');
    }
}
