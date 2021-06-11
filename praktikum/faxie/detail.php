<?php 
include"xtop.php"

?>
    <div id="all">
		<?php 
		$kdbarang = $_GET['id'];
    $barang = mysqli_query($conn, "select * from fashion where id='$kdbarang'");
    
    while($row=  mysqli_fetch_array($barang)){
		?>
        <div id="content">
            <div class="container">

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="hoodie.php">Hoodie </a>
                                </li>
                                <li >
                                    <a href="jacket.php">Jacket  </a>
                                </li>
                                <li>
                                    <a href="aksesoris.php">Aksesoris</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    


                    <!-- *** MENUS AND FILTERS END *** -->
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage" >
                                <img src="<?php echo $row['Picture']; ?>" alt="" class="img-responsive">
                            </div>
<div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="<?php echo $row['Picture']; ?>" class="thumb">
                                        <img src="<?php echo $row['Picture']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo $row['Picture']; ?>" class="thumb">
                                        <img src="<?php echo $row['Picture']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo $row['Picture']; ?>" class="thumb">
                                        <img src="<?php echo $row['Picture']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center"><?php echo $row['Name']; ?></h1>
                                </p>
								<div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
	<p><?php echo $row['Description']; ?></p>
                            <h4><?php if($row['stok_barang'] > 0){
								?>
								<font color="green"><?php echo $row['stok_barang']; ?> Stok Tersedia</font>
								<?php }else { ?>
								<font color="red"> Stok tidak tersedia </font>
								<?php } ?></h4>
                    </div>
                                <p class="price"><b>Rp.</b> <?php echo number_format($row['Price'],2,",",".");; ?></p>

                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Simpan ke keranjang</a> 
                                </p>


                            </div>

                            
                        </div>

                    </div>


                    

                  
                    

                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
	<?php } ?>
        </div>
        <!-- /#content -->


	<?php include"xfot.php" ?>