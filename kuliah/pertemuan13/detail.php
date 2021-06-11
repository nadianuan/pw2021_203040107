<?php 
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= , initial-scale=1.0">
	<title>Detail Mahasiswa</title>
	<style>
    img {
      border-radius: 5px;
      width: 100px;
    }
  </style>
</head>
<body>
	<h3>Detail Mahasiswa</h3>
	<ul>
		<li><img src="img/<?php echo $m['gambar']; ?>" width="250"></li>
		<li>NRP : <?php echo $m['nrp']; ?></li>
		<li>Nama : <?php echo $m['nama']; ?></li>
		<li>Email : <?php echo $m['email']; ?></li>
		<li>Jurusan : <?php echo $m['jurusan']; ?></li>
		<li><a href="ubah.php?id=<?php echo $m['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?php echo $m['id']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
		<li><a href="index.php">Kembali</a></li>
	</ul>
</body>
</html>