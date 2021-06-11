<?php
error_reporting(0);
session_start();
require_once("koneksi.php");
$email = $_SESSION['email'];
$sql = "SELECT * FROM hy_user where email='$email'";
$result = $conn->query($sql);
$get = $result->fetch_assoc();
$sql1 = "SELECT * FROM hy_admin";
$result1 = $conn->query($sql1);
$get1 = $result1->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BrandNew">
    <meta name="author" content="NN">
    <meta name="keywords" content="">
    <title>
        BrandNew
    </title>
    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
</head>
<style>
.ghost-button-rounded-corners {
  display: inline-block;
  margin-bottom:10px;
  width: 60px;
  height: 30px;
  padding: 5px;
  color: #000000;
  border: 2px solid #3399ff;
  border-radius: 5px;
  text-align: center;
  outline: none;
  text-decoration: none;
}
.ghost-button-rounded-corners:hover,
.ghost-button-rounded-corners:active {
  background-color: #000000;
  color: #000000;
}
.ghost-button-rounded-corners2 {
  display: inline-block;
  margin-bottom:10px;
  width: 60px;
  height: 30px;
  padding: 5px;
  color: #000000;
  border: 2px solid #00ff00;
  border-radius: 5px;
  text-align: center;
  outline: none;
  text-decoration: none;
}
</style>
<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
       <div id="top">
        <div class="container">
		<?php if(!isset($_SESSION['email'])) { ?>
            <div class="col-md-6 offer" data-animate="fadeInDown">
            <i class="fa fa-envelope"></i> </i> <?php echo $get1['email']; ?> &nbsp&nbsp;<i class="fa fa-phone"></i> <?php echo $get1['telepon']; ?>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> Masuk</a>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#daftar-modal"><i class="fa fa-pencil-square-o"></i> Daftar</a>
                    </li>
                    <li><a ref="#" data-toggle="modal" data-target="#kontak-modal"><i class="fa fa-phone-square"></i> Kontak</a>
                    </li>
                </ul>
            </div>
		<? } else { ?>
			<div class="col-md-6 offer" data-animate="fadeInDown">
				<i class="fa fa-envelope"></i> <?php echo $get1['email']; ?> &nbsp&nbsp;<i class="fa fa-phone"></i> <?php echo $get1['telepon']; ?>
				</div>
				<div class="col-md-6" data-animate="fadeInDown">
					<ul class="menu">
						<li><font color="white"><i class="fa fa-bullhorn"></i> Welcome, <?php echo $get['nama_depan']; ?> <?php echo $get['nama_belakang']; ?>
						</font></li>
						<li><a href="profil.php"><i class="fa fa-gear"></i> Pengaturan</a>
						</li>
						<li><a href="logout.php"><i class="fa fa-sign-out"></i> Keluar</a>
						</li>
					</ul>
            </div>
		<? } ?>
        </div>
		<div class="modal fade" id="kontak-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Hubungi Kami</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6><i class="fa fa-map-marker"></i> Address</h6>
                                <p><?php echo $get1['alamat']; ?>
                                    <br><?php echo $get1['kota']; ?>
                                    <br><?php echo $get1['kode_pos']; ?>
                                    <br><?php echo $get1['provinsi']; ?>
                                    <br>
                                    <strong>Indonesia</strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h6><i class="fa fa-phone"></i> Call center</h6>
                                <p><strong><?php echo $get1['telepon']; ?></strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                            <div class="col-sm-4">
                                <h6><i class="fa fa-envelope"></i> Email</h6>
                                <p><strong><?php echo $get1['email']; ?></strong>
                                </p>
                            </div>
                            <!-- /.col-sm-4 -->
                        </div>
                        <!-- /.row -->

    

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="daftar-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Silahkan Daftar</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="prossesdaftar.php">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Depan</label>
                                            <input name="namadepan" type="text" class="form-control" id="firstname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nama Belakang</label>
                                            <input name="namabelakang" type="text" class="form-control" id="lastname" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="company" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Kota</label>
                                            <input name="kota" type="text" class="form-control" id="street" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">Provinsi</label>
                                            <input name="provinsi" type="text" class="form-control" id="city" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">Kode Pos</label>
                                            <input name="kodepos" type="text" class="form-control" id="zip" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Telepon (+62)</label>
                                            <input name="telpon" type="text" class="form-control" id="street" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Password</label>
                                            <input name="password" type="password" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="text" class="form-control" id="email" required>
                                        </div>
                                    </div>

                                </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Silahkan Login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="prosseslogin.php" method="post">
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" id="email-modal" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="password-modal" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Masuk</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Belum Mendaftar?</p>
                        <p class="text-center text-muted"><a data-dismiss="modal" href="#" data-toggle="modal" data-target="#daftar-modal"><strong>Daftar Sekarang</strong></a>! Sangat mudah hanya cukup dilakukan dalam 1 menit, Anda dapat mengakses diskon khusus dan masih banyak lagi!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

   <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="#" data-animate-hover="bounce">
                    <img src="img/Faxie.png" alt="Faxie" class="hidden-xs">
                    <img src="img/Faxie.png" alt="Faxie" class="visible-xs"><span class="sr-only">Faxie.com - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="keranjang.php">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Keranjang</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a>
                    </li>
                    <li><a href="aksesoris.php"><i class="fa fa-list"></i> Aksesoris</a>
                    </li>
                    <li><a href="jacket.php"><i class="fa fa-list"></i> Jacket</a>
                    </li>
                    <li><a href="hoodie.php"><i class="fa fa-list"></i> Hoodie</a>
                    </li>
                    
                        </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="keranjang.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">Keranjang</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right">
                    <form method="POST" action="pencarian_barang.php" class="navbar-form" role="search">
                    <div class="input-group">
                        <input name="caribarang" type="text" class="form-control" placeholder="Cari">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>
                </div>

            </div>

            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>