<?php
include 'koneksi.php';

$stmt = $conn->prepare("INSERT INTO mahasiswa (nama,nim,prodi,email,umur) VALUES (?,?,?,?,?)");
$stmt->bind_param("ssssi",
    $_POST['nama'],
    $_POST['nim'],
    $_POST['prodi'],
    $_POST['email'],
    $_POST['umur']
);

$stmt->execute();

header("Location: index.php?pesan=Data berhasil ditambahkan!");
?>