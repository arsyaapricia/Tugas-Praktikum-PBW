<body>
<form method="post">
    <label>Tambahkan Hewan:</label> 
    <input type="text" name="nama" required>
    <button type="submit">Tambah</button>
</form>
<?php
$nama_hewan = ["Kucing", "Anjing", "Kelinci", "Sapi", "Kuda"];

if (isset($_POST['nama'])) {
    $nama_hewan[] = $_POST['nama'];
}

foreach ($nama_hewan as $hewan) {
    echo "<strong>" . $hewan . "</strong>"."<br>";
}
?>
</body>