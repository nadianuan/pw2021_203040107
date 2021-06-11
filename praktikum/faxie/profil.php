
<?php
session_start();
include"xtop.php";
if(!isset($_SESSION['email'])) {
header('location:register.php'); }
else { $email = $_SESSION['email']; }
if (!empty($_GET['change'])) {
	if ($_GET['change'] == ErrorKonfirmasi) {
		$error1 = '<center><div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                   Password Baru Yang anda masukan tidak Sesuai !
                                </div>
                            </div></center>';
	} else if ($_GET['change'] == ErrorPassword) {
		$error2 = '<center><div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                    Password Lama Tidak Sesuai dengan Database !
                                </div>
                            </div></center>';
	} else if ($_GET['change'] == SuccesEditPassword) {
		$error3 = '<center><div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                    Selamat ! Anda telah berhasil mengganti Password.
                                </div>
                            </div></center>';
	} else if ($_GET['change'] == SuccessEditDataWithoutEmail) {
		$profil1 = '<center><div class="alert alert-success ">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                    Selamat ! Anda telah berhasil mengganti Data Profil.
                                </div>
                            </div></center>';
	} else if ($_GET['change'] == SuccessEditDataWithEmail) {
		$profil2 = '<center><div class="alert alert-success ">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                    Selamat ! Anda telah berhasil mengganti Data Profil & Email.
                                </div>
                            </div></center>';
	} else if ($_GET['change'] == ErrorEditData) {
		$profil3 = '<center><div class="alert alert-danger ">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                    Mohon Maaf ! Terjadi kesalahan saat mengedit data.
                                </div>
                            </div></center>';
	}
}
if (!empty($_GET['berhasil'])) {
    if ($_GET['berhasil'] == succestransaksi) {
        $berasiltransaksi = '<center><div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="alert_data">
                                   Terima Kasih ! Anda telah berhasil melakukan Transaksi, Untuk prosses selanjutnya Silahkan Melakukan Pembayaran 
                                </div>
                            </div></center>';
    } 
}
    $barang = mysqli_query($conn, "select * from hy_user where email='$email'");
    while($editdata=  mysqli_fetch_array($barang)){
?>
        <div id="content">
            <div class="container">
              <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a data-toggle="tab" href="#menu1"><i class="fa fa-heart"></i> Pesanan Saya</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#home"><i class="fa fa-user"></i> Akun Saya</a>
                                </li>
                                <li>
                                    <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>  

                <div class="col-md-8">
                    <div class="tab-content">
  <div id="home" class="tab-pane fade">
    <div class="box">
                        <h3>Profil Detail</h3>
            <hr>
            <?php echo $profil1 ?>
            <?php echo $profil2 ?>
            <?php echo $profil3 ?>
                        <div class="content">
              <form action="editdata.php" method="post" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Depan</label>
                                            <input name="namadepan" type="text" class="form-control" id="firstname" value="<?php echo $editdata['nama_depan']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Belakang</label>
                                            <input name="namabelakang" type="text" class="form-control" id="firstname" value="<?php echo $editdata['nama_belakang']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="company" value="<?php echo $editdata['alamat']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Kota</label>
                                            <input name="kota" type="text" class="form-control" id="street" value="<?php echo $editdata['kota']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">Provinsi</label>
                                            <input name="provinsi" type="text" class="form-control" id="city" value="<?php echo $editdata['provinsi']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">Kode Pos</label>
                                            <input name="kodepos" type="number" class="form-control" id="zip" value="<?php echo $editdata['kode_pos']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Telepon (+62)</label>
                                            <input name="telpon" type="number" class="form-control" id="street" value="<?php echo $editdata['telepon']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                <div class="row">
                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="email" class="form-control" value="<?php echo $editdata['email']; ?>" id="email" readonly/>
                                        </div>
                                    </div>
                                    
                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label for="street">Status</label>
  <input name="stts" type="text" class="form-control" id="street" <?php if($editdata['sts_usr'] == 'Y'){ ?>value="Actived"<? } else { ?>value="Disable"<? } ?>
                       readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input name="password" type="password" class="form-control" value="<?php echo $editdata['password']; ?>" id="password" disabled="disabled"/>
                                        </div>
                                    </div>
                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="street">Terdaftar</label>
                                            <input name="tgl" type="text" class="form-control" id="street" value="<?php echo $editdata['tgl_daftar']; ?>"  readonly>
                                        </div>
                                    </div>
                                    
                </div>
                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bank">Nama Bank</label>
                                            <select name="nabank" type="text" class="form-control" id="bank">
                                                <option value="Bank Central Asia (BCA)" <?php if($editdata['nama_bank'] == 'Bank Central Asia (BCA)'){ echo 'selected'; } ?>>Bank Central Asia (BCA)</option>
                                                <option value="Bank Rakyat Indonesia (BRI)" <?php if($editdata['nama_bank'] == 'Bank Rakyat Indonesia (BRI)'){ echo 'selected'; } ?>>Bank Rakyat Indonesia (BRI)</option>
                                                <option value="Bank Negara Indonesia (BNI)" <?php if($editdata['nama_bank'] == 'Bank Negara Indonesia (BNI)'){ echo 'selected'; } ?>>Bank Negara Indonesia (BNI)</option>
                                                <option value="Bank Mandiri" <?php if($editdata['nama_bank'] == 'Bank Mandiri'){ echo 'selected'; } ?>>Bank Mandiri</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="narek">Nama Rekening</label>
                                            <input name="narek" type="text" class="form-control" value="<?php echo $editdata['nama_rek']; ?>" id="narek" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="norek">Nomor Rekening</label>
                                            <input name="norek" type="number" class="form-control" value="<?php echo $editdata['no_rek']; ?>" id="norek" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <input name="ubah_pass" id="checkpass" type="checkbox" onclick="EnableDisableTextBox(this)"/> Silahkan ceklis jika ingin merubah Password
                                    </div>
                                </div>

                <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                            </div>
                        </form>
            </div>
                        <hr>

                        
                    </div>
  </div>
  <div id="menu1" class="tab-pane fade in active">
    <div class="box">
        <?php echo $berasiltransaksi ?>
        <table class="table">
                                    <thead>
                                        <tr >
                                            <th><center>No.</center></th>
                                            <th><center>Order</center></th>
                                         <th><center>Date</center></th>
                                        <th><center>Status</center></th>
                                        <th><center>Action</center></th>
                                        </tr>
                                    </thead>
                                    
                                    <?php
                            $sid = session_id();
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT *
FROM hy_user
JOIN hy_order ON hy_user.id = hy_order.id_user
JOIN hy_barang ON hy_order.id_barang = hy_barang.id_barang where email='$email' && status='N' GROUP BY id_pesan ");
                            $hitung = mysqli_num_rows($sql);?>
                            <?php if ($hitung < 1){ ?>
                                <tr><td colspan="6" align="center"><h4>Maaf, Anda Belum Melakukan Transaksi !</h4></td></tr>
                                <?}
                            else {
                            while($yessi=mysqli_fetch_array($sql)){
                                $h=$yessi['harga_barang']*$yessi['quantity_barang'];
                            $harga=number_format($yessi['harga_barang'],0,",",".");
                            $totalharga=number_format($h,0,",",".");
                            $t=$t+$h;
                            if ($t > 150000){
                                  $diskon = 0.1  * $t;
                               }
                                else {
                                    $diskon = 0.0;
                                }
                            $total = $t - $diskon;
                            ?>     
                                    <tbody >
                                        <tr >
                                            <th><center><?php echo $no++ ?></center></th>
                                            <td><center>#<?php echo $yessi['id_pesan']; ?></center></td>
                                            <td><center><?php echo $yessi['tgl_order']; ?></center></td>
                                            <td><center><?php if($yessi['stts_order'] == 'Menunggu Pembayaran'){
                                              echo "<span class='label label-warning'> Menunggu Pembayaran </span>";
                                            }else if($yessi['stts_order'] == 'Dalam Prosses'){
                                             echo "<span class='label label-primary'> Dalam Pengiriman </span>";
                                            }else if($yessi['stts_order'] == 'Terikirim'){
                                             echo "<span class='label label-success'> Lunas/Terkirim </span>";
                                            }else {
                                             echo "<span class='label label-danger'> Dibatalkan </span>";
                                            }
                                            ?></center>
                                                
                                             </td>
                                          <td><a href="#" class='btn btn-primary btn-sm open_view' id='<?php echo $yessi['id_pesan']; ?>'><i class="fa fa-eye"></i>View</a>
                                                    <?php if($yessi['stts_order'] == 'Menunggu Pembayaran'){?>
                                                    <a href="#" class='btn btn-default btn-sm open_detailpembayaran' id='<?php echo $yessi['id_pesan']; ?>'><i class="fa fa-usd"></i>Bayar</a>
                                                    <? } else { ?>
                                                    <?php } ?>

                                          
                                        </td>
                                        </tr>
                                    </tbody>
                                
<?php  } }?>   
</table>
    </div>
  </div>
</div>
                </div>
            </div>
            <!-- /.container -->
	<?php } ?>
        <div class="modal expandOpen" id="ModalView" tabindex="-1" role="dialog" aria-hidden="true">
        </div>
        <div class="modal expandOpen" id="Modaldetailpembayaran" tabindex="-1" role="dialog" aria-hidden="true">
        </div>
		
<?php include"xfot.php" ?>