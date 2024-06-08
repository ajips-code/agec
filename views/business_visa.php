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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/laptop_view.css">
    <link rel="stylesheet" href="../css/mobile_view.css">
    <link rel="stylesheet" href="../css/desktop_view.css">

    <style>
        :root {
            --main-color-3: #1f0404;
            --main-color-4: #ffffff;
            --main-color-1: #D1A730;
            --main-color-2: #00335c;
            --main-color-5: #e6e6e6;
            --main-color-6: #1f8c95;
            --fonts-1: "Montserrat", sans-serif !important;
            --fonts-2: "Poppins", sans-serif !important;
        }

        .main-content {
            margin-top: -10px;
            text-align: center;
            padding: 50px 40px;
            background-color: #00335c;
        }

        .hidden {
            display: none;
        }

        .intro select {
            margin-top: 40px;
            margin-bottom: -95px;
            margin-right: 10px;
            padding: 20px;
            font-size: 2rem;
        }

        .main-content h1 {
            color: white;
            font-family: "Montserrat", sans-serif;
            font-size: 40px;
            font-weight: 400;
        }

        .main-content h3 {
            color: white;
            font-family: "Montserrat", sans-serif;
            font-size: 34px;
            font-weight: 400;
        }

        .intro p {
            font-size: 1.7rem;
            margin: 20px 0;
            color: white;
            padding: 80px;
            font-family: "Montserrat", sans-serif;
        }

        .links a {
            margin: 0 15px;
            font-size: 1.1rem;
            color: #3E4E50;
            text-decoration: none;
            border-bottom: 2px solid #0077B5;
            padding-bottom: 2px;
        }

        .cta-button {
            display: inline-block;
            margin: 15px 0;
            padding: 25px 30px;
            background-color: #8AC53E;
            color: white;
            text-decoration: none;
            font-size: 1.8rem;
            border-radius: 5px;
            position: relative;
            /* Pastikan tombol berada di posisi relatif */
            z-index: 2;
            /* Tingkatkan z-index jika diperlukan */
        }

        .image-section {
            display: flex;
            justify-content: right;
            align-items: center;
            margin-top: -300px;
            position: relative;
            /* z-index: -1; */
        }

        .person-image {
            border-radius: 10px;
            max-width: 250px;
            margin-right: 20px;
            margin-bottom: 40px;

        }

        .caption {
            background-color: white;
            padding: 10px 120px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
            bottom: -20px;
            right: -20px;
            text-align: center;
        }


        .chat-widget {
            position: fixed;
            bottom: 14px;
            right: 14px;
            display: flex;
            align-items: center;
        }

        .chat-message {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
        }

        .chat-icon {
            width: 80px;
            height: 50px;
            border-radius: 50%;
            transform: rotate(360deg);
        }

        /* section proces line */
        .timeline-section {
            padding: 60px 0;
            font-family: "Montserrat", Sans-serif;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 50px;
        }

        .timeline-item.active .timeline-content {
            background-color: #f9f9f9;
            font-family: "Montserrat", Sans-serif;
        }

        .timeline-content {
            position: relative;
            font-family: "Montserrat", Sans-serif;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-family: "Montserrat", Sans-serif;
            font-size: 22px;
            font-weight: 400;
            letter-spacing: -0.7px;
        }

        .timeline-content p {
            margin-bottom: 0;
            color: #252526;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.5em;
            font-family: "Montserrat", Sans-serif;
        }

        .title-higlight {
            color: #0077B5;
            font-family: "Montserrat", Sans-serif;
            font-size: 50px;
            font-weight: 800;
            line-height: 71px;
            letter-spacing: -1.4px;
        }

        .timeline-section {
            margin-top: 60px;
        }

        .timeline3 {
            position: relative;
            height: 785px;
        }

        .timeline3 .timeline-item-line {
            position: relative;
        }

        .timeline3 .timeline-item-line .timeline-content {
            position: relative;
            padding-left: 70px;
        }

        .timeline3 .timeline-item-line .timeline-number {
            position: relative;
            margin-bottom: 160px;
            margin-left: 70px;
            left: 0;
            top: 0;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #0077B5;
            color: #fff;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            font-weight: bold;
        }

        /* New CSS for connecting lines */
        .timeline3:before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            /* Width of the line */
            height: 100%;
            /* Height of the line */
            background-color: #0077B5;
            /* Color of the line */
            z-index: -1;
            /* Push the line behind the content */
        }

        .timeline3 .timeline-item-line {
            padding-left: 20px;
            /* Adjust the padding to make room for the line */
        }

        /* =============== CONTAINER ========================== */
        .skills-container {
            display: flex;
            background-color: #0077B5;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 20px auto;
            padding: 80px;
            animation: slideIn 0.8s ease-in-out;
        }

        .skills-image-section {
            flex: 1;
            background-color: transparent;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            animation: fadeIn 1.2s ease-in-out;
        }

        .skills-image-section img {
            border-radius: 10px;
            width: 100%;
            max-width: 250px;
        }

        .skills-caption {
            background-color: white;
            border-radius: 20px;
            padding: 5px 10px;
            margin-top: 10px;
            font-size: 14px;
            display: flex;
            align-items: center;
            animation: fadeIn 1.4s ease-in-out;
        }

        .skills-caption span {
            margin-left: 5px;
        }

        .skills-content-section {
            flex: 2;
            padding: 40px;
            color: #333;
        }

        .skills-content-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
            font-family: "Montserrat", Sans-serif;
            font-size: 22px;
            font-weight: 400;
        }

        .skills-content-section p {
            font-size: 17px;
            line-height: 1.7;
            margin-bottom: 20px;
            color: white;
        }

        .skills-buttons {
            display: flex;
            gap: 10px;
        }

        .skills-buttons a {
            text-decoration: none;
            background-color: #D1A730;
            color: white;
            padding: 15px 25px;
            border-radius: 3px;
            margin-top: 60px;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .skills-buttons a:hover {
            background-color: transparent;
        }


        /*============================ Media Query ============================*/
        @media only screen and (max-width: 768px) {
            .navbar-toggle {
                display: block;
            }

            .navbar-collapse {
                display: none;
            }

            .navbar-collapse.show {
                display: block;
            }

            .navbar-nav li {
                font-size: 1.2rem;
            }

            .main-content h1 {
                font-size: 2rem;
            }

            .main-content h3 {
                font-size: 2rem;
            }

            .intro select {
                margin-bottom: -195px;
                margin-right: 10px;
                padding: 15px;
            }

            .intro p {
                margin-top: -40px;
            }

        }

        @media (min-width: 576px) {
            .cta-button {
                font-size: 1.7rem;
                padding: 18px 30px;
            }

            .intro select {
                font-size: 1.7rem;
            }

            .form-control {
                font-size: 1.7rem;
                padding: 15px;
            }
        }

        @media (min-width: 768px) and (max-width: 979px) {
            .cta-button {
                font-size: 1.8rem;
                padding: 10px 15px;
            }

            .intro {
                margin-top: 40px;
            }

            .intro select {
                font-size: 1.8rem;
                margin-top: 40px;
            }

            .form-control {
                font-size: 2rem;
                padding: 18px;
            }

            .main-content {
                margin-top: 280px;
            }
        }
    </style>

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
                            <!-- <a href="tel:+6582104963" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
								<i class="fas fa-phone-alt"></i> &nbsp;
								+65 82104963
							</a>
							<a href="tel:+61420402142" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
								<i class="fas fa-phone-alt"></i> &nbsp;
								+61 420402142
							</a>

							<a href="tel:+6582104963" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
								<li>
									<i class="fas fa-phone-alt"></i> &nbsp;
									+65 82104963
								</li>
							</a> -->
                        </div>
                        <div class="con-header-ul col-md-6 text-right menu-1">
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
                                        <!-- <li><a href="builders_licence.php">BUILDERS LICENCE&nbsp;</a></li>
										<li><a href="trade_licensing.php">TRADE LICENSING&nbsp;</a></li> -->
                                    </ul>
                                </li>
                                <!-- <li><a href="universities.html">COURSES</a></li> -->
                                <li id="i"><a href="news.php" style="color: black;">NEWS</a></li>
                                <li id="aboutindex"><a href="about.php" style="color: black;">ABOUT US</a></li>
                                <li id="contactindex"><a href="contact.php" style="color: black;">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="banner" style="margin-top: 190px;">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3">
                    <div class="text-center r-inner-banner">
                        <h1 style="font-family: 'Montserrat', Sans-serif;font-size: 36px; font-weight: 400; color:#0077B5">Business Visa</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content">
        <h1>Get your <b class="gold" style="color:#D1A730; font-weight:bolder;"> Skill Certified!</b> New Website Launched</h1>
        <h3><b class="gold" style="color:#D1A730; font-weight:bolder;">RPL Certefication</b></h3>
        <div class="intro">
            <select id="industrySelect">
                <option>Select Industry</option>
                <option value="Automotive">Automotive</option>
                <option value="Building & Construction">Building & Construction</option>
                <option value="Business & Finance">Business & Finance</option>
                <option value="Civil Construction">Civil Construction</option>
                <option value="Community Services">Community Services</option>
                <option value="Engineering">Engineering</option>
                <option value="Hair & Beauty">Hair & Beauty</option>
                <option value="Horticulture & Land Management">Horticulture & Land Management</option>
                <option value="Commercial Cookery & Hospitality">Commercial Cookery & Hospitality</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Mining and Resources">Mining and Resources</option>
                <option value="Plumbing Services">Plumbing Services</option>
                <option value="Security & Cleaning">Security & Cleaning</option>
                <option value="Transport & Logistics">Transport & Logistics</option>
                <option value="Vocational Education & Training">Vocational Education & Training</option>
                <option value="Retail Services">Retail Services</option>
                <option value="Events & Entertainment">Events & Entertainment</option>
                <!-- Options go here -->
            </select>
            <select id="qualificationSelect">
                <option>Select Qualification</option>
                <!-- Options go here -->
            </select>
            <p><b class="gold" style="color:#D1A730; font-weight:bolder;">Australian Global Education Consultancy</b> partner with Registered Training Organisations (RTOs)<br>
                to help you convert your experience into a nationally recognised qualification through Recognition of Prior Learning (RPL).</p>
            <a href="business_visa-form.php" class="cta-button">Take the FREE 60 second skills check now!!</a>
            <div class="image-section">
                <img src="../images/manbhir-removebg-preview.png" alt="Manbhir Singh" class="person-image">
                <div class="caption">Sir Marcus<br>Senior consultant</div>
            </div>
        </div>
    </main>


    <section class="timeline-section">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-5">
                    <div class="timeline1">
                        <div class="timeline-heading">
                            <div class="timeline-highlight">
                                <h4 style="font-family: Montserrat;color:#252526; font-size:16px;">ABOUT AUSTRALIAN GLOBAL EDUCATION CONSULTANCY</h4>
                                <h1 style="color: #0077B5;font-size: 36px;font-weight: 800;line-height: 61px;letter-spacing: 0px;">4 Simple Steps to Success</h1>
                                <p>Getting the recognition you deserve has never been easier.</p>
                                <p>Through the Recognition of Prior Learning (RPL) process, your extensive skills, knowledge, and career experience can earn you the qualifications you rightfully deserve, without taking time off work.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h3 class="title-higlight">You're Just 60 Seconds Away from Transforming Your Life</h3>
                                <p>Your dedicated consultant will guide you through the process of putting together a portfolio of evidence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="timeline3">
                        <div class="timeline-item-line">
                            <div class="timeline-number">1</div>
                        </div>
                        <div class="timeline-item-line">
                            <div class="timeline-number">2</div>
                        </div>
                        <div class="timeline-item-line">
                            <div class="timeline-number">3</div>
                        </div>
                        <div class="timeline-item-line">
                            <div class="timeline-number">4</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="timeline2">
                        <div class="timeline-item active">
                            <div class="timeline-content">
                                <h3 class="title">Free Skills Assessment</h3>
                                <p>Speak to Skills Certified about your goals and allow us to guide you towards the qualification that will help you reach them.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h3 class="title">Portfolio of Experience</h3>
                                <p>Your dedicated consultant will guide you through the process of putting together a portfolio of evidence.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h3 class="title">Evidence Review</h3>
                                <p>Once one of our partner registered training organisations (RTOs) has assessed your portfolio, the assessor assigned to your case may be in touch if any additional evidence is required.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <h3 class="title">You're Qualified!!</h3>
                                <p>Skills Certified is partnered with Registered Training Organisations whose qualifications are nationally recognised in Australia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="skills-container">
        <div class="skills-image-section">
            <img src="../images/missnana-removebg-preview.png" alt="Ir. Nana Saragih">
            <div class="skills-caption">
                <!-- <img src="../images/missnana-removebg-preview.png" alt="Icon" style="width: 20px; height: 20px;"> -->
                <span>Ir. Nana Saragih, Founder</span>
            </div>
        </div>
        <div class="skills-content-section">
            <h2>All qualifications are awarded by our partner RTO's</h2>
            <p>Your skills and career are unique. So, your needs for filling the gaps in your knowledge will be unique as well. At Skills Certified, we look at your case in a dedicated and personalised way so that you can take the right next steps for your career.</p>
            <p>View all the industries and qualifications awarded by our partner RTOs. Get in touch today to obtain certifications through RPL and take your career to the next level.</p>
            <div class="skills-buttons">
                <a href="tourist-visa-form.php">View Qualifications</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>

    <div id="colorlib-contact" style="margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2 style="text-align: center; font-family: 'Montserrat', Sans-serif;font-size: 30px;font-weight: 400;">Give Feedback</h2>
                    <form method="POST" action="feed.php" autocomplete="off" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your mail" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Your occupation" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2">
                                <p>Your Image:</p>
                            </div>
                            <div class="col-md-10">
                                <input class="form-control" type="file" name="image" placeholder="Upload a image" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Send Fedback">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="floating-whatsapp">
        <div class="whatsapp-container">
            <a class="whatsapp-icon" id="whatsapp-icon">
                <!-- <a class="whatsapp-icon" id="whatsapp-icon" style="transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'"> </a> -->
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

    <footer class="chat-widget">
        <div class="chat-message">Welcome to Australian Global Education Consultancy RPL Certefication! Let me know if I can help with anything today.</div>
        <!-- <a href="https://wa.me/61420402142"><img src="images/waa.png" alt="Chat Icon" class="chat-icon"></a> -->
    </footer>

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

    <script type="text/javascript">
        $(document).ready(function() {
            // Get the current page path
            var currentPage = window.location.pathname.split("/").pop();

            // Loop through each <li> to check if the href matches the current page
            $('ul.services-header a').each(function() {
                var link = $(this).attr('href');
                if (link === currentPage) {
                    $(this).find('li').addClass('active');
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target); // Stop observing once the element is visible
                    }
                });
            }, observerOptions);

            const elementsToAnimate = document.querySelectorAll('.skills-container, .skills-image-section, .skills-caption, .skills-content-section, .skills-buttons');
            elementsToAnimate.forEach(element => {
                observer.observe(element);
            });
        });

        // Function to sort options alphabetically
        function sortOptions(selectId) {
            var select = document.getElementById(selectId);
            var options = select.options;
            var arr = [];

            for (var i = 1; i < options.length; i++) {
                arr.push(options[i].text);
            }

            arr.sort();

            for (var i = 1; i < options.length; i++) {
                options[i].text = arr[i - 1];
            }
        }

        // Call the sortOptions function for industry select
        sortOptions("industrySelect");

        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var chatMessage = document.querySelector('.chat-message');
            if (scrollPosition > 0) {
                chatMessage.classList.add('hidden');
            } else {
                chatMessage.classList.remove('hidden');
            }
        });

        // Function to populate qualification options based on selected industry
        function populateQualifications() {
            var industrySelect = document.getElementById("industrySelect");
            var qualificationSelect = document.getElementById("qualificationSelect");
            var industry = industrySelect.options[industrySelect.selectedIndex].text;

            // Clear existing options
            qualificationSelect.innerHTML = "";

            // Populate qualification options based on selected industry
            switch (industry) {
                case "Automotive":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate II in Automotive Electrical Technology - AUR20420">Certificate II in Automotive Electrical Technology - AUR20420</option>
                    <option value="Certificate II in Automotive Servicing Technology - AUR20520">Certificate II in Automotive Servicing Technology - AUR20520</option>
                    <option value="Certificate II in Split Air-conditioning and Heat Pump Systems – UEE20120">Certificate II in Split Air-conditioning and Heat Pump Systems – UEE20120</option>
                    <option value="Certificate III in Automotive Body Repair Technology – AUR32120">Certificate III in Automotive Body Repair Technology – AUR32120</option>
                    <option value="Certificate III in Automotive Diesel Engine Technology – AUR31520">Certificate III in Automotive Diesel Engine Technology – AUR31520</option>  
                    <option value="Certificate III in Automotive Electrical Technology – AUR30320">Certificate III in Automotive Electrical Technology – AUR30320</option>
                    <option value="Certificate III in Automotive Refinishing Technology – AUR32420">Certificate III in Automotive Refinishing Technology – AUR32420</option>
                    <option value="Certificate III in Heavy Commercial Vehicle Mechanical Technology – AUR31120">Certificate III in Heavy Commercial Vehicle Mechanical Technology – AUR31120</option>
                    <option value="Certificate III in Light Vehicle Mechanical Technology – AUR30620">Certificate III in Light Vehicle Mechanical Technology – AUR30620</option>
                    <option value="Certificate III in Mobile Plant Technology – AUR31220">Certificate III in Mobile Plant Technology – AUR31220</option>
                    <option value="Certificate III in Motorcycle Mechanical Technology – AUR30820">Certificate III in Motorcycle Mechanical Technology – AUR30820</option>
                    <option value="Certificate IV in Automotive Body Repair Technology – AUR40720">Certificate IV in Automotive Body Repair Technology – AUR40720</option>
                    <option value="Certificate IV in Automotive Electrical Technology – AUR40620">Certificate IV in Automotive Electrical Technology – AUR40620</option>
                    <option value="Certificate IV in Automotive Mechanical Diagnosis – AUR40216">Certificate IV in Automotive Mechanical Diagnosis – AUR40216</option>
                    <option value="Certificate IV in Automotive Mechanical Overhauling – AUR40820">Certificate IV in Automotive Mechanical Overhauling – AUR40820</option>
                    <option value="Diploma of Automotive Management – AUR50116">Diploma of Automotive Management – AUR50116</option>
                    <option value="Diploma of Automotive Technology – AUR50216">Diploma of Automotive Technology – AUR50216</option>
                `;
                    break;
                case "Building & Construction":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>
                    <option value="Certificate I in Construction (Carpentry) - CPC10111">Certificate I in Construction (Carpentry) - CPC10111</option>
                    <option value="Certificate I in Construction Pathways - CPC10111">Certificate I in Construction Pathways - CPC10111</option>
                    <option value="Certificate I in Construction (General Construction) - CPC10111">Certificate I in Construction (General Construction) - CPC10111</option>
                    <option value="Certificate I in Construction (Foundation) - CPC10111">Certificate I in Construction (Foundation) - CPC10111</option>
                    <option value="Certificate I in Construction (Carpentry and Joinery Pre-Apprenticeship) - 22338VIC">Certificate I in Construction (Carpentry and Joinery Pre-Apprenticeship) - 22338VIC</option>
                    <option value="Certificate I in Construction (Carpentry) - CPC10111">Certificate I in Construction (Carpentry) - CPC10111</option>
                    <option value="Certificate I in Construction (General) - 52824WA">Certificate I in Construction (General) - 52824WA</option>
                    <option value="Certificate I in Construction (Pathway to Building and Construction) - 52824WA">Certificate I in Construction (Pathway to Building and Construction) - 52824WA</option>
                    <option value="Certificate I in Construction (Carpentry) - CPC10111">Certificate I in Construction (Carpentry) - CPC10111</option>
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>  
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>
                `;
                    break;
                case "Business & Finance":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Business – BSB60120">Advanced Diploma of Business – BSB60120</option>
                    <option value="Advanced Diploma of Leadership and Management – BSB60420">Advanced Diploma of Leadership and Management – BSB60420</option>
                    <option value="Advanced Diploma of Program Management – BSB60720">Advanced Diploma of Program Management – BSB60720</option>
                    <option value="Certificate III in Business – BSB30120">Certificate III in Business – BSB30120</option>
                    <option value="Certificate III in Entrepreneurship and New Business – BSB30220">Certificate III in Entrepreneurship and New Business – BSB30220</option>
                    <option value="Certificate IV in Business – BSB40120">Certificate IV in Business – BSB40120</option>
                    <option value="Certificate IV in Entrepreneurship and New Business – BSB40320">Certificate IV in Entrepreneurship and New Business – BSB40320</option>
                    <option value="Certificate IV in Leadership and Management – BSB40520">Certificate IV in Leadership and Management – BSB40520</option>
                    <option value="Certificate IV in Project Management Practice – BSB40920">Certificate IV in Project Management Practice – BSB40920</option>
                    <option value="Diploma of Business – BSB50120">Diploma of Business – BSB50120</option>
                    <option value="Diploma of Human Resources Management – BSB50320">Diploma of Human Resources Management – BSB50320</option>
                    <option value="Diploma of Leadership and Management – BSB50420">Diploma of Leadership and Management – BSB50420</option>
                    <option value="Diploma of Marketing and Communication – BSB50620">Diploma of Marketing and Communication – BSB50620</option>
                    <option value="Diploma of Quality Auditing – BSB50920">Diploma of Quality Auditing – BSB50920</option>
                    <option value="Diploma of Work Health and Safety – BSB51319">Diploma of Work Health and Safety – BSB51319</option>
                    <option value="Graduate Diploma of Management (Learning) - BSB80120">Graduate Diploma of Management (Learning) - BSB80120</option>
                    <option value="Graduate Diploma of Portfolio Management – BSB80220">Graduate Diploma of Portfolio Management – BSB80220</option>
                    <option value="Graduate Diploma of Strategic Leadership – BSB80320">Graduate Diploma of Strategic Leadership – BSB80320</option>
                `;
                    break;
                case "Civil Construction":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate III in Civil Construction (General) – RII30920">Certificate III in Civil Construction (General) – RII30920</option>
                    <option value="Certificate III in Civil Construction Plant Operations – RII30820">Certificate III in Civil Construction Plant Operations – RII30820</option>
                    <option value="Certificate IV in Civil Construction – RII40720">Certificate IV in Civil Construction – RII40720</option>
                `;
                    break;
                case "Community Services":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Community Sector Management - CHC62015">Advanced Diploma of Community Sector Management - CHC62015</option>
                    <option value="Certificate III in Early Childhood Education and Care – CHC30121">Certificate III in Early Childhood Education and Care – CHC30121</option>
                    <option value="Certificate III in Individual Support - CHC33021">Certificate III in Individual Support - CHC33021</option>
                    <option value="Certificate IV in Ageing Support – CHC43015">Certificate IV in Ageing Support – CHC43015</option>
                    <option value="Certificate IV in Career Development – CHC41215">Certificate IV in Career Development – CHC41215</option>
                    <option value="Diploma of Community Services – CHC52021">Diploma of Community Services – CHC52021</option>
                    <option value="Diploma of Early Childhood Education and Care – CHC50121">Diploma of Early Childhood Education and Care – CHC50121</option>
                    <option value="Graduate Certificate in Career Development Practice – CHC81315">Graduate Certificate in Career Development Practice – CHC81315</option>
                `;
                    break;
                case "Engineering":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Engineering – MEM60122">Advanced Diploma of Engineering – MEM60122</option>
                    <option value="Certificate III in Engineering – Fabrication Trade – MEM31922">Certificate III in Engineering – Fabrication Trade – MEM31922</option>
                    <option value="Certificate III in Engineering – Mechanical Trade – MEM30219">Certificate III in Engineering – Mechanical Trade – MEM30219</option>
                    <option value="Certificate IV in Engineering – MEM40119">Certificate IV in Engineering – MEM40119</option>
                    <option value="Diploma of Engineering – Advanced Trade – MEM50119">Diploma of Engineering – Advanced Trade – MEM50119</option>
                    <option value="Diploma of Engineering – Technical – MEM50222">Diploma of Engineering – Technical – MEM50222</option>
                `;
                    break;
                case "Hair & Beauty":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate II in Salon Assistant – SHB20216">Certificate II in Salon Assistant – SHB20216</option>
                    <option value="Certificate III in Barbering – SHB30516">Certificate III in Barbering – SHB30516</option>
                    <option value="Certificate III in Beauty Services – SHB30121">Certificate III in Beauty Services – SHB30121</option>
                    <option value="Certificate III in Hairdressing – SHB30416">Certificate III in Hairdressing – SHB30416</option>
                    <option value="Certificate III in Make-Up – SHB30221">Certificate III in Make-Up – SHB30221</option>
                    <option value="Certificate III in Nail Technology – SHB30321">Certificate III in Nail Technology – SHB30321</option>
                    <option value="Certificate IV in Beauty Therapy – SHB40121">Certificate IV in Beauty Therapy – SHB40121</option>
                    <option value="Certificate IV in Hairdressing – SHB40216">Certificate IV in Hairdressing – SHB40216</option>
                    <option value="Diploma of Beauty Therapy – SHB50121">Diploma of Beauty Therapy – SHB50121</option>
                    <option value="Diploma of Salon Management – SHB50216">Diploma of Salon Management – SHB50216</option>
                `;
                    break;
                case "Horticulture & Land Management":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate III in Horticulture – AHC30722">Certificate III in Horticulture – AHC30722</option>
                `;
                    break;
                case "Commercial Cookery & Hospitality":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Hospitality Management – SIT60322">Advanced Diploma of Hospitality Management – SIT60322</option>
                    <option value="Certificate III in Commercial Cookery – SIT30821">Certificate III in Commercial Cookery – SIT30821</option>
                    <option value="Certificate III in Patisserie – SIT31021">Certificate III in Patisserie – SIT31021</option>
                    <option value="Certificate IV in Kitchen Management – SIT40521">Certificate IV in Kitchen Management – SIT40521</option>
                    <option value="Certificate IV in Patisserie – SIT40721">Certificate IV in Patisserie – SIT40721</option>
                    <option value="Diploma of Hospitality Management – SIT50422">Diploma of Hospitality Management – SIT50422</option>
                `;
                    break;
                case "Information Technology":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Information Technology – ICT60220">Advanced Diploma of Information Technology – ICT60220</option>
                    <option value="Diploma of Information Techonology – ICT50220">Diploma of Information Techonology – ICT50220</option>
                `;
                    break;
                case "Mining and Resources":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate III in Process Plant Operations – PMA30120">Certificate III in Process Plant Operations – PMA30120</option>
                    <option value="Certificate III in Surface Extraction Operations – RII30120">Certificate III in Surface Extraction Operations – RII30120</option>
                `;
                    break;
                case "Plumbing Services":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate III in Plumbing – CPC32420">Certificate III in Plumbing – CPC32420</option>
                    <option value="Certificate III in Roof Plumbing – CPC32620">Certificate III in Roof Plumbing – CPC32620</option>
                    <option value="Certificate IV in Plumbing and Services – CPC40920">Certificate IV in Plumbing and Services – CPC40920</option>
                `;
                    break;
                case "Security & Cleaning":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                `;
                    break;
                case "Transport & Logistics":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Diploma of Logistics – TLI50221">Diploma of Logistics – TLI50221</option>
                `;
                    break;
                case "Vocational Education & Training":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Graduate Diploma of Management (Learning) – BSB80120">Graduate Diploma of Management (Learning) – BSB80120</option>
                `;
                    break;
                case "Retail Services":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                `;
                    break;
                case "Events & Entertainment":
                    qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Certificate IV in Screen and Media – CUA41220">Certificate IV in Screen and Media – CUA41220</option>
                    <option value="Diploma of Screen and Media – CUA51020">Diploma of Screen and Media – CUA51020</option>
                `;
                    break;

                default:
                    qualificationSelect.innerHTML = `<option>Select Industry First&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</option>`;
                    break;
            }
        }

        // Call populateQualifications() function when industry selection changes
        document.getElementById("industrySelect").addEventListener("change", populateQualifications);

        // Initially populate qualifications based on the default industry selection
        populateQualifications();
    </script>


</body>

</html>