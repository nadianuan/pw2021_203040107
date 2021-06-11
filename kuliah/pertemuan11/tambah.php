<?php 
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data berhasil ditambahkan!');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal ditambahkan!');
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
	<title>Tambah Data</title>
	<style>
    img {
		border-radius: 5px;
		width: 100px;
    }
  </style>
</head>
<body>
	<h3>Form Tambah Data Mahasiswa</h3>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama :
                   <input type="text" name="nama" autofocus required>
				</label>
			</li>
			<li>
				<label for="nrp">NRP :
                   <input type="text" name="nrp" required>
				</label>
			</li>
			<li>
				<label for="email">Email :
                   <input type="text" name="email" required>
				</label>
			</li>
			<li>
				<label for="jurusan">Jurusan :
                   <input type="text" name="jurusan" required>
				</label>
			</li>
			<li>
				<label for="gambar">Gambar :
                   <input type="text" name="gambar" required>
				</label>
			</li>
			<li><button type="submit" name="tambah">Tambah Data</button></li>
		</ul>

	</form>
</body>
</html>