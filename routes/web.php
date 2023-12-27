<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGuruController;
use App\Http\Controllers\MasterKriteriaController;
use App\Http\Controllers\MasterMapelController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\NilaiAkhirController;
use App\Http\Controllers\NilaiHafalanController;
use App\Http\Controllers\NilaiKeterlambatanController;
use App\Http\Controllers\NilaiKetidakhadiranController;
use App\Http\Controllers\NilaiPrestasiController;
use App\Http\Controllers\NilaiRaportController;
use App\Http\Controllers\NilaiSemuaMapelController;
use App\Http\Controllers\NilaiSikapController;
use App\Models\MasterSiswa;
use App\Models\MasterGuru;
use App\Models\MasterMapel;
use App\Models\NilaiKetidakhadiran;
use App\Models\NilaiPrestasi;
use App\Models\NilaiSikap;
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
Route::get('/halaman/master-guru', [MasterGuruController::class,'index'])->name('masterguru');
Route::get('/halaman/master-siswa', [MasterSiswaController::class, 'index'])->name('mastersiswa');
Route::get('/halaman/master-mapel', [MasterMapelController::class, 'index'])->name('mastermapel');
Route::get('/halaman/master-kriteria', [MasterKriteriaController::class, 'index'])->name('masterkriteria');

Route::get('/halaman/nilai-raport', [NilaiRaportController::class, 'index'])->name('nilairaport');
Route::get('/halaman/nilai-tingkat-ketidakhadiran', [NilaiKetidakhadiranController::class, 'index'])->name('nilaiketidakhadiran');
Route::get('/halaman/nilai-sikap', [NilaiSikapController::class, 'index'])->name('nilaisikap');
Route::get('/halaman/nilai-prestasi', [NilaiPrestasiController::class, 'index'])->name('nilaiprestasi');
Route::get('/halaman/nilai-keterlambatan', [NilaiKeterlambatanController::class, 'index'])->name('nilaiketerlambatan');
Route::get('/halaman/nilai-hafalan', [NilaiHafalanController::class, 'index'])->name('nilaihafalan');

Route::get('/halaman/nilai-semuamapel', [NilaiSemuaMapelController::class, 'index'])->name('nilaisemuamapel');
Route::get('/halaman/nilai-akhir', [NilaiAkhirController::class, 'index'])->name('nilaiakhir');
