<?php
/*
Nadia Nur Annisa
203040107
SHIFT Kamis 08:00 - 09:00
*/
?>

<?php
    // menghubungkan dengan file php lainnya
    require 'php/function.php';

    // melakukan query
    $fashion = query("SELECT * FROM fashion")
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
            <th>Picture</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Category</th>
            </tr>
        <?php $i = 1 ?>
        <?php foreach($fashion as $f) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?= $f["Picture"]; ?>"></td>
            <td><?= $f["Name"]; ?></td>
            <td><?= $f["Description"]; ?></td>
            <td><?= $f["Price"]; ?></td>
            <td><?= $f["Category"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>