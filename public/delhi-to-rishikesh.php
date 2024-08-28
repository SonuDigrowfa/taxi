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
            <h1>Delhi To Rishikesh</h1>
            <div class="breadcrumbmenu">
                <a class="breadcrumbhome" href="index.php">Home</a> &gt;&gt; <p class="activecrumb">Delhi To Rishikesh
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

        <div class="about-area py-20_s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                    Delhi to <span>Rishikesh Cab</span> Booking
                                </h2>
                            </div>
                            <p class="about-text">
                                Rishikesh majorly attracts spiritual seekers and adventure junkies. From a family group
                                travel with kids and elderly to visit the top temples and ashrams, those who love to
                                indulge in adrenaline-pumping activities like river rafting and bungee jumping, to the
                                leisurely explorers looking for yoga and wellness retreats for peace, Rishikesh
                                witnesses tourists with varied interests and intent. To cater to your travel intent and
                                requirements, Anshu Travels provides the most affordable and economical deals to
                                customers
                                looking for a Delhi to Rishikesh taxi fare. We are known for our flexible pricing system
                                tailored for budget-conscious explorers and customers looking for a premium travel
                                experience. With a wide range of vehicle options and affordable pricing, you can be
                                confident of securing the best price for your journey.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                            <div class="about-img">
                                <img src="img/rishikesh.jpg" alt=""
                                    style="aspect-ratio: 3/1; object-fit: cover; object-position:top">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-right">
                            <p class="heading_2"><strong>Delhi to Rishikesh Journey Details</strong></p>
                            <p>The Delhi to Rishikesh road trip is popular among all age groups, be it adventure
                                seekers, solo explorers, spiritual seekers, or pilgrims who wish to explore the
                                religious and spiritual sites in Rishikesh or take a dip in the Holy Ganges and embark
                                on the sacred Panch Prayag Yatra. The route to Rishikesh passes through famous cities,
                                such as Meerut, Muzaffarnagar, and the holy city of Haridwar, offering you opportunities
                                to stop by and explore the well-known sites here. </p>
                            <p>Travelling to the Yoga Capital of the World is spiritually enriching and an exciting
                                journey overall. Moreover, a trip from Delhi to Rishikesh by road is touted as
                                exhilarating and enjoyable as you traverse the expansive highways. You can either take
                                NH334 or NH9 for your journey. The distance from Delhi to Rishikesh by car on NH334 is
                                235 km and takes approximately 6 hours. The Delhi to Rishikesh distance via NH9 is
                                approximately 295 km, which can take around 7 hours to reach. You will pass several
                                popular sites and tourist spots along your way and encounter the gradual change in the
                                terrain, language, culture, and topography. The excellent road condition of both routes
                                ensures a smooth ride with minimal bumps. And, if you plan your travel with Anshu
                                Travels Car
                                Rentals, you can also enjoy the comfort of being chauffeur-driven to your destination.
                            </p>

                            <br>
                            <h5 class="site-title_about">
                                Top-Rated Delhi to Rishikesh Cab Service
                            </h5>
                            <!-- <ul class="about_list">
                                <li>Trip Duration: (3 Nights 4 Days)</li>
                            </ul> -->
                            <br>
                            <p><strong>Safety First:</strong> At Anshu Travels, we prioritise customer safety and
                                comfort and
                                offer services in
                                line with them. We go the extra mile to onboard a team of seasoned drivers with
                                extensive driving and navigation expertise and those who are well-versed with the
                                routes.
                            </p>

                            <p><strong>24/7 Customer Support:</strong> Anshu Travels’s customer support is available
                                24/7 to
                                assist and allow you to book a ride from anywhere, anytime, using any mode - website,
                                app, or direct call. With our presence in over 2000 cities across India, we facilitate
                                extensive coverage, accessibility, and seamless transportation services.</p>
                            <p><strong>Transparent Billing:</strong> At Anshu Travels Car Rentals, we prioritise
                                transparency
                                and aim to
                                deliver a clear and straightforward billing system devoid of unforeseen charges or
                                concealed fees. This means what you see at the end of the trip is what you pay, without
                                any extra charges added to the bill. Our primary goal is to uphold high standards and
                                ensure customer satisfaction.</p>
                            <p><strong>Expert chauffeurs:</strong> Anshu Travels's chauffeurs are highly proficient
                                drivers,
                                knowledgeable
                                about local culture, language, and destinations. They can take you to numerous hidden
                                treasures along the route, assist you with shopping or interacting with locals, and
                                serve as tour guides throughout the journey. Moreover, in destinations like Rishikesh,
                                prone to road closures due to natural calamities, our drivers have the route expertise
                                to identify the best and safest routes to travel. </p>
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
                            <img src="img/rishikesh.jpg" style="aspect-ratio: 3 / 4; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delhi_cont">
                            <h2 class="site-title_about">
                                What Is the Booking Process for <span>Delhi to Rishikesh </span>Cabs?
                            </h2>
                            <p>The booking process for Delhi to Rishikesh cabs with Anshu Travels is simple, easy, and
                                convenient, involving only a few steps to secure the transport of your choice. Whether
                                you wish to book online through our website or app or prefer direct communication with
                                our responsive customer service representatives over the phone, Anshu Travels guarantees
                                a
                                seamless booking experience. The flexibility in different ways of booking a cab with us
                                ensures that every customer can easily access our dependable cab services, making the
                                booking process as effortless as the journey itself..</p>
                            <p><strong>1. Website Booking:</strong> Booking a cab online with Anshu Travels Car Rentals
                                for
                                your
                                Delhi to
                                Rishikesh road trip is an easy and fast method to reserve your transportation. You can
                                choose your preferred cab, input your travel dates, and complete the payment online with
                                just a few clicks on our easy-to-use website. Our online booking platform ensures
                                transparent pricing and offers the flexibility to plan your trip according to your
                                schedule.</p>
                            <p><strong>2. Mobile App Booking: </strong> Another convenient Delhi to Rishikesh cab
                                booking process is downloading the Anshu Travels mobile app on your phones or tablets
                                and
                                creating a reservation from anywhere, anytime. Moreover, you can avail of several
                                app-only discounts and save big on your travel to Rishikesh from Delhi. Just enter your
                                pick-up and drop points, the cab type you prefer, date and time of travel and make a
                                secure payment. The app provides real-time updates, tracking, and immediate
                                confirmation, guaranteeing a smooth booking experience.</p>
                            <p><strong>3. Phone Booking:</strong> You can also create a Delhi to Rishikesh cab booking
                                by calling Anshu Travels at 7840026031. Our responsive customer service team will
                                gather your
                                travel information, including the date and time of travel, preferred cab type, timing,
                                and payment method, to facilitate the booking process for your journey. </p>
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