<!DOCTYPE html>
<html lang="en-us">

<?php include 'include/head.php';
?>

<body class="res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
        <!-- Header Container  -->
        <?php include 'include/header.php';
      ?>
        <div class="module-search2 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" style="margin:auto;">
                                <div class="form_button">
                                    <button id="form1show" class="btn active">One Way</button>
                                    <button id="form2show" class="btn ">Round Trip</button>
                                </div>
                                <div class="booking-form" id="form1" style="display: block;">
                                    <h4 class="booking-title">Book Your Ride One Way </h4>
                                    <form id="contact-form" action="mail.php" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Pickup Location</label>
                                                    <input type="text" name="from" id="uemail"
                                                        class="form-control required email" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Drop Location</label>
                                                    <input type="text" name="togoing" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Pickup Date</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="pickupdate" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Journey Time</label>
                                                    <input type="time" class="form-control time-picker" name="journey"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Select Car</label>
                                                    <select class="form-control" name="car" required="">
                                                        <option value="Sedan">Sedan</option>
                                                        <option value="Suv">Suv</option>
                                                        <option value="Inoova Crysta">Inoova Crysta </option>
                                                        <option value="Tempo Traveller">Tempo Traveller</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="" name="name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input type="number" class="form-control" name="mobile" required="">
                                                </div>
                                            </div>
                                            <!--<div class="col-lg-4 col-md-6">-->
                                            <!--   <div class="form-group">-->
                                            <!--      <label>Email</label>-->
                                            <!--      <input type="email" name="email" class="form-control">-->
                                            <!--   </div>-->
                                            <!--</div>-->
                                            <div class="col-md-4">
                                                <div class="form-group mt-5">
                                                    <label></label>
                                                    <button class="btn btn-primrys getbut" type="submit">Get
                                                        Estimate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="booking-form" id="form2" style="display: none;">
                                    <h4 class="booking-title">Book Your Ride - Round Trip</h4>
                                    <form id="contact-form" action="mail.php" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Pickup Location</label>
                                                    <input type="text" name="from" id="uemail"
                                                        class="form-control required email" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Drop Location</label>
                                                    <input type="text" name="togoing" class="form-control" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Pickup Date</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="pickupdate" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Return Date</label>
                                                    <input type="date" class="form-control date-picker"
                                                        name="Returndate" placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Journey Time</label>
                                                    <input type="time" class="form-control time-picker" name="journey"
                                                        placeholder="" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Select Car</label>
                                                    <select class="form-control" name="car" required="">
                                                        <option value="Sedan">Sedan</option>
                                                        <option value="Suv">Suv</option>
                                                        <option value="Inoova Crysta">Inoova Crysta </option>
                                                        <option value="Tempo Traveller">Tempo Traveller</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="" name="name"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input type="number" class="form-control" name="mobile" required="">
                                                </div>
                                            </div>
                                            <!--<div class="col-lg-4 col-md-6">-->
                                            <!--   <div class="form-group">-->
                                            <!--      <label>Email</label>-->
                                            <!--      <input type="email" name="email" class="form-control">-->
                                            <!--   </div>-->
                                            <!--</div>-->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <button class="btn btn-primrys" type="submit">Get Estimate</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End col lg 9 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
        </div>
    </div>
    <!--End aside -->
    <!-- //Main Container -->
    <!-- Footer Container -->
    <?php include 'include/footer.php';
   ?>
    <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
    <!-- End Color Scheme
         ============================================ -->
    <!-- Include Libs & Plugins
         ============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>

    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/slick-slider/slick.js"></script>
    <script type="text/javascript" src="js/themejs/libs.js"></script>
    <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <!-- Theme files
         ============================================ -->
    <script type="text/javascript" src="js/themejs/homepage.js"></script>
    <script type="text/javascript" src="js/themejs/custom_h1.js"></script>

</body>

</html>