<?php
/*
Nadia Nur Annisa
203040107
SHIFT Kamis 08:00 - 09:00
*/
?>

<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040107");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM fashion");

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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?= $row["Picture"]; ?>"></td>
            <td><?= $row["Name"]; ?></td>
            <td><?= $row["Description"]; ?></td>
            <td><?= $row["Price"]; ?></td>
            <td><?= $row["Category"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </tbody>
    </div>
    </body>
</table>
</html>