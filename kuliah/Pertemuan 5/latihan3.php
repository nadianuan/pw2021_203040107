<?php 
/*
Nadia Nur Annisa
203040107
https://github.com/nadianuan/pw2021_203040107
Pertemuan 5
Mempelajari mengenai Array
*/
?>

<?php 
$mahasiswa = [["Nadia Nur Annisa", "203040107", "Teknik Informatika", "nadia.nuan39@gmail.com"],
    ["Tiara Fransisca", "201736182", "Kedokteran", "tiarafrc@gmail.com"], ["Della Mirandha Abidin", "202488663", "Management", "dellamirandha@gmail.com"]
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
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>