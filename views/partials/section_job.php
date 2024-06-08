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

    #adecco-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #00335C;
        /* padding: 20px; */
    }

    #adecco-header {
        text-align: center;
        margin-bottom: 10px;
        margin-top: -20px;
        background: var(--main-color-4);
        color: white;
        padding: 40px;
        /* border-radius: 10px; */
        width: 100%;
    }

    .adecco-title {
        font-size: 2em;
        font-weight: 800;
        margin: 0;
        color: #D1A730;
        font-family: 'Montserrat', sans-serif;
    }

    .adecco-subtitle {
        font-size: 1.2em;
        margin: 10px 0 20px 0;
        color: var(--main-color-2);
    }

    .adecco-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    .adecco-btn {
        padding: 15px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .submit-vacancy {
        background-color: #1f8c95;
        color: #FFFFFF;
    }

    .submit-vacancy:hover {
        background-color: #B58F27;
    }

    .latest-jobs {
        background-color: #1f8c95;
        color: #FFFFFF;
        padding: 15px 45px;
    }

    .latest-jobs:hover {
        background-color: var(--main-color-2);
    }

    #adecco-main {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 40px;
        width: 100%;
    }

    .adecco-search {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }

    .adecco-input,
    .adecco-select {
        padding: 10px;
        border: 1px solid #00335C;
        border-radius: 5px;
        font-size: 1.3em;
        color: #00335c;
    }

    .search-jobs {
        padding: 20px;
        background-color: var(--main-color-6);
        color: #FFFFFF;
    }

    .search-jobs:hover {
        background-color: #00274A;
    }

    .adecco-image-container {
        max-width: 80%;
        margin: 20px auto;
    }

    .adecco-image {
        width: 40%;
        border-radius: 10px;
    }

    .section-jobs {
        margin-top: 80px;
    }

    .section-jobs h1 {
        text-align: center;
        color: var(--main-color-2);
        font-family: var(--fonts-1);
        font-size: 2.7vw;
    }

    .submit-vacancy a,
    .latest-jobs a {
        color: #FFFFFF;
    }

    @media (max-width: 768px) {
        .section-jobs h1 {
            text-align: center;
            color: #1f8c95;
            font-family: var(--fonts-1);
            font-size: 11vw;
        }

        .adecco-title {
            font-size: 1.8em;
        }

        .adecco-subtitle {
            font-size: 1em;
        }

        .adecco-image-container {
            max-width: 100%;
        }

        .adecco-buttons {
            flex-direction: column;
            gap: 10px;
        }

        .adecco-btn {
            width: 100%;
            padding: 15px;
            font-size: 1.2em;
        }

        .adecco-search {
            flex-direction: column;
        }

        .adecco-input,
        .adecco-select {
            width: 100%;
        }
    }

    /* Slider Styles */
    .slider-container {
        max-width: 1200px;
        margin: 50px auto;
        position: relative;
        padding: 0 40px;
        /* Adjust padding for button space */
    }

    .slider-wrapper {
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.3s ease-in-out;
    }

    .slider-item {
        flex: 0 0 50%;
        /* Show 2 items per slide */
        padding: 10px;
        box-sizing: border-box;
    }

    .slider-card {
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        text-align: center;
    }

    .slider-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .slider-card img {
        width: 50px;
        height: 50px;
        margin-bottom: 10px;
    }

    .slider-card h3 {
        margin: 0;
        font-size: 18px;
    }

    .slider-card p {
        margin: 10px 0 0;
        color: #666;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
        pointer-events: none;
        /* Allow clicks to pass through */
    }

    .slider-nav button {
        pointer-events: auto;
        /* Override pointer-events for buttons */
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        border: none;
        background-color: var(--main-color-6);
        color: white;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .slider-nav button:disabled {
        background-color: #ddd;
        cursor: not-allowed;
    }

    .slider-nav button:hover:not(:disabled) {
        background-color: var(--main-color-2);
    }

    .slider-nav #sliderPrevBtn {
        left: 10px;
        /* Adjust as needed */
    }

    .slider-nav #sliderNextBtn {
        right: 10px;
        /* Adjust as needed */
    }

    @media (max-width: 768px) {
        .slider-item {
            flex: 0 0 100%;
            /* Show 1 item per slide on smaller screens */
        }
    }

    @media (min-width: 992px) and (max-width: 1400px) {
        .faq-container {
            max-width: 800px;
            margin-right: auto;
            margin-left: auto;
            padding: 10px;
            border-radius: 8px;

        }

        .adecco-image-container {
            flex: 1 1 40%;
        }

        .adecco-image {
            width: 100%;
        }

        .faq-item {
            margin-bottom: 10px;
        }

        .faq-question {
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

        .faq-answer {
            padding: 15px;
            display: none;
            background: #ffffff;
            color: var(--main-color-2);
            border-bottom: #00274A 1px solid;
        }

        .faq-answer p {
            text-align: left;
        }

        .faq-question.active .faq-toggle {
            content: "-";
            transform: rotate(45deg);
        }

        .faq-toggle {
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

        .faq-answer ul {
            padding-left: 20px;
            list-style-type: disc;
            text-align: left;
        }

        .faq-answer li {
            margin-bottom: 10px;
            text-align: left;
        }
    }

    @media (min-width: 1401px) {
        .faq-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
        }

        .faq-item {
            margin-bottom: 10px;
        }

        .faq-question {
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

        .faq-answer {
            padding: 15px;
            display: none;
            background: #ffffff;
            color: var(--main-color-2);
            border-bottom: #00274A 1px solid;
        }

        .faq-answer p {
            text-align: left;
        }

        .faq-question.active .faq-toggle {
            content: "-";
            transform: rotate(45deg);
        }

        .faq-toggle {
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .adecco-con-faq {
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .adecco-image-container {
            flex: 1 1 50%;
        }

        .faq-container {
            margin-right: 200px;
            margin-top: -15px;
            margin-left: -150px;
            /* Flex basis of 50% for two equal columns */
            box-sizing: border-box;
            /* Ensure padding and borders are included in the width and height */
        }

        /* Ensure the image takes up the full width of its container */
        .adecco-image {
            width: 50%;
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 10px;
            /* Optional: add border-radius if needed */
        }

        .faq-answer ul {
            padding-left: 20px;
            /* Adds space before the list */
            list-style-type: disc;
            /* Uses default bullet points */
            text-align: left;
            /* Ensures text alignment is left */
        }

        .faq-answer li {
            margin-bottom: 10px;
            /* Adds space between list items */
            text-align: left;
            /* Ensures each list item text is aligned left */
        }
    }
</style>

<div class="section-jobs">
    <h1>Jobs</h1>
</div>
<section id="adecco-container">
    <div id="adecco-header">
        <h1 class="adecco-title">Australian Global Education Consultancy works for everyone</h1>
        <p class="adecco-subtitle">Making a career move or seeking a new addition to your team? Whatever your needs, AGEC has endless opportunities for you.</p>
        <div class="adecco-con-faq">
            <div class="adecco-image-container col-md-2">
                <img src="../../../images/healthcare.jpg" alt="Team working" class="adecco-image">
            </div>
            <div class="faq-container col-md-10">
                <div class="faq-item">
                    <button class="faq-question">What is the benefit of working in overseas?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Working overseas offers numerous advantages:</p>
                        <ul>
                            <li><strong>Global Exposure</strong>: Gain international experience that enhances your resume.</li>
                            <li><strong>Cultural Enrichment</strong>: Immerse yourself in new cultures, languages, and lifestyles.</li>
                            <li><strong>Career Advancement</strong>: Access to unique job opportunities and higher salaries.</li>
                            <li><strong>Networking</strong>: Build a global network of professional contacts.</li>
                            <li><strong>Personal Growth</strong>: Develop adaptability, problem-solving skills, and independence.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Why study and work in Australia?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Australia is a top destination for international students and professionals due to its:</p>
                        <ul>
                            <li><strong>World-Class Education</strong>: Renowned universities and high-quality education standards.</li>
                            <li><strong>Work Opportunities</strong>: Strong job market with opportunities in various sectors.</li>
                            <li><strong>Vibrant Cities</strong>: Live in culturally diverse and dynamic cities like Sydney, Melbourne, and Brisbane.</li>
                            <li><strong>Work-Life Balance</strong>: Enjoy a healthy work-life balance with a focus on outdoor and recreational activities.</li>
                            <li><strong>Post-Study Work Visas</strong>: Benefit from post-study work visas that allow you to gain work experience after graduation.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Why study and work in Germany? <span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Germany is a popular choice for students and professionals because of:</p>
                        <ul>
                            <li><strong>Excellent Education System</strong>: Home to top universities and research institutions.</li>
                            <li><strong>Tuition-Free Universities</strong>: Many public universities offer free or low-cost tuition for international students.</li>
                            <li><strong>Strong Economy</strong>: A robust economy with a high demand for skilled workers.</li>
                            <li><strong>Innovative Environment</strong>: A leader in engineering, technology, and innovation.</li>
                            <li><strong>Quality of Life</strong>: High living standards, efficient public transportation, and rich cultural heritage.</li>
                        </ul>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">How can Australia Global Education Consultancy Help your study and work overseas?<span class="faq-toggle">+</span></button>
                    <div class="faq-answer">
                        <p>Australian Global Education Consultancy (AGEC) supports your international journey by offering:</p>
                        <ul>
                            <li><strong>Personalized Guidance</strong>: Tailored advice on choosing the right course and university.</li>
                            <li><strong>Application Assistance</strong>: Help with application processes, including documentation and interview preparation.</li>
                            <li><strong>Visa Support</strong>: Guidance on visa applications and immigration procedures.</li>
                            <li><strong>Job Placement Services</strong>: Assistance in finding internships, part-time jobs, and full-time positions.</li>
                            <li><strong>Ongoing Support</strong>: Continuous support throughout your studies and employment overseas.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="adecco-main">
            <div class="slider-heading">Find your next employer</div>
            <div class="slider-subheading">Explore company profiles to find the right workplace for you. Learn about jobs, reviews, company culture, perks, and benefits.</div>
            <div class="adecco-search">
                <!--<input type="text" class="adecco-input" id="adecco-keywords" placeholder="Search keyword">-->
                <select class="adecco-select" id="adecco-location">
                    <option value="">Select Country</option>
                    <option value="Australia">Australia</option>
                    <option value="Germany">Germany</option>
                    <option value="Others">Other Country</option>
                </select>
                <select class="adecco-select" id="adecco-classifications">
                    <option value="">Select Classifications</option>
                    <option value="Health Care">Health Care</option>
                    <option value="Nurse">Nurse</option>
                    <option value="Age Care">Age Care</option>
                    <option value="Civil Construction">Civil Construction</option>
                    <option value="Building & Construction">Building & Construction</option>
                    <option value="Commercial Cookery & Hospitality">Commercial Cookery & Hospitality</option>
                    <option value="Vocational Education & Training">Vocational Education & Training</option>
                    <option value="Business & Finance">Business & Finance</option>
                    <option value="Community Services">Community Services</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Hair & Beauty">Hair & Beauty</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Horticulture & Land Management">Horticulture & Land Management</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Mining and Resources">Mining and Resources</option>
                    <option value="Plumbing Services">Plumbing Services</option>
                    <option value="Security & Cleaning">Security & Cleaning</option>
                    <option value="Transport & Logistics">Transport & Logistics</option>
                    <option value="Retail Services">Retail Services</option>
                    <option value="Events & Entertainment">Events & Entertainment</option>
                    <option value="Others">Others</option>
                </select>
                <button class="adecco-btn search-jobs"><a href="./views/jobs-form.php">Search jobs</a></button>
            </div>
        </div>
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slider">
                    <div class="slider-item">
                        <div class="slider-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe66bf03d6780474ca60ed872a491086c%2F236a024d11fc4b2bada897198030f156" alt="Admin & HR">
                            <h3>Amartha Mikro Fintek</h3>
                            <p>165 Jobs</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe66bf03d6780474ca60ed872a491086c%2Fec66234dfbe24cc2a175699b2fabfcfd" alt="Marketing">
                            <h3>Mazars</h3>
                            <p>22 Jobs</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe66bf03d6780474ca60ed872a491086c%2F29b3df9e14ba4afc9aa087a8c69701c2" alt="Operations">
                            <h3>Lazada</h3>
                            <p>15 Jobs</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe66bf03d6780474ca60ed872a491086c%2F236a024d11fc4b2bada897198030f156" alt="Admin & HR">
                            <h3>Another Company</h3>
                            <p>30 Jobs</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="slider-card">
                            <img src="https://cdn.builder.io/api/v1/image/assets%2Fe66bf03d6780474ca60ed872a491086c%2Fec66234dfbe24cc2a175699b2fabfcfd" alt="Marketing">
                            <h3>Yet Another Company</h3>
                            <p>12 Jobs</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-nav">
                <button id="sliderPrevBtn" disabled>&lt;</button>
                <button id="sliderNextBtn" style="margin-right: 75px;">&gt;</button>
            </div>
        </div>
        <div class="adecco-buttons">
            <button class="adecco-btn submit-vacancy"><a href="./views/jobs-form.php">Submit Vacancy</a></button>
            <button class="adecco-btn latest-jobs"><a href="./views/jobs.php">See More</a></button>
        </div>
    </div>
</section>

<script>
    const slider = document.querySelector('.slider');
    const sliderItems = document.querySelectorAll('.slider-item');
    const prevBtn = document.getElementById('sliderPrevBtn');
    const nextBtn = document.getElementById('sliderNextBtn');
    let currentIndex = 0;

    function updateSlider() {
        const slideWidth = sliderItems[0].offsetWidth;
        const visibleItems = window.innerWidth < 768 ? 1 : 2;
        slider.style.transform = `translateX(${-currentIndex * slideWidth}px)`;

        // Enable/disable buttons based on currentIndex
        prevBtn.disabled = currentIndex === 0;
        nextBtn.disabled = currentIndex >= sliderItems.length - visibleItems;
    }

    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    nextBtn.addEventListener('click', () => {
        const visibleItems = window.innerWidth < 768 ? 1 : 2;
        if (currentIndex < sliderItems.length - visibleItems) {
            currentIndex++;
            updateSlider();
        }
    });

    window.addEventListener('resize', updateSlider);
    updateSlider(); // Initial call to set up the slider correctly


    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const answer = button.nextElementSibling;

            // Toggle the active state of the answer
            answer.style.display = (answer.style.display === 'block') ? 'none' : 'block';
        });
    });
</script>