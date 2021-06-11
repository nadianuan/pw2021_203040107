<?php
/* 
Nadia Nur Annisa
203040107
Kamis 08:00 - 09:00
 */
?>

<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$fashion = query("SELECT * FROM fashion");
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Faxie</title>
    <style>
        .table {
            width:100px;
            padding: 10px;
            font-family: arial;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        img {
            max-width: 150px;
        }
    </style>
    </head>
    <body>
        <div class="container">
        <table cellpadding="10" cellpading="0" border="1">
            <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
        <?php $i = 1; ?>
        <?php foreach($fashion as $f) : ?>
        <tr>
        <th scope="row"><?= $i; ?></th>
        <td>
            <a href=""><button style="border-color: darkkhaki">Ubah</button></a>
            <a href="hapus.php?id=<?= $f['id'] ?>" onclick="return confirm('Hapus Data??')"><button style="border-color: darkkhaki">Hapus</button></a>
        </td>
            <td><img src="../assets/img/<?= $f["Picture"]; ?>"></td>
            <td><?= $f["Name"]; ?></td>
            <td><?= $f["Description"]; ?></td>
            <td><?= $f["Price"]; ?></td>
            <td><?= $f["Category"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

        <div class="add">
            <a href="tambah.php"><button>Tambah Data</button></a>
        </div>
    </tbody>
    </div>
    </body>
</table>
</html>