@extends('layouts.app', ['title' => 'Beranda'])

@section('content')
    <section class="hero-detail">
        <div>
            <span class="eyebrow light-eyebrow">Sistem informasi akademik</span>
            <h2>Ruang kerja akademik yang lebih teratur.</h2>
            <p>Kelola data mahasiswa, mata kuliah, dan ringkasan program studi dalam satu tempat.</p>
        </div>
        <span class="hero-code">SIAKAD / 2026</span>
    </section>

    <div class="stats-row">
        <a class="metric-card" href="{{ route('mahasiswa.index') }}"><span class="metric-label">Directory</span><strong>Mahasiswa</strong><small>Kelola profil dan riwayat nilai</small></a>
        <a class="metric-card accent-card" href="{{ route('matakuliah.index') }}"><span class="metric-label">Katalog</span><strong>Mata kuliah</strong><small>Atur kurikulum dan peserta</small></a>
        <a class="metric-card" href="{{ url('/statistik-prodi') }}"><span class="metric-label">Insight</span><strong>Statistik</strong><small>Lihat distribusi mahasiswa</small></a>
    </div>
@endsection
