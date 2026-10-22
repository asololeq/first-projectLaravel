@extends('layouts.app', ['title' => 'Mahasiswa'])

@section('content')
    <div class="page-heading">
        <div><p class="eyebrow">Directory akademik</p><h1>Mahasiswa</h1><p class="subtitle">Kelola profil, program studi, dan riwayat akademik mahasiswa.</p></div>
        <a class="button button-primary" href="{{ route('mahasiswa.create') }}">+ Tambah mahasiswa</a>
    </div>
    <section class="stats-row">
        <div class="metric-card"><span class="metric-label">Total ditampilkan</span><strong>{{ $mahasiswas->total() }}</strong><small>Data terdaftar</small></div>
        <div class="metric-card accent-card"><span class="metric-label">Halaman aktif</span><strong>{{ $mahasiswas->currentPage() }}</strong><small>Dari {{ $mahasiswas->lastPage() }} halaman</small></div>
        <div class="metric-card"><span class="metric-label">Per halaman</span><strong>{{ $mahasiswas->perPage() }}</strong><small>Maksimum data</small></div>
    </section>
    <section class="panel">
        <div class="panel-heading"><div><h2>Daftar mahasiswa</h2><p>Data diurutkan berdasarkan nama dan relasi nilai dimuat dengan eager loading.</p></div><span class="status-pill">{{ $mahasiswas->total() }} records</span></div>
        <div class="table-wrap"><table><thead><tr><th>Mahasiswa</th><th>NIM</th><th>Program studi</th><th>Semester</th><th class="align-right">Aksi</th></tr></thead><tbody>
            @forelse ($mahasiswas as $mahasiswa)
                <tr><td><div class="person-cell"><span class="avatar">{{ strtoupper(substr($mahasiswa->nama, 0, 1)) }}</span><div><strong>{{ $mahasiswa->nama }}</strong><small>{{ $mahasiswa->email ?: 'Email belum diisi' }}</small></div></div></td><td class="muted-text">{{ $mahasiswa->nim }}</td><td><span class="tag">{{ $mahasiswa->prodi }}</span></td><td>Semester {{ $mahasiswa->semester }}</td><td class="align-right action-cell"><a class="text-link" href="{{ route('mahasiswa.show', $mahasiswa) }}">Detail</a><a class="text-link" href="{{ route('mahasiswa.edit', $mahasiswa) }}">Edit</a><form action="{{ route('mahasiswa.destroy', $mahasiswa) }}" method="POST" onsubmit="return confirm('Hapus data mahasiswa ini?')">@csrf @method('DELETE')<button class="text-button danger-text" type="submit">Hapus</button></form></td></tr>
            @empty
                <tr><td class="empty-state" colspan="5">Belum ada data mahasiswa.</td></tr>
            @endforelse
        </tbody></table></div>
        @if ($mahasiswas->hasPages())<div class="pagination-wrap">{{ $mahasiswas->links() }}</div>@endif
    </section>
@endsection
