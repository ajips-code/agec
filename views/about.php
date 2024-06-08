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

</head>

<body>

	<!-- <div class="colorlib-loader"></div> -->

	<div id="page">
		<?php include 'navigation.php'; ?>

		<div class="r-banner cbanners">
			<ul class="slides">
				<li>
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3">
								<div class="text-center r-inner-banner mt-3">
									<h1>ABOUT US</h1>
									<h2><span><a href="../index.php">Home</a> | About Us</span></h2>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<section class="about-us">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>
						<b><a href="../index.php">Australian Global Education Consultancy</a> </b> is a leading education consultancy that is dedicated to helping international students achieve their academic and career goals. We offer a wide range of courses in various fields of study, including <b><a href="./courses.php#courses-section">Engineering, healthcare, Business, Tourism and Hospitality and more</a></b>. Our team of experienced consultants provides personalized assistance to students in securing their visas and navigating the application process. We strive to make the visa process as smooth and stress-free as possible, ensuring that students can focus on their studies and future careers.
					</p>
				</div>
				<div class="col-12">
					<p class="justify-text">
						In addition to education and visa services, Australian Global Education Consultancy also assists students in finding part-time jobs and internships during their studies in Australia. We are committed to providing comprehensive support to students, helping them make the most of their educational experience in Australia.
					</p>
				</div>
				<div class="col-12">
					<p class="text-center">
						We have successfully placed over 2000 students into their dream destination course.
					</p>
				</div>
			</div>
			<div class="container mission-vision-philosophy">
				<div class="box">
					<div class="icon">🏛️</div>
					<h2>Our Vision</h2>
					<p>Help the nation with assisting the students in higher education and career</p>
				</div>
				<div class="box">
					<div class="icon">🎯</div>
					<h2>Our Mission</h2>
					<p>Make the dream of people and student true with connecting them the entire global educational and working.</p>
				</div>
				<div class="box">
					<div class="icon">🏡</div>
					<h2>Our Philosophy</h2>
					<p>Our activities also incorporate guidelines of English UK. In addition to the professional code of conducts, we observe ethical, moral and personal values to maintain high standards in work.</p>
				</div>

			</div>
	</section>
	<div class="tittle-team-hfont col-lg-12 col-md-12 col-sm-12 text-center">
		<h1 class="hfont">Our Teams</h1>
	</div>
	<swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true">
		<swiper-slide>
			<div class="single_instructor">
				<div class="author">
					<img src="../images/manbhir-removebg-preview.png" alt="image">
				</div>
				<div class="author_decs">
					<h4>Manbhir Singh</h4>
					<p class="profession">Senior Consultant</p>
					<p class="breakline">+61 420402142</p>
					<p class="breakline">Enroll@australianglobaleducationconsultancy.com</p>
				</div>
			</div>
		</swiper-slide>
		<swiper-slide>
			<div class="single_instructor">
				<div class="author">
					<img src="../images/missnana-removebg-preview.png" alt="image" style="height:500px;width: 500px;">
				</div>
				<div class="author_decs">
					<h4>Ir. Nana Saragih</h4>
					<p class="profession">Indonesia Representative</p>
					<p class="breakline">+65 66909266</p>
					<p class="breakline">info@australianglobaleducationconsultancy.com</p>
				</div>
			</div>
		</swiper-slide>
		<swiper-slide>
			<div class="single_instructor">
				<div class="author">
					<img src="../images/puja.jpg" alt="image" style="height:500px;width: 500px;">
				</div>
				<div class="author_decs">
					<h4>Puja Gemilang</h4>
					<p class="profession">Senior Recruiter (Europe)</p>
					<p class="breakline">+49 1525 8111115</p>
					<p class="breakline">info@australianglobaleducationconsultancy.com</p>
				</div>
			</div>
		</swiper-slide>
		<swiper-slide>
			<div class="single_instructor">
				<div class="author">
					<img src="https://media.licdn.com/dms/image/C5603AQFytHjEje10xg/profile-displayphoto-shrink_800_800/0/1622546381905?e=1721260800&v=beta&t=ScdHp4YRL-vq36Xoz7WIpGhurPBSFgio0X5ZVproR3M" alt="Eka" style="height:500px;width: 500px;">
				</div>
				<div class="author_decs">
					<h4>Ekaprasetya Artha Kencana</h4>
					<p class="profession">Finance & Admin</p>
					<p class="breakline">+49 1525 8111115</p>
					<p class="breakline">info@australianglobaleducationconsultancy.com</p>
				</div>
			</div>
		</swiper-slide>
	</swiper-container>

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


	<script type="text/javascript">
		const swiper = new Swiper('.swiper', {
			// Optional parameters
			direction: 'vertical',
			loop: true,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.swiper-scrollbar',
			},
		});
	</script>

	<script type="text/javascript">
		$('#aboutindex').addClass('active');
	</script>

</body>

</html>