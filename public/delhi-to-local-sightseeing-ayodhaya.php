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
            <h1>Delhi To Local Sight Seeing Ayodhya</h1>
            <div class="breadcrumbmenu">
                <a class="breadcrumbhome" href="index.php">Home</a> &gt;&gt; <p class="activecrumb">Delhi To Local Sight
                    Seeing Ayodhya
                </p>

            </div>

            <!-- //Header Top -->
        </div>
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
                        <!-- End col lg 9 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
        </div>

        <div class="about-area py-20_s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                    One Day <span>Ayodhya Sightseeing</span>Trip by Cab
                                </h2>
                            </div>
                            <p class="about-text">
                                Located on the banks of the holy River Sarayu in Uttar Pradesh, Ayodhya is one of the
                                seven sacred places for Hindus. Known as Saketa in ancient times, it was the capital
                                city of the Kosala kingdom. Ayodhya is famous as the birthplace of Lord Rama, mentioned
                                in the Hindu epic Ramayana. It is also the birthplace of 5 of 24 Tirthankaras of
                                Jainism, including Adinath. One Day Ayodhya Local Sightseeing Tour by private car gives
                                you an insight into the revered city’s history, heritage, and culture.

                                As you walk through the streets of Ayodhya, you will feel a sense of tranquility and
                                peace, enveloped in the aura of devotion and faith. Our one day Ayodhya Local
                                Sightseeing Tour by cab allows you to soak in its cultural heritage at your own pace and
                                take home unforgettable memories.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                            <div class="about-img">
                                <img src="img/banner2.jpg" alt="" style="aspect-ratio: 3/1; object-fit: cover; object-position:top">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-right">
                            <p class="heading_2"><strong>Highlights of Ayodhya Sightseeing Tour by Cab</strong></p>
                            <ul class="about_list">
                                <li>Full-day Ayodhya local sightseeing tour</li>
                                <li>Duration: 8 to 10 hours</li>
                                <li>Tour by Private Cab (not shared with others)</li>
                                <li>Pickup & Drop: Ayodhya Hotel / Home</li>
                                <li>Places Covered: Morning holy dip in Saryu at NayaGhat (Optional as per customer
                                    need), Ram Janmabhoomi Temple, Hanuman Garhi, Kanak Bhawan, Ram Ki Paidi, and
                                    Nageshvarnath Temple.
                                </li>
                            </ul>


                            <br>
                            <h5 class="site-title_about">
                                Good to know
                                What’s included
                            </h5>

                            <br>
                            <p><strong>Pick and drop from Hotel / Home in Ayodhya
                                </strong>
                            </p>

                            <p><strong>Cab for Ayodhya sightseeing as per the above Itinerary
                                </strong> </p>

                            <p><strong> Vehicle Parking Charges </strong>
                            <p>
                            <p><strong> Toll-gate Charges if any</strong>
                            <p>
                            <p><strong> Driver Allowance
                                </strong>
                            <p>

                            <h5 class="site-title_about">
                                Good to know
                                What’s not included
                            </h5>

                            <br>
                            <p><strong>Entry Ticket Fee at tourist places in Ayodhya
                                </strong>
                            </p>

                            <p><strong>Breakfast, Lunch or any meal
                                </strong> </p>

                            <p><strong> Lodging / Accommodation at Ayodhya </strong>
                            <p>
                            <p><strong> Vehicle beyond the mentioned time duration</strong>
                            <p>
                            <p><strong> Vehicle beyond the designated tour route
                                </strong>
                            <p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row delhi_page">
                    <div class="col-lg-6">
                        <div class="img_ag">
                            <img src="img/banner2.jpg" style="aspect-ratio: 3 / 3; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delhi_cont">
                            <h2 class="site-title_about">
                                What to Expect on your <span>Ayodhya Sightseeing </span>Trip
                            </h2>
                            <p>The One Day Ayodhya Local Sightseeing Trip will begin early in the morning so that you
                                can explore the city well. We will pick you up from your accommodation in Ayodhya and
                                head to Naya Ghat for a holy dip in the Sarayu River. In case you do not wish to bathe,
                                you can enjoy the sunrise view. The peaceful surroundings will surely rejuvenate your
                                mind, body, and soul.
                                <br>
                                Next, we will take you to Hanuman Garhi, a temple dedicated to Lord Hanuman. It is
                                believed that Hanuman lived here in a cave while protecting the city. It is a popular
                                belief that offering oil to the deity will help in fulfilling one’s desires. After
                                seeking blessings, we will move on to visit Ram Janmabhoomi Temple. It is the birthplace
                                of Lord Rama, and a grand temple is under construction at the site.
                                <br>
                                Kanak Bhawan is our next stop, dedicated to Lord Rama and his wife, Goddess Sita. The
                                palace was gifted to them on the occasion of their marriage. We will then head to Ram Ki
                                Paidi, a series of ghats constructed on the banks of the Sarayu River. It is believed
                                that taking a holy dip here washes away all sins. Our last stop for the day will be
                                Nageshvarnath Temple, a popular Shiva temple constructed by Kush, son of Lord Rama.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

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