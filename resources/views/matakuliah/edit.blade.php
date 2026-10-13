<form action="{{ route("matakuliah.update", $matakuliah) }}" method="POST">
    @csrf
    @method("PUT")

    <input type="text"
           name="kode_mk"
           value="{{ old("kode_mk", $matakuliah->kode_mk) }}"
           required>

    <input type="text"
           name="nama_mk"
           value="{{ old("nama_mk", $matakuliah->nama_mk) }}"
           required>

    <input type="number"
           name="sks"
           value="{{ old("sks", $matakuliah->sks) }}"
           min="1"
           max="4"
           required>

    <input type="number"
           name="semester"
           value="{{ old("semester", $matakuliah->semester) }}"
           min="1"
           max="8"
           required>

    <select name="dosen_id" required>
        @foreach ($dosens as $dosen)
            <option value="{{ $dosen->id }}"
                @selected($matakuliah->dosen_id == $dosen->id)>
                {{ $dosen->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Update</button>
</form>