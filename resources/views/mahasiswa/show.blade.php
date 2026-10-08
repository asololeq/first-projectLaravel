<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <p><strong>Prodi:</strong> {{ $mahasiswa->prodi }}</p>

    <hr>
    <h3>Daftar Nilai</h3>
    @forelse ($mahasiswa->nilai as $n)
        <p>
            <strong>Mata Kuliah:</strong> {{ $n->matakuliah->nama_mk ?? '-' }} | 
            <strong>Nilai:</strong> {{ $n->nilai }}
        </p>
    @empty
        <p>Belum ada data nilai.</p>
    @endforelse

    <br>
    <a href="{{ route('mahasiswa.index') }}">Kembali</a>
</body>
</html>