<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

use App\Models\NilaiSikap;
use App\Models\User;

class NilaiSikapController extends Controller
{
    public function index(){
        return view('admin.nilaisikap.index');
    }
}
