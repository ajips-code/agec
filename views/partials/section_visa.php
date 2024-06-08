<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immigration and Citizenship</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        :root {
            --main-color-3: #1f0404;
            --main-color-4: #ffffff;
            --main-color-1: #D1A730;
            --main-color-2: #00335c;
            --main-color-5: #e6e6e6;
            --main-color-6: #1f8c95;
            --fonts-1: "Montserrat", sans-serif !important;
            --fonts-2: "Poppins", sans-serif !important;
        }

        #header-container-block {
            background-color: #00335C;
            color: #FFFFFF;
            padding: 10px 20px;
        }

        #nav-bar {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }

        #nav-bar a {
            color: #FFFFFF;
            text-decoration: none;
            transition: color 0.3s;
        }

        #nav-bar a:hover {
            color: #D1A730;
        }

        .hero-block {
            position: relative;
            height: auto;
            background: #00335C;
            padding-top: 10px;
        }

        .container-block {
            position: relative;
            z-index: 2;
            display: flex;
            height: 100%;
        }

        .row {
            display: flex;
            width: 100%;
        }

        .col-sm-6 {
            flex: 1;
            padding: 20px;
        }

        .hero-block-content {
            color: #FFFFFF;
            padding: 20px;
        }

        .hero-block-content-inner .section-title {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .hero-block-content-inner h1 {
            margin-top: 20px;
            margin-left: 40px;
            font-weight: 700;
            font-family: 'Montserrat';
            color: #D1A730;
            font-size: 28px;

        }

        .main-menu {
            list-style: none;
            padding: 0;
        }

        .main-menu li {
            margin: 10px 0;
        }

        .main-menu a {
            color: #FFFFFF;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .main-menu a:hover {
            color: #D1A730;
        }

        .hero-block-image {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            clip-path: polygon(50% 0%, 100% 0, 100% 100%, 0% 100%);
        }

        .hero-block-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
            clip-path: polygon(0 0, 100% 0, 50% 100%, 0 100%);
        }

        #footer-container-block {
            background-color: #1F8C95;
            padding: 60px 20px;
            color: #FFFFFF;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #alert-box {
            background-color: #1F8C95;
            padding: 10px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-icon {
            background-color: #00335C;
            color: #FFFFFF;
            border-radius: 50%;
            padding: 5px 10px;
            font-weight: bold;
        }

        #alert-box a {
            color: #00335C;
            text-decoration: none;
            font-weight: bold;
        }

        #alert-box a:hover {
            color: #D1A730;
        }

        .hero-block::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1F8C95;
            clip-path: polygon(0 0, 70% 0, 50% 100%, 0 100%);
            z-index: 1;
        }

        .header-title-tourist {
            text-align: center;
            margin-top: 160px;
            color: var(--main-color-2);
            font-family: var(--fonts-1);
            font-size: 2.7vw;
            font-family: "Montserrat", sans-serif !important;
        }

        .hero-block-content-inner p {
            margin-left: 40px;
        }

        .faq-answerr ul {
            padding-left: 20px;
            /* Adds space before the list */
            list-style-type: disc;
            /* Uses default bullet points */
            text-align: left;
            /* Ensures text alignment is left */
        }

        .faq-answerr li {
            margin-bottom: 10px;
            /* Adds space between list items */
            text-align: left;
            /* Ensures each list item text is aligned left */
        }

        .faq-containerr {
            max-width: 800px;
            margin: auto;
            /* padding: 20px; */
            padding-left: 40px;
            /* border: 1px solid #ccc; */
            border-radius: 8px;
        }

        .faq-itemm {
            margin-bottom: 10px;
        }

        .faq-questionn {
            width: 100%;
            padding: 15px;
            text-align: left;
            background: var(--main-color-4);
            border: none;
            cursor: pointer;
            outline: none;
            color: var(--main-color-2);
            font-size: 17px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .faq-answerr {
            padding: 15px;
            display: none;
            background: #ffffff;
            color: var(--main-color-2);
            border-bottom: #00274A 1px solid;
        }

        .faq-answerr p {
            text-align: left;
            margin-left: 0px;
        }

        .faq-questionn.active .faq-togglee {
            content: "-";
            transform: rotate(45deg);
        }

        .faq-togglee {
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .adecco-con-faq {
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            /* Adjust gap between columns as needed */
        }

        .adecco-image-container {
            flex: 1 1 50%;
        }
    </style>
</head>

<body>
    <h1 class="header-title-tourist">Visa</h1>
    <!-- <header id="header-container-block">
        <nav id="nav-bar">
            <a href="#" id="immi-account">ImmiAccount</a>
            <a href="#" id="vevo">Visa Entitlement Verification Online (VEVO)</a>
            <a href="#" id="trs">My Tourist Refund Scheme (TRS)</a>
        </nav>
    </header> -->
    <section id="visaa">
        <div class="hero-block">
            <div class="container-block">
                <div class="row">
                    <div class="col-sm-5 hero-block-content">
                        <div class="hero-block-content-inner">
                            <h1>Immigration and Citizenship</h1>
                            <p>Find out how to apply for a visa, check visa eligibility or provide immigration services.</p>
                            <p>Welcome to Australian Global Education Consultancy, your trusted partner in navigating the process of obtaining an Australian visa. Our team of experienced consultants is dedicated to making your travel, study, working and business plans to Australia seamless and stress-free.</p>
                            <div class="faq-containerr col-md-10">
                                <div class="faq-itemm">
                                    <button class="faq-questionn">What is a Study Visa?<span class="faq-togglee">+</span></button>
                                    <div class="faq-answerr">
                                        <p>A Study Visa allows international students to live and study in a foreign country. Benefits include:</p>
                                        <ul>
                                            <li><strong>Access to Quality Education</strong>: Study at top universities and institutions.</li>
                                            <li><strong>Cultural Exchange</strong>: Experience new cultures and make global connections.</li>
                                            <li><strong>Work While Studying</strong>: Many countries allow students to work part-time while studying.</li>
                                            <li><strong>Pathway to Permanent Residency</strong>: In some countries, studying can lead to permanent residency opportunities.</li>
                                            <li><strong>Personal Growth</strong>: Develop independence and global perspective.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="faq-itemm">
                                    <button class="faq-questionn">What is a Tourist Visa?<span class="faq-togglee">+</span></button>
                                    <div class="faq-answerr">
                                        <p>A Tourist Visa allows individuals to travel and stay in a foreign country for a short period for tourism purposes. Benefits include:</p>
                                        <ul>
                                            <li><strong>Exploration</strong>: Discover new destinations, landmarks, and cultures.</li>
                                            <li><strong>Recreation</strong>: Enjoy leisure activities, festivals, and local cuisines.</li>
                                            <li><strong>Family and Friends</strong>: Visit family and friends living abroad.</li>
                                            <li><strong>Short-Term Programs</strong>: Participate in short-term courses, workshops, and language programs.</li>
                                            <li><strong>Travel Flexibility</strong>: Travel freely within the visa duration.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="faq-itemm">
                                    <button class="faq-questionn">What is a Working Holiday Visa?<span class="faq-togglee">+</span></button>
                                    <div class="faq-answerr">
                                        <p>A Working Holiday Visa allows young people to travel and work temporarily in a foreign country. Benefits include:</p>
                                        <ul>
                                            <li><strong>Travel and Work</strong>: Combine travel with temporary work to fund your trip.</li>
                                            <li><strong>Cultural Immersion</strong>: Live like a local and experience the culture firsthand.</li>
                                            <li><strong>Skill Development</strong>: Gain new skills and work experience in various fields.</li>
                                            <li><strong>Networking</strong>: Build a global network of friends and professional contacts.</li>
                                            <li><strong>Personal Growth</strong>: Enhance your adaptability and independence.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="faq-itemm">
                                    <button class="faq-questionn">What is a Business Visa?<span class="faq-togglee">+</span></button>
                                    <div class="faq-answerr">
                                        <p>A Business Visa allows individuals to visit a foreign country for business-related activities. Benefits include:</p>
                                        <ul>
                                            <li><strong>Business Meetings</strong>: Attend meetings, conferences, and seminars.</li>
                                            <li><strong>Networking</strong>: Build connections with international business partners.</li>
                                            <li><strong>Market Exploration</strong>: Explore new markets and business opportunities.</li>
                                            <li><strong>Investment</strong>: Investigate potential investment opportunities.</li>
                                            <li><strong>Company Representation</strong>: Represent your company in a foreign country.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 hero-block-image">
                        <img src="../../../images/australian-visa.jpg" alt="Scenic view">
                    </div>
                    <div class="col-sm-2 lists">
                        <ul class="main-menu link-list has-bg">
                            <!-- <li class="navigation-node has-sub-menu arrow"><a href="/entering-and-leaving-australia">Study Visa</a></li>
                        <li class="navigation-node has-sub-menu arrow"><a href="/visas">Tourist Visa</a></li>
                        <li class="navigation-node has-sub-menu arrow"><a href="/citizenship">Working Holiday Visa</a></li>
                        <li><a href="/what-we-do"></a></li> -->
                            <!-- <div class="flex-container-block-2"> -->
                            <br /><br />
                            <a href="../../../views/study_visa.php" class="read-more">
                                Study Visa <span class="sr-only">Study Visa</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <br />
                            <a href="../views/training_visa.php" class="read-more">
                                Tourist Visa<span class="sr-only">Training Visa</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <br />

                            <a href="../../../views/training_visa.php" class="read-more">
                                Working Holiday Visa<span class="sr-only">Working Holiday Visa</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <br />

                            <a href="../../../views/training_visa.php" class="read-more">
                                Business Visa<span class="sr-only">Business Visa</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- </div> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer-container-block">
        <div id="alert-box">
            <p>
                <span class="alert-icon">!</span>
                People impacted by the Hamas-Israel conflict can find more information on
                <a href="#">Hamas-Israel Conflict: Visa Support and financial assistance.</a>
                People impacted by the security situation in Lebanon can find more information on
                <a href="#">Lebanon Visa Support</a>
            </p>
        </div>
    </footer>
    <script>
        document.querySelectorAll('.faq-questionn').forEach(button => {
            button.addEventListener('click', () => {
                const answer = button.nextElementSibling;

                // Toggle the active state of the answer
                answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
            });
        });
    </script>

</body>

</html>