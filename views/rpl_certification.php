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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
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
    <link rel="stylesheet" href="../css/rpl_certification.css">
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

    </div>
    <div class="banner" style="margin-top: -190px; margin-bottom:-20px; overflow-x: hidden;">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-md-offset-3">
                    <div class="text-center r-inner-banner">
                        <!-- <h1 style="font-family: 'Montserrat', sans-serif;font-size: 40px; font-weight: 800; color:#D1A730">RPL Certification</h1> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="main-content">
        <h2>Get your <b class="bolder-trusted">Skill Certified</b> with <br><b class="bolder-trusted">"</b><b class="gold" style="color:#D1A730; font-family: 'Bell MT'; font-weight:bolder;">Australian <b class="bolder-trusted">Trusted</b> Education Consultants</b><b class="bolder-trusted">"</b></br> </h2>
        <div class="intro-container">
            <div class="intro" id="intro">
                <!-- <select id="industrySelect" class="dropdown-multi-column">
                    <option>Select Industry</option>
                    <option value="Civil Construction">Civil Construction</option>
                    <option value="Aged Care">Aged Care</option>
                    <option value="Disability">Disability</option>
                    <option value="Child Care">Child Care</option>
                    <option value="Security">Security</option>
                    <option value="Massage Therapist">Massage Therapist</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Building & Construction">Building & Construction</option>
                    <option value="Business & Finance">Business & Finance</option>
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
                    <option value="Others">Others</option>
                </select>
                <select id="qualificationSelect">
                    <option>Select Qualification</option>
                </select> -->
                <a href="rpl_certification-form.php" class="cta-button">Take the FREE 60 second skills check now!!</a>
                <p>We are partnered with registered training organisations (RTO's)
                    to help you convert your experience into an International Recognition</p>
                <!-- <div class="col-md-12 mt-4" style="color:white; background-color: transparent; text-align:center;"> -->
                <div class="wa-header" style="z-index: 999; position: relative;"><a id="custom-whatsapp-btn" class="btn-whatsapp-custom" style="display: inline-flex; align-items: center; background-color: #4F6367; margin-top:-40px;color: white; border-radius: 50px; padding: 10px 20px; text-decoration: none; font-size: 16px; margin-bottom: 30px;" href="https://api.whatsapp.com/send?phone=+61420402142&text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!" target="_blank">
                        <i class="bi bi-whatsapp"></i> Message us on WhatsApp
                    </a>
                </div>
                <!-- <div class="image-section">
                    <img src="../images/manbhir-removebg-preview.png" alt="Manbhir Singh" class="person-image">
                    <div class="caption">Sir Marcus<br><b>Senior Consultant</b></div>
                </div> -->
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
                                <h4 style="font-family: Open Sans;color:#252526; font-size:16px;">ABOUT AUSTRALIAN GLOBAL EDUCATION CONSULTANCY</h4>
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
        <!-- <div class="skills-image-section">
            <img src="../images/missnana-removebg-preview.png" alt="Ir. Nana Saragih">
            <div class="skills-caption">
                <img src="./images/missnana-removebg-preview.png" alt="Icon" style="width: 20px; height: 20px;">
                <span>Ir. Nana Saragih, Indonesia Representative</span>
            </div>
        </div> -->
        <div class="skills-content-section">
            <h2>All qualifications are awarded by our partner RTO's</h2>
            <p>Your skills and career are unique. So, your needs for filling the gaps in your knowledge will be unique as well. At Skills Certified, we look at your case in a dedicated and personalised way so that you can take the right next steps for your career.</p>
            <p>View all the industries and qualifications awarded by our partner RTOs. Get in touch today to obtain certifications through RPL and take your career to the next level.</p>
            <div class="skills-buttons">
                <a href="rpl_certification-form.php">View Qualifications</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>

    <h2 style="text-align: center; margin-top:80px; margin-bottom: 40px;">Most Selected Industry<br></h2>
    <!-- <b class="gold" style="color:#D1A730; font-family: 'Montserrat'; font-weight:bolder;">Australian Global Education Consultancy</b></br>  -->
    <div class="container" style="display: flex; justify-content: center;">
        <section class="articles" style="margin:0 auto;">
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/civilconstruction.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Civil Construction</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure class="agecare-img">
                        <img src="../images/agecaree.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Aged Care</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/disabilityy.jpg" alt="disablity" />
                    </figure>
                    <div class="article-body">
                        <h2>Disability</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/childcare.jpg" alt="childcare" />
                    </figure>
                    <div class="article-body">
                        <h2>Child Care</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/security.jpg" alt="security" />
                    </figure>
                    <div class="article-body">
                        <h2>Security</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/messageterapist.jpg" alt="messageterapist" />
                    </figure>
                    <div class="article-body">
                        <h2>Massage Therapist</h2>
                        <!-- <p>
                            Pertains to the construction of infrastructure like roads, bridges, and public facilities.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/automotive.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Automotive</h2>
                        <!-- <p>
                            Involves the design, production, marketing, and maintenance of motor vehicles.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/buildingandconstruction.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Building & Construction</h2>
                        <!-- <p>
                            Encompasses the creation and renovation of buildings and infrastructure.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/finance.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Business & Finance</h2>
                        <!-- <p>
                            Focuses on financial services, investment, banking, and corporate management.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/communityservices.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Community Services</h2>
                        <!-- <p>
                            Provides support and resources to improve community welfare and quality of life.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/engineering.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Engineering</h2>
                        <!-- <p>
                            Applies scientific principles to design, develop, and maintain structures, machines, and systems.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/hairandbeauty.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Hair & Beauty</h2>
                        <!-- <p>
                            Offers services related to hairdressing, cosmetology, and personal grooming.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/holticulture.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Horticulture & Land Management</h2>
                        <!-- <p>
                            Involves the cultivation of plants and management of landscapes and natural resources.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/commercialcookery.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Commercial Cookery & Hospitality</h2>
                        <!-- <p>
                            Includes food preparation, cooking, and providing hospitality services.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/informationtechnology.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Information Technology</h2>
                        <!-- <p>
                            Covers the development, implementation, and maintenance of computer systems and software.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/mining.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Mining and Resources</h2>
                        <!-- <p>
                            Involves the extraction and processing of minerals, oil, and gas.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/plumbing.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Plumbing Services</h2>
                        <!-- <p>
                            Focuses on installing and maintaining water systems, pipes, and related infrastructure.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/security.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Security & Cleaning</h2>
                        <!-- <p>
                            Provides security services and cleaning for various facilities and environments.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/transportandlogistic.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Transport & Logistics</h2>
                        <!-- <p>
                            Manages the movement of goods and people through different modes of transportation.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/vocationaleducationtraining.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Vocational Education & Training</h2>
                        <!-- <p>
                            Offers practical training and skills development for various trades and professions.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/retailservice.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Retail Services</h2>
                        <!-- <p>
                            Encompasses the sale of goods and services to consumers.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/eventsandentertainment.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Events & Entertainment</h2>
                        <!-- <p>
                            Involves organizing and managing events, and providing entertainment services.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
            <article>
                <div class="article-wrapper">
                    <figure>
                        <img src="../images/others.jpg" alt="" />
                    </figure>
                    <div class="article-body">
                        <h2>Others</h2>
                        <!-- <p>
                            Includes any industry that doesn't fit into the specified categories that you need.
                        </p> -->
                        <a href="rpl_certification-form.php" class="read-more">Check My Egibility<span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </section>
    </div>


    <div id="colorlib-contact" style="margin-top: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <h2 style="text-align: center; font-family: 'Open Sans', Sans-serif;font-size: 30px;font-weight: 700;">Give Feedback</h2>
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

    <div class="floating-whatsapp2" style="bottom:40px !important; margin-right: 5px;">
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
    <!-- <script src="../js/main.js"></script> -->
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
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const elementsToAnimate = document.querySelectorAll('.skills-container, .skills-image-section, .skills-caption, .skills-content-section, .skills-buttons');
            elementsToAnimate.forEach(element => {
                observer.observe(element);
            });
        });

        // Function to sort options alphabetically, keeping "Others" at the bottom
        // function sortOptions(selectId) {
        //     var select = document.getElementById(selectId);
        //     var options = select.options;
        //     var arr = [];
        //     var othersOption = null;

        //     // Collect all options except the first one (assuming it's a placeholder like "Select Industry")
        //     // and the "Others" option
        //     for (var i = 1; i < options.length; i++) {
        //         if (options[i].value === "Others") {
        //             othersOption = {
        //                 value: options[i].value,
        //                 text: options[i].text
        //             };
        //         } else {
        //             arr.push({
        //                 value: options[i].value,
        //                 text: options[i].text
        //             });
        //         }
        //     }

        //     // Sort the array alphabetically by text
        //     arr.sort(function(a, b) {
        //         if (a.text < b.text) return -1;
        //         if (a.text > b.text) return 1;
        //         return 0;
        //     });

        //     // Insert sorted options back into the select element
        //     for (var i = 1; i <= arr.length; i++) {
        //         options[i].value = arr[i - 1].value;
        //         options[i].text = arr[i - 1].text;
        //     }

        //     // Place "Others" at the bottom if it exists
        //     if (othersOption) {
        //         options[options.length - 1].value = othersOption.value;
        //         options[options.length - 1].text = othersOption.text;
        //     }
        // }

        // Call the sortOptions function for industry select
        // sortOptions("industrySelect");

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
                            <option value="Certificate III in Civil Construction (Road Construction and Maintenance) – RII30920">Certificate III in Civil Construction (Road Construction and Maintenance) – RII30920</option>
                            <option value="Certificate III in Civil Construction (Pipe Laying) – RII30920">Certificate III in Civil Construction (Pipe Laying) – RII30920</option>
                            <option value="Certificate IV in Civil Construction Supervision – RII40720">Certificate IV in Civil Construction Supervision – RII40720</option>
                            <option value="Diploma of Civil Construction Design – RII50520">Diploma of Civil Construction Design – RII50520</option>
                            <option value="Diploma of Civil Construction Management – RII50420">Diploma of Civil Construction Management – RII50420</option>
                        `;
                    break;
                case "Community Services":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Qualification</option>
                            <option value="Not sure yet?">Not sure yet?</option>
                            <option value="Certificate III in Community Services – CHC32015">Certificate III in Community Services – CHC32015</option>
                            <option value="Certificate IV in Child, Youth and Family Intervention – CHC40313">Certificate IV in Child, Youth and Family Intervention – CHC40313</option>
                            <option value="Certificate IV in Community Services – CHC42015">Certificate IV in Community Services – CHC42015</option>
                            <option value="Certificate IV in Disability – CHC43115">Certificate IV in Disability – CHC43115</option>
                            <option value="Certificate IV in Mental Health – CHC43315">Certificate IV in Mental Health – CHC43315</option>
                            <option value="Certificate IV in Youth Work – CHC40413">Certificate IV in Youth Work – CHC40413</option>
                            <option value="Diploma of Child, Youth and Family Intervention – CHC50313">Diploma of Child, Youth and Family Intervention – CHC50313</option>
                            <option value="Diploma of Community Services – CHC52021">Diploma of Community Services – CHC52021</option>
                            <option value="Diploma of Early Childhood Education and Care – CHC50121">Diploma of Early Childhood Education and Care – CHC50121</option>
                            <option value="Diploma of Mental Health – CHC53315">Diploma of Mental Health – CHC53315</option>
                            <option value="Diploma of School Age Education and Care – CHC50221">Diploma of School Age Education and Care – CHC50221</option>
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
                case "Child Care":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Qualification</option>
                            <option value="Not sure yet?">Not sure yet?</option>
                        `;
                    break;
                case "Aged Care":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Qualification</option>
                            <option value="Not sure yet?">Not sure yet?</option>
                        `;
                    break;
                case "Disability":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Qualification</option>
                            <option value="Not sure yet?">Not sure yet?</option>
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


        // Function to check if both industry and qualification are selected and redirect to the desired page
        function checkAndRedirect() {
            var industrySelect = document.getElementById("industrySelect");
            var qualificationSelect = document.getElementById("qualificationSelect");

            // Check if both industry and qualification are selected
            if (industrySelect.value !== "" && qualificationSelect.value !== "") {
                // If both are selected, redirect to rpl_certification-form.php
                // Save selections to local storage
                localStorage.setItem("selectedIndustry", industrySelect.value);
                localStorage.setItem("selectedQualification", qualificationSelect.value);
                window.location.href = `rpl_certification-form2.php`;
            }
        }

        // Add event listeners to both dropdowns to check and redirect if both are selected
        document.getElementById("industrySelect").addEventListener("change", checkAndRedirect);
        document.getElementById("qualificationSelect").addEventListener("change", checkAndRedirect);
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var industrySelect = document.getElementById("industrySelect");

            // Scroll to the bottom when the select is focused
            industrySelect.addEventListener('focus', function() {
                this.scrollTop = this.scrollHeight;
            });
        });
    </script>


</body>

</html>