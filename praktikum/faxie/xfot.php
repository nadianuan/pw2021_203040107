<div id="footer" data-animate="fadeInUp">
    <?php $sql1 = "SELECT * FROM hy_admin";
$result1 = $conn->query($sql1);
$get1 = $result1->fetch_assoc();
?>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>User section</h4>

                        <ul>
                            <li><a href="register.php" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.php">Daftar</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>
                        <ul>
                            <li><a href="hijab.php">Hijab</a>
                            </li>
                            <li><a href="busana.php">Busana</a>
                            </li>
                            <li><a href="aksesoris.php">Aksesoris</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><?php echo $get1['alamat']; ?>
                                    <br><?php echo $get1['kota']; ?>
                                    <br><?php echo $get1['kode_pos']; ?>
                                    <br><?php echo $get1['provinsi']; ?>
                                    <br>
                                    <strong>Indonesia</strong>
                        </p>
                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>
						<p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>              
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>
                            </div>
                            <!-- /input-group -->
                        </form>
                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2021. Owner Faxie.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">created by <a href="https://bootstrapious.com/e-commerce-templates">NN</a>

                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->

    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
	<script type="text/javascript">
            $(document).ready(function (){
                $(".open_edit").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "editalamat.php",
                        type: "GET",
                        data : {id: m,},
                        success: function (ajaxData){
                            $("#editAlamat").html(ajaxData);
                            $("#editAlamat").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
    </script>
    <script type="text/javascript">
        function EnableDisableTextBox(checkpass) {
            var password = document.getElementById("password");
            password.disabled = checkpass.checked ? false : true;
            if (!password.disabled) {
                password.focus();
            }
        }
    </script>
    <script type="text/javascript">
            $(document).ready(function (){
                $(".open_view").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "detailorder.php",
                        type: "GET",
                        data : {id_pesan: m,},
                        success: function (ajaxData){
                            $("#ModalView").html(ajaxData);
                            $("#ModalView").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
            $(document).ready(function (){
                $(".open_detailpembayaran").click(function (e){
                    var m = $(this).attr("id");
                    $.ajax({
                        url: "admin/detailpembayaran.php",
                        type: "GET",
                        data : {id_pesan: m,},
                        success: function (ajaxData){
                            $("#Modaldetailpembayaran").html(ajaxData);
                            $("#Modaldetailpembayaran").modal('show',{backdrop: 'true'});
                        }
                    });
                });
            });
        </script>
</body>
</html>