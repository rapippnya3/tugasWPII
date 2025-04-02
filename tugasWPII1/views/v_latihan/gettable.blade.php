<!-- resources/views/v_latihan/gettable.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="{{ route('latihan.getform') }}">Tambah Data</a>
    <table>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        @foreach ($dataMahasiswa as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa["no"] }}</td>
            <td>{{ $mahasiswa["nim"] }}</td>
            <td>{{ $mahasiswa["nama"] }}</td>
            <td>{{ $mahasiswa["kelas"] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
