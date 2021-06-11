<?php include"xtop.php" ?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                <strong>Produk Atasan</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row products"><?php

      $sql = mysqli_query($conn,'SELECT * FROM fashion WHERE Category="Hoodie" ORDER BY id DESC');
      while($data = mysqli_fetch_array($sql)){
      ?>
                        <div class="col-md-3 col-sm-4">
                            
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="<?php echo $data['Picture']; ?>"  style="height:350px;" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="<?php echo $data['Picture']; ?>"  style="height:350px;" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="<?php echo $data['Picture']; ?>"  style="height:350px;" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <p class="buttons">
                                        <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-default"> Detail</a>
                                        <a href="prossesbeli.php?input=add&id=<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Beli</a>
                                    </p>
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
                        </div><?php } ?>
                    </div>
                    <!-- /.products -->


                </div>
                <!-- /.col-md-9 -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

<?php include"xfot.php" ?>