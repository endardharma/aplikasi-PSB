<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanSiswaController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\MasterGuruController;
use App\Http\Controllers\MasterJurusanController;
use App\Http\Controllers\MasterKelasController;
use App\Http\Controllers\MasterKriteriaController;
use App\Http\Controllers\MasterMapelController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\NilaiAkhirController;
use App\Http\Controllers\NilaiHafalanController;
use App\Http\Controllers\NilaiKeterlambatanController;
use App\Http\Controllers\NilaiKetidakhadiranController;
use App\Http\Controllers\NilaiPrestasiController;
use App\Http\Controllers\NilaiRaportController;
use App\Http\Controllers\NilaiSemuaKriteriaController;
use App\Http\Controllers\NilaiSemuaMapelController;
use App\Http\Controllers\NilaiSikapController;
use App\Http\Controllers\PeriodeKriteriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailController;
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

Route::get('/halaman/user', [UserController::class,'index'])->name('user');

Route::get('/halaman/user-detail', [UserDetailController::class,'index'])->name('userdetail');

Route::get('/halaman/master-siswa', [MasterSiswaController::class, 'index'])->name('mastersiswa');
Route::get('/halaman/export-siswa', [MasterSiswaController::class, 'exportSiswa'])->name('exportSiswa');
Route::post('/halaman/import-siswa', [MasterSiswaController::class, 'importSiswa'])->name('importSiswa');

Route::get('/halaman/master-kelas', [MasterKelasController::class, 'index'])->name('masterkelas');
Route::get('/halaman/master-kelas_siswa', [KelasSiswaController::class, 'index'])->name('kelassiswa');

Route::get('/halaman/master-jurusan', [MasterJurusanController::class, 'index'])->name('masterjurusan');
Route::get('/halaman/master-jurusan_siswa', [JurusanSiswaController::class, 'index'])->name('jurusansiswa');
Route::get('/halaman/export-jurusan', [JurusanSiswaController::class, 'exportJurusanSiswa'])->name('exportJurusanSiswa');
Route::post('/halaman/import-jurusan', [JurusanSiswaController::class, 'importJurusanSiswa'])->name('importJurusanSiswa');

Route::get('/halaman/master-kriteria', [MasterKriteriaController::class, 'index'])->name('masterkriteria');
Route::get('/halaman/periode-kriteria', [PeriodeKriteriaController::class, 'index'])->name('periodekriteria');
Route::get('/halaman/export-kriteria', [MasterKriteriaController::class, 'exportKriteria'])->name('exportKriteria');
Route::post('/halaman/import-kriteria', [MasterKriteriaController::class, 'importKriteria'])->name('importKriteria');


Route::get('/halaman/nilai-raport', [NilaiRaportController::class, 'index'])->name('nilairaport');
Route::get('/halaman/export-nilai_raport', [NilaiRaportController::class, 'exportNilaiRaport'])->name('exportNilaiRaport');
Route::post('/halaman/import-nilai_raport', [NilaiRaportController::class, 'importNilaiRaport'])->name('importNilaiRaport');

Route::get('/halaman/nilai-tingkat-ketidakhadiran', [NilaiKetidakhadiranController::class, 'index'])->name('nilaiketidakhadiran');
Route::get('/halaman/export-ketidakhadiran', [NilaiKetidakhadiranController::class, 'exportNilaiKetidakhadiran'])->name('exportNilaiKetidakhadiran');
Route::post('/halaman/import-ketidakhadiran', [NilaiKetidakhadiranController::class, 'importNilaiKetidakhadiran'])->name('importNilaiKetidakhadiran');

Route::get('/halaman/nilai-sikap', [NilaiSikapController::class, 'index'])->name('nilaisikap');
Route::get('/halaman/export-sikap', [NilaiSikapController::class, 'exportNilaiSikap'])->name('exportNilaiSikap');
Route::post('/halaman/import-sikap', [NilaiSikapController::class, 'importNilaiSikap'])->name('importNilaiSikap');

Route::get('/halaman/nilai-prestasi', [NilaiPrestasiController::class, 'index'])->name('nilaiprestasi');
Route::get('/halaman/export-prestasi', [NilaiPrestasiController::class, 'exportNilaiPrestasi'])->name('exportNilaiPrestasi');
Route::post('/halaman/import-prestasi', [NilaiPrestasiController::class, 'importNilaiPrestasi'])->name('importNilaiPrestasi');

Route::get('/halaman/nilai-keterlambatan', [NilaiKeterlambatanController::class, 'index'])->name('nilaiketerlambatan');
Route::get('/halaman/export-keterlambatan', [NilaiKeterlambatanController::class, 'exportNilaiKeterlambatan'])->name('exportNilaiKeterlambatan');
Route::post('/halaman/import-keterlambatan', [NilaiKeterlambatanController::class, 'importNilaiKeterlambatan'])->name('importNilaiKeterlambatan');

Route::get('/halaman/nilai-hafalan', [NilaiHafalanController::class, 'index'])->name('nilaihafalan');
Route::get('/halaman/export-hafalan', [NilaiHafalanController::class, 'exportNilaiHafalan'])->name('exportNilaiHafalan');
Route::post('/halaman/import-hafalan', [NilaiHafalanController::class, 'importNilaiHafalan'])->name('importNilaiHafalan');

Route::get('/halaman/nilai-semuakriteria', [NilaiSemuaKriteriaController::class, 'index'])->name('nilaisemuakriteria');
Route::get('/halaman/export-nilaisemuakriteria', [NilaiSemuaKriteriaController::class, 'exportNilaiSemuaKriteria'])->name('exportNilaiSemuaKriteria');
Route::post('/halaman/import-nilaisemuakriteria', [NilaiSemuaKriteriaController::class, 'importNilaiSemuaKriteria'])->name('importNilaiSemuaKriteria');

Route::get('/halaman/nilai-akhir', [NilaiAkhirController::class, 'index'])->name('nilaiakhir');

