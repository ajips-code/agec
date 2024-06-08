<?php
require_once('../controllers/database.php');
$getdata = "SELECT * FROM employee";
$res = mysqli_query($database->connection, $getdata);
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Australian Globaleducation Consultancy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/icon" href="../images/AGEC-Logo_Full-Colour.png" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- Flaticons  -->
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/mobile_view.css">
    <link rel="stylesheet" href="../css/tablet_view.css">
    <link rel="stylesheet" href="../css/laptop_view.css">
    <link rel="stylesheet" href="../css/desktop_view.css">

    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
        .container .content {
            margin-top: 20px;
        }

        .container .content h2 {
            margin-top: 20px;
            font-weight: bold;
            color: #343a40;
        }

        .container .content p {
            margin-bottom: 15px;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <!-- <div class="colorlib-loader"></div> -->

    <div id="page">
        <nav class="colorlib-nav navbar-fixed-top" role="navigation">
            <div class="upper-menu">
                <div class="container-upper">
                    <div class="row justify-content-between">
                        <div class="contact-icons-con col-lg-6 col-md-6 col-sm-12 text-left">
                            <ul class="contact-icons">
                            </ul>
                        </div>
                        <div class="social-icons-con col-lg-6 col-md-6 col-sm-12 justify-content-between text-right" style="margin-left: -385px !important;">
                            <ul class="social-icons">
                                <a href="https://www.tiktok.com/" style="margin-right: 3px; transition: transform 0.3s;">
                                    <img src="../images/tiktok.png" alt="Linkedin" style="width: 20px; height: 18px;">
                                </a>
                                <a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
                                    <img src="../images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 25px; height: 22px;">
                                </a>
                                <a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
                                    <img src="../images/instagram-7678783_1280.png" alt="Instagram" style="width: 30px; height: 28px;">
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
                                    <img src="../images/facebook (3).png" alt="Facebook" style="width: 40px; height: 35px;">
                                </a>
                                <a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
                                    <img src="../images/youtube-7737850_1920.png" alt="Youtube" style="width: 35px; height: 37px;">
                                </a>
                            </ul>
                        </div>

                    </div>
                    <ul class="services-header col-lg-12 col-sm-12 mt-4 text-center">
                        <a href="rpl_certification.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>RPL CERTIFICATION &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="internship.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>INTERNSHIP &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="jobs.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>JOBS &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="tourist_visa.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>TOURIST VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="working_holiday_visa.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>WORKING HOLIDAY VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="business_visa.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>BUSINESS VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="pr_assessment.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>PR &nbsp;ASSESSMENT &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="elicos.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>ELICOS&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="study_visa.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>STUDY VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="germany_programme.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>GERMANY PROGRAMME &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="courses.php" style="font-size: 13px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>COURSES</li>
                        </a>
                        <!-- <a href="builders_licence.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
							<li>BUILDERS LICENCE &nbsp;&nbsp;|&nbsp;&nbsp;</li>
						</a>
						<a href="trade_licensing.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
							<li>TRADE LICENSING </li> -->
                        </a>
                    </ul>
                </div>
            </div>
            <div class="ctop-menu">
                <div class="customcontainer">
                    <div class="row">
                        <div class="col-md-4">
                            <div id="custom-logo"><a href="index.php"><img class="c-logo" src="../images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
                        </div>
                        <div class="custom-number col-md-2 text-right">
                        </div>
                        <div class="con-header-ul col-md-6 text-right menu-1">
                            <ul id="ctopul-about">
                                <li id="homeindex"><a href="../index.php" style="color: black;">HOME</a></li>
                                <li id="serviceindex" class="has-dropdown">
                                    <a href="services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
                                        <li><a href="internship.php">INTERNSHIP&nbsp;</a></li>
                                        <li><a href="jobs.php">JOBS&nbsp;</a></li>
                                        <li><a href="tourist_visa.php">TOURIST VISA&nbsp;</a></li>
                                        <li><a href="working_holiday_visa.php">WORKING HOLIDAY VISA&nbsp;</a></li>
                                        <li><a href="business_visa.php">BUSINESS VISA&nbsp;</a></li>
                                        <li><a href="pr_assessment.php">PR ASSESSMENT&nbsp;</a></li>
                                        <li><a href="elicos.php">ELICOS&nbsp;</a></li>
                                        <li><a href="englishcourse.php">ENGLISH COURSES&nbsp;</a></li>
                                        <li><a href="study_visa.php">STUDY VISA&nbsp;</a></li>
                                        <li><a href="courses.php">COURSES&nbsp;</a></li>
                                        <!-- <li><a href="builders_licence.php">BUILDERS LICENCE&nbsp;</a></li>
										<li><a href="trade_licensing.php">TRADE LICENSING&nbsp;</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="universities.html">COURSES</a></li> -->
                                <li id="newsindex"><a href="news.php" style="color: black;">NEWS</a></li>
                                <li id="aboutindex"><a href="about.php" style="color: black;">ABOUT US</a></li>
                                <li id="contactindex"><a href="contact.php" style="color: black;">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="r-banner cbanners">
            <ul class="slides">
                <li>
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-md-offset-3">
                                <div class="text-center r-inner-banner mt-3">
                                    <h1>TERMS AND CONDITIONS OF USE</h1>
                                    <h2><span><a href="../index.php">Home</a> | Terms and Conditions</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <h1 class="text-center">Terms and Conditions</h1>
        <div class="content">
            <section>
                <h2>Introduction</h2>
                <p>Welcome to Australian Global Education Consultancy. These terms and conditions outline the rules and regulations for the use of our website.</p>
            </section>
            <section>
                <h2>License</h2>
                <p>Unless otherwise stated, Australian Global Education Consultancy and/or its licensors own the intellectual property rights for all material on Australian Global Education Consultancy. All intellectual property rights are reserved. You may access this from Australian Global Education Consultancy for your own personal use subjected to restrictions set in these terms and conditions.</p>
            </section>
            <section>
                <h2>User Responsibilities</h2>
                <p>Users are responsible for maintaining the confidentiality of their account information, including their password, and for all activity that occurs under their account.</p>
            </section>
            <section>
                <h2>Privacy Policy</h2>
                <p>We are committed to protecting your privacy. Authorized employees within the company on a need-to-know basis only use any information collected from individual customers.</p>
            </section>
            <section>
                <h2>Limitations of Liability</h2>
                <p>In no event shall Australian Global Education Consultancy, nor any of its officers, directors, and employees, be liable to you for anything arising out of or in any way connected with your use of this website.</p>
            </section>
            <section>
                <h2>Changes to Terms</h2>
                <p>We reserve the right to amend these terms and conditions at any time. It is your responsibility to review these terms periodically for any changes.</p>
            </section>
            <section>
                <h2>Governing Law</h2>
                <p>These terms will be governed by and interpreted in accordance with the laws of the State of NSW, and you submit to the non-exclusive jurisdiction of the state and federal courts located in NSW for the resolution of any disputes.</p>
            </section>
            <section>
                <h2>Contact Us</h2>
                <p>If you have any questions about these Terms, please contact us at info@australianglobaleducationconsultancy.com.</p>
            </section>
        </div>
    </div>


    <div class="col-md-12 mt-4" style="color:white; background-color: transparent; height:250px; text-align:center;">
        <a id="custom-whatsapp-btn" class="btn-whatsapp-custom" href="https://api.whatsapp.com/send?phone=+61420402142&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!" target="_blank">
            <i class="bi bi-whatsapp"></i> Message us on WhatsApp
        </a>
    </div>
    <footer id="colorlib-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget img-footer text-left">
                    <img src="../images/AGEC-Logo_Full-Colour.png" alt="Colorlib"></img>
                </div>
                <div class="col-md-3 colorlib-widget text-center">
                    <h4>About Australian Global Education Consultancy</h4>
                    <p>Trusted Career and Education. One of the best education from of Australia. Here we assure you quality service. We are professional and reliable.</p>
                    <p>
                    </p>
                </div>
                <div class="col-md-2 colorlib-widget text-center">
                    <h4>Usefull Links</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="services.php"></i> Elicos</a></li>
                        <li><a href="news.php"></i> Enroll Now</a></li>
                        <li><a href="about.php"></i> Study Visa for overseas</a></li>
                        <li><a href="contact.php"></i> Contact Us</a></li>
                    </ul>
                    </p>
                </div>

                <div class="col-md-4 colorlib-widget text-center">
                    <h4>Contact Info</h4>
                    <ul class="colorlib-footer-links">
                        <li><i class="bi bi-geo-alt"></i>&nbsp;
                            180 George Street, Parramatta, 2150 NSW, AUSTRALIA
                        </li>
                        <li><a href="tel://+61420402142"><i class="fas fa-phone-alt"></i> +61 420402142</a></li>
                        <li><a href="mailto:Enroll@australianglobaleducationconsultancy.com"><i class="far fa-envelope-open"></i>info@australianglobaleducationconsultancy.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="row row-pb-md text-center mt-4">
                <ul class="social-icons">
                    <a href="https://www.tiktok.com/" style="margin-right: 3px; transition: transform 0.3s;">
                        <img src="../images/tiktok.png" alt="Linkedin" style="width: 25px; height: 20px;">
                    </a>
                    <a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
                        <img src="../images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 30px; height: 24px;">
                    </a>
                    <a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
                        <img src="../images/instagram-7678783_1280.png" alt="Instagram" style="width: 35px; height: 28px;">
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
                        <img src="../images/facebook (3).png" alt="Facebook" style="width: 40px; height: 32px;">
                    </a>
                    <a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
                        <img src="../images/youtube-7737850_1920.png" alt="Youtube" style="width: 45px; height: 36px;">
                    </a>
                </ul>
            </div>
        </div>
        <div class="copy">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy;
                                Copyright <script>
                                    document.write(new Date().getFullYear());
                                </script> Australian Global Education Consultancy. Powered by <i class="icon-heart" aria-hidden="true"></i><a href="#" target="_blank"> Australian Global Education Consultancy</a>

                            </small>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="floating-whatsapp">
        <div class="whatsapp-container">
            <a class="whatsapp-icon" id="whatsapp-icon">
                <!-- <i class="fab fa-whatsapp"></i> -->
            </a>
            <div class="whatsapp-text-container">
                <span class="whatsapp-text" id="whatsapp-text">Chat With Us (Singapore)&nbsp;&nbsp;&nbsp;</span>
                <br><br><span class="whatsapp-text" id="whatsapp-text-2">Chat With Us (Australia) &nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
    </div>
    <div class="floating-whatsapp2">
        <div class="whatsapp2-container">
            <!-- <a class="whatsapp2-icon" id="whatsapp2-icon"> -->
            <a class="whatsapp2-icon" id="whatsapp2-icon" href="mailto:Enroll@australianglobaleducationconsultancy.com" style="transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'"> </a>
            <!-- </a> -->
        </div>
    </div>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="../js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="../js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="../js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="../js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="../js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="../js/main.js"></script>
    <script src="../js/floating_wa.js"></script>

</body>

</html>