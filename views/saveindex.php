<?php
// require_once('database.php');
require_once('../controllers/database.php');

$getdata = "SELECT * FROM feedback";
$res = mysqli_query($database->connection, $getdata);
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Australian Global Education Consultancy</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<!-- favicon -->
	<link rel="shortcut icon" type="image/icon" href="images/AGEC-Logo_Full-Colour.png" />

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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="../css/laptop_view.css">
	<link rel="stylesheet" href="../css/mobile_view.css">
	<link rel="stylesheet" href="../css/desktop_view.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>

<body>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav navbar-fixed-top" role="navigation">
			<div class="upper-menu">
				<div class="container-upper">
					<div class="row justify-content-between">
						<div class="contact-icons-con-home col-lg-6 col-md-6 col-sm-12 text-left">
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
								<a href="mailto:Enroll@australianglobaleducationconsultancy.com" style="color: #0A3F7F; text-decoration: none; font-size: 17px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
									<li>
										<img src="./images/email.png" alt="Email" style="width: 23px; margin-top: 2px; height: auto;">
									</li>
								</a>
							</ul>
						</div>
						<div class="social-icons-con-home col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
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
						<div class="col-md-6">
							<div id="custom-logo"><a href="index.php"><img class="c-logo" src="images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
						</div>
						<div class="con-header-ul col-md-6 text-right menu-1">
							<ul id="ctopul">
								<li id="homeindex"><a href="index.php" style="color: black;">HOME</a></li>
								<li class="has-dropdown">
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
								<li><a href="news.php" style="color: black;">NEWS</a></li>
								<li><a href="about.php" style="color: black;">ABOUT US</a></li>
								<li><a href="contact.php" style="color: black;">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero" class="cslider" style="justify-items:center;">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/sidney5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<div class="slider-text-inner text-left">
										<h1>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants</h1>
										<h2 style="text-transform:none;">Study and Work <b>Overseas</b></h2>
										<div class="intro-select">
											<select id="countrySelect">
												<option value="">Select Country</option>
												<!-- Country options go here -->
												<option value="Australia">Australia</option>
												<!-- <option value="Singapore">Singapore</option> -->
												<option value="Germany">Germany</option>
												<option value="Others">Other Country</option>
											</select>
											<select id="serviceSelect">
												<option value="">Select Services</option>
												<option value="RPL Certification">RPL Certification</option>
												<option value="Internship">Internship</option>
												<option value="Jobs">Jobs</option>
												<option value="Tourist Visa">Tourist Visa</option>
												<option value="Working Holiday Visa">Working Holiday Visa</option>
												<option value="Business Visa">Business Visa</option>
												<option value="Hospitality">PR Assessment</option>
												<option value="Elicos">Elicos</option>
												<option value="English Course">English Course</option>
												<option value="Germany Programme">Gemany Programme</option>
												<option value="Courses">Courses</option>
												<option value="Others">Others</option>
											</select>
											<select id="nationalitySelect">
												<option value="">My Nationality</option>
												<option value="Australian">Australian</option>
												<option value="Indonesian">Indonesian</option>
												<option value="American">American</option>
												<option value="Canadian">Canadian</option>
												<option value="British">British</option>
												<option value="Australian">Australian</option>
												<option value="German">German</option>
												<option value="French">French</option>
												<option value="Italian">Italian</option>
												<option value="Spanish">Spanish</option>
												<option value="Mexican">Mexican</option>
												<option value="Brazilian">Brazilian</option>
												<option value="Japanese">Japanese</option>
												<option value="Chinese">Chinese</option>
												<option value="Indian">Indian</option>
												<option value="Russian">Russian</option>
												<option value="South Korean">South Korean</option>
												<option value="Nigerian">Nigerian</option>
												<option value="Egyptian">Egyptian</option>
												<option value="Turkish">Turkish</option>
												<option value="Argentine">Argentine</option>
												<option value="South African">South African</option>
												<option value="Others">Others</option>
											</select>
										</div>
										<!-- <h2 style="color: #ffae00; font-weight:900">Fast approval</h2> -->
										<br>
										<div class="container-low">
											<div class="row">
												<div class="col-md-7 text-right">
													<a href="popup1.php" class="btn-learn-eligible">Check My Eligibility</a>
												</div>
											</div><br>
											<!-- <div class="btn-free-quoute row mt-5">
												<div class="col-md-6 text-left">
													<a href="popup1.php" class="btn btn-primary-check btn-lg btn-learn">Get Free Quote Now!!</a>
												</div>
											</div> -->
										</div>
									</div>
									<div class="img-hero"><img src="images/student.jpg"></div>
								</div>
							</div>
						</div>
					</li>
					<!-- <li style="background-image: url(images/sidney4.jpeg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<div class="slider-text-inner text-left">
										<h1>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants</h1>
										<h2 style="text-transform:none;">Study and Work <b>Overseas</b></h2>
										<h2 style="color: #ffae00; font-weight:900">Fast approval</h2>
										<br><br>
										<p><a href="popup1.php" class="btn btn-primary btn-lg btn-learn">Get Free Quote Now!!</a></p>
									</div>
									<div class="img-hero"><img src="images/student.jpg"></div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/sidney3.jpeg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<div class="slider-text-inner text-left">
										<h1>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants</h1>
										<h2 style="text-transform:none;">Study and Work <b>Overseas</b></h2>
										<h2 style="color: #ffae00; font-weight:900">Fast approval</h2>
										<br><br>
										<p><a href="popup1.php" class="btn btn-primary btn-lg btn-learn">Get Free Quote Now!!</a></p>
									</div>
									<div class="img-hero"><img src="images/student.jpg"></div>
								</div>
							</div>
						</div>
					</li> -->
				</ul>
			</div>
		</aside>
	</div>
	<section id="main-services mt-3" style="font-family: 'Quicksand', serif;">
		<div class="heading-services">
			<h1 style="color: #00335c; font-weight:900">Select Your Dream Destination With <b style="color: #D1A730; font-weight:900">Australia Global Education Consultancy</b></h1>
		</div>
		<ul class="cards_service">
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/services-1.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">RPL CERTIFICATION</h2>
						<p class="card_text">Through our comprehensive RPL certificate program, we offer individuals the opportunity to demonstrate their proficiency in specific areas and attain recognized qualifications without the need for traditional coursework, enabling them to progress in their careers or pursue further education.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'rpl_certification.php';">Read More</button>
						<button class="btn-service-form card_btn" onclick="window.location.href = 'rpl_certification-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/serious-teacher-checking-assignment-two-students-scaled.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">INTERNSHIP</h2>
						<p class="card_text">With a focus on personalized support and mentorship, our internship programs are designed to meet the unique needs and aspirations of each participant, ensuring they gain valuable experiences and insights that will shape their future success.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'internship.php';">Read More</button>
						<button class="btn-service-form-internship card_btn" onclick="window.location.href = 'internship-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/instructor-explaining-corporate-software-specific-intern-scaled.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">JOBS</h2>
						<p class="card_text">We are committed to assisting individuals in their quest for international employment, connecting them with reputable employers and organizations worldwide that align with their skills, aspirations, and career goals.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'jobs.php';">Read More</button>
						<button class="btn-service-form-jobs card_btn" onclick="window.location.href = 'jobs-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/woman-traveling-around-world-scaled.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">TOURIST VISA</h2>
						<p class="card_text">Our specialized services focus on facilitating tourist visa applications and guiding individuals through the intricacies of the process to ensure a seamless and hassle-free experience for their travel plans.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'tourist_visa.php';">Read More</button>
						<button class="btn-service-form-tourist-visa card_btn" onclick="window.location.href = 'tourist_visa-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/Working-Holiday-Visas.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">WORKING HOLIDAY VISA</h2>
						<p class="card_text">Our specialized services cater to individuals seeking to explore new countries and cultures while gaining valuable work experience through working holiday visas, offering comprehensive support throughout the application process.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'working_holiday_visa.php';">Read More</button>
						<button class="btn-service-form-working-holiday-visa card_btn" onclick="window.location.href = 'working_holiday_visa-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/business-visa.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">BUSINESS VISA</h2>
						<p class="card_text">The business visa in Australia facilitates business activities for visitors, investors, and entrepreneurs. It enables participation in meetings, exploring investment prospects, and attending conferences. Requirements differ based on visa type and intended activities, serving as a vital tool for business engagement and networking in Australia.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'business_visa.php';">Read More</button>
						<button class="btn-service-form card_btn" onclick="window.location.href = 'business_visa-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/pr-assesment.png"></div>
					<div class="card_content">
						<h2 class="card_title">PR ASSESSMENT</h2>
						<p class="card_text">PR assessment involves evaluating eligibility for permanent residency in a country. It assesses factors like qualifications, work experience, language proficiency, and other criteria set by immigration authorities.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'pr_assessment.php';">Read More</button>
						<button class="btn-service-form-pr-assessment card_btn" onclick="window.location.href = 'pr_assessment-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/youngsters-embracing-posing-together-scaled.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">ELICOS</h2>
						<p class="card_text">We are dedicated to offering high-quality ELICOS courses that cater to the diverse needs and goals of students from around the world, whether they are seeking to improve their English language skills for further study, work opportunities, or personal enrichment.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'elicos.php';">Read More</button>
						<button class="btn-service-form-elicos card_btn" onclick="window.location.href = 'elicos-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/english-course.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">ENGLISH COURSES</h2>
						<p class="card_text">English courses offer structured learning programs to improve proficiency in the English language. These courses cover various aspects such as grammar, vocabulary, speaking, listening, reading, and writing skills.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'englishcourse.php';">Read More</button>
						<button class="btn-service-form-english-course card_btn" onclick="window.location.href = 'englishcourse-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/germany-program.png"></div>
					<div class="card_content">
						<h2 class="card_title">GERMANY PROGRAMME</h2>
						<p class="card_text">Germany offers diverse programs for career advancement, including language courses, academic studies, and vocational training. These programs provide opportunities for individuals to enhance their skills, pursue job-related education, and advance their careers in various fields.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'germany_programme.php';">Read More</button>
						<button class="btn-service-form-germany card_btn" onclick="window.location.href = 'germany_programme-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/medium-shot-people-library-scaled.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">COURSES</h2>
						<p class="card_text">Through our tailored RPL courses, we empower individuals to leverage their existing competencies and achievements, enabling them to fast-track their educational journey and achieve formal qualifications that align with their career goals.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'courses.php';">Read More</button>
						<button class="btn-service-form-course card_btn" onclick="window.location.href = 'courses-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/builder-licence.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">BUILDERS LICENCE</h2>
						<p class="card_text">A builder's license is a certification required for individuals or companies engaged in construction activities, ensuring compliance with regulations and standards in the building industry.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'builders_licence.php';">Read More</button>
						<button class="btn-service-form-builders card_btn" onclick="window.location.href = 'builders_licence-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
			<li class="cards_item">
				<div class="card">
					<div class="card_image"><img src="./images/trade-licensing.jpg"></div>
					<div class="card_content">
						<h2 class="card_title">TRADE LICENSING</h2>
						<p class="card_text">Trade licensing refers to the process of obtaining official permission or authorization from relevant authorities to engage in specific trades or professions, ensuring adherence to regulations and standards within those industries.</p>
						<button class="btn-service card_btn" onclick="window.location.href = 'trade_licensing.php';">Read More</button>
						<button class="btn-service-form-trade-licence card_btn" onclick="window.location.href = 'trade_licensing-form.php';">Check My Eligibility</button>
					</div>
				</div>
			</li>
		</ul>
		</div>
	</section>

	<section id="main-jobs" class="main-jobs mt-5" style="font-family: 'Quicksand', serif; background-color: #00335c;">
		<div class="heading-jobs text-center">
			<h2>Popular Jobs</h2>
		</div>
		<div class="container">
			<ul class="cards_job">
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/medium-shot-smiley-doctor-with-coat-removebg-preview.png"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Nursing</h2>
							<p class="card_text_job">Connecting nurses with global opportunities. We streamline the process from job placement to visa acquisition, making your dream of working abroad a reality.</p>

						</div>
					</div>
				</li>
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="./images/agecare.png"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Aged Care</h2>
							<p class="card_text_job">Unlocking overseas opportunities in aged care. We handle job placement and visa logistics, making it simple for you to pursue your career abroad and overseas.
							</p>
						</div>
					</div>
				</li>
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/doctor-talking-senior-man-indoors-removebg-preview-1.png"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Care Giver</h2>
							<p class="card_text_job">Empowering care givers to explore global opportunities. We handle job placements and visa processes, making your journey to work abroad hassle-free.
							</p>

						</div>
					</div>
				</li>
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="./images/nani.png"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Nanny</h2>
							<p class="card_text_job">Connecting nurses with global opportunities. We streamline the process from job placement to visa acquisition, making your dream of working abroad a reality. Embark on a global nanny adventure with us. </p>

						</div>
					</div>
				</li>
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="./images/hospitality.png"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Hospitality</h2>
							<p class="card_text_job">Elevate your hospitality career globally with us. We streamline job placements and visa processes, opening doors to exciting opportunities abroad.</p>

						</div>
					</div>
				</li>
				<li class="cards_item_job">
					<div class="card-job">
						<div class="card_image_job"><img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/portrait-smiling-handyman-with-tools-isolated-white-wall-1-scaled.jpg"></div>
						<div class="card_content_job">
							<h2 class="card_title_job">Construction</h2>
							<p class="card_text_job">Construct your global career with us. We facilitate job placements and support with visa processes, making it easier for you to build abroad and overseas.</p>

						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container-button d-flex" style="justify-content: center; padding-bottom: 60px;"><button class="btn-jobs card_btn"><a href="jobs.php" style="color:white;" onmouseover="this.style.color='#D1A730';" onmouseout="this.style.color='white';">See All Jobs</a></button></div>
	</section>

	<div class="heading-team d-flex">
		<h1>Our Teams</h1>
	</div>
	<div class="team-section">
		<div class="team-member">
			<div class="team-member-image">
				<img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/05/manbhir-removebg-preview.png" alt="Manbhir Singh">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Sir Marcus</p>
				<p class="team-member-role">Senior Consultant</p>
				<div class="team-member-social text-center">
					<a href="https://www.linkedin.com/in/manbhir-singh-a72865193/" class="social-link"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/manbhir.singh.75" class="social-link"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
		<div class="team-member">
			<div class="team-member-image">
				<img src="https://habibieglobal.com/wp-content/uploads/2024/05/missnana-removebg.png" alt="Ms. Nana Saragih">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Ir. Nana Saragih</p>
				<p class="team-member-role">Founder / Managing Director</p>
				<div class="team-member-social text-center">
					<a href="https://www.linkedin.com/in/nana-saragih-pt-citra-karya-gemilang-8965aa64/" class="social-link"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/Anandazefany" class="social-link"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
		<div class="team-member">
			<div class="team-member-image">
				<img src="https://habibieglobal.com/wp-content/uploads/2024/05/pujagemilang-removebg-preview.png" alt="Puja Gemilang">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Puja Gemilang</p>
				<p class="team-member-role">Similiar Recruiter</p>
				<div class="team-member-social text-center">
					<a href="https://www.linkedin.com/in/puja-gemilang-habibie-849462139/" class="social-link"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/pujagemilanghabibi" class="social-link"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
		<div class="team-member">
			<div class="team-member-image">
				<img src="https://media.licdn.com/dms/image/C5603AQFytHjEje10xg/profile-displayphoto-shrink_800_800/0/1622546381905?e=1721260800&v=beta&t=ScdHp4YRL-vq36Xoz7WIpGhurPBSFgio0X5ZVproR3M" alt="Eka Prasetya">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Ekaprasetya Artha kencana</p>
				<p class="team-member-role">Director Marketing</p>
				<div class="team-member-social text-center">
					<a href="https://www.linkedin.com/in/ekaprasetya-artha-kencana-71ab17213/" class="social-link"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/eka.prasetya.10888" class="social-link"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div id="colorlib-intro">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-4 intro-wrap">
					<div class="intro-flex">
						<div class="one-third color-1 animate-box">
							<span class="icon"><i class="flaticon-open-book"></i></span>
							<div class="desc">
								<h3>Undergraduate Program</h3>
								<p><a href="undergradcourses.html" class="view-more">View More</a></p>
							</div>
						</div>
						<div class="one-third color-2 animate-box">
							<span class="icon"><i class="flaticon-open-book"></i></span>
							<div class="desc">
								<h3>Postgraduate Program</h3>
								<p><a href="postgradcourses.html" class="view-more">View More</a></p>
							</div>
						</div>
						<div class="one-third color-3 animate-box">
							<span class="icon"><i class="flaticon-open-book"></i></span>
							<div class="desc">
								<h3>Other Courses</h3>
								<p><a href="othercourses.html" class="view-more">View More</a></p>
							</div>
						</div>
					</div>
				</div> -->
				<div class="col-md-12">
					<div class="about-desc animate-box">
						<h2 class="text-center">Welcome to Australian Global Education Consultancy</h2>
						<p class="text-center">Australian Global Education Consultancy is an education agent. We provide helps and advice to students who wants to pursue higher education abroad. </p>
						<div class="fancy-collapse-panel">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne">
										<h4 class="panel-title text-center">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose us?
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
													<p>We believe that education is a fundamental right and everyone should have access to quality higher education.We work in the best interest of both students and our partner universities and colleges. </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingTwo">
										<h4 class="panel-title text-center">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What we do?
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>We strive to create oppurtunities for those who have genuine aspiration and honest intention, who seek excellent quality in tution, student services, qualifications and career prospects post qualification.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingThree">
										<h4 class="panel-title text-center">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Services
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="panel-body">
											<ul class="fa-ul">
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="rpl_certification.php" style="text-decoration:none; color:black;">RPL Certification</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="internship.php" style="text-decoration:none; color:black;">Internship</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="jobs.php" style="text-decoration:none; color:black;">Jobs</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="tourist_visa.php" style="text-decoration:none; color:black;">Tourist Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="working_holiday_visa.php" style="text-decoration:none; color:black;">Working Holiday Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="student_visa.php" style="text-decoration:none; color:black;">Student Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="business_visa.php" style="text-decoration:none; color:black;">Business Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="pr_assessment.php" style="text-decoration:none; color:black;">PR Assessment</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="elicos.php" style="text-decoration:none; color:black;">Elicos</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="englishcourse.php" style="text-decoration:none; color:black;">English Course</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="germany_programme.php" style="text-decoration:none; color:black;">Germany Programme</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="courses.php" style="text-decoration:none; color:black;">Courses</a></li>
												<!-- <li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="builders_licence.php" style="text-decoration:none; color:black;">Builders Licence</a></li> -->
												<!-- <li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="trade_licensing.php" style="text-decoration:none; color:black;">Trade Licensing</a></li> -->
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="othercourses.php" style="text-decoration:none; color:black;">Other Courses</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
					<h2>Some Popular Countries For Study and Work</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<div class="services rcountry" id="ccan">
						<span class="">
							<img src="images/canada.png" style="width:5em;height: 5em;margin-top: -4em;">
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
					<div class="services rcountry" id="caus">
						<span class="">
							<img src="images/australia.png" style="width:5em;height: 5em;margin-top: -4em;">
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
					<div class="services rcountry" id="cger">
						<span class="">
							<img src="images/germany.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/united-kingdom.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/france.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/united-states.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/sweden.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="./images/newzealand.jpg" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/hungary.png" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/rusian.jpg" style="width:5em;height: 5em;margin-top: -4em;">
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
							<img src="images/europe.png" style="width:5em;height: 5em;margin-top: -4em;">
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

	<div class="recent-articles">
		<div class="recent-articles-tittle text-center">
			<h2>News</h2>
		</div>
		<div class="card-container-articles d-flex">
			<div class="card-articles">
				<a href="https://immi.homeaffairs.gov.au/news-media/archive/article?itemId=1187" class="card-link">
					<div class="card-image-articles">
						<img src="images/visa-australia-untuk-turis-indonesia.jpg" alt="Article 1">
					</div>
					<div class="card-content-articles">
						<h3>New Genuine Student Requirement</h3>
						<p>08 May 2024</p>
					</div>
				</a>
			</div>
			<div class="card-articles">
				<a href="https://immi.homeaffairs.gov.au/news-media/archive/article?itemId=1188" class="card-link">
					<div class="card-image-articles">
						<img src="images/australian-visa.jpg" alt="Article 2">
					</div>
					<div class="card-content-articles">
						<h3>New English Language Requirements</h3>
						<p>06 Apr 2024</p>
					</div>
				</a>
			</div>
			<div class="card-articles">
				<a href="https://immi.homeaffairs.gov.au/news-media/archive/article?itemId=1186" class="card-link">
					<div class="card-image-articles">
						<img src="images/Sandiaga1.jpeg" alt="Article 2">
					</div>
					<div class="card-content-articles">
						<h3>Systems maintenance 22-23 March 2024</h3>
						<p>06 Apr 2024</p>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/counter.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-12 col-md-offset-1">
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="counter-entry">
							<span class="icon"><i class="flaticon-book"></i></span>
							<div class="desc">
								<span class="colorlib-counter-label">More than</span>
								<span class="colorlib-counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Courses</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="counter-entry">
							<span class="icon"><i class="flaticon-student"></i></span>
							<div class="desc">
								<span class="colorlib-counter-label">More than</span>
								<span class="colorlib-counter js-counter" data-from="0" data-to="3000" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Students</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="counter-entry">
							<span class="icon" style="margin-top: 0.7em;"><i class="fas fa-university"></i></span>
							<div class="desc">
								<span class="colorlib-counter-label">More than</span>
								<span class="colorlib-counter js-counter" data-from="0" data-to="400" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Universities</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-3 animate-box">
						<div class="counter-entry">
							<span class="icon"><i class="flaticon-earth-globe"></i></span>
							<div class="desc">
								<span class="colorlib-counter-label">More than</span>
								<span class="colorlib-counter js-counter" data-from="0" data-to="5000" data-speed="5000" data-refresh-interval="50"></span>
								<span class="colorlib-counter-label">Workers</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 text-center col-md-offset-2 text-center colorlib-heading animate-box">
				<h2>What Are The People Says About Us</h2>
			</div>
		</div>
	</div>
	<!-- <div id="colorlib-testimony" class="testimony-img" style="background-image: url(images/comm.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
					<h2>What Are The People Says About Us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="row animate-box">
						<div class="owl-carousel1">
							<div class="item">
								<div class="testimony-slide">
									<div class="testimony-wrap">
										<blockquote>
											<span></span>
											<p></p>
										</blockquote>
										<div class="figure-img" style="background-image: url(images/feedback/);"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
						<li><a href="contact.php"><i class="far fa-check-circle"></i> Contact Us</a></li>
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
						<li><a href="mailto:Enroll@australianglobaleducationconsultancy.com"><i class="far fa-envelope-open"></i> Enroll@australianglobaleducationconsultancy.com</a></li>
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
				<i class="fab fa-whatsapp"></i>
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

	<script>
		const whatsappIcon = document.getElementById('whatsapp-icon');
		const whatsappTextContainer = document.querySelector('.whatsapp-text-container');

		whatsappIcon.addEventListener('click', function() {
			whatsappIcon.classList.toggle('active'); // Tambahkan atau hapus kelas 'active' saat ikon diklik
		});

		whatsappTextContainer.addEventListener('click', function(event) {
			event.stopPropagation(); // Menghentikan penyebaran klik ke atas elemen induk
			const phoneNumber = event.target.id === 'whatsapp-text' ? '+6566909266' : '+61420402142';
			const whatsappLink = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!`;
			window.location.href = whatsappLink; // Alihkan ke link WhatsApp yang sesuai
		});

		const closeButton = document.createElement('span');
		closeButton.innerHTML = '&times;';
		closeButton.className = 'whatsapp-close';
		closeButton.addEventListener('click', function(event) {
			event.stopPropagation(); // Menghentikan penyebaran klik ke atas elemen induk
			whatsappIcon.classList.remove('active'); // Hapus kelas 'active' dari ikon WhatsApp
		});
		whatsappTextContainer.appendChild(closeButton); // Tambahkan tombol close ke kontainer teks WhatsApp
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			const countrySelect = document.getElementById('countrySelect');
			const serviceSelect = document.getElementById('serviceSelect');
			const nationalitySelect = document.getElementById('nationalitySelect');

			// Load saved values from local storage
			const storedCountry = localStorage.getItem('selectedCountry');
			const storedService = localStorage.getItem('selectedService');
			const storedNationality = localStorage.getItem('selectedNationality');

			// Function to check if all selects have values selected
			function allSelectsHaveValue() {
				return countrySelect.value && serviceSelect.value && nationalitySelect.value;
			}

			// Function to check values and redirect if all are selected
			function checkAndRedirect() {
				if (allSelectsHaveValue()) {
					localStorage.setItem("selectedCountry", countrySelect.value);
					localStorage.setItem("selectedService", serviceSelect.value);
					localStorage.setItem("selectedNationality", nationalitySelect.value);
					window.location.href = "index2.php";
				}
			}

			// Add event listeners to select elements
			countrySelect.addEventListener("change", checkAndRedirect);
			serviceSelect.addEventListener("change", checkAndRedirect);
			nationalitySelect.addEventListener("change", checkAndRedirect);
		});
	</script>




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

	<script type="text/javascript">
		$('#homeindex').addClass('active');
	</script>

</body>

</html>