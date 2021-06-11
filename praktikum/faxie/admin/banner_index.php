<?php include"xtop.php" ?>
      <div class="row mt">
	  <?php 
$hapusadmin = $_GET[hapus];
    $id_banner = $_GET['id'];
if ($hapusadmin == 'admindelete'){
	$sql = mysql_query("DELETE FROM bs_admin WHERE id='$_GET[id]'");
	if($sql){
		$behasil = '<b><center><div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><i class="fa fa-check"></i> Berhasil! </strong> Admin dihapus dalam database..
                            </div></center></b>';
	} else {
		$error = '<b><center><div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong><i class="fa fa-check"></i> ERROR! </strong> Silahkan Coba Kembali.
                            </div></center></b>';
	}
}
	?>
                      <!--CUSTOM CHART START -->
					  <div class="content">
					  <div class="row">
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="panel-title pull-left text-black"><i class="fa fa-fw fa-shopping-cart"></i> Banner Website</span>
                                <!-- QUICK SEARCH -->
                                <div class="panel-heading panel-title pull-right">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="file" name="banner" class="btn btn-default pull-left text-black" required>
                                    <button type="submit" name="simpan_banner" class="btn btn-default panel-title pull-right text-black"><i class="fa fa-fw fa-plus"></i> Tambah Banner</button>
                                </form>
                            </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="panel-body table-responsive table-full">
                                
                                <table class="table table-stripped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th><center>No.</center></th>
                                            <th><center>Foto</center></th>
                                            <th><center>Lokasi Gambar</center></th>
                                            <th><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                            $sid = session_id();
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT * FROM hy_website ORDER BY id DESC");
                            $hitung = mysqli_num_rows($sql);?>
                            <?php if ($hitung < 1){ ?>
                                <tr><td colspan="6" align="center"><h4>Maaf, Tidak Ada User yang Mendaftar !</h4></td></tr>
                                <?}
                            else {
                            while($yessi=mysqli_fetch_array($sql)){
                            ?>     
                                        <tr>
                                            <td class="text-center text-nowrap"><?php echo $no++ ?></td>
                                            <td><center><img src="<?php echo $yessi['banner']; ?>" height="50px" width="80px"/></center></td>
                                            <td><?php echo $yessi['banner']; ?></td>
                                            <td class="text-center text-nowrap">
                                                <a href="prossescrud.php?crud=admindelete&id=<?php echo $yessi['id']; ?>" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a href="?hapus=deletebanner&id=<?php echo $yessi['id']; ?>" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-footer-text text-grey text-size-12"><center> Copyright © 2017. Owner HijabYess. </center></span>
                            </div>


                        </div>
                    </div>
                </div>
						 </div>
                      <!--custom chart end-->
					</div>
                  
     <?php include"xfot.php" ?>