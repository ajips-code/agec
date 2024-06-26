<?php
// require_once('database.php');
require_once('../controllers/database.php');

// $getdata = "SELECT * FROM feedback";
// $res = mysqli_query($database->connection, $getdata);
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
    <link rel="stylesheet" href="../css/laptop_view.css">
	<link rel="stylesheet" href="../css/mobile_view.css">
	<link rel="stylesheet" href="../css/desktop_view.css">

    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
                                <a href="tel:+61420402142" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                                    <li>
                                        <i class="fas fa-phone-alt"></i> +61 420402142 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                </a>

                                <a href="tel:+6582104963" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                                    <li>
                                        <i class="fas fa-phone-alt"></i> +65 82104963 &nbsp;&nbsp;&nbsp;&nbsp;
                                    </li>
                                </a>

                                <a href="https://wa.me/phone-number" style="color: #0A3F7F; font-size: 17.5px; margin-right: 25px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                                    <li>
                                        <img src="./images/waa.png" alt="WhatsApp" style="width: 40px; height: auto;">
                                    </li>
                                </a>

                                <a href="mailto:bigbreakgroups@gmail.com" style="color: #0A3F7F; text-decoration: none; font-size: 17px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
                                    <li>
                                        <img src="./images/email.png" alt="Email" style="width: 23px; margin-top: 2px; height: auto;">
                                    </li>
                                </a>
                            </ul>
                        </div>
                        <div class="social-icons-con col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
                            <ul class="social-icons">
                                <a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 10px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'; this.style.boxShadow='4px 4px 10px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 5px rgba(0, 0, 0, 0.3)';">
                                    <li>
                                        <img src="./images/linkedin.png" alt="Linkedin" style="width: 35px; height: 20px; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                                    </li>
                                </a>
                                <a href="https://www.instagram.com" style="margin-right: 10px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'; this.style.boxShadow='4px 4px 10px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 5px rgba(0, 0, 0, 0.3)';">
                                    <li>
                                        <img src="./images/instagram.png" alt="Instagram" style="width: 40px; height: 28px; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                                    </li>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 10px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'; this.style.boxShadow='4px 4px 10px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 5px rgba(0, 0, 0, 0.3)';">
                                    <li>
                                        <img src="./images/facebook.png" alt="Facebook" style="width: 40px; height: 33px; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                                    </li>
                                </a>
                                <a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'; this.style.boxShadow='4px 4px 10px rgba(0, 0, 0, 0.4)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='2px 2px 5px rgba(0, 0, 0, 0.3)';">
                                    <li>
                                        <img src="./images/youtube.png" alt="Youtube" style="width: 40px; height: 40px; border-radius: 10px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                                    </li>
                                </a>
                            </ul>

                        </div>

                    </div>
                    <ul class="services-header col-lg-12 col-sm-12 mt-4 text-center">
                        <a href="rpl_certification.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>RPL CERTIFICATION &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="internship.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>INTERNSHIP &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="jobs.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>JOBS &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="tourist_visa.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>TOURIST VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="working_holiday_visa.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>WORKING HOLIDAY VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="business_visa.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>BUSINESS VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="pr_assessment.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>PR &nbsp;ASSESSMENT &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="elicos.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>ELICOS &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="englishcourse.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>ENGLISH COURSES &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="germany_programme.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>GERMANY PROGRAMME &nbsp;&nbsp;|&nbsp;&nbsp;</li>
                        </a>
                        <a href="courses.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                            <li>COURSES &nbsp;&nbsp;</li>
                        </a>
                        <!-- <a href="builders_licence.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
							<li>BUILDERS LICENCE &nbsp;&nbsp;|&nbsp;&nbsp;</li>
						</a>
						<a href="trade_licensing.php" style="font-size: 12px; color:#000; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
							<li>TRADE LICENSING </li>
						</a> -->
                    </ul>

                </div>
            </div>
            <div class="ctop-menu">
                <div class="customcontainer">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="custom-logo"><a href="index.php"><img class="c-logo" src="images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
                        </div>
                        <div class="con-header-ul col-md-6 text-right menu-1">
                            <ul id="ctopul">
                                <li id="homeindex"><a href="index.php" style="color: black;">HOME</a></li>
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
                                        <li><a href="germany_programme.php">GERMANY PROGRAMME&nbsp;</a></li>
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
                                <div class="text-center r-inner-banner">
                                    <h1>Get the best offer from us</h1>
                                    <h2>SIGN UP NOW !</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="colorlib-contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 animate-box">
                        <div class="row">
                            <div class="col-md-6 animate-box">
                                <img src="https://habibieglobal.com/wp-content/uploads/2024/05/missnana-removebg.png" alt="image" style="height:450px;width: 350px;">
                            </div>
                            <div class="col-md-6 animate-box">
                                <h2 class="contact-tittle">Sign Up</h2>
                                <?php
                                require_once('database.php');
                                // public $connection;
                                // Membuat instance dari kelas Database
                                $database = new Database();
                                $connection = $database->connection;

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Ambil data dari form
                                    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
                                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                                    $message = isset($_POST['message']) ? $_POST['message'] : '';
                                    $selectedCountry = isset($_POST['selectedCountry']) ? $_POST['selectedCountry'] : '';
                                    $selectedService = isset($_POST['selectedService']) ? $_POST['selectedService'] : '';
                                    $selectedNationality = isset($_POST['selectedNationality']) ? $_POST['selectedNationality'] : '';

                                    // Data validasi sederhana
                                    if (empty($fullname) || empty($email) || empty($message) || empty($selectedCountry) || empty($selectedService) || empty($selectedNationality)) {
                                        echo '<p style="color: red;">Please fill all required fields.</p>';
                                        var_dump($fullname, $email, $message, $selectedCountry, $selectedService, $selectedNationality);
                                    } else {
                                        // Buat pernyataan SQL untuk memasukkan data
                                        $sql = "INSERT INTO index_service(fullname, email, message, selectedCountry, selectedService, selectedNationality) VALUES (?, ?, ?, ?, ?, ?)";

                                        // Siapkan pernyataan dan ikat parameternya
                                        $stmt = $connection->prepare($sql);
                                        $stmt->bind_param("ssssss", $fullname, $email, $message, $selectedCountry, $selectedService, $selectedNationality);

                                        // Eksekusi pernyataan
                                        if ($stmt->execute()) {
                                            echo '<p style="color: green;">New record created successfully</p>';
                                        } else {
                                            echo '<p style="color: red;">Error: ' . $sql . '<br>' . $connection->error . '</p>';
                                        }

                                        // Tutup pernyataan
                                        $stmt->close();
                                    }
                                }
                                ?>


                                <form method="POST" action="" autocomplete="off">
                                    <input type="hidden" name="selectedCountry" id="selectedCountry" class="form-control" placeholder="Selected Country" required>
                                    <input type="hidden" name="selectedService" id="selectedService" class="form-control" placeholder="Selected Service" required>
                                    <input type="hidden" name="selectedNationality" id="selectedNationality" class="form-control" placeholder="Selected Nationality" required>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your name" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Your email address" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-12">
                                            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" name="submit" value="Send Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-10 col-md-offset-1 animate-box mt-4">
                        <div class="col-md-12">

                            <div class="contact-info-wrap-flex col-md-6">
                                <h2 class="contact-tittle">Our Location</h2>
                            </div>
                            <div class="contact-info-wrap-flex-map col-md-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.5727871155984!2d150.98833541535846!3d-33.815079480672004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a33db9b1db79%3A0x5017d681632b3e0!2s180%20George%20St%2C%20Parramatta%20NSW%202150%2C%20Australia!5e0!3m2!1sen!2sid!4v1620112072487!5m2!1sen!2sid" width="960" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer id="colorlib-footer">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 colorlib-widget img-footer text-left">
                    <img src="images/AGEC-Logo_Full-Colour.png" alt="Colorlib"></img>
                </div>
                <div class="col-md-3 colorlib-widget text-center">
                    <h4>About Australian Global Education Consultancy</h4>
                    <p>One stop education, working, holiday solution for home & abroad. One of the best education consultancy fr0m of Australia. Here we assure you quality service. We are professional and reliable. </p>
                    <p>
                        <!-- <ul class="colorlib-social-icons">
						<li><a title="facebook page" href="https://www.facebook.com/profile.php?id=61550526716854/"><i style="color:#3B5998;" class="fab fa-facebook-square"></i></a></li>
					</ul> -->
                    </p>
                </div>
                <div class="col-md-3 colorlib-widget text-center">
                    <h4>Quick Links</h4>
                    <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="services.php"><i class="far fa-check-circle"></i> Services</a></li>
                        <li><a href="news.php"><i class="far fa-check-circle"></i> News</a></li>
                        <li><a href="about.php"><i class="far fa-check-circle"></i> About Us</a></li>
                        <li><a href="#"><i class="far fa-check-circle"></i> Contact Us</a></li>
                    </ul>
                    </p>
                </div>

                <div class="col-md-3 colorlib-widget text-center">
                    <h4>Contact Info</h4>
                    <ul class="colorlib-footer-links">
                        <li><i class="far fa-address-card"></i>&nbsp
                            180 George Street, Parramatta, 2150 NSW, AUSTRALIA
                        </li>
                        <li><a href="tel://+61420402142"><i class="fas fa-phone-alt"></i> +61 420402142</a></li>
                        <li><a href="mailto:bigbreakgroups@gmail.com"><i class="far fa-envelope-open"></i> bigbreakgroups@gmail.com</a></li>
                        <li><a href="https://australianglobaleducationconsultancy.com/"><i class="fas fa-globe"></i> australianglobaleducationconsultancy.com</a></li>
                    </ul>
                </div>
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
                                </script> Australian Global Education Consultancy. Powered by <i class="icon-heart" aria-hidden="true"></i><a href="index.php" target="_blank"> Australian Global Education Consultancy</a>

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
                <i class="fab fa-whatsapp"></i>
            </a>
            <div class="whatsapp-text-container">
                <span class="whatsapp-text" id="whatsapp-text">Chat With Us (Singapore)&nbsp;&nbsp;&nbsp;</span>
                <br><br><span class="whatsapp-text" id="whatsapp-text-2">Chat With Us (Australia) &nbsp;&nbsp;&nbsp;&nbsp;</span>
            </div>
        </div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <script>
        const selectedCountry = localStorage.getItem('selectedCountry');
        const selectedService = localStorage.getItem('selectedService');
        const selectedNationality = localStorage.getItem('selectedNationality');

        // Log values to console
        console.log('Selected Country:', selectedCountry);
        console.log('Selected Service:', selectedService);
        console.log('Selected Nationality:', selectedNationality);

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil nilai dari local storage

            var selectedCountry = localStorage.getItem("selectedCountry");
            var selectedService = localStorage.getItem("selectedService");
            var selectedQualification = localStorage.getItem("selectedNationality");

            // Tetapkan nilai-nilai ke input formulir jika ada
            if (selectedCountry !== null) {
                document.getElementById('selectedCountry').value = selectedCountry;
            }
            if (selectedService !== null) {
                document.getElementById('selectedService').value = selectedService;
            }
            if (selectedNationality !== null) {
                document.getElementById('selectedNationality').value = selectedNationality;
            }

        });
    </script>
</body>

</html>