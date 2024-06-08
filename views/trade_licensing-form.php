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
    <link rel="shortcut icon" type="image/icon" href="images/AGEC-Logo_Full-Colour.png" />
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0077B5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: start;
            height: 100vh;
        }

        .container {
            text-align: center;
            margin-top: 70px;
            max-width: 800px;
            width: 100%;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 250px;
            margin-bottom: 40px;
        }

        .progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
            position: relative;
            /* Add this line */
        }

        .progress-line {
            position: relative;
            top: -60px;
            /* Vertically align the line */
            width: calc(100% - 75%);
            /* Width of the line */
            height: 2px;
            /* Thickness of the line */
            background-color: #d3d3d3;
            /* Color of the line */
            z-index: -1;
            /* Ensure the line is behind steps */
        }

        .step {
            width: 40px;
            height: 40px;
            background-color: #d3d3d3;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: #fff;
        }

        .step.active {
            background-color: #b2d235;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .form-content {
            margin-top: 30px;
            margin-bottom: 20px;
        }

        .form-content label {
            display: none;
            margin-bottom: 10px;
            font-size: 18px;
            color: #fff;
        }

        .form-content select {
            width: 100%;
            padding: 10px;
            border: 2px solid #b2d235;
            border-radius: 20px;
            font-size: 16px;
        }

        button {
            background-color: #b2d235;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #a1c32d;
        }

        .form-control {

            box-shadow: none;
            border: 1px solid #f0f0f0;
            font-size: 16px !important;
            font-weight: 300;
            background: #f2f3f7;
            border-radius: 0px;
        }

        .form-control:focus,
        .form-control:active {
            background: #f2f3f7;
            box-shadow: none;
            border: 1px solid #cccccc;
        }

        input[type="text"] {
            height: 50px;
        }

        .form-group {
            margin-bottom: 30px;
            text-align: right;
        }

        @media screen and (max-width: 768px) {
            .form-group #fname {
                margin-bottom: 30px;
            }
        }

        .form-group label {
            font-weight: 400;
        }

        .form-group .btn-modify {
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            font-size: 13px;
            padding: 10px 15px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            justify-content: left;
            align-items: left;
            text-align: start;
            color: white;
            margin: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 700px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
        </div>
        <div class="progress-bar">
            <div class="step active" id="step-1">1</div>
            <div class="step" id="step-2">2</div>
            <div class="step" id="step-3">3</div>
            <div class="step" id="step-4">4</div>
            <div class="step" id="step-5">5</div>
        </div>
        <div class="progress-line"></div>
        <div class="form-step active" id="form-step-1">
            <div class="form-content">
                <label for="industry">What industry is your experience in?</label>
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
                </select>
            </div>
        </div>
        <div class="form-step" id="form-step-2">
            <div class="form-content">
                <label for="industry">Test</label>
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
                </select>
            </div>
        </div>
        <div class="form-step" id="form-step-3">
            <div class="form-content">
                <label for="industry">Test</label>
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
                </select>
            </div>
        </div>
        <div class="form-step" id="form-step-4">
            <div class="form-content">
                <label for="industry">Test</label>
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
                </select>
            </div>
        </div>
        <div class="form-step" id="form-step-5">
            <div class="container-form">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Ambil data dari form
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];

                    // Data validasi sederhana
                    if (empty($fullname) || empty($email) || empty($phone) || empty($message)) {
                        echo '<p style="color: red;">Please fill all required fields.</p>';
                    } else {
                        // Buat koneksi ke database
                        $servername = "localhost"; // Sesuaikan dengan nama server Anda
                        $username = "root"; // Sesuaikan dengan username database Anda
                        $password = ""; // Sesuaikan dengan password database Anda
                        $dbname = "agec"; // Sesuaikan dengan nama database Anda

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Cek koneksi
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Buat pernyataan SQL untuk memasukkan data
                        $sql = "INSERT INTO form_trade_licensing (fullname, email, phone, message) VALUES (?, ?, ?, ?)";

                        // Siapkan pernyataan dan ikat parameternya
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ssss", $fullname, $email, $phone, $message);

                        // Eksekusi pernyataan
                        if ($stmt->execute()) {
                            echo '<p style="color: green;">New record created successfully</p>';
                        } else {
                            echo '<p style="color: red;">Error: ' . $sql . '<br>' . $conn->error . '</p>';
                        }

                        // Tutup pernyataan dan koneksi
                        $stmt->close();
                        $conn->close();
                    }
                }
                ?>

                <div class="form-container">
                    <div class="form-column">
                        <form id="step5-form" method="POST" action="trade_licensing-form.php">
                            <label for="name-input">Your Full Name:</label>
                            <input type="text" id="name-input" name="fullname" required>
                            <label for="email-input">Your Email:</label>
                            <input type="email" id="email-input" name="email" required>
                            <label for="phone-input">Your Phone:</label>
                            <input type="tel" id="phone-input" name="phone" required>
                            <label for="message-input">Your Message:</label>
                            <textarea id="message-input" name="message" required></textarea>
                            <input type="checkbox" id="terms-condition" required>
                            <label for="terms-condition" class="terms-condition-class">I agree to the terms and conditions</label>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button id="next-btn">Next</button>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll('.step');
            const formSteps = document.querySelectorAll('.form-step');

            const nextBtn = document.getElementById('next-btn');

            let currentStep = 0;

            nextBtn.addEventListener('click', function() {
                if (currentStep < steps.length - 1) {
                    steps[currentStep].classList.remove('active');
                    formSteps[currentStep].classList.remove('active');

                    currentStep++;

                    steps[currentStep].classList.add('active');
                    formSteps[currentStep].classList.add('active');

                    // Hide/show form steps based on current step
                    if (currentStep === 0) {
                        document.getElementById('form-step-2').classList.remove('active');
                    } else if (currentStep === 1) {
                        document.getElementById('form-step-1').classList.remove('active');
                    }

                    // Update progress line position if needed
                    updateProgressLine();
                }
            });

            function updateProgressLine() {
                const progressLine = document.querySelector('.progress-line');
                const activeStep = document.querySelector('.step.active');

                if (activeStep) {
                    const activeStepIndex = Array.from(steps).indexOf(activeStep);
                    const progress = (activeStepIndex / (steps.length - 1)) * 100;
                    progressLine.style.width = `${progress}%`;
                }
            }
        });


        document.addEventListener("DOMContentLoaded", function() {
            var industrySelect = document.getElementById("industry");
            var qualificationSelect = document.getElementById("qualification");

            function qualificationSelectChange() {
                var industry = industrySelect.value;
                switch (industry) {
                    // Add your case statements and qualification options here
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
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>
                    <option value="Certificate I in Construction - CPC10111">Certificate I in Construction - CPC10111</option>  
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
                    <option value="Certificate IV in Civil Construction – RII40720">Certificate IV in Civil Construction – RII40720</option>
                `;
                        break;
                    case "Community Services":
                        qualificationSelect.innerHTML = `
                    <option value="">Select Qualification</option>
                    <option value="Not sure yet?">Not sure yet?</option>
                    <option value="Advanced Diploma of Community Sector Management - CHC62015">Advanced Diploma of Community Sector Management - CHC62015</option>
                    <option value="Certificate III in Early Childhood Education and Care – CHC30121">Certificate III in Early Childhood Education and Care – CHC30121</option>
                    <option value="Certificate III in Individual Support - CHC33021">Certificate III in Individual Support - CHC33021</option>
                    <option value="Certificate IV in Ageing Support – CHC43015">Certificate IV in Ageing Support – CHC43015</option>
                    <option value="Certificate IV in Career Development – CHC41215">Certificate IV in Career Development – CHC41215</option>
                    <option value="Diploma of Community Services – CHC52021">Diploma of Community Services – CHC52021</option>
                    <option value="Diploma of Early Childhood Education and Care – CHC50121">Diploma of Early Childhood Education and Care – CHC50121</option>
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
                        qualificationSelect.innerHTML = `<option>Select Industry First</option>`;
                        break;
                }
            }

            industrySelect.addEventListener("change", function() {
                qualificationSelectChange();
            });

            qualificationSelect.addEventListener("change", function() {
                // Add your code to handle qualification selection change here
            });

            qualificationSelectChange();
        });


        // Ambil elemen form
        var form = document.getElementById('step5-form');

        // Tambahkan event listener untuk menangani pengiriman formulir
        form.addEventListener('submit', function(event) {
            // Hentikan pengiriman formulir
            event.preventDefault();

            // Kirim formulir menggunakan AJAX
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'trade_licensing-form.php', true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Tampilkan notifikasi
                    var notification = document.createElement('div');
                    notification.textContent = 'Submission successful!';
                    notification.classList.add('notification');
                    document.body.appendChild(notification);

                    // Redirect ke halaman trade_licensing.php setelah 3 detik
                    setTimeout(function() {
                        window.location.href = 'trade_licensing.php';
                    }, 3000);
                } else {
                    // Jika terjadi kesalahan, tampilkan pesan kesalahan
                    console.error(xhr.statusText);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed');
            };
            xhr.send(formData);
        });
    </script>
</body>

</html>