<!-- Memanggil file CSS -->
<html>
<html lang="en">

<head>
    <!-- <link rel="stylesheet" type="text/css" href="../css/section.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/st.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/internship.css">

    <style type="text/css">
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

        .process {
            text-align: center;
            color: var(--main-color-2);
            font-family: var(--fonts-1);
            font-size: 2.7vw !important;
            margin-top: 20px;
            margin-bottom: -15px;;
        }

        .content--container {
            margin: 0 auto;
            padding: 20px;
            background-color: var(--main-color-4);
            /* max-width: 1200px; */
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .ui-section {
            padding: 10px 70px;
        }

        .ui-tabs {
            display: flex;
            gap: 20px;
            /* margin-top: 20px; */
        }

        .ui-tabs__labels {
            flex: 1;
            display: flex;
            flex-direction: row;
            /* Mengubah arah flex menjadi baris */
            padding: 20px;
            border-radius: 8px;
            gap: 10px;
            /* Memberikan jarak antar tab */
        }

        .ui-tabs__label {
            padding: 15px;
            margin-bottom: 0;
            /* Menghapus margin bawah */
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            text-align: center;
            font-family: var(--fonts-2);
            color: var(--main-color-3);
            flex: 1;
            font-size: 14px;
        }

        .ui-tabs__label:hover,
        .ui-tabs__label:focus {
            background-color: var(--main-color-6);
            color: var(--main-color-4);
        }

        .ui-tabs__input:checked+.ui-tabs__label {
            background-color: var(--main-color-6);
            color: var(--main-color-4);
        }

        .ui-tabs__panels {
            flex: 3;
            padding-top: 20px;
            padding-right: 60px;
            padding-left: 45px;
            padding-bottom: 30px;
            background-color: var(--main-color-4);
            border-radius: 8px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .ui-tabs__panel {
            display: none;
        }

        .ui-tabs__input:checked+.ui-tabs__label+.ui-tabs__panels .ui-tabs__panel {
            display: block;
        }

        .text p {
            line-height: 1.6;
            margin: 10px 0;
            font-size: 20px;
        }

        .dots li,
        .numbers li {
            margin-bottom: 10px;
            font-size: 19px;
        }

        .dots li:before,
        .numbers li:before {
            content: '';
            display: inline-block;
            margin-right: 10px;
        }

        .ImageInternship img {
            display: none;
            width: 100%;
            /* height: 50%; */
            border-radius: 8px;
            margin-top: 60px;
        }

        .flex-container-btn {
            display: flex;
            gap: 20px;
            padding: 15px 20px;
            justify-content: center;
            align-items: center;
            margin-top: 45px;
            margin-bottom: 150px;
        }

        .flex-container-btn a {
            text-decoration: none;
            padding: 15px 20px;
            border-radius: 4px;
            background-color: var(--main-color-6);
            color: var(--main-color-4);
            transition: background-color 0.3s, color 0.3s;
        }

        .read-more {
            text-decoration: none;
            padding: 20px 20px;
            border-radius: 4px;
            background-color: var(--main-color-6);
            color: var(--main-color-4);
            transition: background-color 0.3s, color 0.3s;
        }


        .flex-container-btn a:hover {
            background-color: var(--main-color-2);
        }

        .flex-container-btn .icon {
            width: 16px;
            height: 16px;
            margin-left: 10px;
        }

        .ui-tabs__panel h2 {
            font-size: 24px;
        }

        /* Penyesuaian untuk tampilan seluler */
        @media (max-width: 768px) {
            .ui-tabs {
                flex-direction: column;
            }

            .ui-tabs__labels {
                flex-direction: row;
                overflow-x: auto;
            }

            .ui-tabs__label {
                flex: 1 0 auto;
                min-width: 100px;
                /* Sesuaikan sesuai kebutuhan */
            }

            .ui-tabs__panels {
                padding: 10px;
            }

            .content--container {
                padding: 10px;
            }

            .flex-container-btn a {
                padding: 12px 24px;
                font-size: 16px;
            }

            .flex-container-btn .icon {
                width: 20px;
                height: 20px;
            }

            .process {
                text-align: center;
                color: var(--main-color-2);
                font-family: var(--fonts-1);
                font-size: 11vw !important;
                margin-top: 45px;
            }

        }

        /* Penyesuaian tambahan untuk tampilan yang sangat kecil */
        @media (max-width: 480px) {
            .ui-tabs__label {
                font-size: 14px;
                padding: 10px;
            }

            .ui-tabs__panel h2 {
                font-size: 20px;
            }

            .text p {
                font-size: 16px;
            }

            .dots li,
            .numbers li {
                font-size: 16px;
            }

            .flex-container-btn a {
                padding: 12px 24px;
                font-size: 16px;
            }

            .flex-container-btn .icon {
                width: 20px;
                height: 20px;
            }

        }
    </style>
</head>
<h1 class="process text-center">Internship</h1>
<section class="ui-section strip--light-grey ui-section--stretch" id="section--silo-info">
    <div class="content--container">
        <div class="ui-tabs">
            <div class="ui-tabs__container ui-tabs--vertical">
                <input name="ui-tabs" type="radio" id="ui-tab-0" checked="checked" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-1" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-2" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-3" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-4" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-5" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-6" class="ui-tabs__input">
                <input name="ui-tabs" type="radio" id="ui-tab-7" class="ui-tabs__input">
                <div class="ui-tabs__labels">
                    <label for="ui-tab-0" class="ui-tabs__label epsilon">Introduction</label>
                    <label for="ui-tab-1" class="ui-tabs__label epsilon">What</label>
                    <label for="ui-tab-2" class="ui-tabs__label epsilon">How</label>
                    <label for="ui-tab-3" class="ui-tabs__label epsilon">Requirements</label>
                    <label for="ui-tab-4" class="ui-tabs__label epsilon">Cost</label>
                    <label for="ui-tab-5" class="ui-tabs__label epsilon">Paid or Unpaid</label>
                    <label for="ui-tab-6" class="ui-tabs__label epsilon">Applying</label>
                    <label for="ui-tab-7" class="ui-tabs__label epsilon">How Go Works</label>
                </div>
                <div class="ui-tabs__panels text">
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-0">
                        <h2>Guide to Interning Abroad</h2>
                        <p>Can you imagine completing college semester credits or earning extra cash just for temporarily living and working in an amazing country overseas? Interning abroad gives you just that opportunity!</p>
                        <p>If the idea of eating delicious international food, taking local transportation, and immersing yourself in a completely different culture gives you happy butterflies, you’re in for a treat.</p>
                        <p><strong>When you secure an international internship you open doors to the possibility of academic acceleration, resume and networking building, language learning, and cultural immersion into a whole new local community.</strong></p>
                        <p>The average intern is an undergraduate student or recent graduate / young professional looking for an opportunity to strengthen their work experience. Choosing an internship abroad allows you to balance your love for travel with a new experience that will help you learn and grow -- all while training you to become an ideal career candidate.</p>
                        <p><strong>Whether paid or unpaid, short-term or long-term, interning abroad holds great value.</strong> It’s become so popular that we’ve dedicated an entire section of Go Overseas to helping you search internship opportunities around the world. Use this intern abroad guide to help you find planning tips, logistical advice, and expert insight about interning overseas.</p>
                    </div>
                    <!-- Add other tab contents here similarly -->
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-1">
                        <h2>What is an international internship?</h2>
                        <p>If you’ve heard your school administrators or classmates discussing ways to boost academic performance and professional resumes before entering the career world, you’ve likely also heard the term “international internship” too. Perhaps your degree even requires a certain number of internship hours to graduate and you like the idea of doing it abroad.</p>
                        <p>An international internship is an overseas work opportunity, usually during school breaks but may also occur over the course of a school year or semester, that offers payment or school credit for field work related to your major. It is most common for students looking to fulfill an internship requirement before graduation or young professionals seeking hands-on experience before entering the workforce.</p>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-2">
                        <h2>How to get an internship abroad</h2>
                        <p>Interning abroad can be a great way to gain valuable professional experience, learn about different cultures, and expand your network.</p>
                        <p>Here are some steps you can take to start interning abroad:</p>
                        <ul class="dots">
                            <li><strong>Determine your goals:</strong> Consider what you hope to gain or learn from an international internship. Do you want to grow your skills or understand the inner workings of a specific industry? Are you looking to build your portfolio? Are you seeking mentorship?</li>
                            <li><strong>Research potential internships:</strong> Once you have an idea of where you want to intern and where you want to travel to, start searching for internships in the country and industry that interests you. Take a look at <a href="/program-search/intern">all of the options available</a> on Go Overseas to read verified unbiased reviews!</li>
                            <li><strong>Apply for internships:</strong> Once you have found internships that interest you, apply for them by submitting your resume and cover letter. Some internships may also require a writing sample, portfolio, or letters of recommendation.</li>
                            <li><strong>Obtain necessary documents:</strong> Depending on the country you plan to intern in, you may need a work visa or other legal documents. Research the visa requirements and begin the application process early.</li>
                            <li><strong>Prepare for the experience:</strong> Before you depart for your internship, learn as much as you can about the culture and customs of the country you will be living in. Also, consider learning some basic phrases in the local language.</li>
                            <li><strong>Make arrangements for housing and transportation:</strong> Look for housing options near your internship site, and consider transportation options for getting to and from work.</li>
                            <li><strong>Pack for your trip:</strong> Pack the necessary clothes and items you will need for your internship abroad.</li>
                            <li><strong>Enjoy the experience:</strong> Once you arrive, make the most of your internship by learning as much as you can, meeting new people, and exploring the local area in your free time!</li>
                        </ul>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-3">
                        <h2>Requirements to Intern Abroad</h2>
                        <p><strong>Internship requirements vary by job, so no one shoe fits all.</strong> Some internships have a school year minimum, others may have a major or class prerequisite. If you are hoping to intern in a country where English isn’t a primary language, you can bet you’ll need a certain level of fluency in the respective local language.</p>
                        <p><strong>Other requirements for interning abroad include:</strong></p>
                        <ul class="dots">
                            <li>An up-to-date resume</li>
                            <li>A valid passport and visa (if necessary)</li>
                            <li>Academic credit transfer approval (not all internship credits may transfer; check with your advisor before applying)</li>
                        </ul>
                        <p>Visas seem like a big headache when trying to land an international internship. Do you apply for a tourist visa? Do you apply for a student visa? Do you apply for a work visa if it is a paid internship?</p>
                        <p><strong>Visa requirements vary by:</strong> the country, your nationality, and the work circumstance. Many countries will allow you to intern on a 3-month tourist visa, while others may require an invitation contact from the internship program before applying for your visa. This is where working with your school or an internship placement provider will prove useful. If that isn’t an option, each country’s government website should offer a breakdown of the requirements. </p>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-4">
                        <h2>The Costs of Internships Abroad</h2>
                        <p>When you intern abroad, the cost may vary dramatically. In theory, many people assume an internship shouldn’t cost anything -- but it is more complicated that.</p>
                        <ol class="numbers">
                            <li>First, you have the higher costs associated with booking through your school or an internship placement program. For instance, you can find yourself paying about $5,000 plus flights for a placement internship in a country like Guatemala while paying $2,000 (all inclusive) when independently arranging an internship in Egypt.</li>
                            <li>There is also the fact that not every internship is paid; many are academic credit-based, leaving you with living expenses to cover on your own from savings.</li>
                        </ol>
                        <p>If you want to bypass the extra costs that come with internship placement, here’s a first-hand experience about <a href="/blog/how-to-organize-an-internship-abroad-for-free">how to secure an internship abroad for free</a>.</p>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-5">
                        <h2>Paid or Unpaid Internships Abroad</h2>
                        <p>Plenty of internships abroad are paid -- but not all. While the idea of unpaid work can be initially unappealing, you may want to strongly consider unpaid internships too. Some offer even more value than you think.</p>
                        <p><strong>Paid internships provide either an hourly wage or program stipend.</strong> These opportunities are highly competitive because of their paid status, and often demand stronger experience to be accepted.</p>
                        <p><strong>Unpaid internships are more welcoming to prospects with no work experience.</strong> If you are wondering whether you should take an unpaid assignment abroad, read this internship advice on <a href="/blog/should-i-take-an-unpaid-internship-abroad">whether you should take an unpaid internship abroad</a> from one of our Go Overseas experts.</p>
                        <p>If you are set on securing a paid internship overseas, you’ll have your work cut out for you. Paid internships are highly competitive and can require a bit of extra elbow grease to get started.</p>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-6">
                        <h2>Applying For an Internship Abroad</h2>
                        <p>There are a number of ways to find internships abroad:</p>
                        <ul class="dots">
                            <li>Contact your school’s designated study abroad or academic advisory office</li>
                            <li>Book through placement providers</li>
                            <li>Apply for internships directly on a company website</li>
                            <li>Search online job boards with an internship filter</li>
                        </ul>
                        <p>This guide on <a href="/blog/how-to-organize-an-internship-abroad-for-free">how to find an international internship</a> breaks down the different ways to secure the best internship for you.</p>
                        <p>Here on Go Overseas, you can search by <strong>country</strong>, <strong>term</strong>, or <strong>internship type</strong>, above to discover the many programs that can help you find the paid internship of your dreams. If all else fails, the Internet is your friend! Job listings, Google searches, and company websites can offer a fresh listing of paid internships to apply to.</p>
                        <p><strong>Each route to finding an internship has its pros and cons.</strong> If you do the search alone, for instance, you may identify fresh opportunities that aren’t partnered with your school or third-party program. However, you will also lose the benefit of having an advisor guiding you along the way and support system while you’re overseas.</p>
                    </div>
                    <div class="ui-tabs__panel ui-tabs__panel--border-none" id="ui-tab-panel-7">
                        <h2>How Go Overseas Works</h2>
                        <p>Go Overseas is your trusted source for travel abroad programs: here you can browse and discover thousands of vetted providers. Just like a trusted travel buddy, we want to help you find the right information and feel excited and confident about your first or next culturally immersive trip overseas. We know sometimes having an abundance of options can be overwhelming, so we have a few tips on how to use Go Overseas to find the perfect transformative travel program for you.</p>
                        <ol class="numbers">
                            <li><strong>Browse 16,000+ programs:</strong> Narrow your search results by using filters, such as program type, location, and length.</li>
                            <li><strong>Read 46,000+ Reviews:</strong> Real people have gone on these programs, and have experiences to share. Read alumni reviews on any program that interests you to get an idea of what it's really like to be on the ground, overseas.</li>
                            <li><strong>Read 5,700+ Interviews:</strong> For any program that really sparks your interest, read personal stories and in-depth accounts from travelers like you. If you'd like to reach out and hear more from the traveler who left an interview, let us know and we'll help connect you.</li>
                            <li><strong>Browse community photos:</strong> Pictures of food, accommodations, adventures, and people (oh, the friends you'll make!) in program community galleries will help you visualize yourself abroad.</li>
                            <li><strong>Wish List 💙:</strong> Not ready to commit to a program? Click the Wish List heart icon to bookmark programs and save them for later. Then, compare programs side by side.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="ImageInternship">
                <img src="./../../images/vocationaleducationtraining.jpg" alt="Information">
            </div>
        </div>
    </div>
    <div class="intro text-center">
        <select id="countrySelect">
            <option>Select Country</option>
            <!-- Country options go here -->
            <option value="Australia">Australia</option>
            <!-- <option value="Singapore">Singapore</option> -->
            <option value="Germany">Germany</option>
            <option value="Other Countries">Other Countries</option>
            <!-- <option value="Canada">Canada</option>
                <option value="France">France</option>
                <option value="UK">UK</option>
                <option value="USA">USA</option>
                <option value="Sweden">Sweden</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Hungary">Hungary</option>
                <option value="Russia">Russia</option>
                <option value="Europe">Europe</option> -->
        </select>
        <select id="industrySelect">
            <option>Select Industry</option>
            <option value="Health Care">Health Care</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Hospitality">Hospitality</option>
            <option value="Social Work">Social Work</option>
            <option value="Sales and Marketing">Sales and Marketing</option>
            <option value="Hair & Beauty">Hair & Beauty</option>
            <option value="Education">Education</option>
            <option value="Entertaiment">Entertaiment</option>
            <option value="Finance">Finance</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Automotive">Automotive</option>
            <option value="Others">Others</option>
        </select>
        <select id="qualificationSelect">
            <option>Select Jobs</option>
        </select>
        <a href="./views/internship-form.php" class="read-more">
            Enrol Now <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
    <div class="flex-container-btn">
        <a href="./views/internship.php" class="read-more">
            Learn More <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tabInputs = document.querySelectorAll(".ui-tabs__input");
        tabInputs.forEach((input) => {
            input.addEventListener("change", function() {
                const panelId = this.id.replace("ui-tab-", "ui-tab-panel-");
                document.querySelectorAll(".ui-tabs__panel").forEach((panel) => {
                    panel.style.display = panel.id === panelId ? "block" : "none";
                });
            });
        });

        // Hide the content of ui-tab-panel-0 initially
        document.getElementById("ui-tab-panel-0").style.display = "block";
    });

    document.getElementById("countrySelect").addEventListener("change", function() {
        var industrySelect = document.getElementById("industrySelect");
        var countrySelect = document.getElementById("countrySelect");

        if (countrySelect.value !== "") {
            industrySelect.disabled = false;
        } else {
            industrySelect.disabled = true;
            qualificationSelect.disabled = true;
            industrySelect.selectedIndex = 0;
            qualificationSelect.selectedIndex = 0;
        }
    });

    // Function to populate qualification options based on selected industry\
    document.addEventListener('DOMContentLoaded', () => {
        // Function to populate qualification options based on selected industry
        function populateQualifications() {
            var industrySelect = document.getElementById("industrySelect");
            var qualificationSelect = document.getElementById("qualificationSelect");
            var industry = industrySelect.options[industrySelect.selectedIndex].text;

            // Clear existing options
            qualificationSelect.innerHTML = "";

            // Enable qualificationSelect if an industry is selected
            if (industrySelect.value !== "") {
                qualificationSelect.disabled = false;
            } else {
                qualificationSelect.disabled = true;
            }

            // Populate qualification options based on selected industry
            switch (industry) {
                case "Health Care":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Jobs</option>
                            <option value="Age Home">Age Home</option>
                            <option value="Disability">Disability</option>
                            <option value="Hospitals">Hospitals</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Agriculture":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Jobs</option>
                            <option value="Production">Production</option>
                            <option value="Farming">Farming</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Finance":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Jobs</option>
                            <option value="Certificate IV in Accounting and Bookkeeping (FNS40222)">Certificate IV in Accounting and Bookkeeping (FNS40222)</option>
                            <option value="Diploma of Accounting (FNS50222)">Diploma of Accounting (FNS50222)</option>
                            <option value="Advanced Diploma of Accounting (FNS60222)">Advanced Diploma of Accounting (FNS60222)</option>
                            <option value="Bachelor of Finance">Bachelor of Finance</option>
                            <option value="Master of Finance">Master of Finance</option>
                            <option value="Others">Others</option>
                        `;
                    break;
                case "Civil Construction":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate III in Civil Construction (RII30920)">Certificate III in Civil Construction (RII30920)</option>
                            <option value="Certificate III in Civil Construction Plant Operations (RII30820)">Certificate III in Civil Construction Plant Operations (RII30820)</option>
                            <option value="Certificate IV in Civil Construction Design (RII40720)">Certificate IV in Civil Construction Design (RII40720)</option>
                            <option value="Diploma of Civil Construction Design (RII50520)">Diploma of Civil Construction Design (RII50520)</option>
                            <option value="Advanced Diploma of Civil Construction (RII60520)">Advanced Diploma of Civil Construction (RII60520)</option>
                            <option value="Bachelor of Civil Engineering">Bachelor of Civil Engineering</option>
                            <option value="Master of Civil Engineering">Master of Civil Engineering</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Social Work":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate IV in Community Services (CHC42015)">Certificate IV in Community Services (CHC42015)</option>
                            <option value="Diploma of Community Services (CHC52015)">Diploma of Community Services (CHC52015)</option>
                            <option value="Bachelor of Social Work">Bachelor of Social Work</option>
                            <option value="Master of Social Work">Master of Social Work</option>
                        `;
                    break;
                case "IT":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate IV in Information Technology (ICT40120)">Certificate IV in Information Technology (ICT40120)</option>
                            <option value="Diploma of Information Technology (ICT50220)">Diploma of Information Technology (ICT50220)</option>
                            <option value="Advanced Diploma of Information Technology (ICT60220)">Advanced Diploma of Information Technology (ICT60220)</option>
                            <option value="Bachelor of Information Technology">Bachelor of Information Technology</option>
                            <option value="Master of Information Technology">Master of Information Technology</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Hospitality":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate III in Hospitality (SIT30616)">Certificate III in Hospitality (SIT30616)</option>
                            <option value="Certificate IV in Hospitality (SIT40416)">Certificate IV in Hospitality (SIT40416)</option>
                            <option value="Diploma of Hospitality Management (SIT50416)">Diploma of Hospitality Management (SIT50416)</option>
                            <option value="Advanced Diploma of Hospitality Management (SIT60316)">Advanced Diploma of Hospitality Management (SIT60316)</option>
                            <option value="Bachelor of Hospitality Management">Bachelor of Hospitality Management</option>
                            <option value="Master of Hospitality Management">Master of Hospitality Management</option>
                        `;
                    break;
                case "Agriculture":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate III in Agriculture (AHC30116)">Certificate III in Agriculture (AHC30116)</option>
                            <option value="Certificate IV in Agriculture (AHC40116)">Certificate IV in Agriculture (AHC40116)</option>
                            <option value="Diploma of Agriculture (AHC50116)">Diploma of Agriculture (AHC50116)</option>
                            <option value="Advanced Diploma of Agribusiness Management (AHC60316)">Advanced Diploma of Agribusiness Management (AHC60316)</option>
                            <option value="Bachelor of Agricultural Science">Bachelor of Agricultural Science</option>
                            <option value="Master of Agricultural Science">Master of Agricultural Science</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Education":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate III in Early Childhood Education and Care (CHC30113)">Certificate III in Early Childhood Education and Care (CHC30113)</option>
                            <option value="Diploma of Early Childhood Education and Care (CHC50113)">Diploma of Early Childhood Education and Care (CHC50113)</option>
                            <option value="Bachelor of Education (Primary)">Bachelor of Education (Primary)</option>
                            <option value="Bachelor of Education (Secondary)">Bachelor of Education (Secondary)</option>
                            <option value="Master of Education">Master of Education</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                case "Entertainment":
                    qualificationSelect.innerHTML = `
                            <option value="">Select Job</option>
                            <option value="Certificate III in Screen and Media (CUA31020)">Certificate III in Screen and Media (CUA31020)</option>
                            <option value="Diploma of Screen and Media (CUA51020)">Diploma of Screen and Media (CUA51020)</option>
                            <option value="Advanced Diploma of Screen and Media (CUA60620)">Advanced Diploma of Screen and Media (CUA60620)</option>
                            <option value="Bachelor of Arts (Entertainment Industries)">Bachelor of Arts (Entertainment Industries)</option>
                            <option value="Master of Arts (Entertainment Industries)">Master of Arts (Entertainment Industries)</option>
                            <option value="Other">Others</option>
                        `;
                    break;
                default:
                    qualificationSelect.innerHTML = `<option value="">Select Job</option>`;
            }
        }

        function checkAndRedirect() {
            var countryValue = document.getElementById("countrySelect").value;
            var industryValue = document.getElementById("industrySelect").value;
            var qualificationValue = document.getElementById("qualificationSelect").value;

            console.log("Country:", countryValue);
            console.log("Industry:", industryValue);
            console.log("Qualification:", qualificationValue);

            if (countryValue && industryValue && qualificationValue) {
                localStorage.setItem("selectedCountry", countryValue);
                localStorage.setItem("selectedIndustry", industryValue);
                localStorage.setItem("selectedQualification", qualificationValue);

                window.location.href = "./views/internship-form2.php";
            }
        }

        document.getElementById("industrySelect").addEventListener("change", function() {
            populateQualifications();
            checkAndRedirect();
        });

        document.getElementById("qualificationSelect").addEventListener("change", checkAndRedirect);
    });
</script>

</html>