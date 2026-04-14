<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: darkseagreen;
    }
</style>
</head>
<body>
    <form>
        <p>Nama: Arsya Apricia Purnomo</p>
        <p>NPM: 2410631170012</p>
        <p>Kelas: 4C</p> 
    </form>
    <?php include 'menu.php'; ?>
</body>
</html>
<hr>
<br>
<div id="konten">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $file = $page . ".php";

        if (file_exists($file)) {
            include $file;
        } else {
            echo "Halaman tidak ditemukan.";
        }
    }
    ?>
    </div>
</body>
</html>