<?php
require_once('./controllers/database.php');
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
	<link rel="icon" href="images/AGEC-Logo_Full-Colour.png" type="image/png" sizes="16x16">
	<link rel="apple-touch-icon" href="images/AGEC-Logo_Full-Colour.png">


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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
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
	<!-- <link rel="stylesheet" href="css/rpl_section.css"> -->

	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/mobile_view.css">
	<link rel="stylesheet" href="css/tablet_view.css">
	<link rel="stylesheet" href="css/laptop_view.css">
	<link rel="stylesheet" href="css/desktop_view.css">
	<link rel="stylesheet" href="css/internship.css">
	<link rel="stylesheet" href="css/animate.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/animate.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>

<body>
	<div class="colorlib-loader"></div>
	<?php include './views/header.php'; ?>

	<div class="partial all-section-services">
		<?php include './views/partials/all_section_services.php'; ?>
	</div>
	<div class="partial section-rpl">
		<?php include './views/partials/section_rpl.php'; ?>
	</div>
	<div class="partial section-internship">
		<?php include './views/partials/section_internship.php'; ?>
	</div>
	<div class="partial section-job">
		<?php include './views/partials/section_job.php'; ?>
	</div>
	<div class="partial section-visa">
		<?php include './views/partials/section_visa.php'; ?>
	</div>
	<div class="partial section-pr-assessment">
		<?php include './views/partials/section_pr_assessment.php'; ?>
	</div>
	<div class="partial section-elicos">
		<?php include './views/partials/section_elicos.php'; ?>
	</div>
	<div class="partial section-germany-programme">
		<?php include './views/partials/section_germany_programme.php'; ?>
	</div>
	<div class="partial section-course">
		<?php include './views/partials/section_course.php'; ?>
	</div>

	<div class="heading-team d-flex">
		<h1>Our Teams</h1>
	</div>
	<div class="team-section">
		<div class="team-member">
			<div class="team-member-image">
				<img src="./images/manbhir-removebg-preview.png" alt="Manbhir Singh">
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
				<img src="./images/missnana-removebg-preview.png" alt="Ms. Nana Saragih">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Ir. Nana Saragih</p>
				<p class="team-member-role">Indonesia Representative</p>
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
				<p class="team-member-role">Senior Recruiter (Europe)</p>
				<div class="team-member-social text-center">
					<a href="https://www.linkedin.com/in/puja-gemilang-habibie-849462139/" class="social-link"><i class="fab fa-linkedin"></i></a>
					<a href="https://www.facebook.com/pujagemilanghabibi" class="social-link"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</div>
		<div class="team-member">
			<div class="team-member-image">
				<img src="./images/misekafix.jpg" alt="Eka Prasetya">
			</div>
			<div class="team-member-info">
				<p class="team-member-name">Ekaprasetya Artha Kencana</p>
				<p class="team-member-role">Finance & Admin</p>
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
				<div class="col-md-12">
					<div class="about-desc animate-box">
						<h2 class="text-center">Welcome to Australian Global Education Consultancy</h2>
						<p class="justify-text">Australian Global Education Consultancy is a leading education consultancy that is dedicated to helping international students achieve their academic and career goals. We offer a wide range of courses in various fields of study, including business, <a href="views/courses.php#courses-section">engineering,</a> engineering, healthcare, Business, Tourism and Hospitality and more.</p>
						<p class="justify-text">Our team of experienced consultants provides personalized assistance to students in securing their visas and navigating the application process. We strive to make the visa process as smooth and stress-free as possible, ensuring that students can focus on their studies and future careers.</p>
						<p class="justify-text">In addition to education and visa services, Australian Global Education Consultancy also assists students in finding part-time jobs and internships during their studies in Australia. We are committed to providing comprehensive support to students, helping them make the most of their educational experience in Australia.</p>
						<p class="text-center">We have successfully placed over 2000 students into their dream destination course.</p>
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
													<p>We believe that education is a fundamental right and everyone should have access to quality higher education.We work in the best interest of both students and our partner universities and colleges. We have successfully placed over 2000 students into their dream destination course</p>
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
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/rpl_certification.php" style="text-decoration:none; color:black;">RPL Certification</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/internship.php" style="text-decoration:none; color:black;">Internship</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/jobs.php" style="text-decoration:none; color:black;">Jobs</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/tourist_visa.php" style="text-decoration:none; color:black;">Tourist Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/working_holiday_visa.php" style="text-decoration:none; color:black;">Working Holiday Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/student_visa.php" style="text-decoration:none; color:black;">Student Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/business_visa.php" style="text-decoration:none; color:black;">Business Visa</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/pr_assessment.php" style="text-decoration:none; color:black;">PR Assessment</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/elicos.php" style="text-decoration:none; color:black;">Elicos</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/englishcourse.php" style="text-decoration:none; color:black;">English Course</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/germany_programme.php" style="text-decoration:none; color:black;">Germany Programme</a></li>
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/courses.php" style="text-decoration:none; color:black;">Courses</a></li>
												<!-- <li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="builders_licence.php" style="text-decoration:none; color:black;">Builders Licence</a></li> -->
												<!-- <li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="trade_licensing.php" style="text-decoration:none; color:black;">Trade Licensing</a></li> -->
												<li><span class="fa-li"><i class="fas fa-check-square"></i></span><a href="./views/othercourses.php" style="text-decoration:none; color:black;">Other Courses</a></li>
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
					<h2>Popular Countries For Study and Work</h2>
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

	<!-- 
	<section id="testimonials-section">
		<p class="testimonials-subtitle" style="margin-top:50px; text-align: center; font-family: 'Montserrat', sans-serif;line-height: 1.3em;font-size: 30px;font-weight: 400; color:#00335c">Testimonial</p>
		<div class="testimonials-container">
			<div class="testimonial-card">
				<span class="uagb-blockquote__icon"><svg width="20" height="20" viewBox="0 0 32 32">
						<path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
					</svg></span>
				<p class="testimonial-text">Voluptatum aspernatur ullamcorper hymenaeos. Saepe pretium volutpat us vel...</p>
				<div class="testimonial-author">
					<img src="./images/author1.jpg" alt="Dorothy Palmer" class="author-img">
					<p class="author-name">Dorothy Palmer</p>
				</div>
			</div>
			<div class="testimonial-card">
				<span class="uagb-blockquote__icon"><svg width="20" height="20" viewBox="0 0 32 32">
						<path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
					</svg></span>
				<p class="testimonial-text">Voluptatum aspernatur ullamcorper hymenaeos. Saepe pretium volutpat us vel...</p>
				<div class="testimonial-author">
					<img src="./images/author2.jpg" alt="Randy Tran" class="author-img">
					<p class="author-name">Randy Tran</p>
				</div>
			</div>
			<div class="testimonial-card">
				<span class="uagb-blockquote__icon"><svg width="20" height="20" viewBox="0 0 32 32">
						<path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
					</svg></span>
				<p class="testimonial-text">Voluptatum aspernatur ullamcorper hymenaeos. Saepe pretium volutpat us vel...</p>
				<div class="testimonial-author">
					<img src="./images/author3.jpg
                    " alt="Amy Turner" class="author-img">
					<p class="author-name">Amy Turner</p>
				</div>
			</div>
			<div class="testimonial-card">
				<span class="uagb-blockquote__icon"><svg width="20" height="20" viewBox="0 0 32 32">
						<path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
					</svg></span>
				<p class="testimonial-text">Voluptatum aspernatur ullamcorper hymenaeos. Saepe pretium volutpat us vel...</p>
				<div class="testimonial-author">
					<img src="./images/author4.jpg" alt="Endang Everdeen" class="author-img">
					<p class="author-name">Endang Everdeen</p>
				</div>
			</div>
			<div class="testimonial-card">
				<span class="uagb-blockquote__icon"><svg width="20" height="20" viewBox="0 0 32 32">
						<path d="M7.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.357-0.056 0.724-0.086 1.097-0.086zM25.031 14c3.866 0 7 3.134 7 7s-3.134 7-7 7-7-3.134-7-7l-0.031-1c0-7.732 6.268-14 14-14v4c-2.671 0-5.182 1.040-7.071 2.929-0.364 0.364-0.695 0.751-0.995 1.157 0.358-0.056 0.724-0.086 1.097-0.086z"></path>
					</svg></span>
				<p class="testimonial-text">Voluptatum aspernatur ullamcorper hymenaeos. Saepe pretium volutpat us vel...</p>
				<div class="testimonial-author">
					<img src="./images/author2.jpg" alt="Joe Alan" class="author-img">
					<p class="author-name">Joe Alan</p>
				</div>
			</div>
		</div>
	</section> -->

	<div id="colorlib-contact" style="margin-top: 150px;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<h2 style="text-align: center; font-family: 'Montserrat', sans-serif;font-size: 30px;font-weight: 400; color:00335c;">Give Feedback</h2>
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
	<div class="col-md-12" style="color:white; background-color: #ffff; height:250px; text-align:center;">
		<a id="custom-whatsapp-btn" class="btn-whatsapp-custom" href="https://api.whatsapp.com/send?phone=+61420402142&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!" target="_blank">
			<i class="bi bi-whatsapp"></i> Message us on WhatsApp
		</a>
	</div>
	<footer id="colorlib-footer">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget img-footer text-left">
					<img src="images/AGEC-Logo_Full-Colour.png" alt="Colorlib"></img>
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
						<li><a href="./views/services.php"></i> Elicos</a></li>
						<li><a href="./views/news.php"></i> Enroll Now</a></li>
						<li><a href="./views/about.php"></i> Study Visa for overseas</a></li>
						<li><a href="./views/contact.php"></i> Contact Us</a></li>
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
						<img src="./images/tiktok.png" alt="Linkedin" style="width: 25px; height: 20px;">
					</a>
					<a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
						<img src="./images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 30px; height: 24px;">
					</a>
					<a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
						<img src="./images/instagram-7678783_1280.png" alt="Instagram" style="width: 35px; height: 28px;">
					</a>
					<a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
						<img src="./images/facebook (3).png" alt="Facebook" style="width: 40px; height: 32px;">
					</a>
					<a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
						<img src="./images/youtube-7737850_1920.png" alt="Youtube" style="width: 45px; height: 36px;">
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

	<div class="floating-whatsapp2 hidden" style="bottom: 40px;">
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
	<script src="js/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
	<!-- <script src="js/floating_wa.js"></script> -->

	<script type="text/javascript">
		$('#homeindex').addClass('active');
	</script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			console.log("DOM fully loaded and parsed");

			function loaderPage() {
				$(".colorlib-loader").fadeOut("slow");
			}

			loaderPage();

			setTimeout(function() {
				// Hide the loader
				document.querySelector(".colorlib-loader").style.display = "none";

				// Show the content
				document.querySelector("#page").classList.add("visible");

				// Show the WhatsApp button
				document.querySelector(".floating-whatsapp2").classList.remove("hidden");
			}, 4000); // You can adjust the delay as needed

			// Toggle menu
			var menuToggle = document.querySelector('.js-colorlib-nav-toggle');
			menuToggle.addEventListener('click', function(event) {
				event.preventDefault();
				console.log("Menu toggle clicked");
				document.body.classList.toggle('offcanvas-active');
			});

			// Close menu when clicking outside
			document.addEventListener('click', function(event) {
				var container = document.querySelector('#colorlib-offcanvas');
				if (!container.contains(event.target) && !menuToggle.contains(event.target)) {
					console.log("Clicked outside menu");
					if (document.body.classList.contains('offcanvas-active')) {
						document.body.classList.remove('offcanvas-active');
					}
				}
			});
		});
	</script>

</body>


</html>