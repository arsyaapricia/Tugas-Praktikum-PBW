<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Mahasiswa</h2>

<form method="POST" action="proses_tambah.php">
    <p>Nama: </p><input type="text" name="nama">
    <p>NIM:</p> <input type="text" name="nim">
    <p>Prodi:</p> <input type="text" name="jurusan">
    <p>Email: </p><input type="email" name="email">
    <p>Umur: </p><input type="number" name="umur"><br><br>

    <button type="submit">Simpan</button>
</form>
</body>
