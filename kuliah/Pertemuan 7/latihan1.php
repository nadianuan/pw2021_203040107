<?php 
/*
Nadia Nur Annisa
203040107
https://github.com/nadianuan/pw2021_203040107.git
Pertemuan 7
Mempelajari mengenai Get & Post
*/
?>

<?php 
// SUPERGLOBALS
// variable global milik php
// merupakan Array Associative
// $_GET
// var_dump($_GET);
// bisa menambahkan melalui link URL
// jika lebih dari satu variable tambahkan &
$mahasiswa = [
    [
            "nrp" => "203040107",
            "nama" => "Nadia Nur Annisa",
            "email" => "nadia.nuan39@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nadia.jpg"
    ],
    [
            "nrp" => "201736182",
            "nama" => "Tiara Fransisca",
            "email" => "tiarafrc@gmail.com",
            "jurusan" => "Kedokteran",
            "gambar" => "tiara.jpeg"
    ],
    [
            "nrp" => "202488663",
            "nama" => "Della Mirandha Abidin",
            "email" => "dellamirandha@gmail.com",
            "jurusan" => "Managemen",
            "gambar" => "della.jpeg"
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
<ul>
<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"]?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?=  $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?> 
</ul>

</body>
</html>