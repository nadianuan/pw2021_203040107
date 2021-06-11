<?php 
/*
Nadia Nur Annisa
203040107
Kamis 08:00 - 09:00
*/
?>

<?php
    // Mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // Mengambil id dari url
    $id = $_GET['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $fashion = query("SELECT * FROM fashion WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faxie</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $fashion["Picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $fashion["Name"]; ?></p>
            <p><?= $fashion["Description"]; ?></p>
            <p><?= $fashion["Price"]; ?></p>
            <p><?= $fashion["Category"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>