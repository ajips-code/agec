<?php
// require_once('database.php');
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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
    <link rel="stylesheet" href="../css/internship.css">
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

        #popular-universities {
            padding: 50px 0;
        }

        .heading {
            margin-bottom: 50px;
        }

        .heading h2 {
            font-size: 2.5em;
            color: var(--main-color-2);
            position: relative;
        }

        .cta-button:hover {
            color: white !important;
        }

        .heading h2::after {
            content: '';
            width: 100px;
            height: 4px;
            background: var(--main-color-2);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .university-card {
            background: #fff;
            border-radius: 10px;
            padding: 70px 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }

        .university-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
        }

        .university-card img {
            width: 5em;
            height: 5em;
            margin-top: -4em;
            border-radius: 50%;
            transition: transform 0.3s ease-in-out;
        }

        .university-card:hover img {
            transform: rotate(360deg);
        }

        .desc {
            margin-top: 20px;
        }

        .desc h3 {
            font-size: 1.5em;
            color: var(--main-color-2);
            margin-bottom: 10px;
        }

        .desc p {
            font-size: 1em;
            color: var(--main-color-2);
            margin-bottom: 20px;
        }

        .btn {
            background-color: #1048c3;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #083799;
        }

        .university-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(16, 72, 195, 0.1);
            transform: rotate(45deg);
            transition: top 0.3s ease-in-out, left 0.3s ease-in-out;
        }

        .university-card:hover::before {
            top: -25%;
            left: -25%;
        }

        /* Features section styling */
        #features-section {
            padding: 5vw 8vw;
            text-align: center;
        }

        .features-title {
            font-size: 2rem;
            color: var(--main-color-2);
            margin-bottom: 1rem;
        }

        .features-description {
            font-size: 1.2rem;
            color: var(--main-color-2);
            margin-bottom: 2rem;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 1rem;
        }

        .feature-box {
            background: var(--main-color-4);
            padding: 1.5rem;
            border-radius: 0.5rem;
            text-align: center;
            justify-content: center;
            border: 1px solid var(--main-color-5);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-box i {
            font-size: 4.3rem;
            text-align: center;
            color: var(--main-color-2);
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--main-color-6);
        }

        .feature-title {
            font-size: 1.5rem;
            margin: 1rem 0;
            color: var(--main-color-2);
        }

        .feature-description {
            font-size: 1rem;
            color: var(--main-color-2);
        }

        #courses-section {
            padding: 5vw 8vw;
            text-align: center;
        }

        .courses-title {
            font-size: 2rem;
            color: var(--main-color-2);
            margin-bottom: 1rem;
        }

        .courses-description {
            font-size: 1.2rem;
            color: var(--main-color-2);
            margin-bottom: 2rem;
        }

        .courses-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 4.5rem;
        }

        .course-card {
            background: var(--main-color-4);
            border-radius: 0.5rem;
            overflow: hidden;
            position: relative;
            text-align: left;
            border: 1px solid var(--main-color-5);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
        }

        .course-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .course-details {
            padding: 1rem;
        }

        .course-rating {
            display: flex;
            align-items: center;
            gap: 0.2rem;
        }

        .course-rating i {
            color: var(--main-color-1);
        }

        .course-cost {
            background-color: var(--main-color-2);
            color: var(--main-color-4);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            position: absolute;
            right: 1rem;
            bottom: 5rem;
        }

        #registration-section {
            padding: 6vw 8vw;
            background: linear-gradient(var(--main-color-2), rgba(81, 91, 233, 0.5)), url("../images/signup.jpg");
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .registration-reminder {
            color: var(--main-color-4);
            text-align: left;
            font-weight: 800;
        }

        .registration-reminder p {
            color: var(--main-color-4);
            text-align: left;
            font-size: 24px;
        }

        .registration-reminder h1 {
            color: var(--main-color-4);
            font-weight: 800;
        }

        .registration-timer {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .time-box {
            background: rgba(255, 255, 255, 0.25);
            padding: 2rem;
            border-radius: 0.5rem;
            text-align: center;
            font-size: 1.4rem;
            font-weight: bold;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }

        .registration-form {
            background: var(--main-color-4);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            text-align: left;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .registration-form input {
            padding: 0.8rem;
            border: 1px solid var(--main-color-2);
            border-radius: 0.5rem;
        }

        .registration-form input::placeholder {
            color: #413c3c;
            font-weight: 500;
        }

        .form-buttons {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .form-btn-yellow {
            background: var(--main-color-1);
            color: var(--main-color-4);
            padding: 0.8rem 2rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .form-btn-yellow:hover {
            background: var(--main-color-6);
            color: var(--main-color-4);
        }

        #experts-section {
            padding: 8vw 8vw;
            text-align: center;
        }

        .experts-title {
            font-size: 2rem;
            color: var(--main-color-2);
            margin-bottom: 1rem;
        }

        .experts-description {
            font-size: 1.2rem;
            color: var(--main-color-2);
            margin-bottom: 2rem;
        }

        .experts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }

        .expert-profile {
            background: var(--main-color-4);
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: box-shadow 0.3s;
        }

        .expert-profile:hover {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .expert-links {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1rem;
        }

        .expert-links i {
            border: 1px solid var(--main-color-2);
            padding: 0.5rem;
            border-radius: 50%;
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
        }

        .expert-links i:hover {
            background: var(--main-color-2);
            color: var(--main-color-4);
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }

        .button-primary {
            background-color: var(--main-color-2);
            color: var(--main-color-4);
        }

        .button-primary:hover {
            background-color: var(--main-color-6);
            color: var(--main-color-4);
        }

        .button-secondary {
            background-color: var(--main-color-1);
            color: var(--main-color-4);
        }

        .button-secondary:hover {
            background-color: var(--main-color-6);
            color: var(--main-color-4);
        }

        @media screen and (min-width: 1400px) {
            .search-container {
                display: flex;
                width: 100%;
                max-width: 600px;
                margin-left: 435px;
                padding: 5px;
            }
        }

        .search-input {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-right: none;
            border-radius: 4px 0 0 4px;
        }

        .search-button {
            padding: 5px 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-left: none;
            border-radius: 0 4px 4px 0;
            background-color: #7bff00;
            color: black;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #e67000;
        }

        input[type="text"] {
            height: 40px !important;
        }

        .person-image {
            margin-right: 25px !important;
            margin-bottom: 45px !important;
        }
    </style>

</head>

<body>

    <!-- <div class="colorlib-loader"></div> -->
    <div id="page">
        <?php include 'navigation.php'; ?>
    </div>
    <div class="banner">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3">
                    <div class="text-center r-inner-banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content">
        <h2>Get your dream  <b class="bolder-trusted">Courses</b> with<br><b class="bolder-trusted">"</b><b class="gold" style="color:#D1A730; font-family: 'Bell MT'; font-weight:bolder;">Australia <b class="bolder-trusted">Trusted</b> Education Consultancy</b><b class="bolder-trusted">"</b></h2>
        <div class="intro" id="intro">
            <!-- <select id="countrySelect">
                <option>Select Country</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
                <option value="Other Countries">Other Countries</option>
            </select>
            <select id="industrySelect">
                <option>Select Industry</option>
                <option value="Health Care">Health Care</option>
                <option value="Hospitality">Hospitality</option>
                <option value="Construction">Construction</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Automotive">Automotive</option>
                <option value="Social Work">Social Work</option>
                <option value="Entertaiment">Entertaiment</option>
                <option value="Sales and Marketing">Sales and Marketing</option>
                <option value="Hair & Beauty">Hair & Beauty</option>
                <option value="Education">Education</option>
                <option value="Entertaiment">Entertaiment</option>
                <option value="Finance">Finance</option>
                <option value="Information Technology">Information Technology</option>
                <option value="Others">Others</option>
            </select>
            <select id="qualificationSelect">
                <option>Select Jobs</option>
            </select> -->
            <a href="germany_programme-form.php" class="cta-button">Select Your Germany Programme Now!!</a>
            <p>Explore top-tier courses and unlock new opportunities for your future</p>
            <div class="wa-header" style="z-index: 999; position: relative;"><a id="custom-whatsapp-btn" class="btn-whatsapp-custom" style="display: inline-flex; align-items: center; background-color: #4F6367; margin-top:-40px;color: white; border-radius: 50px; padding: 10px 20px; text-decoration: none; font-size: 16px; margin-bottom: 30px;" href="https://api.whatsapp.com/send?phone=+61420402142&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!" target="_blank">
                    <i class="bi bi-whatsapp"></i> Message us on WhatsApp
                </a>
            </div>
            <!-- <div class="image-section">
                <img src="../images/missnana-removebg-preview.png" alt="Nana Saragih" class="person-image">
                <div class="caption">Ir Nana Saragih<br>Indonesia Representative</div>
            </div> -->
        </div>
    </main>
    <!-- <main class="main-content" style="margin-top: 60px;">
        <h2>Select your Dream Courses<br>
            <h1 class="tittle" style="color: #D1A730" ;><b class="bolder-trusted">"</b>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants<b class="bolder-trusted">"</b></h1>
        </h2>
        <div class="intro">
            <select id="countrySelect">
                <option>Select Country</option>
                <option value="Australia">Australia</option>
                <option value="Singapore">Singapore</option>
                <option value="Germany">Germany</option>
                <option value="Canada">Canada</option>
                <option value="France">France</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
                <option value="Sweden">Sweden</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Hungary">Hungary</option>
                <option value="Russia">Russia</option>
                <option value="Europe">Europe</option>
                <option value="Others">Others</option>
            </select>
            <select id="universitySelect">
                <option value="">Select University</option>
                <option value="The University of Melbourne">The University of Melbourne</option>
                <option value="The University of Sydney">The University of Sydney</option>
                <option value="Australian National University">Australian National University (ANU)</option>
                <option value="The University of Queensland">The University of Queensland (UQ)</option>
                <option value="Monash University">Monash University</option>
                <option value="The University of New South Wales">The University of New South Wales (UNSW Sydney)</option>
                <option value="The University of Western Australia">The University of Western Australia (UWA)</option>
                <option value="University of Technology Sydney">University of Technology Sydney (UTS)</option>
                <option value="University of Adelaide">University of Adelaide</option>
                <option value="University of Wollongong">University of Wollongong</option>
                <option value="Queensland University of Technology">Queensland University of Technology (QUT)</option>
                <option value="Griffith University">Griffith University</option>
                <option value="Macquarie University">Macquarie University</option>
                <option value="RMIT University">RMIT University</option>
                <option value="Curtin University">Curtin University</option>
                <option value="Deakin University">Deakin University</option>
                <option value="University of Newcastle">University of Newcastle</option>
                <option value="University of Tasmania">University of Tasmania</option>
                <option value="La Trobe University">La Trobe University</option>
                <option value="Swinburne University of Technology">Swinburne University of Technology</option>
                <option value="Other University">Other University</option>
            </select>
            <select id="qualificationSelect" onchange="updateCourses()">
                <option value="">Select Qualification</option>
                <option value="MBA">MBA</option>
                <option value="Trade Courses">Trade Courses</option>
                <option value="TAFE">TAFE</option>
                <option value="Certificate and Diplomas">Certificate and Diplomas</option>
                <option value="Other Qualification">Other Qualification</option>
            </select>
            <select id="courseSelect">
                <option value="">Select Course</option>
            </select>

            <div class="image-section">
                <img src="../images/missnana-removebg-preview.png" alt="Nana Saragih" class="person-image">
                <div class="caption">Ir Nana Saragih<br>Indonesia Representative</div>
            </div>
        </div>
        <div class="button-courses mt-4" style="margin-top:50px;">
            <a href="courses-form.php" class="cta-button">Take your Challanges</a>
        </div>
    </main> -->

    <!-- Features section ends from here -->

    <section id="courses-section">
        <h1>Our Popular Courses</h1>
        <p>Explore a wide range of courses to enhance your career</p>

        <div class="courses-container">
            <div class="course-card">
                <img src="../images/mba.webp" alt="MBA">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>MBA</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/engineering.jpg" alt="Engineering">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>Engineering</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/medicine.jpg" alt="Medicine">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>Medicine</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/design.jpeg" alt="Design">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>Design</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/tafe.webp" alt="TAFE">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>TAFE</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/trade-course.jpg" alt="Trade Courses">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>Trade Courses</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>

            <div class="course-card">
                <img src="../images/others.jpg" alt="Other Qualifications">
                <div class="course-details">
                    <span>Updated 21/8/22</span>
                    <h6>Other Qualifications</h6>
                    <div class="course-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(239)</span>
                    </div>
                </div>
                <div class="course-cost">$0</div>
            </div>
        </div>
    </section>

    <!-- Registration section ends from here -->

    <!-- Experts section starts from here -->
    <section id="experts-section">
        <h1>Community Experts</h1>
        <p>Meet our dedicated experts who are here to help you succeed</p>
        <div class="experts-container">
            <div class="expert-profile">
                <img src="../images/pro1.webp" alt="Ema Ernik">
                <h6>Ema Ernik</h6>
                <p>Python & Algorithms Expert</p>
                <div class="expert-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="expert-profile">
                <img src="../images/pro2.webp" alt="John Doe">
                <h6>John Doe</h6>
                <p>Data Science & AI Specialist</p>
                <div class="expert-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="expert-profile">
                <img src="../images/pro3.webp" alt="Jane Smith">
                <h6>Jane Smith</h6>
                <p>Web Development Guru</p>
                <div class="expert-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="expert-profile">
                <img src="../images/pro4.webp" alt="Robert Brown">
                <h6>Robert Brown</h6>
                <p>Cybersecurity Expert</p>
                <div class="expert-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Repeat for other experts -->

        </div>
    </section>

    <!-- Experts section ends from here -->

    <div id="colorlib-services">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                    <h2>Popular Countries For Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="caus">
                        <span class="">
                            <img src="../images/australia.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Australia</h3>
                            <p class="pcountry">Australia is currently the third most popular destination for international students in the English-speaking world, behind the United States and the UK. Many international students choose to study there because of the cultural diversity, friendly natives, and high quality of education.<br><br>
                                <a href="./countries/australia.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="ccan">
                        <span class="">
                            <img src="../images/canada.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Canada</h3>
                            <p class="pcountry">Canada is a bilingual country, which makes studying here an excellent opportunity to develop your language skills and boost your prospects for an interesting career. Coursework in French and English is an integral part of Canada's educational system, which enriches its cultural and community life.<br><br>
                                <a href="./countries/canada.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cpol">
                        <span class="">
                            <img src="https://static.vecteezy.com/system/resources/previews/015/126/611/non_2x/singapore-3d-rounded-flag-with-transparent-background-free-png.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Singapore</h3>
                            <p class="pcountry">More and more students each year are choosing to study abroad in Indonesia. These students are drawn to its high-quality education institutions, low tuition fees, and equally low cost of living. Indonesia has been a nation of survivors since the foundation of the first Polish state more than 1,000 years ago.<br><br>
                                <a href="./countries/singapore.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cger">
                        <span class="">
                            <img src="../images/germany.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Germany</h3>
                            <p class="pcountry">There are many reasons why a student finds Germany to be the ideal foreign destination for higher studies. The quality of higher education in Germany is among the best in the world. Germany itself has become synonymous with high quality. The long tradition of education in Germany is widely respected.<br><br>
                                <a href="./countries/germany.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cuk">
                        <span class="">
                            <img src="../images/united-kingdom.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Uk</h3>
                            <p class="pcountry">UK higher education degrees and qualifications are recognised by employers and academics worldwide. Students get the opportunity to develop the skills, knowledge, critical thinking, and connections to drive forward their careers.They also have a reputation for world-class research.<br><br>
                                <a href="./countries/uk.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cfra">
                        <span class="">
                            <img src="../images/france.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>France</h3>
                            <p class="pcountry">France is the ideal place to study abroad for your degree thanks to its rich culture, gastronomy, architecture, and thriving student life! Studying in France gives you the opportunity to learn the language and gain cultural perspective.<br><br>
                                <a href="./countries/france.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cusa">
                        <span class="">
                            <img src="../images/united-states.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Usa</h3>
                            <p class="pcountry">The United States is the number one and largest destination for international students seeking higher education overseas. The education system in USA is the most versatile and flexible higher education system for international students in the world.<br><br>
                                <a href="./countries/usa.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cswe">
                        <span class="">
                            <img src="../images/sweden.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Sweden</h3>
                            <p class="pcountry">Studying in Sweden is different from studying in other countries because Swedish universities have an open climate with a strong focus on group work. The Swedish education system focuses more on your academic interests than pushing you to achieve a grade.<br><br>
                                <a href="./countries/sweden.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cmal">
                        <span class="">
                            <img src="../images/newzealand.jpg" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>New Zealand</h3>
                            <p class="pcountry">New Zealand offers international students many options of quality education programmes at an affordable cost. In addition, Malaysia is becoming a preferred country for foreign investment in the higher education sector. Due to all these reasons, students want to study in Malaysia to further their dreams.<br><br>
                                <a href="./countries/newzealand.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="chun">
                        <span class="">
                            <img src="../images/hungary.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Hungary</h3>
                            <p class="pcountry">Hungarian higher education has gained great credibility over the years in, among other things, it's very strong tradition in the sciences. Beyond high-quality education, Hungary also offers a lively and welcoming culture, a fascinating history and beautiful cities.<br><br>
                                <a href="./countries/hungary.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="cchi">
                        <span class="">
                            <img src="../images/rusian.jpg" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Rusia</h3>
                            <p class="pcountry">Merging the knowledge of both Rusia and their home countries will give students an advantage to explore potential opportunities in China for the future. China has become one of the most popular study abroad destinations for international students because of its long history and exciting culture.<br><br>
                                <a href="./countries/rusia.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <div class="services rcountry" id="clit">
                        <span class="">
                            <img src="../images/europe.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Europe</h3>
                            <p class="pcountry">A degree from Europe will help you gain a job all over the world. Lithuania is one of the best places to pursue higher education. It also has many places for tourist attractions to occupy your free time. Living cost is less comparable to other EU countries.<br><br>
                                <a href="./countries/europe.html" class="btn btn-primary">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="popular-universities">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center heading" style="margin-bottom: 100px;">
                    <h2>Popular Universities for Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/anu.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Australian National University</h3>
                            <p class="university-info">The Australian National University is a world-leading university in Australia’s capital city, Canberra, known for its research and teaching excellence.<br><br>
                                <a href="https://www.anu.edu.au" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/unimelb.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>The University of Melbourne</h3>
                            <p class="university-info">The University of Melbourne is a public research university located in Melbourne, Australia. It offers a comprehensive range of programs and is renowned for its academic and research excellence.<br><br>
                                <a href="https://www.unimelb.edu.au" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/usyd.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>The University of Sydney</h3>
                            <p class="university-info">The University of Sydney is a public research university in Sydney, Australia. It is known for its vibrant campus life, diverse programs, and significant research output.<br><br>
                                <a href="https://www.sydney.edu.au" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/uqueensland.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>The University of Queensland</h3>
                            <p class="university-info">The University of Queensland is a public research university located primarily in Brisbane, Australia. It offers a wide range of undergraduate and postgraduate programs and is known for its high-quality research.<br><br>
                                <a href="https://www.uq.edu.au" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/MIT.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>MIT</h3>
                            <p class="university-info">The Massachusetts Institute of Technology is a world leader in research and education, known for its strong engineering, computer science, and business programs.<br><br>
                                <a href="https://www.mit.edu" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/standford.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Stanford</h3>
                            <p class="university-info">Stanford University is renowned for its entrepreneurial character, vibrant campus, and proximity to Silicon Valley. It excels in engineering, business, and law.<br><br>
                                <a href="https://www.stanford.edu" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/harvard.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Harvard</h3>
                            <p class="university-info">Harvard University, one of the world's most prestigious institutions, offers top-tier programs in law, business, medicine, and the arts and sciences.<br><br>
                                <a href="https://www.harvard.edu" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/cambridge.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Cambridge</h3>
                            <p class="university-info">The University of Cambridge is known for its rigorous academics and strong research programs in various fields, including science, technology, and humanities.<br><br>
                                <a href="https://www.cam.ac.uk" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/oxford.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Oxford</h3>
                            <p class="university-info">The University of Oxford is one of the oldest and most respected universities globally, offering excellent programs in the arts, sciences, and business.<br><br>
                                <a href="https://www.ox.ac.uk" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/berkeley.svg" style="width:5em;height: 5 em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>UC Berkeley</h3>
                            <p class="university-info">The University of California, Berkeley is a top public university known for its research output and strong programs in engineering, business, and environmental sciences.<br><br>
                                <a href="https://www.berkeley.edu" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/imperial.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>Imperial College London</h3>
                            <p class="university-info">Imperial College London is a public research university in London, known for its science, engineering, medicine, and business courses.<br><br>
                                <a href="https://www.imperial.ac.uk" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="university-card">
                        <span>
                            <img src="../images/zurich.png" style="width:5em;height: 5em;margin-top: -4em;">
                        </span>
                        <div class="desc">
                            <h3>ETH Zurich</h3>
                            <p class="university-info">ETH Zurich is one of the leading international universities for technology and the natural sciences, known for its cutting-edge research and innovation.<br><br>
                                <a href="https://www.ethz.ch" class="btn btn-primary" target="_blank">Know More..</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section id="testimonials-section">
        <p class="testimonials-subtitle" style="margin-top:150px; text-align: center; font-family: 'Montserrat', sans-serif; font-size: 30px; font-weight: 400; color:#00335c">Testimonials</p>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <p class="testimonial-text">The courses provided were extremely comprehensive and well-structured. I gained a lot of practical knowledge.</p>
                <div class="testimonial-author">
                    <img src="../images/author1.jpg" alt="Dorothy Palmer" class="author-img">
                    <p class="author-name">Dorothy Palmer</p>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">I was able to secure a job right after completing my course. The support from the faculty was exceptional.</p>
                <div class="testimonial-author">
                    <img src="../images/author2.jpg" alt="Randy Tran" class="author-img">
                    <p class="author-name">Randy Tran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">The learning environment was very encouraging, and the resources were top-notch. Highly recommended!</p>
                <div class="testimonial-author">
                    <img src="../images/author3.jpg" alt="Amy Turner" class="author-img">
                    <p class="author-name">Amy Turner</p>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">Great experience! The practical approach to teaching helped me understand the concepts better.</p>
                <div class="testimonial-author">
                    <img src="../images/author4.jpg" alt="Endang Everdeen" class="author-img">
                    <p class="author-name">Endang Everdeen</p>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">The faculty members were very knowledgeable and always available to help. I highly appreciate their efforts.</p>
                <div class="testimonial-author">
                    <img src="../images/student-eka.png" alt="Eka" class="author-img">
                    <p class="author-name">Eka</p>
                </div>
            </div>
        </div>
    </section>



    <div id="colorlib-contact" style="margin-top: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2 style="text-align: center; font-family: Montserrat;font-size: 30px;font-weight: 400; color:#00335c">Give Feedback</h2>
                    <form method="POST" action="feed.php" autocomplete="off" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your mail" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Your occupation" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
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
    <script src="../js/floating_wa.js"></script>


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
        const courses = {
            "MBA": ["Social Services", "Psychology",
                "Nursing",
                "Dentistry",
                "Business",
                "Cyber Security",
                "Computer Science",
                "Accounting",
                "Architecture",
                "Teaching",
                "Automotive",
                "Tourism and Hospitality Management",
                "Physiotherapy", "MBA", "Top MBA Colleges", "MBA Colleges", "Executive MBA Colleges", "MBA Exams", "CAT", "MAT", "Online MBA", "MBA College Predictors"
            ],
            "Engineering": ["Community Service", "Civil Construction", "Nursing", "Automotive", "Tourism and Hospitality Management", "Aged care and Disability Support", "Business", "Journalism", "Psychology", "Accounting", "Information Technology", "Education and Teaching", "Midwifery", "Counselling"],
            "Engineering": ["Engineering", "Top Engineering Colleges", "Engineering Colleges", "Engineering Exams", "JEE Main", "JEE Advanced", "Engineering College Predictors"],
            "Medicine": ["NEET UG", "NEET PG", "NEET SS", "NEET MDS", "INI CET", "FMGE", "AIAPGET", "Top Medical Colleges", "Medical Colleges", "Medical Exams"],
            "Design": ["Fashion Designing", "Interior Design", "Graphic Design", "Jewellery Design", "Web Design", "Furniture Design", "Game Design", "Product Design", "Textile Design", "Visual Merchandising", "Ceramic & Glass Design", "Film & Video Design", "UI/UX", "Footwear Design", "Automotive Design", "Communication Design", "Apparel Design", "Exhibition Design", "Information Design", "Knitwear Design", "Leather Design", "Toy Design", "Lifestyle Accessory Design"],
            "TAFE": ["Accounting", "Business and Management", "Animal Care and Aquaculture", "Automotive and Engineering", "Aviation", "Building and Construction", "Creative Industries", "Digital Media and Information Technology", "Early Childhood Education and Community Services", "Health and Beauty", "Hospitality", "Cookery and Tourism", "Land and Environmental Management", "Maritime", "Nursing"],
            "Trade Courses": [
                "Beauty Therapy",
                "Massage Therapist",
                "Salon Management",
                "Hairdressing",
                "Painting and Decorating",
                "Automotive",
                "Finance and Mortgage Broking",
                "Real Estate",
                "Meat Processing",
                "Early Childcare",
                "Training and Assessment",
                "Nail Technology",
                "Fitness",
                "Commercial Cookery",
                "Baking",
                "Patisserie",
                "Retail Management",
                "Ageing Support",
                "Disability",
                "Mental Health",
                "Early Childhood",
                "Carpentry",
                "Bricklaying",
                "Concreting",
                "Building and Construction",
                "Plumbing",
                "Demolition",
                "Roof Tiling",
                "Landscape Construction",
                "Wall and Floor Tiling"
            ],
            "Other Qualification": ["Animation", "B.Com", "B.Sc", "BBA", "CA", "Fashion Designing", "Hotel Management", "Law", "Mass Communication & Media", "MBBS"]
        };

        function updateCourses() {
            const qualificationSelect = document.getElementById('qualificationSelect');
            const courseSelect = document.getElementById('courseSelect');
            const selectedQualification = qualificationSelect.value;

            courseSelect.innerHTML = '<option value="">Select Course</option>'; // Clear previous options

            if (selectedQualification && courses[selectedQualification]) {
                courses[selectedQualification].forEach(course => {
                    const option = document.createElement('option');
                    option.value = course;
                    option.text = course;
                    courseSelect.add(option);
                });
            }

            saveSelection('qualificationSelect', selectedQualification);
            checkAllSelections();
        }

        function saveSelection(key, value) {
            localStorage.setItem(key, value);
            console.log(`Saved ${key}: ${value}`);
        }

        function loadSelection(key) {
            const value = localStorage.getItem(key);
            console.log(`Loaded ${key}: ${value}`);
            return value;
        }

        function clearSelections() {
            localStorage.removeItem('universitySelect');
            localStorage.removeItem('qualificationSelect');
            localStorage.removeItem('courseSelect');
        }

        function checkAllSelections() {
            const universitySelect = document.getElementById('universitySelect').value;
            const qualificationSelect = document.getElementById('qualificationSelect').value;
            const courseSelect = document.getElementById('courseSelect').value;

            console.log(`University: ${universitySelect}, Qualification: ${qualificationSelect}, Course: ${courseSelect}`);

            if (universitySelect && qualificationSelect && courseSelect) {
                window.location.href = 'courses-form2.php';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const universitySelect = document.getElementById('universitySelect');
            const qualificationSelect = document.getElementById('qualificationSelect');
            const courseSelect = document.getElementById('courseSelect');

            universitySelect.addEventListener('change', function() {
                saveSelection('universitySelect', universitySelect.value);
                checkAllSelections();
            });
            qualificationSelect.addEventListener('change', updateCourses);
            courseSelect.addEventListener('change', function() {
                saveSelection('courseSelect', courseSelect.value);
                checkAllSelections();
            });

            // Clear selections on page load
            clearSelections();

            // Load selections from local storage
            const savedUniversity = loadSelection('universitySelect');
            const savedQualification = loadSelection('qualificationSelect');
            const savedCourse = loadSelection('courseSelect');

            if (savedUniversity) universitySelect.value = savedUniversity;
            if (savedQualification) {
                qualificationSelect.value = savedQualification;
                updateCourses(); // Update the courses dropdown based on the loaded qualification
            }
            if (savedCourse) courseSelect.value = savedCourse;
        });


        // testimony element interactive
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.testimonial-card');

            cards.forEach(card => {
                card.addEventListener('mouseover', function() {
                    card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
                    card.style.transform = 'translateY(-10px)';
                    card.style.boxShadow = '0 8px 12px rgba(0, 0, 0, 0.2)';
                });

                card.addEventListener('mouseout', function() {
                    card.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
                });
            });
        });
    </script>


</body>

</html>