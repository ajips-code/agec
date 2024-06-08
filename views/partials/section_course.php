<style>
    .container-courses {
        text-align: center;
        padding: 20px;
        margin-bottom: 250px;
    }

    .search-box {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    .search-box label {
        flex: 0 0 100%;
        text-align: left;
        margin-bottom: 5px;
    }

    .search-box .detail {
        flex: 1 1 auto;
        max-width: 300px;
    }

    .search-box input,
    .search-box button {
        padding: 10px;
        font-size: 16px;
        flex: 1 1 auto;
    }

    .search-box button {
        background-color: #1f8c95;
        color: white;
        border: none;
        padding: 15px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        flex: 0 0 auto;
    }

    .search-box button:hover {
        background-color: #156a70;
    }

    .materials {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        margin-top: 150px;
    }

    .material-card {
        position: relative;
        width: 340px;
        height: 300px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .material-card img {
        width: 100%;
        height: 100%;
        transition: transform 0.5s ease-in-out;
    }

    .material-card:hover img {
        transform: translateY(-10px);
    }

    .material-info {
        position: absolute;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        width: 100%;
        text-align: center;
        padding: 5px 0;
    }

    /* Features section styling */
    #features-section {
        padding: 2vw 8vw;
        text-align: center;
    }

    .features-title {
        font-size: 2rem;
        color: var(--main-color-2);
        margin-bottom: 1rem;
    }

    .features-description {
        font-size: 1.2rem;
        color: var(--main-color-2);
        margin-bottom: 2rem;
    }

    .features-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 3rem;
    }

    .feature-box {
        background: var(--main-color-4);
        padding: 1.5rem;
        border-radius: 0.5rem;
        text-align: center;
        justify-content: center;
        border: 1px solid var(--main-color-5);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .feature-box i {
        font-size: 4.3rem;
        text-align: center;
        color: var(--main-color-2);
        margin-bottom: 10px;
    }

    /* 
        .fa-solid,
        .fas {
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        } */

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--main-color-6);
    }

    .feature-title {
        font-size: 1.5rem;
        margin: 1rem 0;
        color: var(--main-color-2);
    }

    .feature-description {
        font-size: 1rem;
        color: var(--main-color-2);
    }
</style>
<div class="section-jobs" style="margin-top:180px;">
    <h1>Courses</h1>
</div>
<div class="container-courses">
    <h1>Find materials for your course at your school</h1>
    <div class="search-box">
        <div class="detail">
            <!-- <label for="school">I am a student at</label> -->
            <input type="text" id="school" name="school" placeholder="University name">
        </div>
        <div class="detail">
            <!-- <label for="course">and my course is</label> -->
            <input type="text" id="course" name="course" placeholder="Enter your course name">
        </div>
        <button id="get-materials">Get Course Materials</button>
    </div>
    <!-- Features section starts from here -->
        <section id="features-section">
        <h1>Recommended Course</h1>
        <p>That leads to Australian PR</p>

        <div class="features-container">
            <div class="feature-box">
                <i class="fas fa-briefcase"></i>
                <h3>Engineering</h3>
                <p>
                    Advanced Diploma of Engineering – MEM60122<br>
                    Certificate III in Engineering – Fabrication Trade – MEM31922<br>
                    Certificate III in Engineering – Mechanical Trade – MEM30219<br>
                    Certificate IV in Engineering – MEM40119<br>
                    Diploma of Engineering – Advanced Trade – MEM50119<br>
                    Diploma of Engineering – Technical – MEM50222
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-stethoscope"></i>
                <h3>Nursing</h3>
                <p>
                    Diploma of Nursing – HLT54121<br>
                    Bachelor of Nursing – Various universities
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-laptop-code"></i>
                <h3>Information Technology</h3>
                <p>
                    Advanced Diploma of Information Technology – ICT60220<br>
                    Diploma of Information Technology – ICT50220<br>
                    Bachelor of Information Technology – Various universities
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-calculator"></i>
                <h3>Accounting</h3>
                <p>
                    Diploma of Accounting – FNS50217<br>
                    Bachelor of Accounting – Various universities
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-utensils"></i>
                <h3>Cookery & Hospitality</h3>
                <p>
                    Certificate III in Commercial Cookery – SIT30821<br>
                    Certificate IV in Commercial Cookery – SIT40521<br>
                    Diploma of Hospitality Management – SIT50422<br>
                    Advanced Diploma of Hospitality Management – SIT60322
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-car"></i>
                <h3>Automotive</h3>
                <p>
                    Certificate III in Light Vehicle Mechanical Technology – AUR30620<br>
                    Certificate IV in Automotive Mechanical Diagnosis – AUR40216<br>
                    Diploma of Automotive Technology – AUR50216
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-tools"></i>
                <h3>Trade Courses</h3>
                <p>
                    Certificate III in Carpentry – CPC30220<br>
                    Certificate III in Painting and Decorating – CPC30620<br>
                    Certificate III in Wall and Floor Tiling – CPC31320<br>
                    Certificate III in Plumbing – CPC32420
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-users"></i>
                <h3>Community Services</h3>
                <p>
                    Diploma of Community Services – CHC52015<br>
                    Certificate III in Individual Support (Ageing, Home and Community) – CHC33015<br>
                    Certificate IV in Ageing Support – CHC43015
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Education</h3>
                <p>
                    Bachelor of Early Childhood Education – Various universities<br>
                    Diploma of Early Childhood Education and Care – CHC50121
                </p>
            </div>

            <div class="feature-box">
                <i class="fas fa-heartbeat"></i>
                <h3>Health</h3>
                <p>
                    Diploma of Dental Technology – HLT55118<br>
                    Diploma of Mental Health – CHC53315
                </p>
            </div>
        </div>
    </section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const schoolInput = document.getElementById('school');
        const courseInput = document.getElementById('course');
        const schoolPlaceholder = 'University name';
        const coursePlaceholder = 'Enter your course name';

        function typeEffect(element, text, delay) {
            element.placeholder = "";
            let index = 0;

            function type() {
                if (index < text.length) {
                    element.placeholder += text.charAt(index);
                    index++;
                    setTimeout(type, delay);
                }
            }
            type();
        }

        typeEffect(schoolInput, schoolPlaceholder, 100);
        typeEffect(courseInput, coursePlaceholder, 100);
    });
</script>