<?php 
require '../functions.php';

$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>#</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>Aksi</th>
	</tr>

	<?php if (empty($mahasiswa)) { ?>
		<tr>
			<td colspan="4">
				<p style="color: red; font-style: italic;">Data mahasiswa tidak ditemukan!</p>
			</td>
		</tr>
	<?php } ?>

	<?php $i = 1; ?>
	<?php foreach ($mahasiswa as $m) { ?>
		<tr>
			<td><?php echo $m['id']; ?></td>
			<td><img src="img/<?php echo $m['gambar']; ?>" alt=""></td>
			<td><?php echo $m['nama']; ?></td>
			<td><a href="detail.php?id=<?php echo $m['id']; ?>">Lihat detail</a></td>
		</tr>
	<?php } ?>
	<?php $i++ ?>
</table>