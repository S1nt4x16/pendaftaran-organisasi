<?php

use App\Http\Controllers\ControllerPendaftaran;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\IzinOrtuController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\WalasController;
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

Route::get('/', [ControllerPendaftaran::class, 'index'])->name('index'); 

Route::post('/store', [ControllerPendaftaran::class, 'store']); 

Route::get('/login', [AuthController::class, 'formLogin'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () 
{
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('agama')->group(function () {
        Route::get('/', [AgamaController::class, 'index'])->name('agama_master');
        Route::get('/create', [AgamaController::class, 'create']);
        Route::post('/store', [AgamaController::class, 'store']);
        Route::get('/edit/{id}', [AgamaController::class, 'edit']);
        Route::post('/update', [AgamaController::class, 'update']);
        Route::delete('/delete/{id}', [AgamaController::class, 'delete']);
    });

    Route::prefix('divisi')->group(function () {
        Route::get('/', [DivisiController::class, 'index'])->name('divisi_master');
        Route::get('/create', [DivisiController::class, 'create']);
        Route::post('/store', [DivisiController::class, 'store']);
        Route::get('/edit/{id}', [DivisiController::class, 'edit']);
        Route::post('/update', [DivisiController::class, 'update']);
        Route::delete('/delete/{id}', [DivisiController::class, 'delete']);
    });

    Route::prefix('izin_ortu')->group(function () {
        Route::get('/', [IzinOrtuController::class, 'index'])->name('izin_ortu_master');
        Route::get('/create', [IzinOrtuController::class, 'create']);
        Route::post('/store', [IzinOrtuController::class, 'store']);
        Route::get('/edit/{id}', [IzinOrtuController::class, 'edit']);
        Route::post('/update', [IzinOrtuController::class, 'update']);
        Route::delete('/delete/{id}', [IzinOrtuController::class, 'delete']);
    });

    Route::prefix('kelas')->group(function () {
        Route::get('/', [KelasController::class, 'index'])->name('kelas_master');
        Route::get('/create', [KelasController::class, 'create']);
        Route::post('/store', [KelasController::class, 'store']);
        Route::get('/edit/{id}', [KelasController::class, 'edit']);
        Route::post('/update', [KelasController::class, 'update']);
        Route::delete('/delete/{id}', [KelasController::class, 'delete']);
    });

    Route::prefix('periode')->group(function () {
        Route::get('/', [PeriodeController::class, 'index'])->name('periode_master');
        Route::get('/create', [PeriodeController::class, 'create']);
        Route::post('/store', [PeriodeController::class, 'store']);
        Route::get('/edit/{id}', [PeriodeController::class, 'edit']);
        Route::post('/update', [PeriodeController::class, 'update']);
        Route::delete('/delete/{id}', [PeriodeController::class, 'delete']);
    });

    Route::prefix('walas')->group(function () {
        Route::get('/', [WalasController::class, 'index'])->name('walas_master');
        Route::get('/create', [WalasController::class, 'create']);
        Route::post('/store', [WalasController::class, 'store']);
        Route::get('/edit/{id}', [WalasController::class, 'edit']);
        Route::post('/update', [WalasController::class, 'update']);
        Route::delete('/delete/{id}', [WalasController::class, 'delete']);
    });

    Route::prefix('pendaftaran')->group(function () {
        Route::get('/', [PendaftaranController::class, 'index'])->name('pendaftaran_master');
        Route::get('/edit/{id}', [PendaftaranController::class, 'edit']);
        Route::post('/update', [PendaftaranController::class, 'update']);
        Route::delete('/delete/{id}', [PendaftaranController::class, 'delete']);
    });


    Route::get('/dashboard', [HomeController::class, 'dashboard']);
});






   

