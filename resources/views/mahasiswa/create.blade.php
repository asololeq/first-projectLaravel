<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Prodi:</label><br>
        <input type="text" name="prodi" required><br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester" required><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}">Batal</a>
    </form>
</body>
</html>