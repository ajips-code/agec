<style>
    :root {
        --main-color-3: #1f0404;
        --main-color-4: #ffffff;
        --main-color-1: #D1A730;
        --main-color-2: #00335c;
        --main-color-5: #e6e6e6;
        --main-color-6: #1f8c95;
        --main-color-form: #92C026;
        --fonts-1: "Montserrat", sans-serif !important;
        --fonts-2: "Poppins", sans-serif !important;
    }

    #ctopul-home {
        margin-top: -2.3em !important;
        padding-right: 50px;
    }

    .main-content {
        margin-top: -5px !important;
        text-align: center;
        padding: 60px 40px 55px 40px;
        background-color: #00335c;
    }

    .chat-widget {
        position: fixed;
        bottom: 10px;
        right: 10px;
        display: flex;
        align-items: center;
    }

    .hero {
        position: relative;
        color: #00335c;
        text-align: left;
        margin-top: 200px;
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
        color: white;
    }

    .buttons button {
        background: #00335c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .buttons button a {
        color: white;
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

    .heading-elicos {
        font-size: 2em;
        margin-bottom: 20px;
        font-family: var(--fonts-1);
        text-align: center;
        color: var(--main-color-2);

    }

    @media screen and (min-width: 1400px) {
        .search-container {
            display: flex;
            width: 100%;
            max-width: 600px;
            margin-left: 435px;
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
        padding: 5px 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-left: none;
        border-radius: 0 4px 4px 0;
        background-color: #D1A730;
        color: white;
        cursor: pointer;
    }

    .search-button:hover {
        background-color: #e67000;
    }

    input[type="text"] {
        height: 40px !important;
    }
</style>

<nav class="colorlib-nav navbar-fixed-top" role="navigation" style="background-color:#ffffff42 !important; ">
    <div class="upper-menu">
        <div class="container-upper">
            <div class="row justify-content-between">
                <div class="contact-icons-con col-lg-6 col-md-6 col-sm-12 text-right">
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Search Intitute, Courses, Visa, Programs">
                        <button type="submit" class="search-button">Search</button>
                    </div>
                </div>
                <div class="social-icons-con col-lg-6 col-md-6 col-sm-12 justify-content-between text-right">
                    <ul class="social-icons">
                        <a href="https://www.tiktok.com/" style="margin-right: 3px; transition: transform 0.3s;">
                            <img src="../images/tiktok.png" alt="Linkedin" style="width: 20px; height: 18px;">
                        </a>
                        <a href="https://www.linkedin.com/company/bigbreak-immigration" style="margin-right: 3px; transition: transform 0.3s;">
                            <img src="../images/Linkedin-Logo-PNG-Photos.png" alt="Linkedin" style="width: 25px; height: 22px;">
                        </a>
                        <a href="https://www.instagram.com" style="margin-right: 3px; transition: transform 0.3s;">
                            <img src="../images/instagram-7678783_1280.png" alt="Instagram" style="width: 30px; height: 28px;">
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61550526716854" style="margin-right: 3px; transition: transform 0.3s;">
                            <img src="../images/facebook (3).png" alt="Facebook" style="width: 40px; height: 35px;">
                        </a>
                        <a href="https://www.youtube.com/@HABIBIEGLOBAL" style="transition: transform 0.3s;">
                            <img src="../images/youtube-7737850_1920.png" alt="Youtube" style="width: 35px; height: 37px;">
                        </a>
                    </ul>
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
                    <li>JOBS &nbsp;&nbsp;&nbsp;&nbsp;</li>
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
                <a href="courses.php" style="font-size: 15px; font-family: arial,sans-serif!important; color:#000; transition: transform 0.3s; display: inline-block;">
                    <li>COURSES</li>
                </a>
            </ul>
        </div>
    </div>
    <div class="ctop-menu">
        <div class="customcontainer">
            <div class="row">
                <div class="col-md-2">
                    <div id="custom-logo"><a href="../index.php"><img class="c-logo" src="../images/AGEC-Logo_Full-Colour.png"><span id="logospan"></span></a></div>
                </div>
                <div class="custom-number col-md-4 text-right">

                </div>
                <div class="con-header-ul col-md-6 text-right menu-1">
                    <ul id="ctopul-home" style="padding-right:30px!important;">
                        <li id="homeindex"><a href="../index.php" style="color: black;">HOME</a></li>
                        <li id="serviceindex" class="has-dropdown">
                            <a href="services.php" style="color: black;">SERVICES <i class="fas fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="rpl_certification.php">RPL CERTIFICATION &nbsp;&nbsp;</a></li>
                                <li><a href="internship.php">INTERNSHIP&nbsp;</a></li>
                                <li><a href="jobs.php">JOBS&nbsp;</a></li>
                                <li><a href="training_visa.php">TRAINING VISA&nbsp;</a></li>
                                <li><a href="working_holiday_visa.php">WORKING HOLIDAY VISA&nbsp;</a></li>
                                <!-- <li><a href="business_visa.php">BUSINESS VISA&nbsp;</a></li> -->
                                <!-- <li><a href="pr_assessment.php">PR ASSESSMENT&nbsp;</a></li> -->
                                <li><a href="elicos.php">ELICOS&nbsp;</a></li>
                                <li><a href="study_visa.php">VISA APPLICATION</a></li>
                                <li><a href="germany_programme.php">GERMANY PROGRAMME&nbsp;</a></li>
                                <li><a href="courses.php">COURSES&nbsp;</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="universities.html">COURSES</a></li> -->
                        <li id="i"><a href="news.php" style="color: black;">NEWS</a></li>
                        <li id="aboutindex"><a href="about.php" style="color: black;">ABOUT US</a></li>
                        <li id="contactindex"><a href="contact.php" style="color: black;">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>