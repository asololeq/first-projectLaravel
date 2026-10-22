<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\QueryBuilderDemoController;
use Illuminate\Support\Facades\Route;

Route::get('/ArtikelController', function () {
    return 'Halo, ini halaman artikel baru!';
});

Route::view('/', 'landing');
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('matakuliah', MatakuliahController::class);

// Route Form & Insert
Route::get('/tambah', [QueryBuilderDemoController::class, 'formTambah']);
Route::post('demo/simpan', [QueryBuilderDemoController::class, 'simpanData']);

// Route Update & Delete
Route::get('/ubah/{nim}', [QueryBuilderDemoController::class, 'ubahData']);
Route::get('/hapus/{nim}', [QueryBuilderDemoController::class, 'hapusData']);
