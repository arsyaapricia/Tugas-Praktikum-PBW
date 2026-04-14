<body>
   <form method="POST">
    <label>Masukkan Jumlah Roda:</label>
    <input type="number" name="roda">
    <button type="submit" name="submit">Tampilkan</button>
</form>
        <?php
        if (isset($_POST['submit'])) {
        $jumlahRoda = $_POST['roda'];

        switch ($jumlahRoda) {
            case 2:
                echo "<strong>Motor</strong>";
                break;
            case 3:
                echo "<strong>Bajay</strong>";
                break;
            case 4:
                echo "<strong>Mobil</strong>";
                break;
            case 6:
                echo "<strong>Truk</strong>";
                break;
            default:
                echo "Jenis kendaraan tidak ditemukan";
            break;
            }  
}
?> 
</body>



        



