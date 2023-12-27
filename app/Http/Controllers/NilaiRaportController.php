<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\MasterGuru;
use App\Models\User;

class NilaiRaportController extends Controller
{
    public function index()
    {
        return view('admin.nilairaport.index');
    }
}
