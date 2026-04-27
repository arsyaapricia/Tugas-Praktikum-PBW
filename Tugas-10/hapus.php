<?php
include 'koneksi.php';

$stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id=?");
$stmt->bind_param("i", $_GET['id']);
$stmt->execute();

header("Location: index.php?pesan=Data berhasil dihapus!");
?>