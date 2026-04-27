<?php
$conn = new mysqli(
    'localhost',
    'root',
    '',
    'data_mahasiswa'
);

if ($conn->connect_error) {
    die("Gagal: ".$conn->connect_error);
}
?>