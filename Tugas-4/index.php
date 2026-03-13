<?php
define ("PAJAK", 0.10);

$barang = 
[
    "nama" => "Keyboard",
    "harga" => 150000
];

$jumlahBeli = 2;

$total = $barang["harga"] * $jumlahBeli;
$pajak = $total * PAJAK;
$totalBayar = $total + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <h1>Perhitungan Total Pembelian (Dengan Array)</h1>
        <hr>
        <form>
            <p>Nama Barang: 
                <?php echo $barang["nama"]; ?>
            </p>

            <p>Harga Satuan: Rp.
                <?php echo number_format($barang["harga"],0,",","."); ?>
            </p>

            <p>Jumlah Beli: 
                <?php echo $jumlahBeli; ?>
            </p>

            <p>Total Harga (Sebelum Pajak): Rp. 
                <?php echo number_format($total,0,",","."); ?>
            </p>

            <p>Pajak (10%): Rp. 
                <?php echo number_format($pajak,0,",","."); ?>
            </p>

            <p class="total">Total Bayar: Rp. 
                <?php echo number_format($totalBayar,0,",","."); ?>
            </p>
        </form>
    </div>
</body>
</html>