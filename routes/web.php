<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('mahasiswa.index');
});

Route::resource('mahasiswa', MahasiswaController::class);
//Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
//Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
//Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
//Route::get('/mahasiswa/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');


Route::resource('dosen', DosenController::class);
//Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
//Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
//Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');
//Route::get('/dosen/edit', [DosenController::class, 'edit'])->name('dosen.edit');

Route::resource('matakuliah', MatakuliahController::class);