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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<!-- <script src="https://third-party-service.com/script.js" async defer></script> -->
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
	<link rel="stylesheet" href="../css/laptop_view.css">
	<link rel="stylesheet" href="../css/mobile_view.css">
	<link rel="stylesheet" href="../css/desktop_view.css">
	<!-- CSS -->
	<link rel="stylesheet" type="../text/css" href="fancybox/jquery.fancybox.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
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
			aspect-ratio: 4/3;
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
		<?php include 'navigation.php'; ?>
		<div class="r-banner cbanners">
			<ul class="slides">
				<li>
					<div class="overlay"></div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-md-offset-3">
								<div class="text-center r-inner-banner mt-3">
									<h1>NEWS</h1>
									<h2><span><a href="./index.php">Home</a> | News</span></h2>
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
					<a href="./posts/study_english_in_australia.php">
						<div class="card-image-newspage">
							<img src="../images/slide1.jpg" alt="News 1">
						</div>
						<div class="card-content-newspage">
							<h3>Study English in Australia</h3>
							<p>Enroll now for study english in Australia</p>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<a href="./posts/elicos_in_australia.php">
						<div class="card-image-newspage">
							<img src="../images/happystudent2.png" alt="News 2">
						</div>
						<div class="card-content-newspage">
							<h3>Elicos Course in Australia</h3>
							<p>INTAKE OPEN NOW</p>
						</div>
					</a>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="../images/trade-licensing.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="../images/english-course.jpg" alt="News 3">
					</div>
					<div class="card-content-newspage">
						<h3>News Title 3</h3>
						<p>Summary of news 3...</p>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="card-image-newspage">
						<img src="../images/happystudent.jpg" alt="News 3">
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
	</div><br><br><br><br><br><br><br><br>
	<!-- <div class="photogallery row">
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
								<a href="../agec/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>" data-fancybox="gallery<?php echo $albumrow['id_pk']; ?>" data-caption="<?php echo $albumrow['albumname']; ?> -> <?php echo $picrow['picture']; ?>">
									<img style="height: 20em; width: 17.5em;" src="../agec/images/photoalbum/<?php echo $albumrow['albumname']; ?>/<?php echo $picrow['picture']; ?>" alt="Album Image">
								</a>
							</div>
						<?php
						}
						?>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div> -->

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
	<!-- Fancybox JS library -->
	<script src="../fancybox/jquery.fancybox.js"></script>
	<script src="../js/floating_wa.js"></script>


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
	</script>

</body>

</html>