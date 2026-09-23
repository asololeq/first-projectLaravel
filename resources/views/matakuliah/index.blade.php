<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar & Tambah Mata Kuliah</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR UTAMA -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <div class="navbar-nav">
      <a class="nav-link" href="/mahasiswa">Data Mahasiswa</a>
      <a class="nav-link active" href="/matakuliah">Data Mata Kuliah</a>
    </div>
  </div>
</nav>

<div class="container my-4">
    <!-- Form Tambah Data Mata Kuliah -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tambah Mata Kuliah Baru</h5>
            <!-- Tombol Cepat ke Mahasiswa -->
            <a href="/mahasiswa" class="btn btn-light btn-sm">&larr; Ke Halaman Mahasiswa</a>
        </div>
        <div class="card-body">
            <form action="/matakuliah" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Dosen Pengampu</label>
                        <select name="dosen_id" class="form-select" required>
                            <option value="">-- Pilih Dosen --</option>
                            @foreach($dosens as $dosen)
                                <option value="{{ $dosen->id }}">{{ $dosen->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Kode MK</label>
                        <input type="text" name="kode_mk" class="form-control" placeholder="IF101" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Mata Kuliah</label>
                        <input type="text" name="nama_mk" class="form-control" placeholder="Pemrograman Web" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">SKS</label>
                        <input type="number" name="sks" class="form-control" min="1" max="4" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Semester</label>
                        <input type="number" name="semester" class="form-control" min="1" max="8" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Simpan Mata Kuliah</button>
            </form>
        </div>
    </div>

    <!-- Tabel Daftar Data Mata Kuliah -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Daftar Mata Kuliah</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Kode MK</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Dosen Pengampu</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($matakuliahs as $mk)
                    <tr>
                        <td><span class="badge bg-secondary">{{ $mk->kode_mk }}</span></td>
                        <td><strong>{{ $mk->nama_mk }}</strong></td>
                        <td>{{ $mk->sks }}</td>
                        <td>Semester {{ $mk->semester }}</td>
                        <td>{{ $mk->dosen ? $mk->dosen->name : 'Belum Ditentukan' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada data mata kuliah.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>