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
            <h1>Delhi To Ayodhya</h1>
            <div class="breadcrumbmenu">
                <a class="breadcrumbhome" href="index.php">Home</a> &gt;&gt; <p class="activecrumb">Delhi To Ayodhya
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
                                    Delhi to <span>Ayodhya Cab</span> Booking
                                </h2>
                            </div>
                            <p class="about-text">
                                At the heart of the Ayodhya stands as a majestic ode to spirituality and
                                heritage. Nestled on the sacred grounds of Ram Janmabhoomi, believed to cradle the birth
                                of Lord Rama, this Hindu temple is a radiant symbol of devotion. Crafted under the
                                vigilant guidance of Shri Ram Janmabhoomi Teerth Kshetra, every stone laid echoes the
                                reverence for Rama, the cherished avatar of Vishnu. As the temple gracefully rises, it
                                weaves a story of faith and cultural legacy, inviting all to witness the embodiment of
                                Hinduism’s rich tapestry.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                            <div class="about-img">
                                <img src="img/bg-footer.jpg" alt="" style="aspect-ratio: 3/1; object-fit: cover; object-position:top">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-right">
                            <p class="heading_2"><strong>Delhi to Ayodhya Taxi fare</strong></p>
                            <ul class="about_list">
                                <li>Delhi to Ayodhya tour by Sedan Cabs ₹ 10 – 11/-* Per km.
                                </li>
                                <li>Delhi to Ayodhya by Toyota Innova Crysta SUV cabs ₹ 20 – 22/-* Per km.</li>
                                <li>But the taxi needs to pay the toll tax. You need not worry as the taxi service
                                    company
                                    will bear this cost.</li>
                                <li>Delhi to Ayodhya tour by Tempo Traveller Van ₹ 25 – 30/-* Per km.</li>
                            </ul>
                            <p class="color_black">Ayodhya is only 700 away from Delhi, It takes only 11-12
                                hr oneway by road, If you are planning to visit Ayodhya, you can discuss your
                                tour with our expert at +91-7840026031.</p>
                            <br>
                            <h5>Get more details about the Delhi to Ayodhya Car rental option details below.
                            </h5>
                            <br>
                            <h5 class="site-title_about">
                                View our Ayodhya tour details
                            </h5>
                            <ul class="about_list">
                                <li>Trip Duration: (3 Nights 4 Days)</li>
                            </ul>
                            <br>
                            <p><strong>Day 1:</strong> Divine Departure
                                Morning: <br>

                                Begin your spiritual sojourn as you board your comfortable car from India Taxi
                                Online.
                                Depart from Delhi, leaving the hustle behind as you set forth towards Ayodhya.
                                Afternoon: <br>

                                En route, stop at the historic city of Mathura, the birthplace of Lord Krishna.
                                Visit the revered Shri Krishna Janmabhoomi and immerse yourself in the divine vibes.
                                Evening: <br>

                                Continue your journey to Ayodhya, soaking in the picturesque landscapes.
                                Check into your accommodation and unwind from the day’s travels.</p>

                            <p><strong>Day 2:</strong> Ayodhya Exploration
                                Morning: <br>

                                Start your day with a visit to the iconic Hanuman Garhi, a temple dedicated to Lord
                                Hanuman.
                                Explore the ancient temples in the vicinity, absorbing the rich history of Ayodhya.
                                Afternoon: <br>

                                Indulge in a traditional Ayodhya lunch at a local eatery.
                                Visit the Kanak Bhawan, a beautiful temple dedicated to Lord Rama and his consort
                                Sita.
                                Evening: <br>

                                Witness the enchanting evening aarti at the Sarayu River ghats.
                                Return to your accommodation for a peaceful night’s rest.</p>
                            <p><strong>Day 3:</strong> Ayodhya Blessings
                                Morning: <br>

                                Begin your day with a hearty breakfast before heading to the upcoming Ayodhya
                                construction site.
                                Participate in the ongoing rituals and feel the divine energy surrounding this
                                sacred place.
                                Afternoon: <br>

                                Enjoy a leisurely lunch at a local restaurant.
                                Visit the Nageshwarnath Temple, another significant shrine in Ayodhya.
                                Evening: <br>

                                Explore the vibrant local markets, offering spiritual artifacts and Ayodhya’s unique
                                crafts.
                                Return to your accommodation for a well-deserved rest.</p>
                            <p><strong>Day 4:</strong> Spiritual Serenity
                                Morning: <br>

                                Visit the beautiful and serene Sita ki Rasoi, associated with the epic Ramayana.
                                Take a stroll in the tranquil surroundings before bidding farewell to Ayodhya.
                                Afternoon: <br>

                                Lunch at a local restaurant, savoring the flavors of Ayodhya.
                                Commence your journey back to Delhi, reflecting on the spiritual experiences of the
                                past three days.
                                Evening:</p>
                            </ul>
                            <p class="color-black">Arrive back in Delhi with a heart full of divine memories.
                                Express gratitude for a safe and spiritually enriching journey with India Taxi Online.
                                This 4-day itinerary is crafted to provide a harmonious blend of spiritual exploration,
                                cultural immersion, and comfortable travel with India Taxi Online. May your journey be
                                blessed and transformative.</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row delhi_page">
                    <div class="col-lg-6">
                        <div class="img_ag">
                            <img src="img/about-right.webp">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delhi_cont">
                            <h2 class="site-title_about">
                                Unknown tourists’ <span>sites of Ayodhya</span>
                            </h2>
                            <p>Ayodhya is not just about Tajmahal. You can visit these uncommon archaeological sites
                                like
                                Parashuram ka khera at Alamgirpur, Ahichhatra, Arhichhatra, Atranjikhera,
                                Kampil,Sankisa,
                                Kankali tila Mathura etc.</p>
                            <p class="strong_font"><strong>Mathura</strong></p>
                            <ul class="about_list">
                                <li>It’s a holy town with a beautiful history of so many years. Mathura is regarded as
                                    the
                                    birthplace of Lord Krishna.</li>
                                <li>Moreover devotees get to have a glimpse of the Krishna's life from his upbringing to
                                    grow up.</li>
                            </ul>
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