<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\HistoryController;

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
    return view('welcome');
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/postlogin', [AuthController::class,'postlogin']);
Route::get('/logout', [AuthController::class,'logout']);

Route::group(['middleware'=>['auth','checkrole:admin,petugas,siswa']],function(){
    //dashboard
    Route::get('/dashboard', [DashboardController::class,'index']);

    //history
    Route::get('/history', [HistoryController::class,'index']);
    Route::get('/history/export', [HistoryController::class,'export']);
});

Route::group(['middleware'=>['auth','checkrole:admin,petugas']],function(){
    //pembayaran
    Route::get('/pembayaran', [PembayaranController::class,'index']);
    Route::get('/pembayaran/create', [PembayaranController::class,'create']);
    Route::post('/pembayaran',[PembayaranController::class,'store']);
    Route::get('/pembayaran/{id}/edit',[PembayaranController::class,'edit']);
    Route::put('/pembayaran/{id}', [PembayaranController::class,'update']);
    Route::get('/pembayaran/{id}/delete', [PembayaranController::class,'destroy']);
});
Route::group(['middleware'=>['auth','checkrole:admin']],function(){
    //siswa
    Route::get('/siswa', [SiswaController::class,'index']);
    Route::get('/siswa/create', [SiswaController::class,'create']);
    Route::post('/siswa',[SiswaController::class,'store']);
    Route::get('/siswa/{id}/edit',[SiswaController::class,'edit']);
    Route::put('/siswa/{id}', [SiswaController::class,'update']);
    Route::get('/siswa/{id}/delete', [SiswaController::class,'destroy']);
    Route::get('/siswa/export', [SiswaController::class,'export']);

    //kelas
    Route::get('/kelas', [KelasController::class,'index']);
    Route::get('/kelas/create', [KelasController::class,'create']);
    Route::post('/kelas',[KelasController::class,'store']);
    Route::get('/kelas/{id}/edit',[KelasController::class,'edit']);
    Route::put('/kelas/{id}', [KelasController::class,'update']);
    Route::get('/kelas/{id}/delete', [KelasController::class,'destroy']);
    Route::get('/kelas/export', [KelasController::class,'export']);

    //spp
    Route::get('/spp', [SppController::class,'index']);
    Route::get('/spp/create', [SppController::class,'create']);
    Route::post('/spp',[SppController::class,'store']);
    Route::get('/spp/{id}/edit',[SppController::class,'edit']);
    Route::put('/spp/{id}', [SppController::class,'update']);
    Route::get('/spp/{id}/delete', [SppController::class,'destroy']);
    Route::get('/spp/export', [SppController::class,'export']);

    //petugas
    Route::get('/petugas', [PetugasController::class,'index']);
    Route::get('/petugas/create', [PetugasController::class,'create']);
    Route::post('/petugas',[PetugasController::class,'store']);
    Route::get('/petugas/{id}/edit',[PetugasController::class,'edit']);
    Route::put('/petugas/{id}', [PetugasController::class,'update']);
    Route::get('/petugas/{id}/delete', [PetugasController::class,'destroy']);
    Route::get('/petugas/export', [PetugasController::class,'export']);
});
