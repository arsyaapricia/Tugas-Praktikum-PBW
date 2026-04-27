<?php
include 'koneksi.php';

$stmt = $conn->prepare("UPDATE mahasiswa SET nama=?, nim=?, prodi=?, email=?, umur=? WHERE id=?");
$stmt->bind_param("ssssii",
    $_POST['nama'],
    $_POST['nim'],
    $_POST['prodi'],
    $_POST['email'],
    $_POST['umur'],
    $_POST['id']
);

$stmt->execute();

header("Location: index.php?pesan=Data berhasil diupdate!");
?>