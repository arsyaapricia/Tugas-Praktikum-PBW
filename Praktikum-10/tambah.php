<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Tambah Buku</h2>
<form method="POST" action="proses_tambah.php">
    <p>Judul:</p>
    <input type="text" name="judul" required>
    <p>Penulis:</p>
    <input type="text" name="penulis" required>
    <p>Tahun Terbit:</p>
    <input type="number" name="tahun">
    <p>Harga:</p>
    <input type="number" step="0.01" name="harga">
    <p>Stok:</p>
    <input type="number" name="stok"><br><br>

    <button type="submit">Simpan</button>
</form>
</body>
</html>