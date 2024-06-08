<?php
require_once('../controllers/database.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
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
                            </ul>
                        </div>
                        <div class="social-icons-con col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
                            <ul class="social-icons">
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
                        <div class="custom-number col-md-4 text-right">
                        </div>
                        <div class="con-header-ul col-md-4 text-right menu-1">
                            <ul id="ctopul">
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
                                    </ul>
                                </li>
                                <li id="i"><a href="news.php" style="color: black;">NEWS</a></li>
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
                                    <h1>RPL Certefication</h1>
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
                                require_once('../controllers/database.php');
                                $database = new Database();
                                $connection = $database->connection;

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Ambil data dari form
                                    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
                                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                                    $message = isset($_POST['message']) ? $_POST['message'] : '';
                                    $selectedCountry = isset($_POST['selectedCountry']) ? $_POST['selectedCountry'] : '';
                                    $selectedIndustry = isset($_POST['selectedIndustry']) ? $_POST['selectedIndustry'] : '';
                                    $selectedQualification = isset($_POST['selectedQualification']) ? $_POST['selectedQualification'] : '';

                                    // Data validasi sederhana
                                    if (empty($fullname) || empty($email) || empty($message) || empty($selectedCountry) || empty($selectedIndustry) || empty($selectedQualification)) {
                                        echo '<p style="color: red;">Please fill all required fields.</p>';
                                        var_dump($fullname, $email, $message, $selectedCountry, $selectedIndustry, $selectedQualification);
                                    } else {
                                        // Buat pernyataan SQL untuk memasukkan data
                                        $sql = "INSERT INTO form2_rpl_certification (fullname, email, message, selectedCountry, selectedIndustry, selectedQualification) VALUES (?, ?, ?, ?, ?, ?)";

                                        // Siapkan pernyataan dan ikat parameternya
                                        $stmt = $connection->prepare($sql);
                                        $stmt->bind_param("ssssss", $fullname, $email, $message, $selectedCountry, $selectedIndustry, $selectedQualification);

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


                                <form method="POST" action="rpl_certification-form2.php" autocomplete="off">
                                    <input type="hidden" name="selectedCountry" id="selectedCountry" class="form-control" placeholder="Selected Country" required>
                                    <input type="hidden" name="selectedIndustry" id="selectedIndustry" class="form-control" placeholder="Selected Industry" required>
                                    <input type="hidden" name="selectedQualification" id="selectedQualification" class="form-control" placeholder="Selected Qualification" required>
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
    </div>
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

    <script>
        var selectedCountry = localStorage.getItem("selectedCountry");
        var selectedIndustry = localStorage.getItem("selectedIndustry");
        var selectedQualification = localStorage.getItem("selectedQualification");
        console.log("Selected Country:", selectedCountry);
        console.log("Selected Industry:", selectedIndustry);
        console.log("Selected Qualification:", selectedQualification);


        document.addEventListener('DOMContentLoaded', function() {
            // Ambil nilai dari local storage

            var selectedCountry = localStorage.getItem("selectedCountry");
            var selectedIndustry = localStorage.getItem("selectedIndustry");
            var selectedQualification = localStorage.getItem("selectedQualification");

            // Tetapkan nilai-nilai ke input formulir jika ada
            if (selectedCountry !== null) {
                document.getElementById('selectedCountry').value = selectedCountry;
            }
            if (selectedIndustry !== null) {
                document.getElementById('selectedIndustry').value = selectedIndustry;
            }
            if (selectedQualification !== null) {
                document.getElementById('selectedQualification').value = selectedQualification;
            }

        });
    </script>
</body>

</html>