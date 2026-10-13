<?php

use App\Models\Mahasiswa;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\QueryBuilderDemoController;
use Illuminate\Support\Facades\DB;

Route::get('/statistik-prodi', [QueryBuilderDemoController::class, 'statistikProdi']);

Route::get("/mahasiswa", function () {
    $data = DB::table("mahasiswas")
        ->orderBy("nama", "asc")
        ->paginate(10);
 return view('mahasiswa.index', compact('data'));
});

Route::get('/ArtikelController', function () {
    return 'Halo, ini halaman artikel baru!';
});

Route::resource("matakuliah", MatakuliahController::class);

// Route Form & Insert
Route::get('/tambah', [QueryBuilderDemoController::class, 'formTambah']);
Route::post('demo/simpan', [QueryBuilderDemoController::class, 'simpanData']);

// Route Update & Delete
Route::get('/ubah/{nim}', [QueryBuilderDemoController::class, 'ubahData']);
Route::get('/hapus/{nim}', [QueryBuilderDemoController::class, 'hapusData']);