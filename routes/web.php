<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UserController;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[UserController::class , 'formLogin']);
    Route::post('login',[UserController::class, 'login']);
    Route::get('/register', [UserController::class,'formRegister']);
    Route::post('register',[UserController::class,'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('home',[UserController::class,'user'])->name('home');
    Route::get('logout',[UserController::class,'logout']);

    Route::get('/create',[BukuController::class,'formCreate']);
    Route::post('create',[BukuController::class, 'create']);

    Route::get('/update/{id}',[BukuController::class, 'formUpdate']);
    Route::post('update/{id}',[BukuController::class, 'update']);

    Route::get('/delete/{id}',[BukuController::class, 'delete']);

    // tambah User
    Route::post('/home',[UserController::class, 'tambahUser']);
    
    Route::get('/kategori-buku',[BukuController::class,'daftarKategoriBuku']);

    // kategori buku
    Route::post('/home',[BukuController::class,'kategori']);
    // mengkategorikan buku
    Route::post('/home/{id}',[BukuController::class, 'kategoriBuku']);


    Route::get('/rent/{id}', [PeminjamanController::class,'formPinjam']);
    Route::post('rent/{id}', [PeminjamanController::class,'pinjam']);

    Route::get('/pinjaman',[UserController::class, 'dataPinjam']);

    Route::get('/kembali/{id}', [PeminjamanController::class, 'formKembali']);
    Route::post('kembali/{id}', [PeminjamanController::class, 'kembali']);






});


