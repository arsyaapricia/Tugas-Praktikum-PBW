<?php
include 'koneksi.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM buku WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Buku</h2>
<form method="POST" action="proses_edit.php">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    <p>Judul:</p>
    <input type="text" name="judul" value="<?= $d['judul']; ?>">
    <p>Penulis:</p>
    <input type="text" name="penulis" value="<?= $d['penulis']; ?>">
    <p>Tahun:</p>
    <input type="number" name="tahun" value="<?= $d['tahun_terbit']; ?>">
    <p>Harga:</p>
    <input type="number" step="0.01" name="harga" value="<?= $d['harga']; ?>">
    <p>Stok:</p>
    <input type="number" name="stok" value="<?= $d['stok']; ?>"><br><br>
    <button type="submit">Update</button>
</form>

</body>
</html>