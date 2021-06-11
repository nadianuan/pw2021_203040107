<?php
error_reporting(0);
session_start();
require_once("../koneksi.php");
$username = $_SESSION['username'];
$sql = "SELECT * FROM hy_admin where username='$username'";
$result = $conn->query($sql);
$get = $result->fetch_assoc();

$transaksi = mysqli_query($conn, "SELECT * FROM hy_keranjang");
$totaltransaksi = mysqli_num_rows($transaksi);
$user = mysqli_query($conn, "SELECT * FROM hy_user");
$totaluser = mysqli_num_rows($user);
$barang = mysqli_query($conn, "SELECT * FROM hy_barang");
$totalbarang = mysqli_num_rows($barang);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HijabYess Admin Panel</title>
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="dropzone/css/dropzone.css">
    <script src="dropzone/dropzone.js"></script>
	<link rel="stylesheet" href="assets/css/theme-helper.css">
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div id="sidebar">
			<div id="sidebar-wrapper">
				<div class="sidebar-title"><h2>HijabYess</h2><span>AdminPanel</span></div>
				<ul class="sidebar-nav">
					<li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
					<li class="active"><a href="home.php"><i class="fa fa-fw fa-home"></i><span class="nav-label">Dashboard</span></a></li>
					<li>
						<a href="#nav-dokumen" data-toggle="collapse" aria-controls="nav-dokumen"><i class="fa fa-fw fa-archive"></i><span class="nav-label"> Data Table</span></a>
						<ul class="sidebar-nav-child collapse collapseable" id="nav-dokumen">
							<li><a href="barang.php"><i class="fa fa-upload"></i><span class="nav-label">Data Barang</span></a></li>
							<li><a href="transaksi.php"><i class="fa fa-bookmark"></i><span class="nav-label">Data Transaksi</span></a></li>
							<li><a href="datauser.php"><i class="fa fa-user"></i><span class="nav-label">Data User</span></a></li>
						</ul>
					</li>
					<li><a href="akunadmin.php"><i class="fa fa-fw fa-user"></i><span class="nav-label">Data Admin</span></a></li>
					<li>
						<a href="#nav-pengaturan" data-toggle="collapse" aria-controls="nav-dokumen"><i class="fa fa-fw fa-gear"></i><span class="nav-label">Pengaturan</span></a>
						<ul class="sidebar-nav-child collapse collapseable" id="nav-pengaturan">
							<li><a href="gantipass.php"><i class="fa fa-bookmark"></i><span class="nav-label">Ganti Password</span></a></li>
							<li><a href="settingweb.php"><i class="fa fa-globe"></i><span class="nav-label">Setting Website</span></a></li>
						</ul>
					</li>
				</ul>
				<div class="sidebar-footer">
					<a href="logout.php" class="btn btn-default btn-block"><i class="fa fa-fw fa-power-off"></i><span class="nav-label">logout</span></a>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="content-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- Navbar toggle button -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Sidebar toggle button -->
							<button type="button" class="sidebar-toggle">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand text-size-24" href="home.php">Dashboard</a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<form class="navbar-form navbar-right">
								<div class="input-group">
									<input type="text" class="form-control round" placeholder="Search">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default round"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bullhorn"></i> Selamat Datang, <?php echo $get['nama']; ?></a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>