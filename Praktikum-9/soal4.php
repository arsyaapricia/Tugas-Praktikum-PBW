<body>
<form method="post">
    <label>Masukkan Angka:</label> 
    <input type="number" name="angka" required>
    <button type="submit">Cek</button>
</form>
<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];

    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo  "Angka: " . "<strong>" . $angka ."</strong>" . "<br>";
    echo  "Hasil: " . "<strong>" . $hasil. "</strong>" . "<br>";   
}
?>
</body>

