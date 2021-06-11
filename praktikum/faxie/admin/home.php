		<?php include"xtop.php" ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<div class="text-center">
                                        <h1 class="text-info" data-plugin="counterup"><?php echo $totaltransaksi ?></h1>
                                        <h5>TOTAL TRANSAKSI</h5>
                                    </div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<div class="text-center">
								<h1 class="text-info" data-plugin="counterup"><?php echo $totaluser ?></h1>
                                        <h5>TOTAL USER</h5>
                                    </div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="panel panel-default panel-widget">
							<div class="panel-body">
								<div class="text-center">
								<h1 class="text-info" data-plugin="counterup"><?php echo $totalbarang ?></h1>
                                        <h5>TOTAL BARANG</h5>
                                    </div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<span class="panel-title pull-left text-black"><i class="fa fa-fw fa-shopping-cart"></i> Data Transaksi User</span>
								<!-- QUICK SEARCH -->
								
								<div class="clearfix"></div>
							</div>
							<div class="panel-body table-responsive table-full">
								<table class="table table-stripped table-hover table-bordered">
									<thead>
										<tr>
											<th><center>No.</center></th>
                                            <th><center>Order</center></th>
                                            <th><center>Nama</center></th>
                                         <th><center>Date</center></th>
                                         <th><center>Total</center></th>
                                        <th><center>Status</center></th>
                                        <th><center>Action</center></th>
										</tr>
									</thead>
									<tbody>
										<?php
                            $sid = session_id();
                            $no = 1;
                            $sql = mysqli_query($conn, "SELECT *
FROM hy_user
JOIN hy_order ON hy_user.id = hy_order.id_user
JOIN fashion ON hy_order.id = fashion.id LIMIT 6");
                            $hitung = mysqli_num_rows($sql);?>
                            <?php if ($hitung < 1){ ?>
                                <tr><td colspan="6" align="center"><h4>Maaf, Anda Belum Melakukan Transaksi !</h4></td></tr>
                                <?}
                            else {
                            while($yessi=mysqli_fetch_array($sql)){
                                $h=$yessi['Price']*$yessi['quantity_barang'];
                            $harga=number_format($yessi['Price'],0,",",".");
                            $totalharga=number_format($h,0,",",".");
                            $t=$t+$h;
                            if ($t > 150000){
                                  $diskon = 0.1  * $t;
                               }
                                else {
                                    $diskon = 0.0;
                                }
                            $total = $h - $diskon;
                            ?>     
										<tr>
											<td class="text-center text-nowrap"><?php echo $no++ ?></td>
											<td>#<?php echo $yessi['id_pesan']; ?></td>
											<td><?php echo $yessi['nama_depan']; ?> <?php echo $yessi['nama_belakang']; ?></td>
											<td class="text-center text-nowrap"><?php echo $yessi['tgl_keranjang']; ?></td>
											<td class="text-center text-nowrap">Rp. <?php echo number_format($h,0,",","."); ?></td>
											<td class="text-center text-nowrap"><?php if($yessi['stts_order'] == 'Menunggu Pembayaran'){
                                              echo "<span class='label label-warning'> Menunggu Pembayaran </span>";
                                            }else if($yessi['stts_order'] == 'Dalam Prosses'){
                                             echo "<span class='label label-primary'> Dalam Prosses </span>";
                                            }else if($yessi['stts_order'] == 'Terikirim'){
                                             echo "<span class='label label-success'> Terkirim </span>";
                                            }else {
                                             echo "<span class='label label-danger'> Dibatalkan </span>";
                                            }
                                            ?></td>
											<td class="text-center text-nowrap">
												<button data-toggle="collapse" data-target="#collapseFour<?php echo $yessi['id_pesan']; ?>" class="btn btn-default btn-xs"><i class="fa fa-info-circle"></i></button>
												<a href="prossescrud.php?crud=delete&id=<?php echo $yessi['id_keranjang']; ?>" class="btn btn-default btn-xs"><i class="fa fa-trash"></i></a>
											</td>

										</tr>
										<tr id="collapseFour<?php echo $yessi['id_pesan']; ?>" class="collapse" data-parent="bs-example-navbar-collapse-4">
										<td colspan="8">
										    <div class="col-md-4">
                                                <h3>Faktur Transaksi</h6>
                                                <br><br><p align="left">
                                                    <b>No.Faktur :</b> #<?php echo $yessi['id_pesan']; ?>
                                                    <br><b>Tanggal :</b> <?php echo $yessi['tgl_keranjang']; ?>
                                                    <br><b>Status :</b> <?php if($yessi['stts_order'] == 'Menunggu Pembayaran'){
                                              echo "<span class='label label-warning'> Menunggu Pembayaran </span>";
                                            }else if($yessi['stts_order'] == 'Dalam Prosses'){
                                             echo "<span class='label label-primary'> Dalam Prosses </span>";
                                            }else if($yessi['stts_order'] == 'Terikirim'){
                                             echo "<span class='label label-success'> Terkirim </span>";
                                            }else {
                                             echo "<span class='label label-danger'> Dibatalkan </span>";
                                            }
                                            ?></p>
                                            </div>
                                            <div class="col-md-4">
                                                <h3>Invoice address</h6>
                                                <p><br><b>Nama 		:</b> John Brown
                                                    <br><b>Alamat 	:</b> 13/25 New Avenue
                                                    <br><b>kota     :</b> Heaven
                                                    <br><b>Kode Pos :</b> 73J
                                                    <br><b>Provinsi :</b>
                                                    <br><b>Negara   :</b></p>
                                            </div>
                                            <div class="col-md-4">
                                                <h3>Shipping address</h6>
                                                <p><br><b>Nama 		:</b> <?php echo $yessi['nama_depan']; ?> <?php echo $yessi['nama_belakang']; ?>
                                                    <br><b>Alamat 	:</b><?php echo $yessi['alamat']; ?>
                                                    <br><b>kota     :</b><?php echo $yessi['kota']; ?>
                                                    <br><b>Kode Pos :</b><?php echo $yessi['kode_pos']; ?>
                                                    <br><b>Provinsi :</b><?php echo $yessi['provinsi']; ?>
                                                    <br><b>Negara 	:</b>Indonesia</p>
                                            </div>
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
	<?php include"xfot.php" ?>