<style>
    .assessment-container-specific {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .assessment-content-specific {
        max-width: 60%;
        margin-top: -40px;
    }

    .assessment-title-specific {
        font-size: 36px;
        margin-top: -80px;
    }

    .assessment-subtitle-specific {
        font-size: 30px;
        color: #1F8C95;
        margin: 10px 0;
    }

    .assessment-description-specific {
        font-size: 16px;
        color: #555;
    }

    .assessment-button-specific {
        background-color: #1F8C95;
        color: white;
        padding: 15px 20px;
        margin-right: 10px;
        border: none;
        color: white;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .assessment-button-specific a {
        color:white;
    }

    .assessment-profiles-specific {
        max-width: 40%;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .profile-specific {
        display: flex;
        align-items: center;
        background-color: #f8f8f8;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-specific.highlighted-profile-specific {
        border: 2px solid #ff4b4b;
    }

    .profile-picture-specific {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile-details-specific {
        flex: 1;
    }

    .profile-name-specific {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
    }

    .profile-email-specific {
        font-size: 14px;
        color: #777;
        margin: 5px 0;
    }

    .profile-score-specific {
        font-size: 16px;
        font-weight: bold;
        color: #1F8C95;
    }

    .profile-performance-specific p {
        margin: 0;
        font-size: 14px;
    }

    .profile-heart-specific {
        font-size: 20px;
        color: #ff4b4b;
    }
</style>
<h1 class="header-title-tourist">PR Assessment </h1>
<div class="assessment-container-specific">
    <div class="assessment-content-specific">
        <h1 class="assessment-title-specific">PR Assessment with Australian Global Education Consultancy</h1>
        <h2 class="assessment-subtitle-specific">Navigating Your Path to Permanent Residency</h2>
        <p class="assessment-description-specific">
            At Australian Global Education Consultancy, we offer comprehensive PR Assessment services designed to help you navigate the complexities of securing Permanent Residency in Australia. Our expert team provides personalized evaluations of your eligibility, guiding you through the necessary requirements and documentation. With our in-depth understanding of the immigration process, we strive to enhance your chances of a successful application, ensuring you have the best possible support on your journey to becoming a permanent resident in Australia. Trust us to provide you with professional advice and tailored strategies to achieve your migration goals.
        </p>
        <button class="assessment-button-specific"><a href="./views/pr_assessment.php">Book a free Clarity Call</a></button>
        <button class="assessment-button-specific"><a href="./views/pr_assessment-form.php">Learn More</a></button>
    </div>
    <div class="assessment-profiles-specific">
        <div class="profile-specific">
            <img src="../../../images/author1.jpg" alt="Profile Picture" class="profile-picture-specific">
            <div class="profile-details-specific">
                <p class="profile-name-specific">Caleb Busta</p>
                <p class="profile-email-specific">caleb@mail.com</p>
                <p class="profile-score-specific">84%</p>
            </div>
            <div class="profile-heart-specific">&#x2665;</div>
        </div>
        <div class="profile-specific">
            <img src="../../../images/author3.jpg" alt="Profile Picture" class="profile-picture-specific">
            <div class="profile-details-specific">
                <p class="profile-name-specific">Priyanka</p>
                <p class="profile-email-specific">priya@mail.com</p>
                <p class="profile-score-specific">91%</p>
            </div>
            <div class="profile-heart-specific">&#x2665;</div>
        </div>
        <div class="profile-specific highlighted-profile-specific">
            <img src="../../../images/author2.jpg" alt="Profile Picture" class="profile-picture-specific">
            <div class="profile-details-specific">
                <p class="profile-name-specific">Nala Jones</p>
                <p class="profile-email-specific">nala@mail.com</p>
                <p class="profile-score-specific">95%</p>
                <div class="profile-performance-specific">
                    <p>Cognitive Aptitude: 93%</p>
                    <p>Verbal Reasoning: 97%</p>
                    <p>Python Coding: 95%</p>
                </div>
            </div>
            <div class="profile-heart-specific">&#x2764;</div>
        </div>
        <div class="profile-specific">
            <img src="../../../images/author4.jpg" alt="Profile Picture" class="profile-picture-specific">
            <div class="profile-details-specific">
                <p class="profile-name-specific">Zara</p>
                <p class="profile-email-specific">zara@mail.com</p>
                <p class="profile-score-specific">82%</p>
            </div>
            <div class="profile-heart-specific">&#x2665;</div>
        </div>
    </div>
</div>