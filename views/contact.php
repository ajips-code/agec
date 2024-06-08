<?php
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
								<div class="text-center r-inner-banner">
									<h1>CONTACT</h1>
									<h2><span><a href="index.html">Home</a> | Contact</span></h2>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
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
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.9005335275206!2d151.00528848912464!3d-33.81487984727715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a319b05fd219%3A0xc629f189cbb9745d!2s180%20George%20St%2C%20Parramatta%20NSW%202150%2C%20Australia!5e0!3m2!1sen!2sid!4v1717478079603!5m2!1sen!2sid" width="960" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
					<h4>About Australia's Global Education Consultancy</h4>
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
								</script> Australia's Global Education Consultancy. Powered by <i class="icon-heart" aria-hidden="true"></i><a href="#" target="_blank"> Australian Global Education Consultancy</a>
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
		$('#contactindex').addClass('active');
	</script>

</body>

</html>