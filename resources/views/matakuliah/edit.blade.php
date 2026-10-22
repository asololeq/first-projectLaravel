@extends('layouts.app', ['title' => 'Edit Mata Kuliah'])

@section('content')
    <div class="page-heading compact-heading"><div><p class="eyebrow">Katalog akademik</p><h1>Edit mata kuliah</h1><p class="subtitle">Perbarui detail {{ $matakuliah->nama_mk }}.</p></div><a class="button button-ghost" href="{{ route('matakuliah.index') }}">Kembali</a></div>
    <section class="panel form-panel"><form action="{{ route('matakuliah.update', $matakuliah) }}" method="POST">@csrf @method('PUT') @include('matakuliah._form', ['submitLabel' => 'Simpan perubahan'])</form></section>
@endsection
