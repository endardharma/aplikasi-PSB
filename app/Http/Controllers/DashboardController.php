<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin/dashboard/index');
    }

    public function profile()
    {
        $data = [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'role' => 'Administrator'
        ];

        return response()->json($data, 200);
    }
}
