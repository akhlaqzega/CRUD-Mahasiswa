<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});


Route::get('/siswa', [SiswaController::class, 'tampil'])->name('siswa.tampil');



Route::middleware('auth')->group(function () {
    Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
    Route::post('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
    Route::get('/siswa/edit/{id}',  [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::put('/siswa/update/{id}',  [SiswaController::class, 'update'])->name('siswa.update');
    Route::delete('/siswa/destroy/{id}',  [SiswaController::class, 'destroy'])->name('siswa.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/contact', [ContactController::class, 'tampil'])->name('contact.tampil');
Route::get('/features',[FeaturesController::class,'tampil'])->name('features.tampil');
// routes/web.php
Route::get('/siswa/{id}', [SiswaController::class, 'show'])->name('siswa.show');
