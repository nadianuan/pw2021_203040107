<?php 
/*
Nadia Nur Annisa
203040107
https://github.com/nadianuan/pw2021_203040107
Pertemuan 6
Mempelajari mengenai Associative Array
*/
?>


<?php 
// $mahasiswa = [
//    ["Nadia Nur Annisa", "203040107", "nadia.nuan39@gmail.com"
//        , "Teknik Informatika"],
//    ["Tiara Fransisca", "201736182" "tiarafrc@gmail.com"
//        , "Kedokteran"]
//    ["Della Mirandha Abidin", "202488663", "dellamirandha@gmail.com"
//        , "Managemen"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<style>
    img {
        max-width:150px;
    }
</style>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama :<?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li> 
        <li>Email :<?=$mhs["email"]; ?></li>
        <li>Jurusan :<?=$mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>