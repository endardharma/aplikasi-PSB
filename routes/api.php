<?php

use App\Http\Controllers\AutentikasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterGuruController;

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
        Route::get("/list", [MasterGuruController::class, 'listGuru']);
        Route::post("/tambah-guru", [MasterGuruController::class, 'addguru']);
    });
});
