<h2>Daftar Jadwal Kuliah</h2>
<a href="{{ route('jadwal.create') }}">+ Tambah Jadwal</a>
<table border="1" cellpadding="5">
    <tr>
        <th>Mata Kuliah</th>
        <th>Dosen</th>
        <th>Ruangan</th>
        <th>Hari</th>
        <th>Jam</th>
    </tr>
    @foreach($jadwals as $jadwal)
    <tr>
        <td>{{ $jadwal->mata_kuliah }}</td>
        <td>{{ $jadwal->dosen }}</td>
        <td>{{ $jadwal->ruangan }}</td>
        <td>{{ $jadwal->hari }}</td>
        <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
    </tr>
    @endforeach
</table>
