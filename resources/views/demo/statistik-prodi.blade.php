<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Statistik Mahasiswa per Prodi</title>
</head>
<body>
    <h2>Rekap Jumlah Mahasiswa per Program Studi</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Program Studi</th>
                <th>Jumlah Mahasiswa</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rekap as $row)
                <tr>
                    <td>{{ $row->prodi ?? 'Belum Diisi' }}</td>
                    <td>{{ $row->jumlah }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="2">Data tidak tersedia.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>