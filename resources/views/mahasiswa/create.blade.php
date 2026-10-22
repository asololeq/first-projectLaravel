@extends('layouts.app', ['title' => 'Tambah Mahasiswa'])

@section('content')
    <div class="page-heading compact-heading"><div><p class="eyebrow">Data mahasiswa</p><h1>Tambah mahasiswa</h1><p class="subtitle">Masukkan data mahasiswa baru ke dalam sistem akademik.</p></div><a class="button button-ghost" href="{{ route('mahasiswa.index') }}">Kembali</a></div>
    <section class="panel form-panel"><form action="{{ route('mahasiswa.store') }}" method="POST">@csrf @include('mahasiswa._form', ['submitLabel' => 'Simpan mahasiswa'])</form></section>
@endsection
