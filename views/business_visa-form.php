<?php
// require_once('database.php');
require_once('../controllers/database.php');


// Menggunakan objek database yang sudah Anda buat
$database = new Database();
$conn = $database->connection;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $country = $_POST['country'];
    $industry = $_POST['industry'];
    $qualification = $_POST['qualification'];
    $fullname = $_POST['fullname'];
    $student_number = $_POST['student-number'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Handle file uploads
    $student_doc_path = null;
    $resume_path = null;
    if (isset($_FILES['student-doc']) && $_FILES['student-doc']['error'] == UPLOAD_ERR_OK) {
        $student_doc_path = 'uploads/' . basename($_FILES['student-doc']['name']);
        move_uploaded_file($_FILES['student-doc']['tmp_name'], $student_doc_path);
    }
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume_path = 'uploads/' . basename($_FILES['resume']['name']);
        move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path);
    }

    // Check for duplicate entry
    $check_sql = "SELECT * FROM form_internship WHERE student_number = ? AND email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("ss", $student_number, $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        $notification_message = "Duplicate entry detected.";
    } else {
        // Insert data into database
        $sql = "INSERT INTO form_internship (country, industry, qualification, fullname, student_number, email, phone, message, student_doc_path, resume_path, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $country, $industry, $qualification, $fullname, $student_number, $email, $phone, $message, $student_doc_path, $resume_path);

        if (!$stmt->execute()) {
            $notification_message = "Error: " . $stmt->error;
        } else {
            $notification_message = "New record created successfully";
        }

        $stmt->close();
    }

    $check_stmt->close();
    $conn->close();

    // Set notification message in session
    session_start();
    $_SESSION['notification_message'] = $notification_message;

    // Redirect back to internship.php after a delay
    header("Refresh: 3; URL=jobs.php"); // Redirect after 5 seconds
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Australian Global Education Consultancy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/icon" href="../images/AGEC-Logo_Full-Colour.png" />
    <link rel="stylesheet" href="../css/internship-form.css">

</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
            <h2>Use your work experience to achieve an overseas jobs opportunities</h2>
            <h3>Our agent can help you to get your dream jobs opportunities</h3>
        </div>
        <div class="progress-bar">
            <div class="step active" id="step-1">1</div>
            <div class="step" id="step-2">2</div>
            <div class="step" id="step-3">3</div>
            <div class="step" id="step-4">4</div>
        </div>
        <div class="progress-line"></div>

        <form id="main-form" method="POST" action="internship-form.php" enctype="multipart/form-data">
            <div class="form-step active" id="form-step-1">
                <div class="form-content">
                    <label for="countrySelect">Which country is your destination for internship?</label>
                    <select id="countrySelect" name="country">
                        <option value="">Select Country</option>
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
                    <div class="warning" id="warningMessage1">Please select a country.</div>
                </div>
            </div>

            <div class="form-step" id="form-step-2">
                <div class="form-content">
                    <label for="industrySelect">Select Industry:</label>
                    <select id="industrySelect" name="industry" disabled>
                        <option value="">Select Industry</option>
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
                    <label for="qualificationSelect">Select Job</label>
                    <select id="qualificationSelect" name="qualification" disabled>
                        <option value="">Select Job</option>
                    </select>
                    <div class="warning" id="warningMessage2">Please select an Industry and Job</div>
                </div>
            </div>

            <div class="form-step" id="form-step-3">
                <div class="container-form">
                    <div class="form-container">
                        <div class="form-column">
                            <!-- <label for="name-input">Your Full Name:</label> -->
                            <div class="student-row">
                                <input type="text" id="first-name-input" name="first-name" placeholder="First Name" required>
                                <input type="text" id="last-name-input" name="last-name" placeholder="Last Name" required>
                            </div>
                            <!-- <label for="student-number-input">Your Student Number:</label> -->
                            <input type="text" id="id-number-input" name="id-number" placeholder="ID Number" required>
                            <!-- <label for="email-input">Your Email:</label> -->
                            <input type="text" id="email-input" name="email" placeholder="Email" required>
                            <!-- <label for="phone-input">Your Phone:</label> -->
                            <div class="phone-input-container">
                                <select id="country-code" name="country-code" required>
                                    <!-- Option values for country codes -->
                                    <option value="+1">USA (+1)</option>
                                    <option value="+44">UK (+44)</option>
                                    <!-- Add more options for other countries -->
                                </select>
                                <input type="text" id="phone-number" name="phone" placeholder="Phone Number" required>
                            </div>
                            <!-- <label for="message-input">Your Message:</label> -->
                            <textarea type="text" id="message-input" name="message" placeholder="Your Message" required></textarea>
                            <div>
                                <input type="checkbox" id="terms-condition" required>
                                <label for="terms-condition" class="terms-condition-class">I agree to the terms and conditions</label>
                                <!-- Animated text below terms and conditions -->
                                <div id="terms-animation"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-step" id="form-step-4">
                <div class="form-content">
                    <div class="file-upload-row">
                        <label for="student-doc">Upload Proof of ID Card:</label>
                        <input type="file" id="student-doc" name="student-doc" required>
                    </div>
                    <div class="file-upload-row">
                        <label for="resume">Upload Resume:</label>
                        <input type="file" id="resume" name="resume" required>
                    </div>
                    <div class="warning" id="warningMessage4">Please upload the required documents.</div>
                </div>
            </div>

            <div id="notification" class="notification" style="display: none;"></div>
            <div class="btn-group">
                <button id="prev-btn" type="button" style="display: none;">Prev</button>
                <button id="next-btn" type="button">Next</button>
                <button type="submit" id="submit" style="display: none; background: red; color: white;">Submit</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sort options except "Others" at the bottom
            function sortOptions(selectId) {
                var select = document.getElementById(selectId);
                var options = Array.from(select.options);
                var othersOption = options.find(option => option.value === "Others");

                options = options.filter(option => option.value !== "Others")
                    .sort((a, b) => a.text.localeCompare(b.text));

                options.forEach((option, index) => {
                    select.options[index + 1].text = option.text;
                    select.options[index + 1].value = option.value;
                });

                if (othersOption) {
                    select.options[select.options.length - 1].text = othersOption.text;
                    select.options[select.options.length - 1].value = othersOption.value;
                }
            }
            sortOptions('industrySelect');

            // Step navigation and progress line update
            const steps = document.querySelectorAll('.step');
            const formSteps = document.querySelectorAll('.form-step');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit');
            const progressLine = document.querySelector('.progress-line');
            let currentStep = 0;

            function updateProgressLine() {
                const activeStepIndex = Array.from(steps).indexOf(document.querySelector('.step.active'));
                const progress = (activeStepIndex / (steps.length - 1)) * 100;
                progressLine.style.width = `${progress}%`;
            }

            function showStep(stepIndex) {
                steps[currentStep].classList.remove('active');
                formSteps[currentStep].classList.remove('active');

                currentStep = stepIndex;

                steps[currentStep].classList.add('active');
                formSteps[currentStep].classList.add('active');

                prevBtn.style.display = currentStep > 0 ? 'inline-block' : 'none';
                nextBtn.style.display = currentStep < steps.length - 1 ? 'inline-block' : 'none';
                submitBtn.style.display = currentStep === steps.length - 1 ? 'inline-block' : 'none';
                updateProgressLine();
            }

            function validateStep1() {
                const countrySelect = document.getElementById('countrySelect');
                const warningMessage1 = document.getElementById('warningMessage1');
                if (countrySelect.value === "") {
                    warningMessage1.style.display = 'block';
                    return false;
                }
                warningMessage1.style.display = 'none';
                localStorage.setItem('country', countrySelect.value);
                return true;
            }

            function validateStep2() {
                const industrySelect = document.getElementById('industrySelect');
                const qualificationSelect = document.getElementById('qualificationSelect');
                const warningMessage2 = document.getElementById('warningMessage2');
                if (industrySelect.value === "" || qualificationSelect.value === "") {
                    warningMessage2.style.display = 'block';
                    return false;
                }
                warningMessage2.style.display = 'none';
                localStorage.setItem('industry', industrySelect.value);
                localStorage.setItem('qualification', qualificationSelect.value);
                return true;
            }

            function validateStep4() {
                const studentDoc = document.getElementById('student-doc');
                const resume = document.getElementById('resume');
                const warningMessage4 = document.getElementById('warningMessage4');
                if (studentDoc.files.length === 0 || resume.files.length === 0) {
                    warningMessage4.style.display = 'block';
                    return false;
                }
                warningMessage4.style.display = 'none';
                return true;
            }

            nextBtn.addEventListener('click', function() {
                if (currentStep === 0 && !validateStep1()) return;
                if (currentStep === 1 && !validateStep2()) return;
                if (currentStep < steps.length - 1) {
                    showStep(currentStep + 1);
                    if (currentStep === 1) {
                        document.getElementById('industrySelect').disabled = false;
                        document.getElementById('qualificationSelect').disabled = false;
                    }
                }
            });

            prevBtn.addEventListener('click', function() {
                if (currentStep > 0) {
                    showStep(currentStep - 1);
                }
            });

            function showNotification(message, isError = false) {
                const notification = document.getElementById('notification');
                notification.textContent = message;
                notification.classList.toggle('error', isError);
                notification.style.display = 'block';

                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            }

            submitBtn.addEventListener('click', function() {
                if (currentStep === steps.length - 1 && validateStep4()) {
                    // Data dari local storage disiapkan untuk dikirim
                    const formData = new FormData();
                    formData.append('country', localStorage.getItem('country'));
                    formData.append('industry', localStorage.getItem('industry'));
                    formData.append('qualification', localStorage.getItem('qualification'));
                    formData.append('fullname', localStorage.getItem('fullname'));
                    formData.append('student-number', localStorage.getItem('student-number'));
                    formData.append('email', localStorage.getItem('email'));
                    formData.append('phone', localStorage.getItem('phone'));
                    formData.append('message', localStorage.getItem('message'));

                    const studentDoc = document.getElementById('student-doc').files[0];
                    const resume = document.getElementById('resume').files[0];
                    if (studentDoc) {
                        formData.append('student-doc', studentDoc);
                    }
                    if (resume) {
                        formData.append('resume', resume);
                    }

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', 'internship-form.php', true);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            showNotification('Submission successful!');
                            setTimeout(function() {
                                window.location.href = 'internship.php';
                            }, 4000);
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
            });

            showStep(currentStep);

            // Qualification selection logic
            var industrySelect = document.getElementById("industrySelect");
            var qualificationSelect = document.getElementById("qualificationSelect");

            function qualificationSelectChange() {
                var industry = industrySelect.value;
                var qualifications = {
                    "Health Care": [
                        "Age Home",
                        "Disability",
                        "Hospitals",
                        "Others"
                    ],
                    "Agriculture": [
                        "Production",
                        "Farming",
                        "Other"
                    ],
                    "Hospitality": [
                        "Restorant",
                        "Hotels",
                        "Cruise",
                        "Events",
                        "Other"
                    ],
                    "Social Work": [
                        "Elder Care",
                        "Disability Care",
                        "Cruise",
                        "Events",
                        "Other"
                    ],
                    "Sales and Marketing": [
                        "Sales",
                        "Marketing",
                        "Other"
                    ],
                    "Hair & Beauty": [
                        "Hair Salon",
                        "Beauty Salon",
                        "Slimming Salon",
                        "Body Sculpting",
                        "Other"
                    ],
                    "Education": [
                        "Child Care",
                        "Schools",
                        "Collages",
                        "University",
                        "Others"
                    ],
                    "Entertainment": [
                        "Circus",
                        "Musical theater",
                        "Performing Arts",
                        "Comedy",
                        "Sport",
                        "Concert",
                        "Others"
                    ],
                    "Finance": [
                        "Banking",
                        "Finance",
                        "Mortgage Broker",
                        "Other"
                    ],
                    "Information Technology": [
                        "Software Development",
                        "Cybersecurity",
                        "Cloud Computing",
                        "Artificial Intelligence (AI) and Machine Learning",
                        "Data Science and Analytics",
                        "Internet of Things (IoT)",
                        "Big Data",
                        "Blockchain Technology",
                        "DevOps (Development and Operations)",
                        "Augmented Reality (AR) and Virtual Reality (VR)"
                    ],
                    "Automotive": [
                        "Automotive Engineering",
                        "Vehicle Design and Manufacturing",
                        "Automotive Technology and Innovation",
                        "Automotive Electronics",
                        "Automotive Materials and Manufacturing Processes",
                        "Automotive Safety and Crash Testing",
                        "Automotive Maintenance and Repair",
                        "Automotive Sales and Marketing",
                        "Autonomous Vehicles and Self-Driving Technology",
                        "Automotive Supply Chain Management"
                    ]
                };

                qualificationSelect.innerHTML = `<option value="">Select Job</option>`;
                if (qualifications[industry]) {
                    qualifications[industry].forEach(qual => {
                        const option = document.createElement('option');
                        option.value = qual;
                        option.text = qual;
                        qualificationSelect.add(option);
                    });
                }
            }
            industrySelect.addEventListener("change", qualificationSelectChange);
        });
        document.getElementById('main-form').addEventListener('submit', function() {
            document.getElementById('submit').disabled = true;
        });
    </script>
    <script>
        document.getElementById('terms-condition').addEventListener('change', function() {
            var animationContainer = document.getElementById('terms-animation');
            if (this.checked) {
                // If the checkbox is checked, show animation or text
                animationContainer.innerHTML = "Thank you for agreeing to our terms and conditions!";
                animationContainer.classList.add('animate-pulse');
            } else {
                // If the checkbox is unchecked, remove animation or text
                animationContainer.innerHTML = "";
                animationContainer.classList.remove('animate-pulse');
            }
        });
    </script>
</body>

</html>