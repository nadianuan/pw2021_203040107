<?php 
/*
Nadia Nur Annisa
203040107
Kamis 08:00 - 09:00
*/
?>

<?php
require 'functions.php';

$id = $_GET['id'];
$f = query("SELECT * FROM fashion WHERE id = $id")[0];

if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0) {
        echo "  <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'admin.php';
                </script>";    
    }
}
?>

<h2>Form Ubah Data Fashion</h2>
<form action="" method="post">
    <ul>
        <input type="hidden" name="id" id="id" value="<?= $f["id"]; ?>">
        <li>
            <label for="picture">Picture  :</label><br>
            <input type="file" name="picture" id="picture" required value="<?= $f['Picture'] ?>"><br><br>
        </li>
        <li>
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name" required value="<?= $f['Name']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Description :</label><br>
            <input type="text" name="description" id="description" required value="<?= $f['Description'] ?>"><br><br>
        </li>
        <li>
            <label for="price">Price :</label><br>
            <input type="text" name="price" id="price" required value="<?= $f['Price'] ?>"><br><br>
        </li>
        <li>
            <label for="category">Category :</label><br>
            <input type="text" name="category" id="category" required value="<?= $f['Category'] ?>"><br><br>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black">Kembali</a>
        </button>
    </ul>
</form>