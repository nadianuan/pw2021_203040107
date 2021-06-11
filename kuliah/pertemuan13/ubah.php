<?php 
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
	header("Location: index.php");
	exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mhs berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('Data berhasil diubah!');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal diubah!');
		document.location.href = 'index.php';
		</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data</title>
</head>
<body>
	<h3>Form Ubah Data Mahasiswa</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $m['id']; ?>">
		<ul>
			<li>
				<label for="nama">Nama :
                   <input type="text" name="nama" autofocus required value="<?php echo $m['nama']; ?>">
				</label>
			</li>
			<li>
				<label for="nrp">NRP :
                   <input type="text" name="nrp" required value="<?php echo $m['nrp']; ?>">
				</label>
			</li>
			<li>
				<label for="email">Email :
                   <input type="text" name="email" required value="<?php echo $m['email']; ?>">
				</label>
			</li>
			<li>
				<label for="jurusan">Jurusan :
                   <input type="text" name="jurusan" required value="<?php echo $m['jurusan']; ?>">
				</label>
			</li>
			<li>
				<input type="hidden" name="gambar_lama" value="<?php echo $m['gambar']; ?>">
				<label for="gambar">Gambar :
                   <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                </label>
				<img src="img/<?php echo $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
			</li>
			<li><button type="submit" name="ubah">Ubah Data</button></li>
		</ul>
	</form>
<script src="js/script.js"></script>
</body>
</html>