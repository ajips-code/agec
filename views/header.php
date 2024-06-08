<style>
    @media (min-width: 1400px) {
        .social-icons-con-home {
            margin-left: -80px;
            gap: 50px;
        }
    }

    @media screen and (min-width: 1400px) {
        .search-container {
            display: flex;
            width: 100%;
            max-width: 600px;
            margin-left: 240px;
            margin-top: 15px;
            margin-bottom: -10px;
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
        padding: 7px 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-left: none;
        border-radius: 0 4px 4px 0;
        background-color: #00335c;
        color: white;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: #D1A730;
    }

    input[type="text"] {
        height: 40px !important;
    }
    
    .img-hero {
        margin-top: 100px; 
        margin-bottom: -60px; 
        margin-right: 35px; 
        margin-left: -60px; 
        z-index:-1;
    }
</style>

<div id="page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle colorlib-nav-white">
        <i></i>
    </a>
    <div id="colorlib-offcanvas">
        <ul id="ctopul-home">
            <li id="homeindex" class="active"><a href="index.php" style="color: black;">HOME</a></li>
            <li class="offcanvas-has-dropdown">
                <a href="./views/services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
                <ul class="dropdown" style="z-index:999;">
                    <li><a href="./views/rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
                    <li><a href="./views/internship.php">INTERNSHIP&nbsp;</a></li>
                    <li><a href="./views/jobs.php">JOB APPLICATION&nbsp;</a></li>
                    <li><a href="./views/training_visa.php">TRAINING VISA&nbsp;</a></li>
                    <li><a href="./views/business_visa.php">BUSINESS VISA&nbsp;</a></li>
                    <li><a href="./views/elicos.php">ELICOS&nbsp;</a></li>
                    <li><a href="./views/study_visa.php">VISA APPLICATION&nbsp;</a></li>
                    <li><a href="./views/germany_programme.php">GERMANY PROGRAMME&nbsp;</a></li>
                    <li><a href="./views/wroking_visa.php">WORKING VISA&nbsp;</a></li>
                    <li><a href="./views/courses.php">COURSES&nbsp;</a></li>
                </ul>
            </li>
            <li><a href="./views/news.php" style="color: black;">NEWS</a></li>
            <li><a href="./views/about.php" style="color: black;">ABOUT US</a></li>
            <li><a href="./views/contact.php" style="color: black;">CONTACT</a></li>
        </ul>
    </div>
    <nav class="colorlib-nav" role="navigation">
        <div class="upper-menu">
            <div class="container-upper">
                <div class="row justify-content-between">
                    <div class="contact-icons-con-home col-lg-6 col-md-6 col-sm-12 text-left"></div>
                </div>
                <div>
                    <div class="customcontainer" style="padding: 0px 12px; margin: 0px 15px;">
                        <div class="row">
                            <div class="col-md-2">
                                <div id="custom-logo"><a href="./index.php"><img class="c-logo" src="images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
                            </div>
                            <div class="custom-number-home col-md-4 text-right">
                                <div class="search-container">
                                    <input type="text" class="search-input" placeholder="Search Intitute, Courses, Visa, Programs">
                                    <button type="submit" class="search-button">Search</button>
                                </div>
                            </div>
                            <div class="con-header-ul-home col-md-6 text-right menu-1">
                                <ul id="ctopul-home">
                                    <li id="homeindex"><a href="index.php" style="color: black;">HOME</a></li>
                                    <li class="has-dropdown">
                                        <a href="./views/services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
                                        <ul class="dropdown" style="z-index:999;">
                                            <li><a href="./views/rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
                                            <li><a href="./views/internship.php">INTERNSHIP&nbsp;</a></li>
                                            <li><a href="./views/jobs.php">JOB APPLICATION&nbsp;</a></li>
                                            <li><a href="./views/training_visa.php">TRAINING VISA&nbsp;</a></li>
                                            <li><a href="./views/business_visa.php">BUSINESS VISA&nbsp;</a></li>
                                            <li><a href="./views/elicos.php">ELICOS&nbsp;</a></li>
                                            <li><a href="./views/study_visa.php">VISA APPLICATION&nbsp;</a></li>
                                            <li><a href="./views/germany_programme.php">GERMANY PROGRAMME&nbsp;</a></li>
                                            <li><a href="./views/wroking_visa.php">WORKING VISA&nbsp;</a></li>
                                            <li><a href="./views/courses.php">COURSES&nbsp;</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./views/news.php" style="color: black;">NEWS</a></li>
                                    <li><a href="./views/about.php" style="color: black;">ABOUT US</a></li>
                                    <li><a href="./views/contact.php" style="color: black;">CONTACT</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="services-header col-lg-12 col-sm-12 mt-4 text-center">
                    <a href="views/rpl_certification.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>RPL CERTIFICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/internship.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>INTERNSHIP &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/jobs.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>JOBS APPLICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/training_visa.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>TRAINING VISA &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/elicos.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>ELICOS&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/study_visa.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>VISA APPLICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/germany_programme.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>GERMANY PROGRAMME &nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/pr_assement.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>PR ASSESSMENT & APPLICATION&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </a>
                    <a href="views/courses.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                        <li>COURSES</li>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero" class="cslider" style="justify-items:center;">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url('images/sidney.jpeg');">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-left">
                                    <h1 class="tittle"><b class="bolder-trusted">"</b>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants<b class="bolder-trusted">"</b></h1>
                                    <h2 class="hero-h2" style="text-transform:uppercase; font-family:'Montserrat', sans-serif !important; font-size: 26px; color: #ffffff; font-weight:100; letter-spacing: 1.3px; margin-left: -18px; margin-top:80px;">Do you have a <span style="font-weight: 800;color: #ffffff;">dream destination or career?</span> START YOUR<b class="start-your" style="font-family:'Montserrat', sans-serif !important; font-size: 26px; color:#7bff00; text-transform: none; font-weight:900;"> Education and Career</b> JOURNEY WITH <br>US TODAY!</h2>
                                    <br>
                                    <div class="container-low">
                                        <div class="row">
                                            <div class="col-md-8 text-left">
                                                <a href="./views/popup1.php" class="btn-learn-eligible" style="border-radius: 50px; padding: 15px 40px; text-decoration: none; font-size: 16px;">PR Assessment</a>
                                                <div class="wa-header" style="z-index: 999; position: relative; margin-right: -50px; margin-top: -22px; margin-left: 200px;">
                                                    <a id="custom-whatsapp-btn" class="btn-whatsapp-custom" style="display: inline-flex; align-items: center; background-color: #4F6367; margin-top:-40px;color: white; border-radius: 50px; padding: 10px 20px; text-decoration: none; font-size: 16px; margin-bottom: 30px; z-index:999;" href="https://api.whatsapp.com/send?phone=+61420402142&amp;text=Hello%20I'm%20interested%20with%20Australian%20Global%20Education%20Consultancy!" target="_blank">
                                                        <i class="bi bi-whatsapp"></i> Message us on WhatsApp
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="img-hero"><img src="./images/student-eka.png" draggable="false"></div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>