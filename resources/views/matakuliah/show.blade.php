<h2>{{ $matakuliah->nama_mk }}</h2>

<p>Kode: {{ $matakuliah->kode_mk }}</p>
<p>Dosen: {{ $matakuliah->dosen->name ?? "-" }}</p>

<h3>Daftar Mahasiswa</h3>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($matakuliah->nilai as $nilai)
            <tr>
                <td>{{ $nilai->mahasiswa->nim }}</td>
                <td>{{ $nilai->mahasiswa->nama }}</td>
                <td>{{ $nilai->nilai }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Belum ada mahasiswa.</td>
            </tr>
        @endforelse
    </tbody>
</table>