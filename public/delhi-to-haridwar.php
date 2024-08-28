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
            <h1>Delhi To Haridwar</h1>
            <div class="breadcrumbmenu">
                <a class="breadcrumbhome" href="index.php">Home</a> &gt;&gt; <p class="activecrumb">Delhi To Haridwar
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
                                    Delhi to <span>Haridwar Cab</span> Booking
                                </h2>
                            </div>
                            <p class="about-text">
                                The journey from Delhi to Haridwar by road spans approximately 220 kilometers and takes
                                around 5, depending on the traffic conditions. Opting for a road trip on this route
                                provides a unique and enriching experience, allowing you to witness the diverse
                                landscape of North India. The Delhi to Haridwar drive unfolds like a picturesque
                                painting, featuring the stunning vistas of the Shivalik ranges, the lush greenery of the
                                floodplains, and the holy Ganges river flowing alongside at various points. As you
                                progress, the scenery changes from bustling cityscapes to charming towns and eventually
                                to the spiritual ambiance of Haridwar. Traveling from Delhi to Haridwar by car offers
                                the convenience of traveling at your own pace and a chance to immerse in the beauty and
                                spirituality that defines this region.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s"
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInLeft;">
                            <div class="about-img">
                                <img src="img/haridwar.jpg" alt=""
                                    style="aspect-ratio: 3/1; object-fit: cover; object-position:top">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-right">
                            <p class="heading_2"><strong>About Delhi to Haridwar cab service</strong></p>
                            <p>Anshu Travles offers a popular and reliable Delhi to Haridwar taxi service. With a strong
                                presence in this route, Anshu Travles ensures comfortable and hassle-free transportation
                                for
                                travelers looking to explore the spiritual and scenic beauty of Haridwar. Whether it's a
                                one-way trip or a round trip, Anshu Travles's Delhi to Haridwar cabs cater to the
                                diverse
                                needs of passengers, making it a preferred choice for those embarking on this road
                                journey. Below are a few reasons attributing to the widespread preference for Anshu
                                Travles
                                cabs on this route:</p>
                            <ul class="about_list">
                                <li>Anshu Travles ensures a hassle-free booking process and offers a range of vehicle
                                    options,
                                    allowing travelers to choose based on their preferences and group size.</li>
                                <li>The journey from Delhi to Haridwar is picturesque, and with a Anshu Travles cab, you
                                    can
                                    enjoy the scenic beauty comfortably, making stops as you wish.</li>
                                <li>We have experienced and knowledgeable drivers who are well-versed with the route,
                                    ensuring a safe and pleasant journey.</li>
                                <li>With Anshu Travles, you can choose your preferred departure time, offering
                                    flexibility and
                                    convenience for your trip to Haridwar.</li>
                                <li>We offer a door-to-door pickup and drop, eliminating the need to worry about
                                    reaching a specific location to avail of the cab service.
                                </li>
                            </ul>


                            <br>
                            <h5 class="site-title_about">
                                Types of service available for Delhi to Haridwar route
                            </h5>

                            <br>
                            <p><strong>One-Way Cab Service:</strong> If you are looking for a one-way taxi from Delhi to
                                Haridwar, then we have the best package for you. With our Delhi to Haridwar one-way cab
                                services, you can plan a flexible itinerary, stop at captivating places along the way,
                                and make the most of your travel time.
                            </p>

                            <p><strong>Roundtrip Service:</strong> If you want to explore Haridwar to its fullest and
                                return to Delhi as per a fixed schedule, then our roundtrip cab services are ideal for
                                you. It is also more cost-efficient than booking a one-way can for both legs of the
                                journey. You can plan a detailed itinerary and explore every nook and corner of Haridwar
                                without having to worry about traveling in the town or returning home.</p>

                            <p><strong>Delhi Airport to Haridwar:</strong> Haridwar, being a popular spiritual
                                destination, attracts people from around the globe. Hence, we offer a range of cabs from
                                Delhi Airport to Haridwar to help you reach there in a hassle-free manner. You can opt
                                for outstation cabs either one-way from Delhi airport to Haridwar or a roundtrip service
                                based on your needs.
                            </p>
                            </ul>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row delhi_page">
                    <div class="col-lg-6">
                        <div class="img_ag">
                            <img src="img/haridwar.jpg" style="aspect-ratio: 3 / 4; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="delhi_cont">
                            <h2 class="site-title_about">
                                What Is the Booking Process for <span>Delhi to Haridwar </span>Cabs?
                            </h2>
                            <p>Haridwar is a prominent spiritual and tourist destination. We offer a range of Delhi to
                                Haridwar cab booking options to accommodate varying needs and preferences. Whether you
                                opt for the ease of booking online, the personal touch of making a phone call, or the
                                on-the-go functionality of a mobile app, we ensure a seamless experience.</p>
                            <p><strong>Online booking:</strong> Booking a Anshu Travles cab from Delhi to Haridwar is
                                just a
                                few clicks away with our user-friendly online booking process. Begin by visiting our
                                website, where you can enter your trip details, including your pick-up point in Delhi
                                and your destination in Haridwar. </p>
                            <p><strong>Phone Booking: </strong> Delhi to Haridwar car hire from Anshu Travles via a
                                phone call
                                is as convenient as it gets. Simply dial our dedicated helpline number, 7840026031, and
                                you'll be greeted by our customer service representative. Provide your trip details,
                                including your pick-up location in Delhi and the desired drop-off point in Haridwar. Our
                                representative will guide you through the available vehicle options and provide you with
                                the fare details. Once you've confirmed your choice, they will assist you in completing
                                the booking and will ensure that all your requirements and preferences are noted down
                                accurately.</p>
                            <p><strong>3. Mobile App Booking:</strong> Our app provides a user-friendly interface that
                                allows you to book a cab within minutes. Simply download and install the Anshu Travles
                                app
                                from your app store and open it. Enter your trip details, including your pick-up
                                location in Delhi and the drop-off point in Haridwar. The app will then display various
                                vehicle options and their respective fares. You can choose the one that suits your
                                preferences and budget. The app also offers real-time tracking of your cab, ensuring you
                                are informed about your ride's status. With secure payment options and instant booking
                                confirmation, Anshu Travles's mobile app makes booking a cab from Delhi to Haridwar
                                hassle-free and efficient.</p>
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