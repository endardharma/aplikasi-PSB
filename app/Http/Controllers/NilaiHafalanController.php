<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NilaiHafalan;
use App\Models\User;

class NilaiHafalanController extends Controller
{
    public function index(){
        return view ('admin.nilaihafalan.index');
    }
}
