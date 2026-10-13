<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;
use App\Models\User;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::with("dosen")->get();
        $dosens = User::all();
        return view("matakuliah.index", compact("matakuliahs", "dosens"));
    }

    public function create()
    {
        $dosens = User::all();
        return view("matakuliah.create", compact("dosens"));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "dosen_id" => "required|exists:users,id",
            "kode_mk" => "required|unique:matakuliahs,kode_mk",
            "nama_mk" => "required",
            "sks" => "required|integer|min:1|max:4",
            "semester" => "required|integer|min:1|max:8",
        ]);
        Matakuliah::create($data);
        return redirect()
            ->route("matakuliah.index")
            ->with("success", "Mata kuliah berhasil ditambahkan.");
    }

    public function show(Matakuliah $matakuliah)
    {
        $matakuliah->load("dosen", "nilai.mahasiswa");
        return view("matakuliah.show", compact("matakuliah"));
    }

    public function edit(Matakuliah $matakuliah)
    {
        $dosens = User::all();
        return view("matakuliah.edit", compact("matakuliah", "dosens"));
    }

    public function update(Request $request, Matakuliah $matakuliah)
    {
        $data = $request->validate([
            "dosen_id" => "required|exists:users,id",
            "kode_mk" => "required|unique:matakuliahs,kode_mk," . $matakuliah->id,
            "nama_mk" => "required",
            "sks" => "required|integer|min:1|max:4",
            "semester" => "required|integer|min:1|max:8",
        ]);
        $matakuliah->update($data);
        return redirect()
            ->route("matakuliah.index")
            ->with("success", "Mata kuliah berhasil diperbarui.");
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()
            ->route("matakuliah.index")
            ->with("success", "Mata kuliah berhasil dihapus.");
    }
}