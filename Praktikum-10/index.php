<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page-header">
    <h1>DATA BUKU</h1>
    <div><a href="tambah.php">Tambah Buku</a>
        <p>Masukkan data buku untuk ditambahkan ke tabel buku</p></div>
    </div>
</div>
<br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM buku");

while ($d = mysqli_fetch_array($data)) {

?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['judul']; ?></td>
    <td><?= $d['penulis']; ?></td>
    <td><?= $d['tahun_terbit']; ?></td>
    <td><?= $d['harga']; ?></td>
    <td><?= $d['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Ingin menghapus?')">Hapus</a>
    </td>
</tr>

<?php } ?>
</table>

</body>
</html>