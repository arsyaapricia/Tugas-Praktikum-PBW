<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id      = $_POST['id'];
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun   = $_POST['tahun']; // ✅ sesuai form
    $harga   = $_POST['harga'];
    $stok    = $_POST['stok'];

    $stmt = $conn->prepare(
        "UPDATE buku SET 
        judul=?, 
        penulis=?, 
        tahun_terbit=?, 
        harga=?, 
        stok=? 
        WHERE id=?"
    );


    $stmt->bind_param("ssidii", 
        $judul, $penulis, $tahun, $harga, $stok, $id
    );

    $stmt->execute();
}

header("Location: index.php");
?>