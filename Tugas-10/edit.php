<?php
include 'koneksi.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
?>

<form method="POST" action="proses_edit.php">
<link rel="stylesheet" href="style.css">
<input type="hidden" name="id" value="<?= $data['id']; ?>">

<h2>Edit Data</h2>
<p>Nama:</p>
<input type="text" name="nama" value="<?= $data['nama']; ?>">
<p>NIM:</p>
<input type="text" name="nim" value="<?= $data['nim']; ?>">
<p>Prodi: </p>
<input type="text" name="prodi" value="<?= $data['prodi']; ?>">
<p>Email:</p> 
<input type="email" name="email" value="<?= $data['email']; ?>">
<p>Umur:</p> 
<input type="number" name="umur" value="<?= $data['umur']; ?>"><br><br>

<button type="submit">Update</button>
</form>