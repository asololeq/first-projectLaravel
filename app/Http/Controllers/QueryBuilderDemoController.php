<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderDemoController extends Controller
{
    public function tampilkanSemua()
    {
        $data = DB::table('mahasiswas')->get();
        return view('demo.query-builder', compact('data'));
    }

    public function tampilkanFilter()
    {
        $data = DB::table('mahasiswas')
            ->where('semester', '>=', 3)
            ->orderBy('nama')
            ->get();
        return view('demo.query-builder', compact('data'));
    }

    public function statistikProdi()
    {
        $rekap = DB::table('mahasiswas')
            ->select('prodi', DB::raw('count(*) as jumlah'))
            ->groupBy('prodi')
            ->get();

        return view('demo.statistik-prodi', compact('rekap'));
    }

    public function formTambah()
    {
        return view('demo.form-tambah');
    }

    // Proses INSERT Data
    public function simpanData(Request $request)
    {
        DB::table('mahasiswas')->insert([
            'nim'        => $request->nim,
            'nama'       => $request->nama,
            'prodi'      => $request->prodi,
            'semester'   => $request->semester,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Data berhasil ditambahkan menggunakan Query Builder!";
    }

    // Proses UPDATE Data
    public function ubahData($nim)
    {
        DB::table('mahasiswas')
            ->where('nim', $nim)
            ->update([
                'semester'   => 5,
                'updated_at' => now(),
            ]);

        return "Data mahasiswa dengan NIM {$nim} berhasil diperbarui!";
    }

    // Proses DELETE Data
    public function hapusData($nim)
    {
        DB::table('mahasiswas')
            ->where('nim', $nim)
            ->delete();

        return "Data mahasiswa dengan NIM {$nim} berhasil dihapus!";
    }
}

