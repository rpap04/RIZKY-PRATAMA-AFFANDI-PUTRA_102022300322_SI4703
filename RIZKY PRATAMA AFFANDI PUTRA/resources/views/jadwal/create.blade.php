<h2>Input Jadwal Kuliah</h2>
<form method="POST" action="{{ route('jadwal.store') }}">
    @csrf
    <input type="text" name="mata_kuliah" placeholder="Mata Kuliah"><br>
    <input type="text" name="dosen" placeholder="Dosen"><br>
    <input type="text" name="ruangan" placeholder="Ruangan"><br>
    <input type="text" name="hari" placeholder="Hari"><br>
    <input type="time" name="jam_mulai"><br>
    <input type="time" name="jam_selesai"><br>
    <button type="submit">Simpan</button>
</form>
