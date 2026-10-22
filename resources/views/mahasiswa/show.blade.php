@extends('layouts.app', ['title' => $mahasiswa->nama])

@section('content')
    <div class="page-heading compact-heading"><div><p class="eyebrow">Profil mahasiswa</p><h1>{{ $mahasiswa->nama }}</h1><p class="subtitle">{{ $mahasiswa->nim }} · {{ $mahasiswa->prodi }}</p></div><div class="heading-actions"><a class="button button-ghost" href="{{ route('mahasiswa.index') }}">Kembali</a><a class="button button-primary" href="{{ route('mahasiswa.edit', $mahasiswa) }}">Edit profil</a></div></div>
    <div class="detail-grid"><section class="panel profile-panel"><span class="avatar avatar-large">{{ strtoupper(substr($mahasiswa->nama, 0, 1)) }}</span><h2>{{ $mahasiswa->nama }}</h2><p class="muted-text">{{ $mahasiswa->email ?: 'Email belum diisi' }}</p><div class="detail-list"><div><span>NIM</span><strong>{{ $mahasiswa->nim }}</strong></div><div><span>Program studi</span><strong>{{ $mahasiswa->prodi }}</strong></div><div><span>Semester</span><strong>{{ $mahasiswa->semester }}</strong></div></div></section>
        <section class="panel"><div class="panel-heading"><div><h2>Riwayat nilai</h2><p>Mata kuliah yang pernah diambil mahasiswa.</p></div><span class="status-pill">{{ $mahasiswa->nilai->count() }} mata kuliah</span></div><div class="table-wrap"><table><thead><tr><th>Mata kuliah</th><th>Kode</th><th>Nilai</th></tr></thead><tbody>
            @forelse ($mahasiswa->nilai as $nilai)<tr><td><strong>{{ $nilai->matakuliah->nama_mk ?? '-' }}</strong></td><td class="muted-text">{{ $nilai->matakuliah->kode_mk ?? '-' }}</td><td><span class="grade-pill">{{ $nilai->nilai }}</span></td></tr>@empty<tr><td class="empty-state" colspan="3">Belum ada data nilai.</td></tr>@endforelse
        </tbody></table></div></section></div>
@endsection
