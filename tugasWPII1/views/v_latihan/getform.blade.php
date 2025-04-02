<!-- resources/views/v_latihan/getform.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Mahasiswa</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
        input[type=text] {
            width: 92%;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>Form Input Mahasiswa</h3>
    <form method="POST" action="{{ route('latihan.store') }}">
        @csrf
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
