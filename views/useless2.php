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
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
		.news-list {
			width: 100%;
			height: 504px;
			padding: 30px;
			text-align: center;
		}

		.news-list h2 {
			margin-top: 50px;
			padding-top: 30px;
			margin-bottom: 30px;
			font-family: 'Be Vietnam Pro', sans-serif;
			font-size: 36px;
			line-height: 1.3em;
			font-weight: 700;
			border-bottom: 2px solid #000000;
			display: inline-block;
			text-align: center;
			color: rgb(0, 0, 0);
		}

		.swiper-container {
			width: 100%;
			padding-top: 20px;
			padding-bottom: 50px;
			/* Tambahkan overflow-x: auto; untuk membuat slider horizontal */
			overflow-x: auto;
		}

		.swiper-wrapper {
			display: flex;
			justify-content: space-between;
		}

		.swiper-slide {
			width: calc((100% / 3) - 20px);
			background: #fff;
			border-radius: 8px;
			overflow: hidden;
			box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
			transition: transform 0.3s ease;
			margin: 0 10px;
		}

		.swiper-slide:hover {
			transform: scale(1.05);
		}

		.card-image-newspage img {
			width: 100%;
			height: auto;
			transition: transform 0.3s ease;
		}

		.swiper-slide:hover .card-image-newspage img {
			transform: scale(1.1);
		}

		.card-content-newspage {
			padding: 15px;
		}

		.card-content-newspage h3 {
			font-size: 18px;
			margin: 10px 0;
			color: #333;
		}

		.card-content-newspage p {
			font-size: 14px;
			color: #666;
		}

		.swiper-button-next,
		.swiper-button-prev {
			color: #000;
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
							<li>STUDY VISA &nbsp;&nbsp;|&nbsp;&nbsp;</li>
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
								<div class="text-center r-inner-banner mt-3">
									<h1>NEWS</h1>
									<h2><span><a href="index.php">Home</a> | News</span></h2>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="container news-list">
		<h2>Latest News</h2>
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/slide1.jpg" alt="News 1">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 1</h3>
						<p>Summary of news 1...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/slide3.jpg" alt="News 2">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 2</h3>
						<p>Summary of news 2...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/trade-licensing.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/english-course.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div>
				<!-- <div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/slide3.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div> -->
				<!-- <div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/slide3.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 4</h3>
						<p>Summary of news 3...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="images/slide3.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div> -->
				<!-- Add more news cards here -->
			</div>

			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>

			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</div>
	<div class="photogallery row ">
		<h2 class="photogallery-tittle text-center">News Populer</h2><br />
		<div class="container col-md-12 text-center">
			<?php
			$getalbum = "SELECT * FROM album ORDER BY datetime DESC";
			$albumres = mysqli_query($database->connection, $getalbum);
			while ($albumrow = mysqli_fetch_array($albumres)) {
			?>
				<div class="col-md-4" style="border-bottom: 1px solid #DCDCDC;">
					<div class="col-md-12">
						<h3 style="font-family: arial;text-transform: uppercase;"><?php echo $albumrow['albumname']; ?></h3>
					</div>
					<div class="col-md-12">
						<p><?php echo $albumrow['albumcaption']; ?></p>
					</div>
					<div class="col-md-12" style="padding-bottom: 10px;">
						<?php
						$getpic = "SELECT * FROM images WHERE album_id = '" . $albumrow['id_pk'] . "' ORDER BY id_pk DESC";
						$picres = mysqli_query($database->connection, $getpic);
						while ($picrow = mysqli_fetch_array($picres)) {
						?>
							<div class="col-md-3" style="padding: 2px 2px;">
								<a href="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>" data-fancybox="gallery<?php echo $albumrow['id_pk']; ?>" data-caption="<?php echo $albumrow['albumname']; ?> -> <?php echo $picrow["picture"]; ?>"><img style="height: 20em;width: 17.5em;" src="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>"></a>
							</div>
						<?php
						}
						?>
						<img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/medium-shot-smiley-doctor-with-coat-removebg-preview.png" alt="nursing">
					</div>
				</div>
			<?php
			}
			?>
			<?php
			$getalbum = "SELECT * FROM album ORDER BY datetime ASC";
			$albumres = mysqli_query($database->connection, $getalbum);
			while ($albumrow = mysqli_fetch_array($albumres)) {
			?>
				<div class="col-md-4" style="border-bottom: 1px solid #DCDCDC;">
					<div class="col-md-12">
						<h3 style="font-family: arial;text-transform: uppercase;"><?php echo $albumrow['albumname']; ?></h3>
					</div>
					<div class="col-md-12">
						<p><?php echo $albumrow['albumcaption']; ?></p>
					</div>
					<div class="col-md-12" style="padding-bottom: 10px;">
						<?php
						$getpic = "SELECT * FROM images WHERE album_id = '" . $albumrow['id_pk'] . "' ORDER BY id_pk DESC";
						$picres = mysqli_query($database->connection, $getpic);
						while ($picrow = mysqli_fetch_array($picres)) {
						?>
							<div class="col-md-3" style="padding: 2px 2px;">
								<a href="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>" data-fancybox="gallery<?php echo $albumrow['id_pk']; ?>" data-caption="<?php echo $albumrow['albumname']; ?> -> <?php echo $picrow["picture"]; ?>"><img style="height: 20em;width: 17.5em;" src="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>"></a>
							</div>
						<?php
						}
						?>
						<img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/medium-shot-smiley-doctor-with-coat-removebg-preview.png" alt="nursing">
					</div>
				</div>
			<?php
			}
			?>
			<?php
			$getalbum = "SELECT * FROM album ORDER BY datetime ASC";
			$albumres = mysqli_query($database->connection, $getalbum);
			while ($albumrow = mysqli_fetch_array($albumres)) {
			?>
				<div class="col-md-4" style="border-bottom: 1px solid #DCDCDC;">
					<div class="col-md-12">
						<h3 style="font-family: arial;text-transform: uppercase;"><?php echo $albumrow['albumname']; ?></h3>
					</div>
					<div class="col-md-12">
						<p><?php echo $albumrow['albumcaption']; ?></p>
					</div>
					<div class="col-md-12" style="padding-bottom: 10px;">
						<?php
						$getpic = "SELECT * FROM images WHERE album_id = '" . $albumrow['id_pk'] . "' ORDER BY id_pk DESC";
						$picres = mysqli_query($database->connection, $getpic);
						while ($picrow = mysqli_fetch_array($picres)) {
						?>
							<div class="col-md-3" style="padding: 2px 2px;">
								<a href="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>" data-fancybox="gallery<?php echo $albumrow['id_pk']; ?>" data-caption="<?php echo $albumrow['albumname']; ?> -> <?php echo $picrow["picture"]; ?>"><img style="height: 20em;width: 17.5em;" src="ohesadmin/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>"></a>
							</div>
						<?php
						}
						?>
						<img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2024/04/medium-shot-smiley-doctor-with-coat-removebg-preview.png" alt="nursing">
					</div>
				</div>
			<?php
			}
			?>
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
						<li><a href="index.php"><i class="fas fa-globe"></i> australianglobaleducationconsultancy.com</a></li>
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
								<!-- <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 988.9 771.3" style="enable-background: new 0 0 988.9 771.3" xml:space="preserve">
                    <g class="st0">
                        <path d="M584.9,574.9l-10.1,3.8c-1.7,0.6-2.6,2.5-1.9,4.2c0.4,1.1,1.4,1.9,2.5,2.1l25.6,4.3l11.5-5c0,0-30.2,13.7-2.6,16.6
		c37.4,3.9,58.9-11.6,58.9-11.6s44.7,2.4,55.8-7.5c8.8-7.9-1.8-9.9-27.1-12.4c0,0-29.7-17.6-54.7-11.7S584.9,574.9,584.9,574.9z">
                        </path>
                        <path d="M464.5,651.7c-18.6-1.4-68.6,2.7-68.6,2.7c-18.1,2.1-22.4-5.5-22.4-5.5s3.3,1.9-12.2,0s-11.9-10.5-11.9-10.5l6.9-4.9
		l12.9-29.3l-123-16.2l117.1-25.3h59.6l64.4,3.9l17.6,10.5h87.3l60.6,15.1l-21.2,20.2l-90.7-2.6l-60.5,20c0,0,110.8,3.2,97.2,12.8
		S524.5,656.1,464.5,651.7z"></path>
                        <polygon points="5.3,625.7 109.6,634.5 104.4,641.5 383,639.8 391.5,607.2 153.9,603.5 139.3,604.1 145.6,604.9 197.2,612.1 
		241.4,617 359.9,630.7 21.5,623.4 	"></polygon>
                        <path d="M697.8,744.5c-14.8-1.5-55.8-8.7-17.2-9.5s180.2,9.9,180.2,9.9l-13-4.6c0,0,10.2-6.6,35.3-5.8s62.7,8.8,85.7,16.9
		c24.5,8.7,47.9,24.8-67.1,18.3S715.5,746.4,697.8,744.5z"></path>
                    </g>
                    <polygon class="st1" points="255.7,108.3 249.2,64.8 267,59.3 274.4,104.8 "></polygon>
                    <polygon class="st2" points="267,59.3 304.7,67.2 310.8,105.9 274.4,104.8 "></polygon>
                    <polygon class="st3" points="255.7,108.3 294.7,109.2 310.8,105.9 274.4,104.8 "></polygon>
                    <polygon class="st4" points="536.5,156.3 536.5,150.2 500.1,101.2 502.6,148 "></polygon>
                    <polygon class="st1" points="392.8,373.2 354.8,374.2 354.8,425.1 392.8,425.1 "></polygon>
                    <polygon class="st5" points="392.8,305.7 354.8,305.7 354.8,322.5 354.8,374.2 392.8,373.2 "></polygon>
                    <polygon class="st6" points="354.8,425.1 354.8,564.6 392.8,568.8 392.8,425.1 "></polygon>
                    <rect x="392.8" y="373.2" class="st7" width="30" height="51.9"></rect>
                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="407.835" y1="456.16" x2="407.835" y2="379.51" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <rect x="392.8" y="305.7" class="st8" width="30" height="67.5"></rect>
                    <polygon class="st9" points="422.9,425.1 392.8,425.1 392.8,483.1 422.9,480.3 "></polygon>
                    <polygon class="st10" points="376.1,504.8 376.1,518.3 392.8,516.1 392.8,503.1 "></polygon>
                    <polygon class="st7" points="392.8,503.1 392.8,483.1 376.1,484.6 376.1,504.8 "></polygon>
                    <polygon class="st1" points="376.1,484.6 338.6,482.5 338.6,503 376.1,504.8 "></polygon>
                    <polygon class="st11" points="338.6,503 338.6,517.1 376.1,518.3 376.1,504.8 "></polygon>
                    <polygon class="st12" points="392.8,568.8 422.9,562.8 422.9,512.2 392.8,516.1 "></polygon>
                    <polygon class="st9" points="422.9,500 422.9,480.3 392.8,483.1 392.8,503.1 "></polygon>
                    <polygon class="st13" points="392.8,503.1 392.8,516.1 422.9,512.2 422.9,500 "></polygon>
                    <polygon class="st5" points="338.6,482.5 354.1,432.4 359.5,432.4 376.1,478.3 376.1,484.6 "></polygon>
                    <polygon class="st3" points="376.1,478.3 396.1,477 396.1,482.8 376.1,484.6 "></polygon>
                    <polygon class="st14" points="359.5,432.4 377.6,432.4 396.1,477 376.1,478.3 "></polygon>
                    <polygon class="st15" points="407,439.4 387.3,438.8 387.3,463.3 407,463.8 "></polygon>
                    <polygon class="st16" points="387.3,438.8 391.5,438.6 391.5,438.9 "></polygon>
                    <polygon class="st6" points="387.3,463.3 387.3,491.5 407,492.5 407,463.8 "></polygon>
                    <polygon class="st12" points="407,492.5 445.7,486.7 445.7,460.3 407,463.8 "></polygon>
                    <polygon class="st9" points="407,439.4 407,463.8 445.7,460.3 445.7,436.2 "></polygon>
                    <polygon class="st14" points="409.7,418.3 445.7,415.5 445.7,366.9 425,366.9 409.7,412.2 "></polygon>
                    <polygon class="st13" points="409.7,418.3 409.7,439.1 407,439.4 445.7,436.2 445.7,415.5 "></polygon>
                    <polygon class="st2" points="409.7,418.3 391.5,418.3 391.5,438.9 407,439.4 409.7,439.1 "></polygon>
                    <polygon class="st5" points="425,366.9 407.8,366.9 391.5,412.2 409.7,412.2 "></polygon>
                    <linearGradient id="SVGID_00000137818700784794482050000001035294249572743815_" gradientUnits="userSpaceOnUse" x1="400.565" y1="395.94" x2="400.565" y2="353.21" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <rect x="391.5" y="412.2" style="
              fill: url(#SVGID_00000137818700784794482050000001035294249572743815_);
            " width="18.2" height="6.1"></rect>
                    <g>
                        <polygon class="st18" points="409.7,418.3 409.7,418.3 409.7,418.3 	"></polygon>
                    </g>
                    <polygon class="st13" points="445.7,486.7 445.7,499.8 415.2,504.8 415.2,491.3 "></polygon>
                    <polygon class="st2" points="395.1,491.9 395.1,503.5 415.2,504.8 415.2,491.3 407,492.5 "></polygon>
                    <polygon class="st1" points="283.5,373.2 302.6,373.2 302.6,342.2 283.5,342.8 "></polygon>
                    <polygon class="st4" points="283.5,342.8 283.5,315.5 243.6,318.9 243.6,373.2 283.5,373.2 "></polygon>
                    <polygon class="st7" points="302.6,342.2 302.6,373.2 341.5,373.2 341.5,343.4 "></polygon>
                    <linearGradient id="SVGID_00000062889324325327378060000002310518591979172020_" gradientUnits="userSpaceOnUse" x1="273.12" y1="430.85" x2="273.12" y2="376.7" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000062889324325327378060000002310518591979172020_);
            " points="283.5,373.2 283.5,373.2 
	243.6,373.2 243.6,386.9 302.6,386.9 302.6,373.2 "></polygon>
                    <rect x="302.6" y="373.2" class="st14" width="38.9" height="13.7"></rect>
                    <polygon class="st9" points="281.4,447.4 281.4,397.2 263.6,397.2 263.6,448.1 "></polygon>
                    <polygon class="st1" points="263.6,448.1 223.8,447.1 223.8,473.8 263.6,476.7 "></polygon>
                    <polygon class="st7" points="263.6,476.7 281.4,475 281.4,447.4 263.6,448.1 "></polygon>
                    <polygon class="st16" points="263.6,476.7 223.8,473.8 223.8,504.8 263.6,508 "></polygon>
                    <polygon class="st6" points="263.6,476.7 263.6,508 281.4,505.4 281.4,475 "></polygon>
                    <polygon class="st14" points="263.6,523.1 281.4,520 281.4,505.4 263.6,508 "></polygon>
                    <linearGradient id="SVGID_00000142864882257950889840000005208710177952320646_" gradientUnits="userSpaceOnUse" x1="243.67" y1="329.67" x2="243.67" y2="242.13" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000142864882257950889840000005208710177952320646_);
            " points="223.8,504.8 223.8,518.9 
	263.6,523.1 263.6,508 "></polygon>
                    <rect x="221.3" y="386.9" class="st6" width="39.6" height="10.3"></rect>
                    <rect x="260.9" y="386.9" class="st12" width="20.5" height="10.3"></rect>
                    <linearGradient id="SVGID_00000053520810198470299300000009637081599102474672_" gradientUnits="userSpaceOnUse" x1="241.115" y1="452.44" x2="241.115" y2="391.82" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000053520810198470299300000009637081599102474672_);
            " points="260.9,386.9 242.2,337.7 
	237.9,337.7 221.3,386.9 "></polygon>
                    <linearGradient id="SVGID_00000041276850658761712130000005509354912213240475_" gradientUnits="userSpaceOnUse" x1="242.25" y1="411.7" x2="281.43" y2="411.7" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000041276850658761712130000005509354912213240475_);
            " points="263.6,339.2 242.2,337.7 
	260.9,386.9 281.4,386.9 "></polygon>
                    <path class="st3" d="M247,441.4c-1.5-1-3.3-1.6-5.2-1.6c-4.3,0-8,3-10,7.5l10.3,0.2C243.1,445.1,244.8,442.9,247,441.4z">
                    </path>
                    <linearGradient id="SVGID_00000131360315408708831870000017524631177163799218_" gradientUnits="userSpaceOnUse" x1="223.77" y1="351.375" x2="263.57" y2="351.375" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000131360315408708831870000017524631177163799218_);
            " d="M223.8,397.2v49.9l8,0.2
	c2-4.5,5.7-7.5,10-7.5c1.9,0,3.7,0.6,5.2,1.6c2.3,1.6,4,3.8,5,6.4l6.1,0.1l5.5,0.1v-50.9H223.8z"></path>
                    <path class="st14" d="M242.1,447.5l9.9,0.2c-1-2.6-2.7-4.8-5-6.4C244.7,443,243,445.1,242.1,447.5z"></path>
                    <polygon class="st7" points="281.4,386.9 281.4,447.4 322.1,444.9 322.1,386.9 "></polygon>
                    <linearGradient id="SVGID_00000129928429991100560340000014279533446980738693_" gradientUnits="userSpaceOnUse" x1="281.43" y1="321.2" x2="339.68" y2="321.2" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000129928429991100560340000014279533446980738693_);
            " points="322.1,444.9 339.7,443.7 
	339.7,456.9 281.4,461.9 281.4,447.4 "></polygon>
                    <polygon class="st5" points="339.7,443.7 322.1,443.7 322.1,444.9 "></polygon>
                    <polygon class="st1" points="294.6,522.4 275.1,521.1 263.6,523.1 243.7,521 243.7,530.7 304.5,536.2 304.5,521 "></polygon>
                    <polygon class="st7" points="304.5,521 304.5,536.2 344.2,528.8 344.2,515.3 "></polygon>
                    <polygon class="st11" points="246.1,530.9 246.1,588.1 283.5,593 283.5,534.3 "></polygon>
                    <polygon class="st7" points="304.5,536.2 283.5,534.3 283.5,593 323.7,584.8 323.7,532.6 "></polygon>
                    <linearGradient id="SVGID_00000142140978013871435780000000258107634145065645_" gradientUnits="userSpaceOnUse" x1="284.855" y1="316.83" x2="284.855" y2="285.9" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000142140978013871435780000000258107634145065645_);
            " points="294.6,463.8 275.1,462.4 
	275.1,490.1 294.6,491.5 "></polygon>
                    <linearGradient id="SVGID_00000181794337445119989870000001128495493950937489_" gradientUnits="userSpaceOnUse" x1="275.13" y1="267.745" x2="294.58" y2="267.745" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000181794337445119989870000001128495493950937489_);
            " points="275.1,490.1 275.1,521.1 
	294.6,522.4 294.6,491.5 "></polygon>
                    <polygon class="st5" points="352.8,458.4 339.7,456.9 275.1,462.4 294.6,463.8 "></polygon>
                    <polygon class="st9" points="294.6,522.4 352.8,514 352.8,483.3 294.6,491.5 "></polygon>
                    <linearGradient id="SVGID_00000034067248021373882430000006878460881649690787_" gradientUnits="userSpaceOnUse" x1="323.67" y1="280.73" x2="323.67" y2="335.48" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000034067248021373882430000006878460881649690787_);
            " points="294.6,463.8 294.6,491.5 
	352.8,483.3 352.8,458.4 "></polygon>
                    <linearGradient id="SVGID_00000050655514121677647700000001097117750033414334_" gradientUnits="userSpaceOnUse" x1="414.295" y1="528.62" x2="414.295" y2="583.09" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000050655514121677647700000001097117750033414334_);
            " points="426.4,246.3 426.4,178 402.2,178 
	402.2,254.3 "></polygon>
                    <polygon class="st29" points="542.3,283.1 524.8,283.1 493.1,278.1 495.9,277.9 "></polygon>
                    <polygon class="st6" points="410.4,186.2 442.3,181.6 442.3,111.1 410.4,104.4 "></polygon>
                    <polygon class="st30" points="410.4,104.4 442.3,111.1 442.3,81.3 410.4,74.1 "></polygon>
                    <polygon class="st15" points="410.4,17.2 410.4,26.7 442.3,39.1 442.3,30.7 "></polygon>
                    <path class="st3" d="M427.1,41.5c-1.9,0.1-3.8,0.9-5,2.4c2.2,2.7,3.4,6.1,3.3,9.5c0.1,3.5-1.1,6.9-3.3,9.5c1.2,1.5,3.1,2.3,5,2.4
	c4.6,0,8.3-5.3,8.3-12S431.7,41.5,427.1,41.5z"></path>
                    <path class="st6" d="M410.4,26.7v47.4l31.8,7.2V39.1L410.4,26.7z M427.1,65.5c-1.9-0.1-3.8-0.9-5-2.4c-2.2-2.7-3.4-6.1-3.3-9.5
	c-0.1-3.5,1.1-6.8,3.3-9.5c1.2-1.5,3.1-2.4,5-2.4c4.6,0,8.3,5.3,8.3,12S431.7,65.5,427.1,65.5L427.1,65.5z"></path>
                    <polygon class="st31" points="410.4,17.2 369.5,27.6 369.5,37 410.4,26.7 "></polygon>
                    <polygon class="st4" points="410.4,74.1 369.5,82.2 369.5,112.6 410.4,104.4 "></polygon>
                    <polygon class="st32" points="369.5,112.6 369.5,193 410.4,186.2 410.4,104.4 "></polygon>
                    <path class="st3" d="M390,53.5c0-4.4,1.7-8.3,4.1-10.4c-1.1-1-2.6-1.6-4.1-1.6c-4.6,0-8.3,5.3-8.3,12s3.7,12,8.3,12
	c1.5,0,3-0.6,4.1-1.6C391.6,61.8,390,57.9,390,53.5z"></path>
                    <linearGradient id="SVGID_00000106114413565314964120000001849296339221834899_" gradientUnits="userSpaceOnUse" x1="369.47" y1="719.56" x2="410.47" y2="719.56" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000106114413565314964120000001849296339221834899_);
            " d="M369.5,37v45.2l41-8.1V26.7L369.5,37z
	 M390,65.5c-4.6,0-8.3-5.3-8.3-12s3.7-12,8.3-12c1.5,0,3,0.6,4.1,1.6c2.5,2.1,4.1,5.9,4.1,10.4s-1.7,8.3-4.1,10.4
	C393,64.8,391.5,65.4,390,65.5z"></path>
                    <polygon class="st32" points="410.4,17.2 370.2,0 370.2,27.4 "></polygon>
                    <polygon class="st6" points="370.2,0 398.2,10.3 442.3,30.7 410.4,17.2 "></polygon>
                    <linearGradient id="SVGID_00000049219591078067120220000005153781218427445438_" gradientUnits="userSpaceOnUse" x1="350.73" y1="603.405" x2="392.81" y2="603.405" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000049219591078067120220000005153781218427445438_);
            " points="350.7,195.9 350.7,152.5 
	392.8,145.3 392.8,189.1 "></polygon>
                    <polygon class="st4" points="392.8,145.3 411.2,150.1 411.2,246 388,241.8 392.8,231.4 "></polygon>
                    <polygon class="st32" points="392.8,145.3 370.3,95.2 367.1,95.9 350.7,152.5 "></polygon>
                    <polygon class="st6" points="370.3,95.2 388.8,100.1 411.2,150.1 392.8,145.3 "></polygon>
                    <polygon class="st13" points="426.4,268.6 426.4,246.3 394.7,241 394.7,265.4 "></polygon>
                    <linearGradient id="SVGID_00000035515176829833885850000001125002230741432475_" gradientUnits="userSpaceOnUse" x1="375.74" y1="519.3" x2="394.69" y2="519.3" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000035515176829833885850000001125002230741432475_);
            " points="394.7,241 375.7,243.7 
	375.7,268.4 394.7,265.4 "></polygon>
                    <polygon class="st6" points="394.7,292.6 394.7,292.6 426.4,295.4 426.4,268.6 394.7,265.4 "></polygon>
                    <polygon class="st15" points="375.7,294.6 375.7,308.7 394.7,306.3 394.7,292.6 "></polygon>
                    <polygon class="st16" points="394.7,265.4 375.7,268.4 375.7,280.5 375.7,294.6 394.7,292.6 "></polygon>
                    <polygon class="st9" points="394.7,292.6 394.7,292.6 394.7,306.3 426.4,308.7 426.4,295.4 "></polygon>
                    <path class="st3" d="M342.8,277.9l33,2.6c0,0,6.2-55.8,54.1-65.7l-7.8-17.8l-68.5,14.3l-17.2,61.5L342.8,277.9z"></path>
                    <path class="st15" d="M429.9,214.8v-31.4l-93.4,14.5l-0.9,80h7.2c0,0,4.9-41.6,36.4-61S429.9,214.8,429.9,214.8z"></path>
                    <polygon class="st3" points="375.7,308.7 407.2,310.4 426.4,308.7 394.7,306.3 "></polygon>
                    <polygon class="st32" points="338.5,305.7 375.7,308.7 375.7,294.6 338.5,291.4 "></polygon>
                    <linearGradient id="SVGID_00000171717064646686363240000017886480542896800430_" gradientUnits="userSpaceOnUse" x1="357.115" y1="525.81" x2="357.115" y2="449.01" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000171717064646686363240000017886480542896800430_);
            " points="342.8,277.9 338.5,277.9 
	338.5,291.4 375.7,294.6 375.7,280.5 "></polygon>
                    <linearGradient id="SVGID_00000057144879323855442160000001766211747113387945_" gradientUnits="userSpaceOnUse" x1="323.68" y1="461.62" x2="419.42" y2="461.62" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000057144879323855442160000001766211747113387945_);
            " points="407,321.6 407,310.4 302.6,303.1 
	302.6,313.8 "></polygon>
                    <polygon class="st3" points="407,321.6 354.8,322.5 302.6,318.7 302.6,313.8 "></polygon>
                    <linearGradient id="SVGID_00000158725307231453864880000017956705249185406647_" gradientUnits="userSpaceOnUse" x1="449.68" y1="426.675" x2="493.13" y2="426.675" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000158725307231453864880000017956705249185406647_);
            " points="449.7,281.9 449.7,412.2 
	470,416.5 493.1,416.5 493.1,278.1 "></polygon>
                    <linearGradient id="SVGID_00000067924848838958982200000018394982760000180398_" gradientUnits="userSpaceOnUse" x1="510.935" y1="431.56" x2="510.935" y2="509.57" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000067924848838958982200000018394982760000180398_);
            " points="528.7,282.1 493.1,278.1 
	493.1,342.2 528.7,342.2 "></polygon>
                    <rect x="493.1" y="342.2" class="st3" width="35.6" height="74.3"></rect>
                    <linearGradient id="SVGID_00000161599608233671662880000007066943403309484725_" gradientUnits="userSpaceOnUse" x1="498.99" y1="214.44" x2="498.99" y2="284.21" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000161599608233671662880000007066943403309484725_);
            " points="523.1,476.3 474.9,474.2 
	474.9,535.3 523.1,539.5 "></polygon>
                    <polygon class="st11" points="474.9,535.3 474.9,595.2 523.1,601 523.1,539.5 "></polygon>
                    <polygon class="st13" points="523.1,476.3 523.1,539.5 554.5,532.4 554.5,471.5 "></polygon>
                    <polygon class="st7" points="523.1,601 554.5,591.7 554.5,532.4 523.1,539.5 "></polygon>
                    <polygon class="st41" points="499,475.4 522.8,476.3 522.8,476.3 499,475.3 "></polygon>
                    <polygon class="st5" points="499,441 499,475.3 522.8,476.3 522.8,441.4 "></polygon>
                    <polygon class="st16" points="498.6,413 498.6,441 522.8,441.4 522.8,413.3 "></polygon>
                    <polygon class="st6" points="522.8,413.3 522.8,441.4 554.5,438.8 555.9,438.7 555.8,412.2 "></polygon>
                    <polygon class="st6" points="498.6,413 452.1,412.2 452.1,473.3 499,475.4 499,441 522.8,441.4 498.6,441 ">
                    </polygon>
                    <polygon class="st14" points="522.8,441.4 522.8,476.3 523.1,476.3 554.5,471.5 554.5,438.8 "></polygon>
                    <polygon class="st7" points="479.3,346.1 479.3,415.1 497.5,413 497.5,346.1 "></polygon>
                    <linearGradient id="SVGID_00000034791005922479389950000000513650747555576994_" gradientUnits="userSpaceOnUse" x1="456.28" y1="361.19" x2="456.28" y2="426.92" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000034791005922479389950000000513650747555576994_);
            " points="433.3,347.4 433.3,414.9 
	479.3,415.1 479.3,346.1 "></polygon>
                    <polygon class="st13" points="522.8,389.4 522.8,413.3 555.4,412.2 555.4,388.5 "></polygon>
                    <polygon class="st2" points="500.5,389.4 500.5,413 522.8,413.3 522.8,389.4 "></polygon>
                    <polygon class="st4" points="499,382 499,389.4 500.5,389.4 522.8,389.4 525.2,389.3 525.2,381.7 "></polygon>
                    <polygon class="st43" points="556.4,381.1 525.2,381.7 525.2,389.3 556.4,388.5 "></polygon>
                    <polygon class="st4" points="540.3,330.2 536.1,330.3 525.2,381.7 556.4,381.1 "></polygon>
                    <linearGradient id="SVGID_00000067941910331758499790000015175084012221171117_" gradientUnits="userSpaceOnUse" x1="499.01" y1="417.865" x2="536.11" y2="417.865" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000067941910331758499790000015175084012221171117_);
            " points="512.1,330.5 499,382 525.2,381.7 
	536.1,330.3 "></polygon>
                    <linearGradient id="SVGID_00000162337107361918070800000012806878174361986699_" gradientUnits="userSpaceOnUse" x1="454.94" y1="422.5" x2="454.94" y2="441.64" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000162337107361918070800000012806878174361986699_);
            " points="477.8,346.1 432.1,347.4 
	432.1,338.5 477.8,337 "></polygon>
                    <polygon class="st13" points="496.8,346.1 496.8,337 477.8,337 477.8,346.1 479.3,346.1 "></polygon>
                    <polygon class="st32" points="432.1,338.5 451.1,285.2 454.9,284.8 479.3,337 477.8,337 "></polygon>
                    <polygon class="st6" points="454.9,284.8 473.6,286.6 496.8,337 479.3,337 "></polygon>
                    <polygon class="st12" points="536.5,178 536.5,156.3 502.6,148 502.6,173.8 "></polygon>
                    <polygon class="st6" points="502.6,148 408.9,164 408.9,186.4 502.6,173.8 "></polygon>
                    <polygon class="st16" points="493.1,278.1 448,282 448,268.8 495.9,263.5 495.9,277.9 "></polygon>
                    <polygon class="st6" points="542.3,270.8 495.9,263.5 495.9,277.9 542.3,283.1 "></polygon>
                    <linearGradient id="SVGID_00000091002132040610743290000017591840569191868060_" gradientUnits="userSpaceOnUse" x1="455.765" y1="628.75" x2="455.765" y2="678.48" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000091002132040610743290000017591840569191868060_);
            " points="500.1,101.2 428.5,114.4 
	408.9,164 502.6,148 "></polygon>
                    <polygon class="st47" points="480.3,134.4 485.4,117.6 501.1,120.6 502.6,148 502.6,170.6 488.7,173.2 ">
                    </polygon>
                    <polygon class="st3" points="475.9,260.6 429.9,266.3 448,268.8 495.9,263.5 "></polygon>
                    <polygon class="st2" points="429.9,250.1 429.9,266.3 475.9,260.6 475.9,244.4 "></polygon>
                    <linearGradient id="SVGID_00000013894806616702701270000006420393703811109276_" gradientUnits="userSpaceOnUse" x1="452.86" y1="602.19" x2="452.86" y2="543.06" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000013894806616702701270000006420393703811109276_);
            " points="475.9,161.4 429.9,168.7 
	429.9,250.1 475.9,244.4 "></polygon>
                    <linearGradient id="SVGID_00000036214127183882738830000008653452605563568058_" gradientUnits="userSpaceOnUse" x1="288.15" y1="563.57" x2="288.15" y2="504.44" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000036214127183882738830000008653452605563568058_);
            " points="311.1,200 265.2,207.4 
	265.2,288.7 311.1,283 "></polygon>
                    <polygon class="st3" points="542.3,225.9 475.9,211.2 475.9,229.4 529.5,241 529.5,268.8 542.3,270.8 ">
                    </polygon>
                    <polygon class="st13" points="494.9,233.5 494.9,248.1 475.9,244.4 475.9,260.6 529.5,268.8 529.5,241 ">
                    </polygon>
                    <polygon class="st4" points="494.9,233.5 475.9,229.4 475.9,244.4 494.9,248.1 "></polygon>
                    <polygon class="st4" points="475.9,236.6 475.9,161.4 493.1,165.2 493.1,236.6 "></polygon>
                    <linearGradient id="SVGID_00000127749468212506463200000018031848431602993565_" gradientUnits="userSpaceOnUse" x1="480.28" y1="573.105" x2="561.75" y2="573.105" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000127749468212506463200000018031848431602993565_);
            " d="M561.8,233.5v-53.4c0,0-8-8.8-28.6-11
	s-52.9,0.6-52.9,0.6v59.7L561.8,233.5z"></path>
                    <g class="st51">
                        <path d="M561.8,180.1c0,0-8-8.8-28.6-11c-2.1-0.2-4.3-0.4-6.5-0.5v63.1l35.1,1.8L561.8,180.1z"></path>
                    </g>
                    <path class="st3" d="M480.3,229.4c0,0,35.8-5.1,63.6-1s14.8,7.1,14.8,7.1l-43.3,4.3L480.3,229.4z"></path>
                    <polygon class="st2" points="494.9,248.1 494.9,233.6 523.7,229.4 523.7,243.7 "></polygon>
                    <polygon class="st3" points="529.5,254.3 494.9,248.1 523.7,243.7 554.3,250.1 "></polygon>
                    <polygon class="st13" points="554.3,250.1 554.3,235.4 523.7,229.4 523.7,243.7 "></polygon>
                    <polygon class="st32" points="429.9,168.7 429.9,163 475.9,155.2 475.9,161.4 "></polygon>
                    <polygon class="st15" points="429.9,163 447.2,106.5 451.5,105.8 475.9,155.2 "></polygon>
                    <polygon class="st9" points="451.5,105.8 470,111 493.1,159.4 475.9,155.2 "></polygon>
                    <polygon class="st12" points="475.9,155.2 493.1,159.4 493.1,165.2 475.9,161.4 "></polygon>
                    <polygon class="st9" points="338.5,224.4 338.5,200.2 324.5,196.8 324.5,202.4 316.2,200.9 316.2,194.9 302.6,191.6 302.6,218.5 ">
                    </polygon>
                    <polygon class="st3" points="288.1,200.9 288.1,197.7 276.9,195.2 276.9,202.4 "></polygon>
                    <polygon class="st3" points="324.5,202.4 324.5,196.8 316.2,198.6 316.2,200.9 "></polygon>
                    <polygon class="st15" points="302.6,191.6 288.1,193.6 288.1,200.9 276.9,202.4 276.9,195.2 264.4,197 264.4,223 302.6,218.5 ">
                    </polygon>
                    <polygon class="st7" points="302.6,303.1 338.5,305.7 338.5,252 302.6,247.1 "></polygon>
                    <polygon class="st1" points="264.4,252 264.4,305.7 302.6,303.1 302.6,247.1 "></polygon>
                    <polygon class="st16" points="264.4,122.7 264.4,197 273.1,195.8 273.1,121 "></polygon>
                    <polygon class="st6" points="337.8,122.7 327.8,120.6 327.8,197.6 337.8,200 "></polygon>
                    <polygon class="st16" points="327.8,120.6 320.4,123.2 320.4,197.7 324.5,196.8 327.8,197.6 "></polygon>
                    <polygon class="st16" points="291,117.6 291,193.2 302.6,191.6 302.6,115.3 "></polygon>
                    <polygon class="st6" points="273.1,121 273.1,195.8 276.9,195.2 281.3,196.2 281.5,124.5 "></polygon>
                    <polygon class="st6" points="302.6,115.3 302.6,191.6 312.7,194 312.7,117.4 "></polygon>
                    <polygon class="st3" points="312.7,117.4 312.7,124 320.2,125.6 320.4,123.2 327.8,120.6 "></polygon>
                    <polygon class="st3" points="291,117.6 280.6,119.6 291,121.8 "></polygon>
                    <polygon class="st2" points="302.6,83.8 302.6,115.3 320.6,119.1 320.6,89.1 "></polygon>
                    <polygon class="st13" points="337.8,94.1 320.6,89.1 320.6,119.1 337.8,122.7 "></polygon>
                    <polygon class="st1" points="302.6,83.8 280.6,88.3 280.6,119.6 302.6,115.3 "></polygon>
                    <path class="st3" d="M288.2,239c-1.5-1.5-3.5-2.4-5.7-2.4c-5.4,0-9.8,5.9-9.8,13.1c0,0.4,0,0.8,0,1.2l11.3-1.4
	C283.9,245.6,285.4,241.8,288.2,239z"></path>
                    <linearGradient id="SVGID_00000075151035691061269310000009461506789714989994_" gradientUnits="userSpaceOnUse" x1="283.53" y1="604.78" x2="283.53" y2="538.83" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000075151035691061269310000009461506789714989994_);
            " d="M264.4,223v29l8.3-1.1c0-0.4,0-0.8,0-1.2
	c0-7.2,4.4-13.1,9.8-13.1c2.1,0,4.2,0.9,5.7,2.4c2.5,2.5,3.9,5.9,4.1,9.4l5.3-0.7l5-0.6v-28.6L264.4,223z"></path>
                    <path class="st3" d="M320.6,237c-1.8,0-3.6,0.6-5.1,1.8c3.2,2.6,5,6.6,4.9,10.8l10.2,1.4c0-0.4,0.1-0.9,0.1-1.4
	C330.6,242.6,326.1,237,320.6,237z"></path>
                    <path class="st4" d="M302.6,218.5v28.6l3.7,0.5l4.2,0.6c0.2-3.7,2-7.1,4.9-9.4c1.5-1.1,3.3-1.7,5.1-1.8c5.5,0,10,5.6,10,12.6
	c0,0.5,0,0.9-0.1,1.4l8,1.1v-27.7L302.6,218.5z"></path>
                    <polygon class="st15" points="302.6,256.9 243.6,264.7 243.6,289.4 302.6,283.9 "></polygon>
                    <polygon class="st9" points="302.6,256.9 302.6,283.9 321.5,286.4 321.5,259.8 "></polygon>
                    <polygon class="st32" points="243.6,289.4 243.6,318.9 302.6,313.8 302.6,283.9 "></polygon>
                    <polygon class="st6" points="302.6,313.8 321.5,315.2 321.5,286.4 302.6,283.9 "></polygon>
                    <linearGradient id="SVGID_00000106118694091729749880000003671674818415366830_" gradientUnits="userSpaceOnUse" x1="293.07" y1="426.23" x2="293.07" y2="477.32" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #d1d1d1"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000106118694091729749880000003671674818415366830_);
            " points="302.6,342.2 302.6,313.8 
	283.5,315.5 283.5,342.8 "></polygon>
                    <polygon class="st9" points="341.5,343.4 341.5,316.8 302.6,313.8 302.6,342.2 "></polygon>
                    <polygon class="st47" points="354.8,322.5 392.8,354.6 392.8,321.8 "></polygon>
                    <polygon class="st47" points="281.4,386.9 281.4,404.4 322.1,432.4 322.1,386.9 "></polygon>
                    <polygon class="st47" points="321.5,265.4 366.6,307.6 321.5,304.5 "></polygon>
                    <path class="st47" d="M379.2,216.9c1.2-0.7,2.4-1.4,3.5-2v-24.1l-16.1,2.2v-47.7l-11.2-9.2l-4.7,16.4v43.2l-13,2.1v2.3l0.7,0.2v77.7
	h4.3C342.7,277.9,347.6,236.3,379.2,216.9z"></path>
                    <polygon class="st47" points="433.3,347.4 432.1,347.4 432.1,342.8 479.3,404 479.3,415.1 458.6,414.9 433.3,370.6 "></polygon>
                    <polygon class="st47" points="388.8,100.1 410.5,119.1 425.6,121.8 411.2,158.2 411.2,150.1 "></polygon>
                    <polyline class="st47" points="480.3,229.4 481.2,230.9 500.1,264.7 529.5,268.8 529.5,254.3 494.9,248.1 507.6,246.2 523.7,229.4 
	494.9,233.6 "></polyline>
                    <polygon class="st47" points="448,268.8 473.6,286.6 493.1,329 493.1,294.6 493.1,278.1 495.9,277.9 495.9,263.5 "></polygon>
                    <polygon class="st47" points="510.2,338.2 519.1,338.2 527,373.2 525.2,381.7 499,382 "></polygon>
                    <path class="st47" d="M525.2,381.7v7.6l-2.4,0.1v4.9l-7.4,4.9V423c0,8.9-7.2,16.2-16.2,16.2c-0.1,0-0.1,0-0.2,0l-9.2-0.2l1.2,35.9
	l-38.9-1.6l0.8-58.3l26.4,0.1l18.2-2.1h3.1v-23.6H499V382L525.2,381.7z"></path>
                    <polygon class="st47" points="474.9,474.2 474.9,480.8 523.1,502.8 523.1,476.3 "></polygon>
                    <polygon class="st47" points="354.8,523.1 392.8,544 422.9,546.2 422.9,503.6 415.2,504.8 395.1,503.5 392.8,503.1 392.8,516.1 
	376.1,518.3 354.8,517.6 "></polygon>
                    <polygon class="st47" points="243.7,521 243.7,524.7 259.3,532.1 267.1,532.8 283.5,542.1 283.5,534.3 304.5,536.2 304.5,521 
	294.6,522.4 275.1,521.1 263.6,523.1 "></polygon>
                    <polygon class="st47" points="263.6,339.2 286.3,353.4 297.8,386.9 281.4,386.9 "></polygon>
                    <polygon class="st1" points="191.8,380.1 191.8,380.1 199,379.9 "></polygon>
                    <polygon class="st1" points="109.6,381.5 145.6,604.9 153.9,603.5 116.4,381.4 "></polygon>
                    <linearGradient id="SVGID_00000093148078407510737270000000271503406366677410_" gradientUnits="userSpaceOnUse" x1="104.92" y1="280.795" x2="145.59" y2="280.795" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000093148078407510737270000000271503406366677410_);
            " points="104.9,381.6 139.3,604.1 
	145.6,604.9 109.6,381.5 "></polygon>
                    <linearGradient id="SVGID_00000127731515930917983900000000417140346874422162_" gradientUnits="userSpaceOnUse" x1="201.2612" y1="368.0502" x2="243.7612" y2="111.2402" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000127731515930917983900000000417140346874422162_);
            " points="199,379.9 191.8,380.1 
	232.1,615.8 241.4,617 "></polygon>
                    <polygon class="st1" points="248.3,615.6 208.7,379.9 199,379.9 241.4,617 "></polygon>
                    <linearGradient id="SVGID_00000111904041898925290700000017205022357532793010_" gradientUnits="userSpaceOnUse" x1="104.5919" y1="466.4495" x2="18.1619" y2="147.1195" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000111904041898925290700000017205022357532793010_);
            " points="123.8,305.9 123.8,305.9 
	123.8,305.9 118.1,306.3 0,624.8 5.3,625.7 123.8,305.9 "></polygon>
                    <polygon class="st1" points="137.8,309.3 123.8,305.9 5.3,625.7 5.3,625.7 22.9,623.2 "></polygon>
                    <linearGradient id="SVGID_00000142888388786332399100000007652672681882991522_" gradientUnits="userSpaceOnUse" x1="75.94" y1="327.4" x2="208.43" y2="327.4" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000142888388786332399100000007652672681882991522_);
            " points="75.9,447.7 76.2,445.3 
	207.9,445.6 208.4,447.9 "></polygon>
                    <linearGradient id="SVGID_00000012438482010919323220000008189226471753668503_" gradientUnits="userSpaceOnUse" x1="52.44" y1="264.05" x2="141.04" y2="264.05" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <polygon style="
              fill: url(#SVGID_00000012438482010919323220000008189226471753668503_);
            " points="52.4,507.7 52.4,510.1 
	140.3,512.2 141,510 "></polygon>
                    <linearGradient id="SVGID_00000145055901890915982450000012445323563504564407_" gradientUnits="userSpaceOnUse" x1="190.9102" y1="584.59" x2="83.2402" y2="177.45" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #f5f5f5"></stop>
                        <stop offset="1" style="stop-color: #e4e4e4"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000145055901890915982450000012445323563504564407_);
            " d="M120.2,302.2l-2.1,4.1l5.7-0.4l46.5-3.1
	c11.4-0.8,21.3,7.9,22.1,19.3c0.2,2.5-0.1,5.1-0.9,7.5L95.7,640.1l8.7,1.4l91.3-311.7c3.8-12.9-3.6-26.4-16.5-30.2
	c-2.7-0.8-5.6-1.1-8.5-0.9L120.2,302.2z"></path>
                    <path class="st1" d="M170.6,298.7L170.6,298.7c13.4-0.9,25,9.2,25.9,22.7c0.2,2.9-0.1,5.7-0.9,8.5l-91.2,311.7l17.8-3l88.1-305
	c4.3-14.9-4.3-30.4-19.2-34.6c-3.1-0.9-6.4-1.2-9.6-1L170.6,298.7z"></path>
                    <polygon class="st60" points="116.3,573.5 43.3,567.3 29.7,567.3 115.8,574.9 "></polygon>
                    <polygon class="st1" points="29.7,567.3 29.7,569.8 115.1,577.2 115.8,574.9 "></polygon>
                    <polygon class="st61" points="123.8,305.9 133.3,321.6 137.8,309.3 "></polygon>
                    <polygon class="st61" points="75.9,447.7 84.8,454.1 87.1,447.8 "></polygon>
                    <polygon class="st61" points="52.4,510.1 64.2,510.4 61.4,517.9 "></polygon>
                    <path class="st3" d="M642.7,557.7c-1.1-2.1-5.2-8.2-6.7-10.4h-4.2v16.8c0,0,2.8,4,5.9,5.6C644.7,570.3,644.1,560.4,642.7,557.7z">
                    </path>
                    <path class="st9" d="M644.5,557.2l-7.1-9.9h-1.4c1.5,2.2,5.5,8.3,6.7,10.4c1.4,2.6,2,12.6-5,12c1,0.6,2.1,0.7,3.2,0.5
	C645.1,568.9,646.3,559.7,644.5,557.2z"></path>
                    <polygon class="st61" points="29.7,569.8 39.7,577.2 42.1,570.8 "></polygon>
                    <polygon class="st61" points="199,379.9 196.9,380.1 193.6,391.5 196.9,409.7 200.7,389.5 "></polygon>
                    <path class="st7" d="M361.2,644c-6.6,0.1-10.3-2.3-11.9-3.6c0,1.5,0,2.5,0,2.7c0,0.6,4.6,5.2,16.8,3.6c4.9-0.6,10.4-1.2,15.2-1.6
	l-0.3-3.3C374.6,643,367.9,643.7,361.2,644z"></path>
                    <path class="st3" d="M391.1,629.9l-19.6-3.4l-20.2-0.5c0,0-1.8,0.6-1.9,1.5c-0.1,0.7,0,8.7,0,13c1.5,1.3,5.3,3.7,11.9,3.6
	c6.7-0.3,13.3-1,19.9-2.2l0.3,3.3c7.2-0.6,12.9-1,12.9-1L391.1,629.9z"></path>
                    <path class="st11" d="M351.3,619.6v7.5c0,0,3.1,3.7,12.6,3.7c8.2,0,7.6-4.3,7.6-4.3v-8L351.3,619.6z"></path>
                    <path class="st3" d="M417.1,643.3c1.6-0.3,2.2-2,2.4-3.5c0-2.6-1.9-4.8-4.4-5.3l-20.6-4l-20.2-0.5c0,0-1.8,0.6-1.9,1.5
	c-0.1,0.7,0,8.9,0,13.2c1.2,1,4.9,3.5,11.3,3.6C391.7,648.3,414,643.9,417.1,643.3z"></path>
                    <path class="st7" d="M417.1,643.3c-3,0.7-25.4,5-33.4,4.8c-6.4-0.1-10-2.6-11.3-3.6c0,1.4,0,2.3,0,2.5c0,0.6,4.6,5.2,16.8,3.6
	c8.7-1.1,19.3-3.3,24.6-4.4c2.2-0.5,4-1.9,5-3.9l0,0c0.4-0.8,0.6-1.7,0.6-2.5C419.3,641.2,418.7,642.9,417.1,643.3z">
                    </path>
                    <path class="st11" d="M374.2,620.4v10.5c0,0,2.7,3.7,11.3,3.7c7.6,0,7.6-4.5,7.6-6.1v-9L374.2,620.4z"></path>
                    <path class="st62" d="M388.6,313.4c1.1,1.9,3.6,3.7,5,4.7s-0.2,3-2,2.1S388.6,313.4,388.6,313.4z"></path>
                    <path class="st47" d="M388.1,313.4c1.1,1.9,4.1,3.7,5.5,4.7s-0.7,3-2.5,2.1"></path>
                    <path class="st62" d="M404.4,360.3c0,0,19.2-27.3,21.2-30s8.7-8.7,12.9-8.5s5,2.7,2.4,3s-4.3,0.7-4.3,0.7l-4.6,13v8l-19.4,57.4
	c-1.1,3-4.3,4.5-7.3,3.4c-0.3-0.1-0.5-0.2-0.8-0.3L383,395.2L404.4,360.3z"></path>
                    <path class="st62" d="M364.5,349.4v-14.9l-5.8-21.8l21.7-9.6l2.6,1c0,0,10.3,17,12.5,21.3s2.6,13.3-8.5,14.8V352L364.5,349.4z">
                    </path>
                    <path class="st47" d="M384,330.5c0,0,3.1,5,3.1,9.7c7.2-1,9.5-5.1,9.7-9.1C396.2,336,384,330.5,384,330.5z">
                    </path>
                    <path class="st3" d="M352.6,325.6l7,11.5c1.7,2.9,5.3,4,8.4,2.6l6.6-3c1.7-0.8,2.6-2.7,2.1-4.5l-4.7-16.2l4.3,1.6
	c0,0,3.7,0.8,4.8-0.3s-4.1-6.5-4.1-6.5s8.3-3,8.7-2.4l1.1,1.8c0,0,2.6-4.6-1.4-7.6c0,0,7.3-4.9-0.5-7.5s-20.1-3.9-31.8,6.4
	C342.2,311.4,351.6,324.1,352.6,325.6z"></path>
                    <path class="st15" d="M343.8,456.1c0,0-0.8,110.9,4.7,162.2c0,0,3.7,9.5,23.1,4l4.3-3.8l-1.4-160L343.8,456.1z"></path>
                    <path class="st63" d="M358.8,479.8c-2,1.7-4.5,2.9-7.1,3.5c-0.4,0.1,4.8,2.9,4.8,3.4s0,0.9,0,1.3c0.4,29.7,1.8,116.1,4.5,136
	c0,0,11-0.2,13.3-3.6C376.9,616.6,386.9,462.3,358.8,479.8z"></path>
                    <path class="st15" d="M351.7,483.3l13.1,4c0,0,2.7,112.5,6.1,135c0,0,3.4,4.2,15.4,4.2c9,0,10.6-5.2,10.6-5.2s6.4-100.4,6.4-125.6
	v-40.5h-44.1"></path>
                    <path class="st47" d="M343.8,456.1v0.8c0,0,23.3,15.9,59.4,9.8v-11.4l-59.5,0.1L343.8,456.1z"></path>
                    <path class="st62" d="M379.6,319.5c0,0-5.9-6.7-9.2-4.8s0.7,8.3,5,10.3s5-1.6,5-1.6"></path>
                    <path class="st15" d="M363.3,353.6V350c0-0.5,0.2-1,0.6-1.4c3.6-2.9,8-4.6,12.7-4.6c3.7-0.2,7.5,0.1,11.2,0.9
	c0.8,0.2,1.4,0.9,1.4,1.8v5.2L363.3,353.6z"></path>
                    <path class="st62" d="M496.8,373.7l-1.5,0.3l1.9-3.3c0.4-0.4,0.3-1.1-0.1-1.4c-0.4-0.4-1.1-0.3-1.4,0.1l-4.6,3.8
	c0,0,1.2-2.6,2.1-4.1s-0.4-2.7-1.5-1.9s-9,8.4-9,8.4s0.1-3.8-0.7-4c-1.4-0.3-2.9,2.8-3.6,4.9s-3,8.1-3,8.1L453,396.2
	c0,0-9.7-9.8-21.6-20.4c3.8,3.4-2.6,21.2-9.7,29l24.9,11.8c5,2.4,11,1.4,15-2.4c9.5-9,25.9-24.8,28.8-27.3
	c4.1-3.6,7.1-11.5,7.1-11.5v-1c0-0.4-0.2-0.7-0.6-0.7C496.9,373.7,496.8,373.7,496.8,373.7z"></path>
                    <path class="st1" d="M432.7,374.2c-13.1-11.8-29-24.6-37.4-26.5c-16-3.6-36.1-3.3-45.5,22.9s-7.4,85.7-7.4,85.7
	c40.9,12.5,66.3,0,66.3,0l0.1-57l11.7,6l2.5-2.2C430.1,395.4,436.5,377.6,432.7,374.2z"></path>
                    <g>
                        <path class="st3" d="M455.4,399.2c-0.1,0-0.3-0.1-0.4-0.2l-2.4-2.5c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0l2.4,2.5
		c0.2,0.2,0.2,0.5,0,0.7C455.7,399.2,455.5,399.2,455.4,399.2z"></path>
                    </g>
                    <polygon class="st47" points="408.9,399.3 400.6,394.9 408.8,409.3 "></polygon>
                    <g>
                        <path class="st3" d="M408.8,399.8c-0.1,0-0.2,0-0.2-0.1l-8.3-4.5c-0.2-0.1-0.3-0.4-0.2-0.7s0.4-0.3,0.7-0.2l8.3,4.5
		c0.2,0.1,0.3,0.4,0.2,0.7C409.2,399.7,409,399.8,408.8,399.8z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M487.8,377.9c-0.1,0-0.2,0-0.3-0.1c-0.2-0.2-0.3-0.5-0.1-0.7l3.2-4.2c0.2-0.2,0.5-0.3,0.7-0.1
		c0.2,0.2,0.3,0.5,0.1,0.7l-3.2,4.2C488.1,377.8,488,377.9,487.8,377.9z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M490.4,380.2c-0.1,0-0.2,0-0.3-0.1c-0.2-0.2-0.2-0.5-0.1-0.7l4.9-5.7c0.2-0.2,0.5-0.2,0.7-0.1
		c0.2,0.2,0.2,0.5,0.1,0.7l-4.9,5.7C490.7,380.2,490.5,380.2,490.4,380.2z"></path>
                    </g>
                    <path class="st12" d="M243.3,88.6c0,0,4-10.6,4.2-12.7s1.1-3.3,1.7-3.3c1.2,0,1.7,1.8,2.1,5.5c0.5,4.4-4.2,10.2-4.2,10.2L243.3,88.6
	z"></path>
                    <path class="st47" d="M270.2,79.4l0.4,2.2c-0.8,1.5-2.1,2.7-3.6,3.5c-1.2,0.6-5.4,14.8-5.9,22.2l-5.3,1l-2.9-18.4l13.4-8.7
	L270.2,79.4z"></path>
                    <path class="st64" d="M235.9,102.7c0,0,5.3-9.5,6.9-13s5.2-10.7,7.1-11.9s11.4-3.4,14.5-3.6s9.1,0.3,9.3,1.4s-1.3,1.7-2.4,1.8
	c0,0,1,1.3-1.8,2.4c0,0,1.2,2.6-2.7,3.8c-3.8,1.2-7,3.8-9.1,7.1c-1.6,2.8-7.8,16.5-7.8,16.5L235.9,102.7z"></path>
                    <linearGradient id="SVGID_00000001628517020943347740000011819402725682383543_" gradientUnits="userSpaceOnUse" x1="190.9112" y1="674.6534" x2="123.4412" y2="507.3634" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #1c48c0"></stop>
                        <stop offset="1" style="stop-color: #ba3dfe"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000001628517020943347740000011819402725682383543_);
            " d="M149.2,233.1L133,249.5l7.1,25.1l-8,12.2
	c0,0-14.7-19.6-20.2-34.9c-1-2.9-0.5-6,1.3-8.4c7.2-9.3,26.5-34,34.5-43.9C157.8,187.2,149.2,233.1,149.2,233.1z"></path>
                    <g class="st51">
                        <path d="M147.8,199.6c-2.2,2.8-5.4,6.7-8.9,11.1l-0.3,3.1c-0.9,8.2-0.5,16.4,1.1,24.5l0.7,3.7l8.8-9
		C149.2,233,157.8,187.2,147.8,199.6z"></path>
                    </g>
                    <path class="st9" d="M237,100.7v-1c0,0,1.9-4.5,3.3-5.5s6-1.8,10.3,0.9c4.9,3,3.4,5.9,1.5,9.3S237,100.7,237,100.7z"></path>
                    <linearGradient id="SVGID_00000030450480960702381420000011263469149350132355_" gradientUnits="userSpaceOnUse" x1="225.251" y1="660.8096" x2="157.781" y2="493.5096" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #1c48c0"></stop>
                        <stop offset="1" style="stop-color: #ba3dfe"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000030450480960702381420000011263469149350132355_);
            " d="M141.1,259.5c4.7-9,7.5-29,12.8-46.5
	c0,0,26.9-9.1,35.7-25.1s42.9-82.4,47.4-89c4-5.8,18.9-2.7,15.3,5.7s-30.2,62.2-39.6,87.7s-16.5,63.9-20.3,79.3s-49-5.8-49-5.8
	L141.1,259.5z"></path>
                    <path class="st3" d="M190.3,186.6c0,0,23.7,50.6-13,59.1c-24.7,5.7-27.9-13.1-27.3-26.1c0,0-5.9-8.1-4.3-16.4s11.7-19.9,8.9-27.8
	s-5.9-21,4.2-29.7c5.7-5.1,13.7-6.8,21-4.5c0,0,8.8-5.4,13.3,3.1s-0.9,12.1-0.9,12.1l1.2,8.8c0.4,3,2.1,5.6,4.5,7.3l0,0L190.3,186.6
	z"></path>
                    <path class="st64" d="M192.3,169.5c-1.6-0.6-3.1-1.6-4.2-2.8c-3.5-0.4-7.9-6.6-4.8-8.5s7.3,5.5,7.3,5.5c2.1-1.1,1.3-2.3,0.6-3.2
	s-6.5-7.2-3.4-9.7s6.5,2.8,6.5,2.8c0.4,1,1.9,5.9,1.9,5.9c1.8,3.2,2.8,6.8,3.1,10.4l-1.6,3l-1.8-1.5
	C194.7,170.5,193.5,169.9,192.3,169.5z"></path>
                    <path class="st3" d="M143.8,285.2c1.6,5.6,8.4,12.7,8.4,12.7L144,348c0,0-15.3,70.7-15.5,72s4.7,3.3,12.5,4.3
	c3.8,0.5,7.6,0.8,11.4,0.7c0.9,0,1.7-0.6,1.9-1.5c2.3-7.8,13.7-46.6,21.9-76c9.1-32.8,16.4-72.8,16.2-75.9s-8.7-10.7-23.3-13.8
	s-28,1.6-28,1.6c-3.4,4.2-6.3,8.8-8.6,13.7c-4.4,10.1-7.2,22.8-11.1,31.5c-6.6,14.8-12.2,32.6-12.2,32.6s-35.4,29-41.4,34.4
	c-0.6,0.5-1,1.2-1.1,1.9c-0.9,4.2-0.8,8.6,0.2,12.8c1.7,6,6.6,10.7,9.3,10s49.9-36.8,56.4-41.5s36.9-68,36.9-68"></path>
                    <ellipse transform="matrix(0.9722 -0.2341 0.2341 0.9722 -87.7641 27.8393)" class="st67" cx="73.4" cy="383.6" rx="5.2" ry="11.6"></ellipse>
                    <path class="st68" d="M78.4,382.4c-0.6-3-2-5.9-3.9-8.3l-6.7,3.8l-6.3,3.6l3.7,16.7l7.7-4.6l6.2-3.7C79.2,387.4,79,384.8,78.4,382.4
	z"></path>
                    <g class="st51">
                        <path d="M78.4,382.4c-0.6-3-2-5.9-3.9-8.3l-5.2,3c2.2,1.1,8.1,5.1,7.2,14.4l2.5-1.5C79.2,387.4,79,384.8,78.4,382.4z">
                        </path>
                    </g>
                    <path class="st3" d="M56.8,401.4c1.9-5.5,3.2-16.3-0.4-17.8c-2.1-0.9-4.5-0.5-6.2,1c-0.9,0.9-0.9,2.1-1.3,3.5l0,0
	c-1.4,6.4-4.2,19-6.1,25.2c-1.8,5.9-2.5,12.4,0.6,15.1h0l0.3,0.3c0,0,0,0,0,0l0.1,0C49.6,431.9,55,406.7,56.8,401.4z">
                    </path>
                    <path class="st15" d="M72.3,385.6c-0.6-8-6.9-9.2-10.1-7.9c-2.4,1-8.1,3.3-10.9,5.4c1.3-0.8,6.3-3.3,8.9,0.5s0.8,12.5,0,15.5
	s-4.2,13.9-5.4,17.3s-3.9,13.6-8.8,13c0.4,0.1,0.8,0.1,1.3,0.2c7.1,0.2,11.3-13.4,17.5-22.4S72.8,393.6,72.3,385.6z">
                    </path>
                    <path class="st9" d="M54.7,416.4c1.3-3.5,4.7-14.4,5.5-17.4s2.6-11.6,0-15.5s-7.6-1.3-8.9-0.5c-0.9,0.7-1.6,1.3-1.7,1.8
	s-0.4,1.8-0.7,3.2c0.4-1.5,0.4-2.7,1.3-3.5c1.7-1.5,4.1-1.9,6.2-1c3.6,1.5,2.3,12.3,0.4,17.8c-1.9,5.4-7.2,30.6-12.9,27.4
	c0.6,0.4,1.2,0.6,1.9,0.7C50.8,430,53.4,419.8,54.7,416.4z"></path>
                    <path class="st67" d="M152.9,423.7c-0.1,0.9-5.4,0.8-11.7-0.1s-11.7-2.5-11.6-3.4s5.7-0.6,12,0.3S153,422.8,152.9,423.7z">
                    </path>
                    <path class="st68" d="M141.6,420.5c-2.6-0.4-5-0.6-7-0.7l-0.6,2.4l-1.6,6.9l16.9,0.4l1.2-5.2l0.4-1.8
	C147.9,421.5,144.8,420.9,141.6,420.5z"></path>
                    <g class="st51">
                        <path d="M141.6,420.5c-2.6-0.4-5-0.6-7-0.7l-0.6,2.4l-0.3,1.3c5.6-0.5,11.3-0.5,16.9,0.2l0.3-1.2
		C147.9,421.5,144.8,420.9,141.6,420.5z"></path>
                    </g>
                    <g>
                        <defs>
                            <polygon id="SVGID_00000118369092372386268170000007935130205046028463_" points="154.9,448.1 162.8,422.6 111.9,418.9 
			123.8,454.1 		"></polygon>
                        </defs>
                        <clipPath id="SVGID_00000062881010875976970480000018141419467906463639_">
                            <use xlink:href="#SVGID_00000118369092372386268170000007935130205046028463_" style="overflow: visible">
                            </use>
                        </clipPath>
                        <g style="
                clip-path: url(#SVGID_00000062881010875976970480000018141419467906463639_);
              ">
                            <path class="st15" d="M172.5,442.3c-1-1.9-2.5-3.5-4.4-4.4c-3.2-1.7-15.2-11.4-15.8-11.7s-5.2-0.3-8.8-0.3s-12.6-0.3-13,0.6
			c-0.3,0.7-1.8,10.9-2.6,15.8C133.1,442.3,157.7,442.3,172.5,442.3z"></path>
                            <path class="st9" d="M127.9,442.3c-0.1,0.6-0.2,1.1-0.2,1.5c-0.1,0.6,0.3,1.1,0.9,1.2c0,0,0.1,0,0.1,0H172c0.6,0,1-0.4,1-1
			c-0.1-0.6-0.2-1.1-0.5-1.7C157.7,442.3,133.1,442.3,127.9,442.3z"></path>
                        </g>
                    </g>
                    <g>
                        <path class="st70" d="M146.2,334.8C146.1,334.8,146.1,334.8,146.2,334.8c-0.4-0.1-0.5-0.3-0.5-0.6l6-36.2
		c-1.1-1.2-6.8-7.5-8.3-12.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3c1.6,5.5,8.2,12.5,8.3,12.5l0.2,0.2l-6,36.7
		C146.6,334.7,146.4,334.8,146.2,334.8z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M258.2,82.1c-0.2,0-0.4-0.1-0.5-0.3c-0.1-0.3,0.1-0.5,0.3-0.6c3.5-1.2,7.2-2,10.8-2.4c0.5,0,1,0.3,1.1,0.8
		c0.1,0.3-0.1,0.5-0.4,0.6c-0.3,0.1-0.5-0.1-0.6-0.4c-3.6,0.4-7.2,1.1-10.6,2.3C258.3,82.1,258.2,82.1,258.2,82.1z">
                        </path>
                    </g>
                    <g>
                        <path class="st3" d="M258,78.8c-0.2,0-0.4-0.2-0.5-0.4c-0.1-0.3,0.1-0.5,0.4-0.6c0.1,0,7-1.5,12.3-2c0.7,0,1.3,0.3,1.5,1
		c0.1,0.3,0,0.5-0.3,0.6c-0.3,0.1-0.5,0-0.6-0.3c-0.1-0.2-0.3-0.3-0.5-0.3c-5.2,0.5-12.1,2-12.2,2C258.1,78.8,258,78.8,258,78.8z"></path>
                    </g>
                    <path class="st13" d="M592.9,521.4l-0.8,6.2l-24.4,33.3c-3.7,5.1-3.3,12.1,0.9,16.7l0,0c3.3,3.6,8.3,5,13,3.8l53.4-14.1l-14-45.9
	H592.9z"></path>
                    <path class="st47" d="M616,550.3c-0.2,0-0.2-0.1-23.6,16.4l27.6-6.4L616,550.3z"></path>
                    <path class="st3" d="M643.1,569.4c-1.4-2.1-2.7-4.4-3.9-6.7c-1.4-3.2-13.6,7.8-13.6,7.8l1.4,6.7l-0.7,3.1c2.8-2.2,12.1-1.3,14.3,5.4
	c1.2-1.5,2-3.8,2.1-7.4C643,571.1,643.8,570.4,643.1,569.4z"></path>
                    <path class="st11" d="M626.3,580.4c-1.9,1.8-3.1,4.3-3.2,6.9c0.2,2,6.5,2.6,11.6,1.5c2.6-0.6,4.6-1.3,6-3
	C638.4,579.2,629.1,578.2,626.3,580.4z"></path>
                    <path class="st15" d="M643.1,569.4c0.6,1-0.1,1.7-0.4,9.1s-3,9.2-8,10.3s-11.4,0.5-11.6-1.5c0,0.7,0,1.3,0.1,2c0,0,0.5,3.4,8.7,3
	s10.3-3.8,11.5-7.2s1-11.6,1.1-12.8C644.3,571.3,643.8,570.3,643.1,569.4z"></path>
                    <linearGradient id="SVGID_00000097465196861874602570000018236607407758325145_" gradientUnits="userSpaceOnUse" x1="600.844" y1="239.29" x2="600.844" y2="325.18" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #1c48c0"></stop>
                        <stop offset="1" style="stop-color: #ba3dfe"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000097465196861874602570000018236607407758325145_);
            " d="M646.2,516.9c1.8-1.5,0.9-6.5-1.7-11.3
	s-8.8-30.6-10.4-38.5s-9.2-16.2-26.5-15.2s-23,4.8-35,13.3s-18.2,13.3-18.2,13.3v19.9c0,0,29.1-17.4,33.4-20.1
	c0,0,2.2,11.4,3.1,21.2s1.4,14.7,2,21.9h52.4L646.2,516.9z"></path>
                    <g>
                        <path class="st3" d="M587.9,478.8c-0.2,0-0.4-0.2-0.5-0.4c-0.7-2.9-1.7-5.8-3-8.6c-0.1-0.3,0-0.5,0.3-0.7c0.3-0.1,0.5,0,0.7,0.3
		c1.3,2.8,2.3,5.8,3,8.8c0.1,0.3-0.1,0.5-0.4,0.6C588,478.8,587.9,478.8,587.9,478.8z"></path>
                    </g>
                    <polygon class="st47" points="630,480.3 606.2,521.4 592.9,521.4 592.1,512.2 "></polygon>
                    <linearGradient id="SVGID_00000163040696370796941410000011452184843975652481_" gradientUnits="userSpaceOnUse" x1="592.9514" y1="239.29" x2="592.9514" y2="325.18" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #1c48c0"></stop>
                        <stop offset="1" style="stop-color: #ba3dfe"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000163040696370796941410000011452184843975652481_);
            " d="M616,464.7c-8,11.8-18.2,22-30.1,29.9
	c-16.8,11.1-27.9,19.1-30.6,21.1c-0.4,0.3-0.7,0.8-0.8,1.3c-0.4,3.3,0.1,6.6,1.3,9.7c2.2,5.5,4,6.8,6.2,6s26.6-15.2,38.9-24.4
	s30.7-29.7,30.7-29.7"></path>
                    <ellipse transform="matrix(0.9602 -0.2793 0.2793 0.9602 -124.1698 176.9124)" class="st3" cx="558.7" cy="524.1" rx="2.6" ry="8"></ellipse>
                    <path class="st64" d="M561.2,523.4c-1.2-4.2-3.3-7.3-4.7-7h-0.1c-0.1,0-0.2,0.1-0.3,0.2l0,0l-5.3,2.7l-7.3-0.7
	c-0.4,0-0.7,0.2-0.9,0.5l0,0c-0.2,0.4,0,1,0.4,1.2l2.9,1.5c0.2,0.1,0.3,0.4,0.2,0.6c-0.1,0.1-0.2,0.2-0.3,0.2l-11.9,2.8
	c-0.5,0.1-0.8,0.6-0.7,1.1l0,0c0.1,0.5,0.5,0.8,1,0.8l10.3-1.2c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0,0.1l-9,5.2c-0.5,0.3-0.7,0.9-0.4,1.3
	c0,0.1,0.1,0.2,0.1,0.2l0,0c0.3,0.4,0.7,0.5,1.1,0.3l9.5-3.1c0,0,0.1,0,0.1,0.1c0,0,0,0.1,0,0.1l-6.1,5.3c-0.4,0.4-0.4,1-0.1,1.4
	c0,0,0.1,0.1,0.1,0.1l0,0c0.3,0.2,0.8,0.3,1.1,0.1l6.9-4.2c0,0,0.1,0,0.1,0s0,0.1,0,0.1l-2.5,5.4c-0.2,0.5,0,1,0.5,1.2
	c0,0,0.1,0,0.1,0l0,0c0.4,0.1,0.7,0,1-0.2l8.1-8.5l2.6-1.5l3.9-2.4C561.8,525.8,561.6,524.5,561.2,523.4z"></path>
                    <g class="st0">
                        <path d="M561.2,523.4c-1.2-4.2-3.3-7.3-4.7-7h-0.1c-0.1,0-0.2,0.1-0.3,0.2l0,0l-0.2,0.1c1,0.9,3.7,4.3,3.7,11.8l2.3-1.4
		C561.8,525.8,561.6,524.5,561.2,523.4z"></path>
                    </g>
                    <path class="st15" d="M596.2,455.3c-2.2,1.4-3.5,5-1.4,6.7s8.8,3.1,16-2c8.8-6.4,3-12.2-2.6-8.7
	C604.5,453.5,600.4,454.8,596.2,455.3z"></path>
                    <path class="st64" d="M612.2,451.3l-0.7-8.9l-0.4-4.4l-15.4,5.9l0.4,10.9l0.1,2.2c0.2,5.1,7.9,2.8,12.6,0
	C611.5,455.6,612.4,453.8,612.2,451.3z"></path>
                    <path class="st47" d="M610,440.3l1.2-2.2l-15.4,5.9l0.4,10.9C599.3,454.4,609.9,453.5,610,440.3z"></path>
                    <g>
                        <path class="st3" d="M590.1,492.2c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.1-0.5,0.1-0.7c10.1-7.4,18.8-16.5,25.8-26.9
		c0.2-0.2,0.5-0.3,0.7-0.1c0.2,0.2,0.3,0.5,0.1,0.7c-7.1,10.5-15.8,19.6-26,27.1C590.3,492.2,590.2,492.2,590.1,492.2z">
                        </path>
                    </g>
                    <path class="st2" d="M646.2,516.9c0,0-3.7,2.3-7.6,1.1s-31.9-12.2-39.8,3.4c-7.8,15.4,9.3,28.4,24.3,50.8c0.5,0.8,1.4,1.2,2.3,1
	c1.1-0.2,2.3-0.5,3.6-0.7c6.2-1.2,9.2-5.4,10.8-7.8c0.7-0.9,0.7-2.2,0.2-3.2l-5.9-11.8c0,0,14-0.6,17.7-10.2
	S646.2,516.9,646.2,516.9z"></path>
                    <g class="st51">
                        <path d="M622.7,525l11.5,24.6c0.8,0,11.7-0.8,16.4-7.9C645.2,548.3,625.8,531.5,622.7,525z"></path>
                    </g>
                    <path class="st15" d="M607.6,430.8L607.6,430.8l-0.1,0.1L607.6,430.8z"></path>
                    <path class="st64" d="M593.5,441.9c1.5-0.2,1.3-1.9,1.3-1.9l4.9-0.7c3.8-0.5,2.9-3,2.4-6c-0.4-2.4-1.1-6.3-1.4-7.9
	c-3.2,2.4-7.7,1.8-10.1-1.4c0,0-0.1-0.1-0.1-0.2c-0.2,1.8-1.4,3.3-3.1,4c-0.3,0.1-0.7,0.2-1.1,0.3c0.9,4.2,2,9.2,2.5,12.4l3-0.4
	C591.8,440.1,592,442.1,593.5,441.9z"></path>
                    <path class="st64" d="M612.8,431.2c-0.8-3.7-3.6-3-5.2-0.4l-0.1,0.1c0.5,3.1,1,9.6,2.4,9.4c0,0,3.1-1.1,3.1-7
	C613,432.6,613,431.9,612.8,431.2z"></path>
                    <path class="st16" d="M615.2,420.1c-0.4-2.6-2.5-4.7-5.1-5.1c0-0.5,0-1.1-0.1-1.6c-0.6-4.2-4.5-7-8.6-6.4c0,0,0,0,0,0
	c-1.4,0.2-2.7,0.8-3.7,1.7c-3.1-2.5-7.6-2-10.1,1.1c-0.3,0.4-0.6,0.8-0.8,1.3c-2.3,0.5-3.9,2.7-3.5,5.1l0,0c-2.7,0.7-4.4,3.3-4,6.1
	c0.2,1.1,0.6,2.1,1.4,2.9c-0.2,0.6-0.2,1.2-0.1,1.9c0.3,2.4,2.5,4.1,4.8,3.8c0.5-0.1,1-0.2,1.5-0.5c0,0-0.4-2-0.4-2
	c0.4-0.1,0.7-0.2,1.1-0.3c1.7-0.7,2.8-2.2,3.1-4c2.3,3.2,6.8,4,10.1,1.7c0.1,0,0.1-0.1,0.2-0.1c0.3,1.5,1,5.5,1.4,7.9
	c0.5,3,1.3,5.4-2.4,6l-4.9,0.7c0,0,0.2,1.6-1.3,1.9s-1.7-1.7-1.7-1.7l-3,0.4c0.1,0.6,0.2,1.1,0.3,1.6c0.6,4.2,0.9,12.1,10.9,9.8
	c5.6-1.2,9.8-6,10-11.7c-1.4,0.2-1.9-6.3-2.4-9.4v-0.2l0.1,0.1c1.6-2.5,4.4-3.2,5.2,0.4c1.8-0.8,2.6-2.9,1.9-4.7
	c-0.2-0.6-0.6-1.1-1.1-1.4C614.9,423.7,615.4,421.9,615.2,420.1z"></path>
                    <linearGradient id="SVGID_00000091003662669995133130000000171794905157472907_" gradientUnits="userSpaceOnUse" x1="149.8522" y1="1191.2748" x2="149.8522" y2="1196.2047" gradientTransform="matrix(0.9894 -0.1452 -0.1452 -0.9894 612.9059 1639.2555)">
                        <stop offset="0" style="stop-color: #ff8538"></stop>
                        <stop offset="1" style="stop-color: #f5f5f5"></stop>
                    </linearGradient>
                    <path style="
              opacity: 0.5;
              fill: url(#SVGID_00000091003662669995133130000000171794905157472907_);
              enable-background: new;
            " d="
	M587.3,433L587.3,433c1.8-0.3,3.5,1,3.8,2.8l0,0c0.3,1.8-1,3.5-2.8,3.8l0,0c-1.8,0.3-3.5-1-3.8-2.8l0,0
	C584.2,435,585.5,433.2,587.3,433z"></path>
                    <linearGradient id="SVGID_00000132803383982104852130000016141729231322668193_" gradientUnits="userSpaceOnUse" x1="158.9221" y1="1191.2748" x2="158.9221" y2="1196.2047" gradientTransform="matrix(0.9894 -0.1452 -0.1452 -0.9894 612.9152 1639.2526)">
                        <stop offset="0" style="stop-color: #ff8538"></stop>
                        <stop offset="1" style="stop-color: #f5f5f5"></stop>
                    </linearGradient>
                    <path style="
              opacity: 0.5;
              fill: url(#SVGID_00000132803383982104852130000016141729231322668193_);
              enable-background: new;
            " d="
	M596.3,431.7L596.3,431.7c1.8-0.3,3.5,1,3.8,2.8l0,0c0.3,1.8-1,3.5-2.8,3.8l0,0c-1.8,0.3-3.5-1-3.8-2.8l0,0
	C593.2,433.6,594.5,431.9,596.3,431.7z"></path>
                    <g>
                        <path class="st3" d="M587.8,440.1c-1.9,0-3.5-1.4-3.8-3.3c-0.1-1,0.1-2,0.7-2.9c0.6-0.8,1.5-1.4,2.5-1.5l0,0
		c2.1-0.3,4.1,1.2,4.4,3.2c0.1,1-0.1,2-0.7,2.9c-0.6,0.8-1.5,1.4-2.5,1.5C588.2,440.1,588,440.1,587.8,440.1z M587.4,433.5
		L587.4,433.5c-0.8,0.1-1.4,0.5-1.9,1.1c-0.5,0.6-0.6,1.4-0.5,2.1c0.2,1.6,1.7,2.6,3.2,2.4c0.8-0.1,1.4-0.5,1.9-1.1
		c0.5-0.6,0.6-1.4,0.5-2.1C590.4,434.3,588.9,433.2,587.4,433.5z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M596.8,438.8c-0.8,0-1.6-0.3-2.3-0.8c-0.8-0.6-1.4-1.5-1.5-2.5c-0.1-1,0.1-2,0.7-2.9c0.6-0.8,1.5-1.4,2.5-1.5
		l0,0c2.1-0.3,4.1,1.2,4.4,3.3c0.1,1-0.1,2-0.7,2.9s-1.5,1.4-2.5,1.5C597.2,438.8,597,438.8,596.8,438.8z M596.4,432.2L596.4,432.2
		c-0.8,0.1-1.4,0.5-1.9,1.1c-0.5,0.6-0.6,1.4-0.5,2.1c0.1,0.8,0.5,1.4,1.1,1.9c0.6,0.5,1.4,0.6,2.1,0.5c0.8-0.1,1.4-0.5,1.9-1.1
		c0.5-0.6,0.6-1.4,0.5-2.1C599.4,433,597.9,431.9,596.4,432.2z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M591.1,436.3c-0.2,0-0.5-0.2-0.5-0.4c0-0.3,0.1-0.5,0.4-0.6l2.3-0.4c0.3,0,0.5,0.1,0.6,0.4
		c0,0.3-0.1,0.5-0.4,0.6L591.1,436.3C591.2,436.3,591.1,436.3,591.1,436.3z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M600.1,435c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.1-0.5,0.1-0.7l2.3-1.6c0.2-0.2,0.5-0.1,0.7,0.1
		c0.2,0.2,0.1,0.5-0.1,0.7l-2.3,1.6C600.3,435,600.2,435,600.1,435z"></path>
                    </g>
                    <g>
                        <path class="st64" d="M603.1,432.8c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.1-0.5,0.1-0.7l4-2.8c0.2-0.2,0.5-0.1,0.7,0.1
		c0.2,0.2,0.1,0.5-0.1,0.7l-4,2.8C603.3,432.8,603.2,432.8,603.1,432.8z"></path>
                    </g>
                    <g class="st51">
                        <path d="M587.3,429.3c0.4-0.1,0.7-0.2,1.1-0.3c1.7-0.7,2.8-2.2,3-3.9c-0.4-0.4-0.7-0.7-1-1.2c-0.2,1.8-1.4,3.3-3.1,4
		c-0.3,0.1-0.7,0.2-1.1,0.3c0.1,0.4,0.2,0.7,0.2,1.1C586.8,429.3,587.1,429.4,587.3,429.3z"></path>
                        <path d="M598.4,427.9c0.9-0.1,1.7-0.4,2.5-0.9c-0.1-0.6-0.2-1.2-0.3-1.6c-2.6,2-6.3,1.9-8.9-0.1
		C593.4,427.3,595.9,428.3,598.4,427.9z"></path>
                    </g>
                    <path class="st75" d="M658.5,475.6l-4.2-6.9l-1.7-2.7c-3-5-6.8-9.6-11.1-13.6l-9.5-8.7l64.7-12.7l9.5,8.7c4.3,4,8.1,8.6,11.1,13.6
	l1.7,2.7l4.2,6.9l13.3,26.3l-67,17.4L658.5,475.6z"></path>
                    <polygon class="st15" points="686.6,486.2 679.3,488 671.2,468.7 678.5,466.8 "></polygon>
                    <polygon class="st15" points="710.9,480 703.6,481.9 695.5,462.5 702.8,460.7 "></polygon>
                    <path class="st16" d="M669.2,469.2l36.8-9.3l-2.8-1.8c-7.9-5.2-16.1-9.6-24.8-13.3l-6.5-2.8l0,0c0.7,9.4,0.5,14.2-1.2,22.3
	L669.2,469.2z"></path>
                    <path class="st76" d="M678.5,466.8l8.1,19.3l4.2-1.1l-2.5-6c-1.2-3-0.3-5.8,2-6.4s5.3,1.3,6.5,4.3l2.5,6l4.2-1.1l-8.1-19.3
	L678.5,466.8z"></path>
                    <polygon class="st61" points="718.4,464 725.5,472.3 724.4,464.2 "></polygon>
                    <polygon class="st61" points="665.6,467.9 672,477.3 680.7,484.5 667.7,484.5 "></polygon>
                    <path class="st77" d="M691.9,715.5l-13.2,1.2c-5.3-1.3-13.6-3.7-19.4-2.1c-6.6,1.8-4.3,6.6-4.3,6.6s2.6,6.7,23.8,16.2
	s26.8,8.1,29.3,6s8.8-17.2,8.5-19.1S704.3,713.2,691.9,715.5z"></path>
                    <path class="st68" d="M694.6,708.2c0,0-3.8,10.4-3.9,11.7s3.2,6.9,13.1,7.9c4.3,0.4,7.6-0.8,9.3-2.8s4-8.4,5.7-13.7
	C722,700.5,694.6,708.2,694.6,708.2z"></path>
                    <g class="st51">
                        <path d="M694.6,708.2c0,0-0.8,2.2-1.6,4.7c2.6,3.8,9.5,11.9,21,10.5c1.9-3.9,3.5-8,4.7-12.2C722,700.5,694.6,708.2,694.6,708.2z">
                        </path>
                    </g>
                    <g>
                        <path class="st3" d="M757.5,379.7H752c-1.4,0-2.6-1.1-2.6-2.6v-4.1c0-1.4,1.1-2.6,2.6-2.6h5.6c1.4,0,2.6,1.1,2.6,2.6v4.1
		C760.1,378.6,758.9,379.7,757.5,379.7z M752,371c-1.2,0-2.1,0.9-2.1,2.1v4.1c0,1.2,0.9,2.1,2.1,2.1h5.6c1.2,0,2.1-0.9,2.1-2.1v-4.1
		c0-1.2-0.9-2.1-2.1-2.1H752z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M757.5,380H752c-1.6,0-2.8-1.3-2.8-2.8v-4.1c0-1.6,1.3-2.8,2.8-2.8h5.6c1.6,0,2.8,1.3,2.8,2.8v4.1
		C760.3,378.7,759.1,380,757.5,380z M752,371.2c-1,0-1.8,0.8-1.8,1.8v4.1c0,1,0.8,1.8,1.8,1.8h5.6c1,0,1.8-0.8,1.8-1.8v-4.1
		c0-1-0.8-1.8-1.8-1.8H752z"></path>
                    </g>
                    <path class="st64" d="M672.2,482.5c0,0-3.8-1.2-4-2.1s-1.8-11.5-2.6-12.4s-2.1,0.2-2.3,2.3s-0.5,6.1-0.9,6.4s-4-1-4-1l-4.2-6.9
	c0,0-2.4,2.7-0.5,5c-1.3,1.4-1.8,3.4-1.3,5.3c0,0-1.1,3.1,2.5,7s6.8,7.6,17.2,8.6S672.2,482.5,672.2,482.5z"></path>
                    <path class="st15" d="M674.5,481.3c-2-0.7-4.2-0.6-6.1,0.3c-2.8,1.6-4.9,5.5-3.3,10.2s7.8,3.5,7.8,3.5L674.5,481.3z"></path>
                    <path class="st64" d="M727.8,459.4c-2.5-1.3-5.2-2-8-2.1l3.2,5.2l-3.4-1.1c-0.8-0.2-1.6,0.2-1.9,0.9c0,0.1,0,0.2-0.1,0.3l0,0
	c-0.1,0.5,0.2,1.1,0.6,1.4l6.8,4.5L727.8,459.4z"></path>
                    <path class="st3" d="M749.5,517.7c0,0-57,188.1-57.5,189.8s3.2,10.6,11.8,12.5s15.2-1.5,17-3.2s33.2-81.9,43.8-106.2
	s16.5-33.7,16.5-33.7s18,61,22.6,68.6s50.4,64.7,53.1,65.7s10.2-1.3,15.6-5.8s10.5-11.5,10-13.7S837,631.1,837,631.1l-17.5-67.4
	c0,0-3.8-34.7-12.1-41.6S749.5,517.7,749.5,517.7z"></path>
                    <ellipse transform="matrix(0.7856 -0.6187 0.6187 0.7856 -246.9526 687.3189)" class="st67" cx="868.4" cy="700" rx="14.7" ry="5"></ellipse>
                    <path class="st68" d="M881.6,698.5l-2.4-3l-4-5c-3.6,1.2-7,3.1-10,5.5c-2.9,2.2-5.5,4.9-7.5,8c1.4,1.7,2.9,3.6,4.3,5.3
	c2.6,3.2,4.8,5.8,4.8,5.8l15.5-13.8L881.6,698.5z"></path>
                    <g class="st51">
                        <path class="st3" d="M879.2,695.5l-3.9-4.9c-3.6,1.2-7,3.1-10,5.5c-2.9,2.2-5.5,4.9-7.5,8l1.3,1.6C863.6,700,870.5,694,879.2,695.5
		z"></path>
                    </g>
                    <path class="st77" d="M885.1,701.1c-4.5-6.6-6.8-8.5-15.6-2.7s-7,10.2-6.8,15.1c0.1,3.7-0.2,7.4-0.9,11c0,0-1,0.6-8.2,3.7
	s-8.7,6.5-7.5,10s14.9,3.1,20.2,2.7c1.1-0.1,2.1-0.3,3.1-0.6c5.8-1.5,14.1-5.2,15.5-5.8c1.7-0.7,2-3.1,4-6.9
	c1.6-3.7,2.9-7.7,3.7-11.7c0.3-1,0.4-2.1,0.5-3.2C892.8,710.8,889.6,707.7,885.1,701.1z"></path>
                    <path class="st78" d="M888.4,711.1c-3.6,0.3-7.4,3.3-9.5,12.2s-4.2,15.4-9.7,17.2c5.8-1.5,14.1-5.2,15.5-5.8c1.7-0.7,2-3.1,4-6.9
	c1.6-3.7,2.9-7.7,3.7-11.7C893,713.3,892.1,710.7,888.4,711.1z"></path>
                    <path class="st77" d="M747.1,514.7c0,0-0.7,12.1,0.8,13.7s7.9,10.3,32.1,10.3s33-10.2,32.6-15.7s-0.8-12.3-0.8-12.3L747.1,514.7z">
                    </path>
                    <g>
                        <path class="st70" d="M780.9,577.5c-0.1,0-0.1,0-0.2-0.1c-0.2-0.1-0.4-0.4-0.2-0.7l3.3-6.8l19.5-8.9c0.2-0.1,0.5,0,0.7,0.2
		c0.1,0.3,0,0.5-0.2,0.7l-19.2,8.8l-3.2,6.5C781.3,577.4,781.1,577.5,780.9,577.5z"></path>
                    </g>
                    <linearGradient id="SVGID_00000171722041334934869430000002270346354576128686_" gradientUnits="userSpaceOnUse" x1="747.8766" y1="374.94" x2="747.8766" y2="244.98" gradientTransform="matrix(1 0 0 -1 0 774)">
                        <stop offset="0" style="stop-color: #ff1d4b"></stop>
                        <stop offset="1" style="stop-color: #b93dfe"></stop>
                    </linearGradient>
                    <path style="
              fill: url(#SVGID_00000171722041334934869430000002270346354576128686_);
            " d="M765.8,406.5c0,0-7,4.7-17.6,10.8
	s-14.2,18.9-16.5,27.8s-10.4,36.1-10.4,36.1s-39.1-0.9-46.1-0.9s-13,12.7-2.3,17.8c7,3.3,33.4,8.8,50.8,12.1
	c9.1,1.8,18.2-3.4,21.4-12.1l0.5-1.4c0,0-0.4,17.8,0.6,22.5s12.1,14.2,36.9,13s30.2-12.3,30.1-16.8s-0.8-14.4-0.8-14.4
	s16.6,1.5,16.1-16.6s-6-55-14-62.8s-20.2-13.8-24.4-15.1S765.8,406.5,765.8,406.5z"></path>
                    <g>
                        <path class="st3" d="M745.8,497.2c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.4-0.4-0.3-0.6l13.4-40.7c0.1-0.3,0.4-0.4,0.6-0.3
		c0.3,0.1,0.4,0.4,0.3,0.6l-13.4,40.7C746.2,497.1,746,497.2,745.8,497.2z"></path>
                    </g>
                    <g>
                        <path class="st3" d="M812.5,501.6c-0.3,0-0.5-0.2-0.5-0.5l-5.1-62.2c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5L813,501
		C813.1,501.3,812.8,501.6,812.5,501.6C812.6,501.6,812.5,501.6,812.5,501.6z"></path>
                    </g>
                    <path class="st64" d="M767.9,405.8v-6.2c0,0-13.4,3.8-13.8-9.6s-0.5-29.9-0.5-29.9H786l1,41.7v6.9l-17.6,2.7L767.9,405.8z">
                    </path>
                    <g class="st51">
                        <path d="M767.9,391.4c0,0-6.3,10.4-11,6.3c4,3.9,11,1.9,11,1.9l0,0V391.4z"></path>
                    </g>
                    <path class="st3" d="M758.9,365c-2.5-0.1-5-0.8-7.2-2c-2.9-1.8-1.7-6.2,0-8c0,0-7.7-1.3-4.4-7.4s31.6-10.1,42-0.8s5.9,22.7,3.9,28.5
	s-5,7.9-5.8,11.5s0.8,8.1-5.2,8.3s-11.1,0.5-11.8-5.4c-0.7-5.7-3.3-8-3.3-8s5.4-6.5,2-9.7s-7.1,3.4-7.3,10.4c0,0-2.6,0.6-2.6-0.2
	S758.9,365,758.9,365z"></path>
                    <path class="st77" d="M778.3,413.5c-10.7,0-14.8-2.5-14.8-6.2s4.4-5.1,4.4-5.1v2.2c0,0,3.4,2.5,9.4,2.1c3.6-0.2,7-1.5,9.7-3.8v-2.2
	c0,0,4.3,0.9,4.2,5.3S785.5,413.5,778.3,413.5z"></path>
                    <g>
                        <path class="st3" d="M754.6,387.9c-0.3,0-0.5-0.2-0.5-0.5c0-0.3,0.2-0.5,0.5-0.5c0.8,0,1.5-0.4,2-1c0.2-0.2,0.5-0.3,0.7-0.1
		c0.2,0.2,0.3,0.5,0.1,0.7C756.7,387.4,755.7,387.9,754.6,387.9C754.6,387.9,754.6,387.9,754.6,387.9z"></path>
                    </g>
                    <path class="st64" d="M592.7,443.6l2.9-0.4c0.7-0.1,1.4,0.4,1.5,1.1l0,0c0.1,0.7-0.4,1.4-1.1,1.5l-2.9,0.4c-0.7,0.1-1.4-0.4-1.5-1.1
	l0,0C591.6,444.4,592,443.7,592.7,443.6z"></path>
                    <g>
                        <path class="st3" d="M720.1,486.7c0,0-0.1,0-0.1,0c-0.3-0.1-0.4-0.3-0.4-0.6l1.3-4.9c0.1-0.3,0.3-0.4,0.6-0.4
		c0.3,0.1,0.4,0.3,0.4,0.6l-1.3,4.9C720.5,486.5,720.3,486.7,720.1,486.7z"></path>
                    </g>
                </svg> -->
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
	<!-- Fancybox JS library -->
	<script src="fancybox/jquery.fancybox.js"></script>

	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<!-- <script>
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 3,
			spaceBetween: 30,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
		});
	</script> -->
	<script type="text/javascript">
		var swiper = new Swiper('.swiper-container', {
			slidesPerView: 1,
			spaceBetween: 10,
			loop: true,
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			breakpoints: {
				640: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				1024: {
					slidesPerView: 3,
					spaceBetween: 40,
				},
			},
		});
	</script>
	<script type="text/javascript">
		$('#newsindex').addClass('active');
		$("[data-fancybox]").fancybox();
	</script>

</body>

</html>