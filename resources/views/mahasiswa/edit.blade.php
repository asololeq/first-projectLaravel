@extends('layouts.app', ['title' => 'Edit Mahasiswa'])

@section('content')
    <div class="page-heading compact-heading">
        <div>
            <p class="eyebrow">Data mahasiswa</p>
            <h1>Edit profil mahasiswa</h1>
            <p class="subtitle">Perbarui informasi akademik {{ $mahasiswa->nama }}.</p>
        </div>
        <a class="button button-ghost" href="{{ route('mahasiswa.index') }}">Kembali</a>
    </div>

    <section class="panel form-panel">
        <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="POST">
            @csrf
            @method('PUT')
            @include('mahasiswa._form', ['submitLabel' => 'Simpan perubahan'])
        </form>
    </section>
@endsection
