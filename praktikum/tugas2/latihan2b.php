<?php
//Nadia Nur Annisa
//203040107
//Shift Kamis 08:00 - 09:00
?>

<?php
$jawabanIsset = "Isset adalah = Fungsi untuk mengecek apakah sebuah variabel sudah dibuat apa belum, dan akan menghasilkan boolean true or false. <br> <br>";
$jawabanEmpty = "Empty adalah = Fungsi untuk mengecek apakah sebuah variabel ada isi nya atau tidak";

$GLOBALS["isset"] = $jawabanIsset;
$GLOBALS["empty"] = $jawabanEmpty;


function soal($style)
{
    echo "<div class = $style>
    <h1>" . $GLOBALS['isset'] . "</h1>
    <h1>" . $GLOBALS['empty'] . "</h1>
    </div>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan2b_203040107</title>
    <style>
        .center {
            border: 1px solid black;
            padding-left: 10px;
            font-size: 8px;
            color: goldenrod;
            font-family: monospace;
            background-color: #222222;
        }
    </style>
</head>

<body>
    <?php
    echo soal("center");
    ?>
</body>

</html>
