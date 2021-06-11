<?php
/*
Nadia Nur Annisa
203040107
Kamis 08:00 - 09:00
*/
?>

<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<h3>Form Tambah Data Fashion</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="picture">Picture :</label><br>
            <input type="file" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="description" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="price" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="category">Category :</label><br>
            <input type="category" name="category" id="category" required><br><br>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>