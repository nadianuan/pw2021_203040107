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
$films = [
        [
            "judul" => "Susah Sinyal",
            "sutradara" => "Ernest Prakasa",
            "produksi" => "Kharisma Starvision",
            "tahun" => "2017",
            "genre" => "Drama",
            "gambar" => "1.jpg"
        ],
        [
        "judul" => "Orang Kaya Baru",
        "sutradara" => "Ody C. Harahap",
        "produksi" => "Legacy Pictures",
        "tahun" => "2019",
        "genre" => "Keluarga",
        "gambar" => "2.jpg"
        ],
        [
        "judul" => "Keluarga Cemara",
        "sutradara" => "Yandy Laurens",
        "produksi" => "Ideosource Entertaiment",
        "tahun" => "2019",
        "genre" => "Drama",
        "gambar" => "3.jpg"
        ],
        [
        "judul" => "Imperfect: Karier, Cinta & Timbangan",
        "sutradara" => "Ernest Prakasa",
        "produksi" => "Starvision Plus",
        "tahun" => "2019",
        "genre" => "Drama, Komedi",
        "gambar" => "4.jpg"
        ],
        [
        "judul" => "Cek Toko Sebelah",
        "sutradara" => "Ernest Prakasa",
        "produksi" => "Starvision Plus",
        "tahun" => "2016",
        "genre" => "Drama, Komedi",
        "gambar" => "5.jpg"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        body {
            display: flex;
            flex-direction: row;
        }
        h1 {
            text-align: center;
            margin-bottom: 200px;
            padding: 40px;
            border-right: 1px solid black;
        }
        img {
            max-width: 150px;
        }
    </style>
</head>
<body>
    <h1>Daftar Film</h1>

    <?php foreach( $films as $film) : ?>
    <ul>
        <li>
            <img src="img/<?= $film["gambar"]; ?>">
        </li>
        <li>Judul :<?= $film["judul"]; ?></li>
        <li>Sutradara :<?= $film["sutradara"]; ?></li>
        <li>Produksi :<?= $film["produksi"]; ?></li>
        <li>Tahun :<?= $film["tahun"]; ?></li>
        <li>Genre :<?= $film["genre"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>