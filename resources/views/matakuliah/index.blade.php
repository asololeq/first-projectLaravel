<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar & Tambah Mata Kuliah</title>
</head>
<body style="font-family: sans-serif; padding: 20px;">
    <h2>Tambah Mata Kuliah Baru</h2>
    <form action="/matakuliah" method="POST">
        @csrf
        <p>
            <label>Dosen Pengampu:</label><br>
            <select name="dosen_id" required>
                <option value="">-- Pilih Dosen --</option>
                @foreach($dosens as $dosen)
                    <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
                @endforeach
            </select>
        </p>
        <p><input type="text" name="kode_mk" placeholder="Kode MK (cth: IF101)" required></p>
        <p><input type="text" name="nama_mk" placeholder="Nama Mata Kuliah" required></p>
        <p><input type="number" name="sks" placeholder="SKS (1-4)" min="1" max="4" required></p>
        <p><input type="number" name="semester" placeholder="Semester (1-8)" min="1" max="8" required></p>
        <button type="submit">Simpan Mata Kuliah</button>
    </form>

    <hr>

    <h2>Daftar Mata Kuliah</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>
        @forelse($matakuliahs as $mk)
        <tr>
            <td>{{ $mk->kode_mk }}</td>
            <td>{{ $mk->nama_mk }}</td>
            <td>{{ $mk->sks }}</td>
            <td>{{ $mk->semester }}</td>
            <td>{{ $mk->dosen ? $mk->dosen->name : 'Belum Ditentukan' }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Belum ada data mata kuliah.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>