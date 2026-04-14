<body>
<form method="post">
    <label>Masukkan Batas Angka:</label> 
    <input type="number" name="batas" required>
    <button type="submit">Tampilkan</button>
</form>
<?php
if (isset($_POST['batas'])) {
    $batas = $_POST['batas'];
    echo "Bilangan genap dari 2 sampai $batas: <br>";
    for ($i = 2; $i <= $batas; $i += 2) {
        echo "<strong>" . $i . " " . "</strong>";
        
    }
}
?>
</body>



