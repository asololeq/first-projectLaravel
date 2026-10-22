<div class="form-grid">
    <label class="field">
        <span>NIM</span>
        <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim ?? '') }}" required>
    </label>

    <label class="field">
        <span>Nama lengkap</span>
        <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}" required>
    </label>

    <label class="field">
        <span>Email</span>
        <input type="email" name="email" value="{{ old('email', $mahasiswa->email ?? '') }}">
    </label>

    <label class="field">
        <span>Program studi</span>
        <input type="text" name="prodi" value="{{ old('prodi', $mahasiswa->prodi ?? '') }}" placeholder="Teknik Informatika" required>
    </label>

    <label class="field">
        <span>Semester</span>
        <select name="semester" required>
            <option value="">Pilih semester</option>
            @for ($semester = 1; $semester <= 8; $semester++)
                <option value="{{ $semester }}" @selected((string) old('semester', $mahasiswa->semester ?? '') === (string) $semester)>
                    Semester {{ $semester }}
                </option>
            @endfor
        </select>
    </label>
</div>

<div class="form-actions">
    <a class="button button-ghost" href="{{ route('mahasiswa.index') }}">Batal</a>
    <button class="button button-primary" type="submit">{{ $submitLabel }}</button>
</div>
