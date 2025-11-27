<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form action="{{ route('insertdata') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Name</label>
    <input type="text" name="name" required><br><br>

    <label>NIM</label>
    <input type="text" name="nim" required><br><br>

    <label>Prodi</label>
    <input type="text" name="prodi" required><br><br>

    <label>Email</label>
    <input type="text" name="email"><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
