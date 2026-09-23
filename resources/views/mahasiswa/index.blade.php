<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR UTAMA -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <div class="navbar-nav">
      <a class="nav-link active" href="/mahasiswa">Data Mahasiswa</a>
      <a class="nav-link" href="/matakuliah">Data Mata Kuliah</a>
    </div>
  </div>
</nav>

<div class="container my-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Mahasiswa</h5>
            <!-- Tombol Cepat ke Mata Kuliah -->
            <a href="/matakuliah" class="btn btn-light btn-sm">Ke Halaman Mata Kuliah &rarr;</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $mhs)
                    <tr>
                        <td><span class="badge bg-secondary">{{ $mhs->nim }}</span></td>
                        <td><strong>{{ $mhs->nama }}</strong></td>
                        <td>{{ $mhs->prodi }}</td>
                        <td>Semester {{ $mhs->semester }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data mahasiswa.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>