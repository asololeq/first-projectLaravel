<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SIAKAD' }} | Sistem Informasi Akademik</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="topbar">
        <div class="shell topbar-inner">
            <a class="brand" href="{{ route('mahasiswa.index') }}">
                <span class="brand-mark">SA</span>
                <span>
                    <strong>SIAKAD</strong>
                    <small>Academic workspace</small>
                </span>
            </a>
            <div class="nav-links">
                <a class="{{ request()->routeIs('mahasiswa.*') ? 'is-active' : '' }}" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                <a class="{{ request()->routeIs('matakuliah.*') ? 'is-active' : '' }}" href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
                <a class="{{ request()->is('statistik-prodi') ? 'is-active' : '' }}" href="{{ url('/statistik-prodi') }}">Statistik</a>
            </div>
        </div>
    </nav>

    <main class="shell page-shell">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <strong>Periksa kembali data yang dimasukkan.</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="shell footer">
        <span>SIAKAD</span>
        <span>Academic data, kept simple.</span>
    </footer>

    @stack('scripts')
</body>
</html>
