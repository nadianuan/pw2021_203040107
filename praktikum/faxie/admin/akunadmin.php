<?php include"xtop.php" ?>
<div class="container-fluid">
	<?php
	if(isset($_POST['editadmin'])){
	$nama = $_POST['nama'];
	$kota = $_POST['kota'];
	$alamat = $_POST['alamat'];
	$provinsi = $_POST['provinsi'];
	$kodepos = $_POST['kodepos'];
	$telepon = $_POST['telepon'];
	$email = $_POST['email'];
	$narek = $_POST['narek'];
	$norek = $_POST['norek'];
	$nabank = $_POST['nabank'];
		mysqli_query($conn,"UPDATE hy_admin SET nama ='$nama',alamat='$alamat',kode_pos='$kodepos',kota='$kota',telepon='$telepon',provinsi='$provinsi',nama_bank='$nabank',no_rek='$norek',nama_rek='$narek' WHERE email='$email'") or die(mysql_error());
	header("location:akunadmin.php");
}
    $barang = mysqli_query($conn, "select * from hy_admin ");
    
    while($row=  mysqli_fetch_array($barang)){
?>
<div class="panel panel-default">
	<div class="panel-heading">
								<center><strong><i class="fa fa-pencil-square-o"></i> EDIT AKUN</strong></center>
								<!-- QUICK SEARCH -->
								
								<div class="clearfix"></div>
							</div>
	<div class="panel-body">
	<div class="col-md-2">
	</div>
	<div class="col-md-12">
		
              <form action="" method="post" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Lengkap</label>
                                            <input name="nama" type="text" class="form-control" id="firstname" value="<?php echo $row['nama']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input name="email" type="email" class="form-control" value="<?php echo $row['email']; ?>" id="email" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Alamat</label>
                                            <input name="alamat" type="text" class="form-control" id="company" value="<?php echo $row['alamat']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="street">Kota</label>
                                            <input name="kota" type="text" class="form-control" id="street" value="<?php echo $row['kota']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="city">Provinsi</label>
                                            <input name="provinsi" type="text" class="form-control" id="city" value="<?php echo $row['provinsi']; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="zip">Kode Pos</label>
                                            <input name="kodepos" type="number" class="form-control" id="zip" value="<?php echo $row['kode_pos']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="street">Telepon (+62)</label>
                                            <input name="telepon" type="number" class="form-control" id="street" value="<?php echo $row['telepon']; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="street">Username</label>
                                            <input name="Username" type="hastag" class="form-control" id="street" value="<?php echo $row['username']; ?>"  readonly>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="street">Password</label>
                                            <input name="Password" type="password" class="form-control" id="street" value="<?php echo $row['password']; ?>"  readonly>
                                        </div>
                                    </div>
                                </div>
                <div class="row">
                    
                                    
                    
                                    
                </div>
                 <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bank">Nama Bank</label>
                                            <select name="nabank" type="text" class="form-control" id="bank">
                                                <option value="Bank Central Asia (BCA)" <?php if($row['nama_bank'] == 'Bank Central Asia (BCA)'){ echo 'selected'; } ?>>Bank Central Asia (BCA)</option>
                                                <option value="Bank Rakyat Indonesia (BRI)" <?php if($row['nama_bank'] == 'Bank Rakyat Indonesia (BRI)'){ echo 'selected'; } ?>>Bank Rakyat Indonesia (BRI)</option>
                                                <option value="Bank Negara Indonesia (BNI)" <?php if($row['nama_bank'] == 'Bank Negara Indonesia (BNI)'){ echo 'selected'; } ?>>Bank Negara Indonesia (BNI)</option>
                                                <option value="Bank Mandiri" <?php if($row['nama_bank'] == 'Bank Mandiri'){ echo 'selected'; } ?>>Bank Mandiri</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="narek">Nama Rekening</label>
                                            <input name="narek" type="text" class="form-control" value="<?php echo $row['nama_rek']; ?>" id="narek" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="norek">Nomor Rekening</label>
                                            <input name="norek" type="number" class="form-control" value="<?php echo $row['no_rek']; ?>" id="norek" required>
                                        </div>
                                    </div>
                                </div>

                                <input name="editadmin" type="submit" class="btn btn-primary">
                <div class="col-sm-12 text-center">
                            </div>
                        </form>
									
            </div><div class="col-md-2">
	</div></div></div><?php } ?></div>
    <?php include"xfot.php" ?>