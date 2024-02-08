<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanSiswaController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\MasterGuruController;
use App\Http\Controllers\MasterJurusanController;
use App\Http\Controllers\MasterKelasController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\MasterKriteriaController;
use App\Http\Controllers\MasterMapelController;
use App\Http\Controllers\MasterSiswaController;
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
use App\Models\NilaiKeterlambatan;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('otentikasi')->group(function() {
    Route::post("masuk", [AutentikasiController::class, 'cekLogin']);
});

Route::middleware(['auth:sanctum'])->group(function(){
    Route::prefix('dashboard')->group(function(){
        Route::get("/home", [DashboardController::class, 'index']);
        Route::get("/profil", [DashboardController::class, 'profile']);
    });

    Route::prefix('user')->group(function(){
        Route::post("/list", [UserController::class, 'listUser']);
        Route::post("/tambah-user", [UserController::class, 'addUser']);
        Route::put("/update-user/{id}",[UserController::class, 'updateUser']);
        Route::delete("/hapus-user/{id}", [UserController::class,'deleteUser']);
    });

    Route::prefix('user-detail')->group(function(){
        Route::post("/list", [UserDetailController::class, 'listUserDetail']);
        Route::post("/tambah-user_detail", [UserDetailController::class, 'addUserDetail']);
        Route::put("/update-user_detail/{nip}", [UserDetailController::class, 'updateUserDetail']);
        // Route::get("/update-UserDetail/{id}", [UserDetailController::class, 'getUserDetailById']);
        Route::delete("/hapus-user_detail/{nip}", [UserDetailController::class, 'deleteUserDetail']);
        // Route::get("/roles", [UserDetailController::class, 'role']);
        // Route::post('/validate-data', [UserDetailController::class, 'validateData'])->name('validate-data');
    });

    Route::prefix('master-siswa')->group(function(){
        Route::post("/list", [MasterSiswaController::class, 'listSiswa']);
        Route::post("/tambah-siswa", [MasterSiswaController::class, 'addSiswa']);
        Route::put("/update-siswa/{nis}",[MasterSiswaController::class, 'updateSiswa']);
        Route::delete("/hapus-siswa/{nis}", [MasterSiswaController::class,'deleteSiswa']);
    });

    Route::prefix('master-kelas')->group(function(){
        Route::post("/list", [MasterKelasController::class, 'listKelas']);
        Route::post("/tambah-kelas", [MasterKelasController::class, 'addKelas']);
        Route::put("/update-kelas/{id}", [MasterKelasController::class, 'updateKelas']);
        Route::delete("/hapus-kelas/{id}", [MasterKelasController::class, 'deleteKelas']);
    });

    Route::prefix('kelas-siswa')->group(function(){
        Route::post("/list", [KelasSiswaController::class, 'listKelasSiswa']);
        Route::post("/tambah-kelas_siswa", [KelasSiswaController::class, 'addKelasSiswa']);
        Route::put("/update-kelas_siswa/{id}", [KelasSiswaController::class, 'updateKelasSiswa']);
        Route::delete("/hapus-kelas_siswa/{id}", [KelasSiswaController::class, 'deleteKelasSiswa']);
    });

    Route::prefix('master-kriteria')->group(function(){
        Route::post("/list", [MasterKriteriaController::class, 'listKriteria']);
        // Route::post("/list1", [MasterKriteriaController::class, 'listPeriode']);
        Route::post("/tambah-kriteria", [MasterKriteriaController::class, 'addKriteria']);
        Route::put("/update-kriteria/{kode_kriteria}", [MasterKriteriaController::class, 'updateKriteria']);
        Route::delete("/hapus-kriteria/{kode_kriteria}", [MasterKriteriaController::class, 'deleteKriteria']);
        // Route::get("/export-kriteria", [MasterKriteriaController::class, 'exportKriteria']);
        // Route::post("/import-kriteria", [MasterKriteriaController::class, 'importKriteria']);
    });

    Route::prefix('periode-kriteria')->group(function(){
        Route::post("/list", [PeriodeKriteriaController::class, 'listPeriodeKriteria']);
        Route::post("/tambah-periode_kriteria", [PeriodeKriteriaController::class, 'addPeriodeKriteria']);
        Route::put("/update-periode_kriteria/{id}", [PeriodeKriteriaController::class, 'updatePeriodeKriteria']);
        Route::delete("/hapus-periode_kriteria/{id}", [PeriodeKriteriaController::class, 'deletePeriodeKriteria']);
    });

    Route::prefix('master-jurusan')->group(function(){
        Route::post("/list", [MasterJurusanController::class, 'listJurusan']);
        Route::post("/tambah-jurusan", [MasterJurusanController::class, 'addJurusan']);
        Route::put("/update-jurusan/{id}", [MasterJurusanController::class, 'updateJurusan']);
        Route::delete("/hapus-jurusan/{id}", [MasterJurusanController::class, 'deleteJurusan']);
    });

    Route::prefix('jurusan-siswa')->group(function(){
        Route::post("/list", [JurusanSiswaController::class, 'listJurusanSiswa']);
        Route::post("/tambah-jurusan_siswa", [JurusanSiswaController::class, 'addJurusanSiswa']);
        Route::put("/update-jurusan_siswa/{id}", [JurusanSiswaController::class, 'updateJurusanSiswa']);
        Route::delete("/hapus-jurusan_siswa/{id}", [JurusanSiswaController::class, 'deleteJurusanSiswa']);
    });

    Route::prefix('nilai-raport')->group(function(){
        Route::post("/list", [NilaiRaportController::class, 'listRaport']);
    });

    Route::prefix('nilai-ketidakhadiran')->group(function(){
        Route::post("/list", [NilaiKetidakhadiranController::class, 'listKetidakhadiran']);
        Route::post("/tambah-ketidakhadiran", [NilaiKetidakhadiranController::class, 'addKetidakhadiran']);
        Route::put("/update-ketidakhadiran/{id}", [NilaiKetidakhadiranController::class, 'updateKetidakhadiran']);
        Route::delete("/delete-ketidakhadiran/{id}", [NilaiKetidakhadiranController::class, 'deleteKetidakhadiran']);
    });
    
    Route::prefix('nilai-sikap')->group(function(){
        Route::post("/list", [NilaiSikapController::class, 'listSikap']);
        Route::post("/tambah-sikap", [NilaiSikapController::class, 'addSikap']);
        Route::put("/update-sikap/{id}", [NilaiSikapController::class, 'updateSikap']);
        Route::delete("/delete-sikap/{id}", [NilaiSikapController::class, 'deleteSikap']);
    });

    Route::prefix('nilai-prestasi')->group(function(){
        Route::post("/list", [NilaiPrestasiController::class, 'listPrestasi']);
        Route::post("/tambah-prestasi", [NilaiPrestasiController::class, 'addPrestasi']);
        Route::put("/update-prestasi/{id}", [NilaiPrestasiController::class, 'updatePrestasi']);
        Route::delete("/delete-prestasi/{id}", [NilaiPrestasiController::class, 'deletePrestasi']);
    });

    Route::prefix('nilai-keterlambatan')->group(function(){
        Route::post("/list", [NilaiKeterlambatanController::class, 'listKeterlambatan']);
        Route::post("/tambah-keterlambatan", [NilaiKeterlambatanController::class, 'addKeterlambatan']);
        Route::put("/update-keterlambatan/{id}", [NilaiKeterlambatanController::class, 'updateKeterlambatan']);
        Route::delete("/delete-keterlambatan/{id}", [NilaiKeterlambatanController::class, 'deleteKeterlambatan']);
    });

    Route::prefix('nilai-hafalan')->group(function(){
        Route::post("/list", [NilaiHafalanController::class, 'listHafalan']);
        Route::post("/tambah-hafalan", [NilaiHafalanController::class, 'addHafalan']);
        Route::put("/update-hafalan/{id}", [NilaiHafalanController::class, 'updateHafalan']);
        Route::delete("/delete-hafalan/{id}", [NilaiHafalanController::class, 'deleteHafalan']);
    });
    
    Route::prefix('nilai-semuakriteria')->group(function(){
        Route::post("/list", [NilaiSemuaKriteriaController::class, 'listNilaiSemuaKriteria']);
    });

    Route::prefix('nilai-akhir')->group(function(){
        Route::post("/list", [NilaiSemuaMapelController::class, 'listNilaiAkhir']);
    });
    
});
