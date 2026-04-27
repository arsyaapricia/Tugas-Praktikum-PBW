<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page-header">
<h2>Data Mahasiswa</h2>

<form method="GET">
    <input type="text" name="cari" placeholder="Cari nama...">
    <button type="submit">Cari</button>
</form>
</div>
<br><a href="tambah.php">Tambah Data</a>
<br><br>

<?php
if (isset($_GET['pesan'])) {
    echo "<p style='color:green'>" . $_GET['pesan'] . "</p>";
}
?>

<table border="1" cellpadding="5">>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Prodi</th>
    <th>Email</th>
    <th>Umur</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;

if (isset($_GET['cari'])) {
    $cari = "%" . $_GET['cari'] . "%";
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE nama LIKE ?");
    $stmt->bind_param("s", $cari);
} else {
    $stmt = $conn->prepare("SELECT * FROM mahasiswa");
}

$stmt->execute();
$result = $stmt->get_result();

while ($d = $result->fetch_assoc()) {
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['nim']; ?></td>
    <td><?= $d['prodi']; ?></td>
    <td><?= $d['email']; ?></td>
    <td><?= $d['umur']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Ingin Hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>