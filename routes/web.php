<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/login/admin', [AutentikasiController::class,'login'])->name('login');
Route::get('/halaman/dashboard', [DashboardController::class,'index'])->name('dashboard');
