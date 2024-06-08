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
</style>

<nav class="colorlib-nav" role="navigation">
    <div class="upper-menu">
        <div class="container-upper">
            <div class="row justify-content-between">
                <div class="contact-icons-con-home col-lg-6 col-md-6 col-sm-12 text-left">
                </div>
                <!-- <div class="social-icons-con-home col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
                        <ul class="social-icons">
                            <a href="https://www.tiktok.com/" style="margin-right: 3px; transition: transform 0.3s;">
                                <img src="./images/tiktok.png" alt="Linkedin" style="width: 20px; height: 18px;">
                            </a>
                            <a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
                                <img src="./images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 25px; height: 22px;">
                            </a>
                            <a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
                                <img src="./images/instagram-7678783_1280.png" alt="Instagram" style="width: 30px; height: 28px;">
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
                                <img src="./images/facebook (3).png" alt="Facebook" style="width: 40px; height: 35px;">
                            </a>
                            <a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
                                <img src="./images/youtube-7737850_1920.png" alt="Youtube" style="width: 35px; height: 37px;">
                            </a>
                        </ul>
                    </div> -->
            </div>
            <div>
                <!-- <div class="ctop-menu"> -->
                <div class="customcontainer" style="padding: 0px 12px; margin: 0px 15px;">
                    <div class="row">
                        <div class="col-md-2">
                            <div id="custom-logo"><a href="../index.php"><img class="c-logo" src="../images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
                        </div>
                        <div class="custom-number-home col-md-4 text-right">
                            <div class="search-container">
                                <input type="text" class="search-input" placeholder="Search Intitute, Courses, Visa, Programs">
                                <button type="submit" class="search-button">Search</button>
                            </div>
                        </div>
                        <!-- <button class="find-destination-btn">+ Find My Dream Destination</button> -->
                        <div class="con-header-ul-home col-md-6 text-right menu-1">
                            <ul id="ctopul-home">
                                <li id="homeindex"><a href="../index.php" style="color: black;">HOME</a></li>
                                <li class="has-dropdown">
                                    <a href="services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown" style="z-index:999;">
                                        <li><a href="rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
                                        <li><a href="internship.php">INTERNSHIP&nbsp;</a></li>
                                        <li><a href="jobs.php">JOB APPLICATION&nbsp;</a></li>
                                        <!-- <li><a href="tourist_visa.php">TOURIST VISA&nbsp;</a></li> -->
                                        <li><a href="training_visa.php">TRAINING VISA&nbsp;</a></li>
                                        <!-- <li><a href="business_visa.php">BUSINESS VISA&nbsp;</a></li> -->
                                        <!-- <li><a href="pr_assessment.php">PR ASSESSMENT&nbsp;</a></li> -->
                                        <li><a href="elicos.php">ELICOS&nbsp;</a></li>
                                        <li><a href="study_visa.php">VISA APPLICATION&nbsp;</a></li>
                                        <li><a href="germany_programme.php">GERMANY PROGRAMME&nbsp;</a></li>
                                        <li><a href="wroking_visa.php">PR ASSESSMENT & APPLICATION&nbsp;</a></li>
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
                    <button class="find-destination-btn" href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#92c026" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg> Find <span style="color: #92c026;font-weight: 900;">Your Dream</span> Destination</button>
                    <!-- </div> -->
                </div>
            </div>
            <ul class="services-header col-lg-12 col-sm-12 mt-4 text-center">
                <a href="rpl_certification.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>RPL CERTIFICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="internship.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>INTERNSHIP &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="jobs.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>JOBS APPLICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="training_visa.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>TRAINING VISA &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="elicos.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>ELICOS&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="study_visa.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>VISA APPLICATION &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="germany_programme.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>GERMANY PROGRAMME &nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="pr_assessment.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>PR ASSESSMENT & APPLICATION&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </a>
                <a href="courses.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>COURSES</li>
                </a>
            </ul>
        </div>
    </div>
</nav>