<?php include"xtop.php" ?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <?php
                        $selekbanner = mysqli_query($conn, "SELECT *  FROM hy_website");
                         while($select = mysqli_fetch_array($selekbanner)){

                            ?>
                        <div class="item">
                            <img src="admin/<?php echo $select['banner']; ?>" style="width:1200px;height:563px" alt="" class="img-responsive">
                        </div>
                        <? } ?>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>
            <!-- *** HOT PRODUCT SLIDESHOW ***
 __________________________ _______________________________ -->
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Populer</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">

<?php
      $sql = mysqli_query($conn,'SELECT * FROM fashion ORDER BY id DESC limit 10');
      while($data = mysqli_fetch_array($sql)){
      ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="#">
                                                <img src="<?php echo $data['Picture']; ?>" style="height:250px;width:200px;" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="#">
                                                <img src="<?php echo $data['Picture']; ?>" style="height:250px;width:200px;" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="<?php echo $data['Picture']; ?>" style="height:250px;width:200px;" alt="" class="img-responsive">
                                </a>
                                <div class="text">
									<center><a href="prossesbeli.php?input=add&id_barang=<?php echo $data['id']; ?>" class="btn btn-success btn-md">Beli</a>
									<a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-md">Detail</a></center><br>
                                </div>
                                <div style="margin-top:50px;" class="ribbon new">
                                    <div style="width:150px;" class="theribbon"><?php echo $data['Name']; ?></div>
                                </div>
								<div class="ribbon gift">
                                    <div style="width:150px;" class="theribbon">Rp. <?php echo number_format($data['Price'],2,",",".");; ?></div>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <?php } ?>

                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

        </div>
        <!-- /#content -->
<?php include"xfot.php" ?>}