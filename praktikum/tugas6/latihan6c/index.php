<?php 
/*
Nadia Nur Annisa
203040107
Kamis 08:00 - 09:00
*/
?>

<?php

// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$fashion = query("SELECT * FROM fashion")

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
    <a href="php/login.php">
        <button type="">Login</button>
    </a>
    <div class="container">
        <?php foreach ($fashion as $f) : ?>
            <p class="name">
                <a href="php/detail.php?id=<?= $f['id'] ?>">
                    <?= $f["Name"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>
