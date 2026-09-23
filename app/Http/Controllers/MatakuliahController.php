<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\User;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::with('dosen')->get();
        $dosens = User::all();
        return view('matakuliah.index', compact('matakuliahs', 'dosens'));
    }

    public function store(Request $request)
    {
        Matakuliah::create([
            'dosen_id' => $request->dosen_id,
            'kode_mk' => $request->kode_mk,
            'nama_mk' => $request->nama_mk,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect('/matakuliah');
    }
}