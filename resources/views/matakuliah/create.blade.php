@extends('layouts.app', ['title' => 'Tambah Mata Kuliah'])

@section('content')
    <div class="page-heading compact-heading"><div><p class="eyebrow">Katalog akademik</p><h1>Tambah mata kuliah</h1><p class="subtitle">Tambahkan mata kuliah baru ke katalog akademik.</p></div><a class="button button-ghost" href="{{ route('matakuliah.index') }}">Kembali</a></div>
    <section class="panel form-panel"><form action="{{ route('matakuliah.store') }}" method="POST">@csrf @include('matakuliah._form', ['submitLabel' => 'Simpan mata kuliah'])</form></section>
@endsection
