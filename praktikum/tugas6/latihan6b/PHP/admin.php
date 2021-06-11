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

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $fashion = query("SELECT * FROM fashion WHERE
                name LIKE '%keyword%' OR
                price LIKE '%keyword%' OR
                category LIKE '%keyword%' ");
} else {
    $fashion = query("SELECT * FROM fashion");
}
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
        <div class="add">
            <a href="tambah.php"><button>Tambah Data</button></a>
        </div>

            <form action="" method="get">
                <input type="text" name="keyword" autofocus>
                <button type="submit" name="cari">Search</button>
            </form>

            <div class="logout">
                    <a href="logout.php"><button>Logout</button></a>
                </div>

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
        <?php if (empty($fashion)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
        <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach($fashion as $f) : ?>
        <tr>
        <th scope="row"><?= $i; ?></th>
        <td>
            <a href="ubah.php?id=<?= $f['id']?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<? $f['id'] ?>" onclick="return confirm('Hapus Data??')"><button >Hapus</button></a>
        </td>
            <td><img src="../assets/img/<?= $f["Picture"]; ?>"></td>
            <td><?= $f["Name"]; ?></td>
            <td><?= $f["Description"]; ?></td>
            <td><?= $f["Price"]; ?></td>
            <td><?= $f["Category"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
        
    </tbody>
    </div>
    </body>
</table>
</html>