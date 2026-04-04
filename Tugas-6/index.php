<?php
function formatRupiah($angka) {
    return "Rp. " . number_format($angka, 0, ',', '.') . ",-";
}
    if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $biaya_ukt = $_POST['ukt'];

    $diskon_persen = 0; 
    
    if ($biaya_ukt >= 5000000 && $semester > 8) {
        $diskon_persen = 15;
    } elseif ($biaya_ukt >= 5000000) {
        $diskon_persen = 10;
    } else {
        $diskon_persen = 0;
    }

    $nominal_diskon = $biaya_ukt * ($diskon_persen / 100);
    $yang_harus_dibayar = $biaya_ukt - $nominal_diskon;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Diskon Pembayaran UKT</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>menu diskon pembayaran ukt</h2>
    
    <form action="" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="number" name="npm"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td><input type="text" name="prodi"></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td><input type="text" name="semester"></td>
            </tr>
            <tr>
                <td>Biaya UKT</td>
                <td>:</td>
                <td><input type="text" name="ukt"></td>
            </tr>
            <tr>
                <td>
                <button type="submit" name="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form> 
<div>
    <?php 
    if (isset($_POST['submit'])) {
        echo "<div class='kotak-luaran'>";
            echo "<div class='judul-luaran'>";
            echo "  Luaran yang diharuskan";
            echo "</div>";

            echo "<div class='isi-luaran'>";
            echo " NPM : " . $npm . "<br>";
            echo " NAMA : " . $nama . "<br>";
            echo " PRODI : " . $prodi . "<br>";
            echo " SEMESTER : " . $semester . "<br>";
            echo " BIAYA UKT : " . formatRupiah($biaya_ukt) . "<br>";
            echo " DISKON : " . $diskon_persen ."<br>";
            echo " YANG HARUS DIBAYAR : " . formatRupiah($yang_harus_dibayar) . "<br>";
            echo "</div>";
        echo "</div>"; 
    }
    ?>

</div>
</body>
</html>