<?php

use App\Models\Mahasiswa;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', function () {
 $data = Mahasiswa::all();
 return view('mahasiswa.index', compact('data'));
});

Route::get('/ArtikelController', function () {
    return 'Halo, ini halaman artikel baru!';
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::post('/matakuliah', [MatakuliahController::class, 'store']);