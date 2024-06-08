<?php
require_once('../../controllers/database.php');
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
	<link rel="shortcut icon" type="image/icon" href="../../images/AGEC-Logo_Full-Colour.png" />

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
	<link rel="stylesheet" href="../../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../../css/icomoon.css">
	<link rel="stylesheet" href="../../fonts/fontawesome/css/all.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../../css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="../../css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../../css/owl.theme.default.min.css">

	<!-- Flaticons  -->
	<link rel="stylesheet" href="../../fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/custom.css">
	<link rel="stylesheet" href="../../css/laptop_view.css">
	<link rel="stylesheet" href="../../css/mobile_view.css">
	<link rel="stylesheet" href="../../css/desktop_view.css">

	<!-- Modernizr JS -->
	<script src="../../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		.hero {
			position: relative;
			color: #00335c;
			text-align: left;
			margin-top: 180px;
		}

		.cefcom-container {
			background: linear-gradient(180deg, rgba(0, 0, 0, .15), transparent);
			content: "";
			display: block;
			height: 100%;
			left: 0;
			top: 0;
			width: 100%;
			margin-top: 10px;
			margin-bottom: 90px;
		}

		.hero img {
			width: 50%;
		}

		.hero-content {
			position: absolute;
			top: 50%;
			right: 0%;
			transform: translate(-50%, -50%);
			padding: 80px 100px;
			border-radius: 10px;
			text-align: left;
			max-width: 600px;
		}

		.hero-content h1 {
			font-size: 2.5em;
			margin: 0 0 10px;
		}

		.rating {
			font-size: 1.2em;
			margin: 10px 0;
		}

		.hero-content p {
			font-size: 1em;
			margin: 20px 0;
		}

		.buttons {
			display: flex;
			gap: 10px;
			justify-content: right;
		}

		.buttons button {
			background: #00335c;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}

		.buttons button:hover {
			background: #D1A730;
		}

		.programs {
			padding: 40px 20px;
			text-align: center;
		}

		.programs h2 {
			font-size: 2em;
			margin-bottom: 20px;
		}

		.program-list {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
		}

		.program {
			background: white;
			border: 1px solid #ddd;
			border-radius: 10px;
			overflow: hidden;
			max-width: 200px;
			text-align: left;
		}

		.program img {
			width: 100%;
			aspect-ratio: 4/3;
			height: auto;
		}

		.program p {
			padding: 10px;
			margin: 0;
		}

		.show-all-programs {
			margin-top: 20px;
		}

		.show-all-programs button {
			background: #007bff;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}

		.show-all-programs button:hover {
			background: #0056b3;
		}

		.content {
			padding: 20px;
			max-width: 800px;
			margin: 0 auto;
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
								<!-- <a href="tel:+61420402142" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
									<li>
										<i class="fas fa-phone-alt"></i> &nbsp;
										 +61 420402142 &nbsp;&nbsp;&nbsp;&nbsp; 
									</li>
								</a>

								<a href="tel:+6582104963" style="color: #0A3F7F; font-size: 17.5px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
									<li>
										<i class="fas fa-phone-alt"></i>
										 +65 82104963 &nbsp;&nbsp;&nbsp;&nbsp; 
									</li>
								</a> -->

								<!-- <a href="https://wa.me/phone-number" style="color: #0A3F7F; font-size: 17.5px; margin-right: 25px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
									<li>
										<img src="./images/waa.png" alt="WhatsApp" style="width: 40px; height: auto;">
									</li>
								</a>

								<a href="mailto:bigbreakgroups@gmail.com" style="color: #0A3F7F; text-decoration: none; font-size: 17px; transition: transform 0.3s; display: inline-block;" onmouseover="this.style.transform='scale(1.2)'" onmouseout="this.style.transform='scale(1)'">
									<li>
										<img src="./images/email.png" alt="Email" style="width: 23px; margin-top: 2px; height: auto;">
									</li>
								</a> -->
							</ul>
						</div>
						<div class="social-icons-con col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
							<ul class="social-icons">
								<a href="https://www.tiktok.com/" style="margin-right: 3px; transition: transform 0.3s;">
									<img src="../../images/tiktok.png" alt="Linkedin" style="width: 20px; height: 18px;">
								</a>
								<a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
									<img src="../../images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 25px; height: 22px;">
								</a>
								<a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
									<img src="../../images/instagram-7678783_1280.png" alt="Instagram" style="width: 30px; height: 28px;">
								</a>
								<a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
									<img src="../../images/facebook (3).png" alt="Facebook" style="width: 40px; height: 35px;">
								</a>
								<a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
									<img src="../../images/youtube-7737850_1920.png" alt="Youtube" style="width: 35px; height: 37px;">
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
							<div id="custom-logo"><a href="index.php"><img class="c-logo" src="../../images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
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
								<li id="homeindex"><a href="../../index.php" style="color: black;">HOME</a></li>
								<li id="serviceindex" class="has-dropdown">
									<a href="services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
									<ul class="dropdown">
										<li><a href="../rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
										<li><a href="../internship.php">INTERNSHIP&nbsp;</a></li>
										<li><a href="../jobs.php">JOBS&nbsp;</a></li>
										<li><a href="../tourist_visa.php">TOURIST VISA&nbsp;</a></li>
										<li><a href="../working_holiday_visa.php">WORKING HOLIDAY VISA&nbsp;</a></li>
										<li><a href="../business_visa.php">BUSINESS VISA&nbsp;</a></li>
										<li><a href="../pr_assessment.php">PR ASSESSMENT&nbsp;</a></li>
										<li><a href="../elicos.php">ELICOS&nbsp;</a></li>
										<li><a href="../englishcourse.php">ENGLISH COURSES&nbsp;</a></li>
										<li><a href="../study_visa.php">STUDY VISA&nbsp;</a></li>
										<li><a href="../courses.php">COURSES&nbsp;</a></li>
										<!-- <li><a href="builders_licence.php">BUILDERS LICENCE&nbsp;</a></li>
										<li><a href="trade_licensing.php">TRADE LICENSING&nbsp;</a></li> -->
									</ul>
								</li>
								<!-- <li><a href="universities.html">COURSES</a></li> -->
								<li id="newindex"><a href="../news.php" style="color: black;">NEWS</a></li>
								<li id="aboutindex"><a href="../about.php" style="color: black;">ABOUT US</a></li>
								<li id="contactindex"><a href="../contact.php" style="color: black;">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

	</div>
	<!-- <div id="colorlib-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="row">
						<div class="col-md-6 animate-box">
							<img src="https://habibieglobal.com/wp-content/uploads/2024/05/missnana-removebg.png" alt="image" style="height:450px;width: 350px;">
						</div>
						<div class="col-md-6 animate-box">
							<h2 class="contact-tittle">Message Us</h2>
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								// Ambil data dari form
								$fullname = $_POST['fullname'];
								$email = $_POST['email'];
								$message = $_POST['message'];

								// Data validasi sederhana
								if (empty($fullname) || empty($email) || empty($message)) {
									echo '<p style="color: red;">Please fill all required fields.</p>';
								} else {
									// Buat koneksi ke database
									$servername = "localhost"; // Sesuaikan dengan nama server Anda
									$username = "root"; // Sesuaikan dengan username database Anda
									$password = ""; // Sesuaikan dengan password database Anda
									$dbname = "agec"; // Sesuaikan dengan nama database Anda

									$conn = new mysqli($servername, $username, $password, $dbname);

									// Cek koneksi
									if ($conn->connect_error) {
										die("Connection failed: " . $conn->connect_error);
									}

									// Buat pernyataan SQL untuk memasukkan data
									$sql = "INSERT INTO contacts (fullname, email, message) VALUES (?, ?, ?)";

									// Siapkan pernyataan dan ikat parameternya
									$stmt = $conn->prepare($sql);
									$stmt->bind_param("sss", $fullname, $email, $message);

									// Eksekusi pernyataan
									if ($stmt->execute()) {
										echo '<p style="color: green;">New record created successfully</p>';
									} else {
										echo '<p style="color: red;">Error: ' . $sql . '<br>' . $conn->error . '</p>';
									}

									// Tutup pernyataan dan koneksi
									$stmt->close();
									$conn->close();
								}
							}
							?>

							<form method="POST" action="contact.php" autocomplete="off">
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
	</div> -->
	<div class="hero">
		<div class="cefcom-container">
			<img src="../../images/sidneyy.jpg" alt="Sydney Opera House">
			<div class="hero-content">
				<h1>Learn English in Australia</h1>
				<div class="rating">
					<span>★★★★★</span> 4.9 (802 ratings)
				</div>
				<p>Learning English in Australia is an adventure you’ll never forget. This huge country, a continent actually, has so much to offer the language student. From deserts to vineyards, beaches to cities, you'll get to practice your new English skills everywhere. Take a look at all the ways we can help you to study English in Australia.</p>
				<div class="buttons">
					<button>Enroll Now</button>
				</div>
			</div>
		</div>
	</div>
	<main class="content">
		<section>
			<h1>Learning English in Australia</h1>
			<p>Learning English in Australia is an adventure you’ll never forget. This huge country, a continent actually, has so much to offer the language student. From deserts to vineyards, beaches to cities, you'll get to practice your new English skills everywhere. Take a look at all the ways we can help you to study English in Australia.</p>
			<p>KOEI English provides a range of courses to suit all levels of English proficiency. Our General English courses help students build their overall language skills, while our English for Academic Purposes (EAP) courses prepare students for higher education.</p>
		</section>

		<section>
			<h2>General English</h2>
			<p>Improve your fluency in everyday situations with our General English courses. Perfect for those who want to learn English for travel, work, or social purposes.</p>
			<ul>
				<li>Listening</li>
				<li>Speaking</li>
				<li>Reading</li>
				<li>Writing</li>
			</ul>
			<p>Course designed to develop English communication skills in a variety of situations.</p>
		</section>

		<section>
			<h2>English for Academic Purposes (EAP)</h2>
			<p>Prepare for university-level studies with our EAP courses. Focus on academic skills such as essay writing, research, and presentations.</p>
			<p>Courses designed to develop academic English skills for higher education.</p>
		</section>

		<section>
			<h2>English for Specific Purposes (ESP)</h2>
			<p>Target your English learning to specific fields such as business, tourism, or hospitality with our ESP courses.</p>
			<ul>
				<li>Business</li>
				<li>Tourism</li>
				<li>Hospitality</li>
			</ul>
			<p>Courses designed to develop English skills for specific industries.</p>
		</section>

		<section>
			<h2>Exam Preparation</h2>
			<p>Get ready for English proficiency exams like IELTS, TOEFL, TOEIC, or Cambridge First Certificate with our preparation courses.</p>
			<p>Courses designed to develop skills needed to pass English proficiency exams.</p>
		</section>

		<section>
			<h2>Teaching English</h2>
			<p>Enhance your teaching skills with our programs for aspiring and current English teachers. Courses available for both native and non-native English speakers.</p>
			<ul>
				<li>TESOL (Teaching English to Speakers of Other Languages)</li>
				<li>TEFL (Teaching English as a Foreign Language)</li>
				<li>CELTA (Certificate in English Language Teaching to Adults)</li>
			</ul>
			<p>Courses designed to develop teaching skills and methodologies.</p>
		</section>

		<section>
			<h2>Study Tours</h2>
			<p>Combine travel and learning with our study tours. Perfect for groups looking to improve their English while exploring Australia.</p>
			<p>Courses designed to combine English learning with travel experiences.</p>
		</section>
	</main>

	<main class="programs">
		<h2>Find a program</h2>
		<div class="program-list">
			<div class="program">
				<img src="../../images/vocationaleducationtraining.jpg" alt="Programs for 10-14 years">
				<p>Programs for <strong>10 - 14 years</strong></p>
			</div>
			<div class="program">
				<img src="../../images/author2.jpg" alt="Programs for 14-18 years">
				<p>Programs for <strong>14 - 18 years</strong></p>
			</div>
			<div class="program">
				<img src="../../images/author4.jpg" alt="Programs for 18-25 years">
				<p>Programs for <strong>18 - 25 years</strong></p>
			</div>
			<div class="program">
				<img src="../../images/english-course.jpg" alt="Programs for 25+ years">
				<p>Programs for <strong>25+ years</strong></p>
			</div>
		</div>
		<!-- <div class="show-all-programs">
			<button>Show all programs</button>
		</div> -->
	</main>


	<footer id="colorlib-footer">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget img-footer text-left">
					<img src="../../images/AGEC-Logo_Full-Colour.png" alt="Colorlib"></img>
				</div>
				<div class="col-md-3 colorlib-widget text-center">
					<h4>About Australian Global Education Consultancy</h4>
					<p>One stop education, working, holiday solution for home & abroad. One of the best education consultancy fr0m of Australia. Here we assure you quality service. We are professional and reliable. </p>
					<p>
					</p>
				</div>
				<div class="col-md-3 colorlib-widget text-center">
					<h4>Quick Links</h4>
					<p>
					<ul class="colorlib-footer-links">
						<li><a href="../services.php"><i class="far fa-check-circle"></i> Services</a></li>
						<li><a href="../news.php"><i class="far fa-check-circle"></i> News</a></li>
						<li><a href="../about.php"><i class="far fa-check-circle"></i> About Us</a></li>
						<li><a href="../contact.php"><i class="far fa-check-circle"></i> Contact Us</a></li>
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
						<li><a href="mailto:Enroll@australianglobaleducationconsultancy.com"><i class="far fa-envelope-open"></i>Enroll@australianglobaleducationconsultancy.com</a></li>
						<li><a href="../../index.php"><i class="fas fa-globe"></i> australianglobaleducationconsultancy.com</a></li>
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
								</script> Australian Global Education Consultancy. Powered by <i class="icon-heart" aria-hidden="true"></i><a href="../index.php" target="_blank"> Australian Global Education Consultancy</a>

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
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../../js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="../../js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="../../js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../../js/jquery.magnific-popup.min.js"></script>
	<script src="../../js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="../../js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="../../js/main.js"></script>
	<script src="../../js/floating_wa.js"></script>

</body>

</html>