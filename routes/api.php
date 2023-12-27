<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGuruController;
use App\Http\Controllers\MasterKriteriaController;
use App\Http\Controllers\MasterMapelController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\NilaiHafalanController;
use App\Http\Controllers\NilaiKeterlambatanController;
use App\Http\Controllers\NilaiKetidakhadiranController;
use App\Http\Controllers\NilaiRaportController;
use App\Http\Controllers\NilaiSemuaMapelController;
use App\Http\Controllers\NilaiSikapController;
use App\Models\NilaiKeterlambatan;

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

    Route::prefix('master-guru')->group(function(){
        Route::post("/list", [MasterGuruController::class, 'listGuru']);
        Route::post("/tambah-guru", [MasterGuruController::class, 'addguru']);
        Route::post("/update-guru", [MasterGuruController::class, 'update']);
        Route::delete("/hapus/{id}", [MasterGuruController::class, 'hapus']);
        Route::get("/roles", [MasterGuruController::class, 'role']);
        // Route::post('/validate-data', [MasterGuruController::class, 'validateData'])->name('validate-data');
    });

    Route::prefix('master-siswa')->group(function(){
        Route::post("/list", [MasterSiswaController::class, 'listSiswa']);
        Route::post("/tambah-siswa", [MasterSiswaController::class, 'addSiswa']);
        Route::post("/update-siswa",[MasterSiswaController::class, 'update']);
        Route::post("/hapus/{id}", [MasterSiswaController::class,'hapus']);
    });

    Route::prefix('master-mapel')->group(function(){
        Route::post("/list", [MasterMapelController::class, 'listMapel']);
        Route::post("/tambah-mapel", [MasterMapelController::class, 'addMapel']);
        Route::post("/update-mapel", [MasterMapelController::class, 'update']);
        Route::delete("/hapus/{id}", [MasterMapelController::class, 'hapus']);
    });
    Route::prefix('master-kriteria')->group(function(){
        Route::post("/list", [MasterKriteriaController::class, 'listKriteria']);
    });

    Route::prefix('nilai-raport')->group(function(){
        Route::post("/list", [NilaiRaportController::class, 'listNilaiRaport']);
    });

    Route::prefix('nilai-tingkat-ketidakhadiran')->group(function(){
        Route::post("/list", [NilaiKetidakhadiranController::class, 'listKetidakhadiran']);
    });
    
    Route::prefix('nilai-sikap')->group(function(){
        Route::post("/list", [NilaiSikapController::class, 'listSikap']);
    });

    Route::prefix('nilai-keterlambatan')->group(function(){
        Route::post("/list", [NilaiKeterlambatanController::class, 'listKeterlambatan']);
    });

    Route::prefix('nilai-hafalan')->group(function(){
        Route::post("/list", [NilaiHafalanController::class, 'listHafalan']);
    });
    
    Route::prefix('nilai-semuamapel')->group(function(){
        Route::post("/list", [NilaiSemuaMapelController::class, 'listNilaiSemuaMapel']);
    });

    Route::prefix('nilai-akhir')->group(function(){
        Route::post("/list", [NilaiSemuaMapelController::class, 'listNilaiAkhir']);
    });
});
