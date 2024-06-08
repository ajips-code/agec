<?php
// require_once('database.php');
require_once('../controllers/database.php');

// Untuk debugging, tambahkan ini
file_put_contents('php://stderr', print_r($_POST, TRUE));
file_put_contents('php://stderr', print_r($_FILES, TRUE));
// Menggunakan objek database yang sudah Anda buat
$database = new Database();
$conn = $database->connection;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $industry = $_POST['industry'];
    $qualification = $_POST['qualification'];
    $experience_years = $_POST['experience_years'];
    $work_location = $_POST['work_location'];
    $state = $_POST['state'];
    $fullname = $_POST['fullname'];
    $usi_number = $_POST['usi-number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Handle file uploads
    $visa_doc_path = null;
    $resume_path = null;
    if (isset($_FILES['visa-doc']) && $_FILES['visa-doc']['error'] == UPLOAD_ERR_OK) {
        $visa_doc_path = 'uploads/' . basename($_FILES['visa-doc']['name']);
        move_uploaded_file($_FILES['visa-doc']['tmp_name'], $visa_doc_path);
    }
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume_path = 'uploads/' . basename($_FILES['resume']['name']);
        move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path);
    }

    // Insert data into database
    $sql = "INSERT INTO form_rpl_certification (industry, qualification, experience_years, work_location, state, fullname, usi_number, email, phone, message, visa_doc_path, resume_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $industry, $qualification, $experience_years, $work_location, $state, $fullname, $usi_number, $email, $phone, $message, $visa_doc_path, $resume_path);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    } else {
        echo "New record created successfully";
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../css/allservices-form.css">

</head>

<div class="body-form">
    <div class="container">
        <div class="logo">
            <img src="../images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
            <h1>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants</h1>
            <h2>Use your chance to achieve studying and working overseas</h2>
            <h3>We can help you start the journey</h3>
        </div>
        <div class="progress-bar">
            <div class="step active" id="step-1">1</div>
            <div class="step" id="step-2">2</div>
            <div class="step" id="step-3">3</div>
            <div class="step" id="step-4">4</div>
            <div class="step" id="step-5">5</div>
            <div class="step" id="step-6">6</div>
        </div>
        <div class="progress-line"></div>
        <div class="form-step active" id="form-step-1">
            <div class="form-content">
                <label for="country">Select Your Dream Country</label>
                <select id="country" name="country">
                    <option value="">Select Country</option>
                    <option value="Australia">Australia</option>
                    <option value="Germany">Germany</option>
                    <option value="Others">Other Countries</option>
                </select>
                <label for="services">Select Your Dream Destination</label>
                <select id="serviceSelect">
                    <option value="">Select Services</option>
                    <option value="RPL Certification">RPL Certification</option>
                    <option value="Internship">Internship</option>
                    <option value="Jobs">Jobs</option>
                    <option value="Tourist Visa">Tourist Visa</option>
                    <option value="Working Holiday Visa">Working Holiday Visa</option>
                    <option value="Business Visa">Business Visa</option>
                    <option value="Hospitality">PR Assessment</option>
                    <option value="Elicos">Elicos</option>
                    <option value="Study Visa">Study Visa</option>
                    <option value="Germany Programme">Gemany Programme</option>
                    <option value="Courses">Courses</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="warning" id="warningMessage1">Please select an Services</div>
        </div>
        <div class="form-step" id="form-step-2">
            <div class="form-content">
                <label for="industry">What Industry is your experience in?</label>
                <select id="industry" name="industry">
                    <option value="">Select Industry</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Building & Construction">Building & Construction</option>
                    <option value="Business & Finance">Business & Finance</option>
                    <option value="Civil Construction">Civil Construction</option>
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
                <label for="qualification">Select Qualification:</label>
                <select id="qualification">
                    <option value="">Select Qualification</option>
                </select>
            </div>
            <div class="warning" id="warningMessage1">Please select an industry.</div>
        </div>
        <div class="form-step" id="form-step-3">
            <div class="form-content">
                <div class="experience-container">
                    <div class="experience-question">How many years of relevant work experience do you have?</div>
                    <div class="experience-btn-group" id="experience-years">
                        <button type="button" data-value="0">No Experience</button>
                        <button type="button" data-value="1-2">1-2 years</button>
                        <button type="button" data-value="3-4">3-4 years</button>
                        <button type="button" data-value="5-9">5-9 years</button>
                        <button type="button" data-value="10+">10+ years</button>
                    </div>

                    <div class="experience-question">Where is your work experience?</div>
                    <div class="experience-btn-group" id="work-location">
                        <button type="button" data-value="None">No Experience</button>
                        <button type="button" data-value="Australia">Australia</button>
                        <button type="button" data-value="Overseas">Overseas</button>
                        <button type="button" data-value="Others">Others</button>
                    </div>
                    <!-- Hidden Inputs -->
                    <!-- <input type="hidden" name="experience_years" id="hidden-experience-years">
                    <input type="hidden" name="work_location" id="hidden-work-location"> -->
                    <div class="warning" id="warningMessage">Please select an option for both questions.</div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-4">
            <div class="form-content">
                <div class="container-state">
                    <h1 style="color:#363b6e;font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 700;">What state do you live in?</h1>
                    <div class="state-options">
                        <div class="state-option" data-state="NSW">
                            <img src="../images/NSW.JPG" alt="NSW">
                            <span>NSW</span>
                        </div>
                        <div class="state-option" data-state="VIC">
                            <img src="../images/vic.JPG" alt="VIC">
                            <span>VIC</span>
                        </div>
                        <div class="state-option" data-state="QLD">
                            <img src="../images/qld.JPG" alt="QLD">
                            <span>QLD</span>
                        </div>
                        <div class="state-option" data-state="SA">
                            <img src="../images/SA.PNG" alt="SA">
                            <span>SA</span>
                        </div>
                        <div class="state-option" data-state="WA">
                            <img src="../images/WAA.JPG" alt="WA">
                            <span>WA</span>
                        </div>
                        <div class="state-option" data-state="ACT">
                            <img src="../images/act.JPG" alt="ACT">
                            <span>ACT</span>
                        </div>
                        <div class="state-option" data-state="NT">
                            <img src="../images/nt.JPG" alt="NT">
                            <span>NT</span>
                        </div>
                        <div class="state-option" data-state="TAS">
                            <img src="../images/tas.JPG" alt="TAS">
                            <span>TAS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-5">
            <div class="container-form">
                <div class="form-container">
                    <div class="form-column">
                        <form id="step5-form" method="POST" action="rpl_certification-form.php">
                            <input type="hidden" name="industry" id="hidden-industry">
                            <input type="hidden" name="qualification" id="hidden-qualification">
                            <input type="hidden" name="experience_years" id="hidden-experience-years">
                            <input type="hidden" name="work_location" id="hidden-work-location">
                            <input type="hidden" name="state" id="hidden-state">
                            <!-- <label for="name-input">Your Full Name:</label> -->
                            <!-- <input type="name" id="name-input" 
                            name="fullname" required> -->
                            <div class="student-row">
                                <input type="text" id="name-input" name="first-name" placeholder="First Name" required>
                                <input type="text" id="name-input" name="sure-name" placeholder="Sure Name" required>
                            </div>
                            <div class="usi-row">
                                <!-- <label for="usi-number-input">Your USI Number:</label> -->
                                <p class="usi-description">What is <a href="https://portal.usi.gov.au/student/TermsAndConditions?ReturnUrl=%252fstudent%252fUsi%252fForgotten">USI Number</a> ?</p>
                            </div>
                            <input type="tel" id="usi-number-input" name="usi-number" placeholder="Your USI Number" required>
                            <!-- <label for="email-input">Your Email:</label> -->
                            <input type="email" id="email-input" name="email" placeholder="Your Email" required>
                            <!-- <label for="phone-input">Your Phone:</label> -->
                            <input type="tel" id="phone-input" name="phone" placeholder="Your Phone" required>
                            <!-- <label for="message-input">Your Message:</label> -->
                            <textarea id="message-input" name="message" placeholder="Your Message" required></textarea>
                            <input type="checkbox" id="terms-condition" required>
                            <label for="terms-condition" class="terms-condition-class">I agree to the terms and conditions</label>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-6" method="POST" action="rpl_certification-form.php" enctype="multipart/form-data">
            <div class="form-content">
                <div class="file-upload-row">
                    <label for="visa-doc">Upload Proof of Visa:</label>
                    <input type="file" id="visa-doc" name="visa-doc">
                    <p><a href="https://online.immi.gov.au/evo/firstParty?actionType=query" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How to Apply for Visa?&nbsp;&nbsp;</a></p>
                </div>

                <div class="file-upload-row">
                    <label for="resume">Upload Resume:</label>
                    <input type="file" id="resume" name="resume">
                    <p><a href="https://online.immi.gov.au/evo/firstParty?actionType=query" style="text-decoration:none;">How to Apply for Resume?</a></p>
                </div>

                <div class="warning" id="warningMessage6">Please upload required documents.</div>
            </div>
        </div>
        <div id="notification" class="notification" style="display: none;"></div>
        <div class="btn-group">
            <button id="prev-btn" style="display: none;">Prev</button>
            <button id="next-btn">Next</button>
            <button type="submit" id="submit" style="display:none; background:red; color:white;">Submit</button>
        </div>
    </div>
</div>
<script>
    // for take data state selected
    document.querySelectorAll('.state-option').forEach(option => {
        option.addEventListener('click', function() {
            document.querySelectorAll('.state-option').forEach(opt => opt.classList.remove('selected'));
            this.classList.add('selected');
            console.log('Selected state:', this.getAttribute('data-state'));
        });
    });

    // function for shotring options except others option is in bellow always
    function sortOptions(selectId) {
        var select = document.getElementById(selectId);
        var options = select.options;
        var arr = [];

        for (var i = 1; i < options.length; i++) {
            if (options[i].value !== "Others") {
                arr.push(options[i].text);
            }
        }

        arr.sort();

        for (var i = 1, j = 0; i < options.length; i++) {
            if (options[i].value !== "Others") {
                options[i].text = arr[j];
                options[i].value = arr[j];
                j++;
            }
        }

        // Move the "Others" option to the bottom
        var othersOption;
        for (var i = 1; i < options.length; i++) {
            if (options[i].value === "Others") {
                othersOption = options[i];
                select.remove(i);
                select.add(othersOption);
            }
        }
    }
    // Call the function with the select ID
    sortOptions('industry');


    // function for get data selected from 3th step form that experience year and work location
    function checkSelection() {
        const experienceYearsGroup = document.getElementById('experience-years');
        const workLocationGroup = document.getElementById('work-location');
        const warningMessage = document.getElementById('warningMessage');

        const experienceSelected = experienceYearsGroup.querySelector('button.active') !== null;
        const locationSelected = workLocationGroup.querySelector('button.active') !== null;

        if (experienceSelected && locationSelected) {
            warningMessage.style.display = 'none';

            // Sava value to local storage
            const experienceYears = experienceYearsGroup.querySelector('button.active').getAttribute('data-value');
            const workLocation = workLocationGroup.querySelector('button.active').getAttribute('data-value');
            localStorage.setItem('experience_years', experienceYears);
            localStorage.setItem('work_location', workLocation);
        }
    }


    document.querySelectorAll('.experience-btn-group button').forEach(button => {
        button.addEventListener('click', function() {
            const group = this.parentNode;

            group.querySelectorAll('button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            console.log('Selected value:', this.getAttribute('data-value'));
            checkSelection();
        });
    });

    document.getElementById('next-btn').addEventListener('click', function() {
        const experienceYearsGroup = document.getElementById('experience-years');
        const workLocationGroup = document.getElementById('work-location');
        const warningMessage = document.getElementById('warningMessage');

        const experienceSelected = experienceYearsGroup.querySelector('button.active') !== null;
        const locationSelected = workLocationGroup.querySelector('button.active') !== null;

        if (experienceSelected && locationSelected) {
            warningMessage.style.display = 'none';
        } else {
            warningMessage.style.display = 'block';
        }
    });

    const experienceYearsBtns = document.querySelectorAll("#experience-years button");
    experienceYearsBtns.forEach(btn => btn.addEventListener("click", () => {
        experienceYearsBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
        document.getElementById('experience-years').value = btn.getAttribute("data-value");
    }));

    const workLocationBtns = document.querySelectorAll("#work-location button");
    workLocationBtns.forEach(btn => btn.addEventListener("click", () => {
        workLocationBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
        document.getElementById('work-location').value = btn.getAttribute("data-value");
    }));

    const experienceYearsSelect = document.getElementById('experience-years');
    const workLocationSelect = document.getElementById('work-location');


    // Get Data state selection
    const stateOptions = document.querySelectorAll(".state-option");
    stateOptions.forEach(option => option.addEventListener("click", () => {
        stateOptions.forEach(o => o.classList.remove("selected"));
        option.classList.add("selected");
        document.querySelector('input[name="state"]').value = option.getAttribute("data-state");
    }));


    // validation step for flow step to next step and previous step and get the lines of number steps 
    document.addEventListener("DOMContentLoaded", function() {
        const steps = document.querySelectorAll('.step');
        const formSteps = document.querySelectorAll('.form-step');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');

        let currentStep = 0;

        function updateProgressLine() {
            const progressLine = document.querySelector('.progress-line');
            const activeStep = document.querySelector('.step.active');
            if (activeStep) {
                const activeStepIndex = Array.from(steps).indexOf(activeStep);
                const progress = (activeStepIndex / (steps.length - 1)) * 100;
                progressLine.style.width = `${progress}%`;
            }
        }

        function showStep(stepIndex) {
            steps[currentStep].classList.remove('active');
            formSteps[currentStep].classList.remove('active');

            currentStep = stepIndex;

            steps[currentStep].classList.add('active');
            formSteps[currentStep].classList.add('active');

            prevBtn.style.display = currentStep > 0 ? 'inline-block' : 'none';
            nextBtn.style.display = currentStep < steps.length - 1 ? 'inline-block' : 'none';
            updateProgressLine();
        }

        nextBtn.addEventListener('click', function() {
            if (currentStep < steps.length - 1) {
                showStep(currentStep + 1);
            } else {
                alert('Form submitted!');
            }
        });

        prevBtn.addEventListener('click', function() {
            if (currentStep > 0) {
                showStep(currentStep - 1);
            }
        });

        showStep(currentStep);
    });


    // Get data selected from step 1 to show the options for step 2
    document.addEventListener("DOMContentLoaded", function() {
        var industrySelect = document.getElementById("industry");
        var qualificationSelect = document.getElementById("qualification");

        function qualificationSelectChange() {
            var industry = industrySelect.value;
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
                default:
                    qualificationSelect.innerHTML = `<option value="">Select Qualification</option>`;
            }
        }
        industrySelect.addEventListener("change", qualificationSelectChange);
    });


    // Call all functions and create validation to save into local storage and return also send data to server and then php validation can save into database
    document.addEventListener('DOMContentLoaded', function() {
        const steps = document.querySelectorAll('.form-step');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const submitBtn = document.getElementById('submit');
        let currentStep = 0;

        function showStep(step) {
            steps.forEach((s, index) => {
                s.classList.toggle('active', index === step);
            });
            prevBtn.style.display = step === 0 ? 'none' : 'inline-block';
            nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline-block';
            submitBtn.style.display = step === steps.length - 1 ? 'inline-block' : 'none';
        }

        nextBtn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                saveToLocalStorage(currentStep);
                currentStep++;
                showStep(currentStep);
            }
        });

        prevBtn.addEventListener('click', () => {
            currentStep--;
            showStep(currentStep);
        });

        submitBtn.addEventListener('click', () => {
            saveToLocalStorage(currentStep);
            submitForm();
        });

        function validateStep(step) {
            // if (step === 4) { // Validasi hanya pada langkah 5
            //     const form = document.getElementById('step5-form');
            //     return ['fullname', 'usi-number', 'email', 'phone'].every(id => form[id].value !== '');
            // }
            // return true;
            // if (step === 0) {
            //     return document.getElementById('industry').value !== '';
            // } else if (step === 1) {
            //     return document.getElementById('qualification').value !== '';
            // } else if (step === 2) {
            //     return document.querySelector('#experience-years button.active') && document.querySelector('#work-location button.active');
            // } else if (step === 3) {
            //     return document.querySelector('.state-options .selected') !== null;
            // } else if (step === 4) {
            //     const form = document.getElementById('step5-form');
            //     return ['fullname', 'usi-number', 'email', 'phone'].every(id => form[id].value !== '');
            // }
            return true;
        }

        function showNotification(message, isError = false) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.classList.toggle('error', isError);
            notification.style.display = 'block';

            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        function saveToLocalStorage(step) {
            if (step === 0) {
                localStorage.setItem('industry', document.getElementById('industry').value);
            } else if (step === 1) {
                localStorage.setItem('qualification', document.getElementById('qualification').value);
            } else if (step === 2) {
                const experienceYearsButton = document.querySelector('#experience-years button.active');
                const workLocationButton = document.querySelector('#work-location button.active');
                const experienceYears = experienceYearsButton ? experienceYearsButton.getAttribute('data-value') : '';
                const workLocation = workLocationButton ? workLocationButton.getAttribute('data-value') : '';
                localStorage.setItem('experience_years', experienceYears);
                localStorage.setItem('work_location', workLocation);
                console.log('Experience years:', experienceYears);
                console.log('Work location:', workLocation);
            } else if (step === 3) {
                const state = document.querySelector('.state-options .selected')?.dataset.state;
                localStorage.setItem('state', state);
            } else if (step === 4) {
                const form = document.getElementById('step5-form');
                localStorage.setItem('fullname', form.fullname.value);
                localStorage.setItem('usi-number', form['usi-number'].value);
                localStorage.setItem('email', form.email.value);
                localStorage.setItem('phone', form.phone.value);
                localStorage.setItem('message', form.message.value);
            } else if (step === 5) {
                const visaDoc = document.getElementById('visa-doc').files[0];
                const resume = document.getElementById('resume').files[0];

                // Save file names to local storage
                localStorage.setItem('visa_doc_filename', visaDoc ? visaDoc.name : '');
                localStorage.setItem('resume_filename', resume ? resume.name : '');
            }
        }

        function submitForm() {
            const formData = new FormData();
            formData.append('industry', localStorage.getItem('industry'));
            formData.append('qualification', localStorage.getItem('qualification'));
            formData.append('experience_years', localStorage.getItem('experience_years'));
            formData.append('work_location', localStorage.getItem('work_location'));
            formData.append('state', localStorage.getItem('state'));
            formData.append('fullname', localStorage.getItem('fullname'));
            formData.append('usi-number', localStorage.getItem('usi-number'));
            formData.append('email', localStorage.getItem('email'));
            formData.append('phone', localStorage.getItem('phone'));
            formData.append('message', localStorage.getItem('message'));

            const visaDoc = document.getElementById('visa-doc').files[0];
            const resume = document.getElementById('resume').files[0];
            if (visaDoc) {
                formData.append('visa-doc', visaDoc);
            }
            if (resume) {
                formData.append('resume', resume);
            }

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'rpl_certification-form.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    showNotification('Submission successful!');
                    setTimeout(function() {
                        window.location.href = 'rpl_certification.php';
                    }, 3000);
                } else {
                    showNotification('Submission failed with status: ' + xhr.status, true);
                }
            };

            xhr.onerror = function() {
                showNotification('Request failed', true);
            };

            try {
                xhr.send(formData);
            } catch (error) {
                console.error('Error sending form data:', error);
                showNotification('An error occurred while submitting the form', true);
            }
        }
        showStep(currentStep);
    });
</script>

</html>