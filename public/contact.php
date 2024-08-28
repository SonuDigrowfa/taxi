<!DOCTYPE html>
<html lang="en-us">

<?php include 'include/head.php';
?>

<body class="res layout-1">
   <div id="wrapper" class="wrapper-fluid banners-effect-10">
      <!-- Header Container  -->
      <?php include 'include/header.php';
      ?>
      <div class="breadcrumbs">
         <h1>Contact Us</h1>
         <div class="breadcrumbmenu">
            <a class="breadcrumbhome" href="index.php">Home</a> &gt;&gt; <p class="activecrumb">Contact Us</p>

         </div>

         <!-- //Header Top -->
      </div>
      <footer class="contapage typefooter-1">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="conform footer--link">
                     <h3 class="title-footer text-black">
                        Address
                     </h3>
                     <ul class="about-list">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><span class="ab-pd text-black">E-34, East
                              Vinod Nagar, (Near Super Shine Chowk) Delhi-110091</span>
                        </li>
                        <li class="call-mail"><i class="fa fa-paper-plane" aria-hidden="true"></i><a href="mailto:anshutravles2019@gmail.com" class="text-black">anshutravles2019@gmail.com</a></li>
                        <li class="call-phone"><i class="fa fa-mobile" aria-hidden="true"></i><a class="ab-pd text-black" href="tel:">+91 7840026031 , 8744977870</a></li>

                     </ul>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="conform footer--link">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2243975913607!2d77.30436407432909!3d28.623035975669882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4b7ab891385%3A0xa516b6b1541e690b!2sF-34%2C%20Block%20F%2C%20Vinod%20Nagar%20East%2C%20New%20Delhi%2C%20Delhi%2C%20110091!5e0!3m2!1sen!2sin!4v1712400438714!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
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
                                 <input type="text" name="from" id="uemail" class="form-control required email" placeholder="" required="">
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
                                 <input type="date" class="form-control date-picker" name="pickupdate" placeholder="" required="">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label>Journey Time</label>
                                 <input type="time" class="form-control time-picker" name="journey" placeholder="" required="">
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
                                 <input type="text" class="form-control" placeholder="" name="name" required="">
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
                                 <button class="btn btn-primrys getbut" type="submit">Get Estimate</button>
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
                                 <input type="text" name="from" id="uemail" class="form-control required email" placeholder="" required="">
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
                                 <input type="date" class="form-control date-picker" name="pickupdate" placeholder="" required="">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label>Return Date</label>
                                 <input type="date" class="form-control date-picker" name="Returndate" placeholder="" required="">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label>Journey Time</label>
                                 <input type="time" class="form-control time-picker" name="journey" placeholder="" required="">
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
                                 <input type="text" class="form-control" placeholder="" name="name" required="">
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
         </div>
      </footer>





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

</body>

</html>