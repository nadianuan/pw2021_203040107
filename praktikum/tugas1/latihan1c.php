<?php
// Nadia Nur Annisa
// 203040107
// Shift Kamis 08.00 - 09.00
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Latihan1c_203040107</title>
    <style>
        div {
            background-color: salmon;
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            border: 2px solid black;
            line-height: 50px;
            text-align: center;
            margin: 0px 5px 10px 0px;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php for ($z = 1; $z <= $i; $z++) : ?>
            <div><?= $i ?></div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>

</html>