<?php
require_once('../controllers/database.php');

// Menggunakan objek database yang sudah Anda buat
$database = new Database();
$conn = $database->connection;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data and ensure they are set
    $country = $_POST['country'] ?? '';
    $nationality = $_POST['nationalitycountry'] ?? '';
    $visaCountry = $_POST['visaCountry'] ?? '';
    $visaType = $_POST['visaType'] ?? '';
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $fullname = $firstName . ' ' . $lastName;
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Handle file uploads
    $student_doc_path = null;
    $resume_path = null;
    if (isset($_FILES['student-doc']) && $_FILES['student-doc']['error'] == UPLOAD_ERR_OK) {
        $student_doc_path = '../uploads/' . basename($_FILES['student-doc']['name']);
        move_uploaded_file($_FILES['student-doc']['tmp_name'], $student_doc_path);
    }
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume_path = '../uploads/' . basename($_FILES['resume']['name']);
        move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path);
    }

    // Check for duplicate entry
    $check_sql = "SELECT * FROM form_training_visa WHERE email = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        $notification_message = "Duplicate entry detected.";
    } else {
        // Insert data into database
        $sql = "INSERT INTO form_training_visa (country, nationality, visaCountry, visaType, fullname, email, phone, message, student_doc_path, resume_path, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $country, $nationality, $visaCountry, $visaType, $fullname, $email, $phone, $message, $student_doc_path, $resume_path);

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

    // Redirect back to training_visa.php after a delay
    header("Refresh: 3; URL=training_visa.php"); // Redirect after 3 seconds
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
            <h2 style="font-size:34px;"><b class="bolder-trusted" style="color: #4caf50;">"</b>
                <b class="gold" style=" color:#D1A730; font-family: 'Bell MT'; font-weight:bolder;">Australia's <b class="bolder-trusted" style="color: #4caf50;">Trusted</b> Education Consultants</b><b class="bolder-trusted" style="color: #4caf50;">"</b></br>
            </h2>
            <!-- <h2>Use your work experience to achieve an overseas jobs opportunities</h2> -->
            <h3>Our agents can help you get your training visa and the opportunity you dream of overseas</h3>
        </div>
        <div class="progress-bar">
            <div class="step active" id="step-1">1</div>
            <div class="step" id="step-2">2</div>
            <div class="step" id="step-3">3</div>
            <div class="step" id="step-4">4</div>
        </div>
        <div class="progress-line"></div>

        <form id="main-form" method="POST" action="training_visa-form.php" enctype="multipart/form-data">
            <div class="form-step active" id="form-step-1">
                <div class="form-content">
                    <h3>Which country is your destination for training?</h3>
                    <select id="countrySelect" name="country">
                        <option value="">Select your Country of Destination</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Albania">Albania</option>
                        <option value="Germany">Germany</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Virgin Islands">British Virgin Islands</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Cocos Islands">Cocos Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Kyrgyz Republic">Kyrgyz Republic</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican">Vatican</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <select id="nationalitycountrySelect" name="nationalitycountry">
                        <option value="">Select your Nationality</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Albania">Albania</option>
                        <option value="Germany">Germany</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Virgin Islands">British Virgin Islands</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Cocos Islands">Cocos Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Kyrgyz Republic">Kyrgyz Republic</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican">Vatican</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    <div class="warning" id="warningMessage1">Please select a country.</div>
                </div>
            </div>

            <div class="form-step" id="form-step-2">
                <div class="form-content">
                    <h3>Select your Visa Country:</h3>
                    <select id="visaCountrySelect" name="visaCountry">
                        <option value="">Select your Visa Country</option>
                        <option value="US">US Visa ~12160 INR</option>
                        <option value="Canada">Canada Visa</option>
                        <option value="UK">UK Visa</option>
                        <option value="Australia">Australia Visa</option>
                        <option value="Schengen">Schengen Visa</option>
                        <option value="Japan">Japan Visa</option>
                        <option value="Others">Others</option>
                    </select>

                    <h3>Select Visa Type:</h3>
                    <select id="visaTypeSelect" name="visaType">
                        <option value="">Select Visa Type</option>
                        <option value="Tourist">Tourist Visa</option>
                        <option value="Business">Business Visa</option>
                        <option value="Student">Student Visa</option>
                        <option value="Work">Work Visa</option>
                        <option value="Transit">Transit Visa</option>
                        <option value="Diplomatic">Diplomatic Visa</option>
                        <option value="Others">Others</option>
                    </select>
                    <div class="warning" id="warningMessage2">Please select an Visa Country and Type</div>
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
                            <!-- <input type="text" id="id-number-input" name="id-number" placeholder="ID Number" required> -->
                            <!-- <label for="email-input">Your Email:</label> -->
                            <input type="text" id="email-input" name="email" placeholder="Your email (This email will be used to process your enrollment visa application with the relevant department!)" required>
                            <!-- <label for="phone-input">Your Phone:</label> -->
                            <div class="phone-input-container">
                                <select id="country-code" name="country-code" required>
                                    <option value="93">Afganistan +93</option>
                                    <option value="27">Afrika Selatan +27</option>
                                    <option value="355">Albania +355</option>
                                    <option value="49">Jerman +49</option>
                                    <option value="376">Andorra +376</option>
                                    <option value="244">Angola +244</option>
                                    <option value="1-264">Anguilla +1-264</option>
                                    <option value="672">Antartika +672</option>
                                    <option value="1-268">Antigua dan Barbuda +1-268</option>
                                    <option value="599">Antillen Belanda +599</option>
                                    <option value="966">Arab Saudi +966</option>
                                    <option value="213">Aljazair +213</option>
                                    <option value="54">Argentina +54</option>
                                    <option value="374">Armenia +374</option>
                                    <option value="297">Aruba +297</option>
                                    <option value="61">Australia +61</option>
                                    <option value="43">Austria +43</option>
                                    <option value="994">Azerbaijan +994</option>
                                    <option value="1-242">Bahama +1-242</option>
                                    <option value="973">Bahrain +973</option>
                                    <option value="880">Bangladesh +880</option>
                                    <option value="1-246">Barbados +1-246</option>
                                    <option value="375">Belarus +375</option>
                                    <option value="32">Belgia +32</option>
                                    <option value="501">Belize +501</option>
                                    <option value="229">Benin +229</option>
                                    <option value="975">Bhutan +975</option>
                                    <option value="591">Bolivia +591</option>
                                    <option value="387">Bosnia dan Herzegovina +387</option>
                                    <option value="267">Botswana +267</option>
                                    <option value="55">Brasil +55</option>
                                    <option value="1-284">British Virgin Islands +1-284</option>
                                    <option value="673">Brunei Darussalam +673</option>
                                    <option value="359">Bulgaria +359</option>
                                    <option value="226">Burkina Faso +226</option>
                                    <option value="257">Burundi +257</option>
                                    <option value="235">Chad +235</option>
                                    <option value="56">Chile +56</option>
                                    <option value="86">China +86</option>
                                    <option value="357">Siprus +357</option>
                                    <option value="61">Cocos (Keeling) Islands +61</option>
                                    <option value="57">Kolombia +57</option>
                                    <option value="269">Komoro +269</option>
                                    <option value="242">Kongo +242</option>
                                    <option value="682">Cook Islands +682</option>
                                    <option value="506">Kosta Rika +506</option>
                                    <option value="385">Kroasia +385</option>
                                    <option value="53">Kuba +53</option>
                                    <option value="298">Faroe Islands +298</option>
                                    <option value="679">Fiji +679</option>
                                    <option value="63">Filipina +63</option>
                                    <option value="358">Finlandia +358</option>
                                    <option value="33">Prancis +33</option>
                                    <option value="241">Gabon +241</option>
                                    <option value="220">Gambia +220</option>
                                    <option value="995">Georgia +995</option>
                                    <option value="233">Ghana +233</option>
                                    <option value="350">Gibraltar +350</option>
                                    <option value="30">Yunani +30</option>
                                    <option value="299">Greenland +299</option>
                                    <option value="1-473">Grenada +1-473</option>
                                    <option value="590">Guadeloupe +590</option>
                                    <option value="1-671">Guam +1-671</option>
                                    <option value="502">Guatemala +502</option>
                                    <option value="224">Guinea +224</option>
                                    <option value="245">Guinea-Bissau +245</option>
                                    <option value="592">Guyana +592</option>
                                    <option value="509">Haiti +509</option>
                                    <option value="504">Honduras +504</option>
                                    <option value="852">Hong Kong +852</option>
                                    <option value="36">Hongaria +36</option>
                                    <option value="354">Islandia +354</option>
                                    <option value="91">India +91</option>
                                    <option value="62">Indonesia +62</option>
                                    <option value="98">Iran +98</option>
                                    <option value="964">Irak +964</option>
                                    <option value="353">Irlandia +353</option>
                                    <option value="44">Pulau Isle of Man +44</option>
                                    <option value="972">Israel +972</option>
                                    <option value="39">Italia +39</option>
                                    <option value="1-876">Jamaika +1-876</option>
                                    <option value="81">Jepang +81</option>
                                    <option value="44">Jersey +44</option>
                                    <option value="962">Yordania +962</option>
                                    <option value="7">Kazakhstan +7</option>
                                    <option value="254">Kenya +254</option>
                                    <option value="686">Kiribati +686</option>
                                    <option value="965">Kuwait +965</option>
                                    <option value="996">Kyrgyzstan +996</option>
                                    <option value="856">Laos +856</option>
                                    <option value="371">Latvia +371</option>
                                    <option value="961">Lebanon +961</option>
                                    <option value="266">Lesotho +266</option>
                                    <option value="231">Liberia +231</option>
                                    <option value="218">Libya +218</option>
                                    <option value="423">Liechtenstein +423</option>
                                    <option value="370">Lituania +370</option>
                                    <option value="352">Luksemburg +352</option>
                                    <option value="853">Makau +853</option>
                                    <option value="389">Makedonia +389</option>
                                    <option value="261">Madagaskar +261</option>
                                    <option value="265">Malawi +265</option>
                                    <option value="60">Malaysia +60</option>
                                    <option value="960">Maladewa +960</option>
                                    <option value="223">Mali +223</option>
                                    <option value="356">Malta +356</option>
                                    <option value="692">Kepulauan Marshall +692</option>
                                    <option value="596">Martinik +596</option>
                                    <option value="222">Mauritania +222</option>
                                    <option value="230">Mauritius +230</option>
                                    <option value="262">Mayotte +262</option>
                                    <option value="52">Meksiko +52</option>
                                    <option value="691">Mikronesia +691</option>
                                    <option value="373">Moldova +373</option>
                                    <option value="377">Monako +377</option>
                                    <option value="976">Mongolia +976</option>
                                    <option value="382">Montenegro +382</option>
                                    <option value="1-664">Montserrat +1-664</option>
                                    <option value="212">Maroko +212</option>
                                    <option value="258">Mozambik +258</option>
                                    <option value="95">Myanmar +95</option>
                                    <option value="264">Namibia +264</option>
                                    <option value="674">Nauru +674</option>
                                    <option value="977">Nepal +977</option>
                                    <option value="31">Belanda +31</option>
                                    <option value="687">New Caledonia +687</option>
                                    <option value="64">Selandia Baru +64</option>
                                    <option value="505">Nikaragua +505</option>
                                    <option value="227">Niger +227</option>
                                    <option value="234">Nigeria +234</option>
                                    <option value="683">Niue +683</option>
                                    <option value="672">Kepulauan Norfolk +672</option>
                                    <option value="1-670">Kepulauan Mariana Utara +1-670</option>
                                    <option value="47">Norwegia +47</option>
                                    <option value="968">Oman +968</option>
                                    <option value="92">Pakistan +92</option>
                                    <option value="680">Palau +680</option>
                                    <option value="970">Palestina +970</option>
                                    <option value="507">Panama +507</option>
                                    <option value="675">Papua Nugini +675</option>
                                    <option value="595">Paraguay +595</option>
                                    <option value="51">Peru +51</option>
                                    <option value="63">Filipina +63</option>
                                    <option value="48">Polandia +48</option>
                                    <option value="351">Portugal +351</option>
                                    <option value="1-787">Puerto Riko +1-787</option>
                                    <option value="974">Qatar +974</option>
                                    <option value="996">Republik Kirgistan +996</option>
                                    <option value="262">Reunion +262</option>
                                    <option value="40">Rumania +40</option>
                                    <option value="7">Rusia +7</option>
                                    <option value="250">Rwanda +250</option>
                                    <option value="290">Saint Helena +290</option>
                                    <option value="1-869">Saint Kitts dan Nevis +1-869</option>
                                    <option value="508">Saint Pierre dan Miquelon +508</option>
                                    <option value="1-784">Saint Vincent dan Grenadines +1-784</option>
                                    <option value="685">Samoa +685</option>
                                    <option value="378">San Marino +378</option>
                                    <option value="239">Sao Tome dan Principe +239</option>
                                    <option value="966">Arab Saudi +966</option>
                                    <option value="221">Senegal +221</option>
                                    <option value="248">Seychelles +248</option>
                                    <option value="232">Sierra Leone +232</option>
                                    <option value="65">Singapura +65</option>
                                    <option value="421">Slovakia +421</option>
                                    <option value="386">Slovenia +386</option>
                                    <option value="677">Kepulauan Solomon +677</option>
                                    <option value="252">Somalia +252</option>
                                    <option value="27">Afrika Selatan +27</option>
                                    <option value="82">Korea Selatan +82</option>
                                    <option value="211">Sudan Selatan +211</option>
                                    <option value="34">Spanyol +34</option>
                                    <option value="94">Sri Lanka +94</option>
                                    <option value="249">Sudan +249</option>
                                    <option value="597">Suriname +597</option>
                                    <option value="47">Svalbard dan Jan Mayen +47</option>
                                    <option value="268">Swaziland +268</option>
                                    <option value="46">Swedia +46</option>
                                    <option value="41">Swiss +41</option>
                                    <option value="963">Suriah +963</option>
                                    <option value="886">Taiwan +886</option>
                                    <option value="992">Tajikistan +992</option>
                                    <option value="255">Tanzania +255</option>
                                    <option value="66">Thailand +66</option>
                                    <option value="670">Timor Leste +670</option>
                                    <option value="228">Togo +228</option>
                                    <option value="690">Tokelau +690</option>
                                    <option value="676">Tonga +676</option>
                                    <option value="1-868">Trinidad dan Tobago +1-868</option>
                                    <option value="216">Tunisia +216</option>
                                    <option value="90">Turki +90</option>
                                    <option value="993">Turkmenistan +993</option>
                                    <option value="1-649">Kepulauan Turks dan Caicos +1-649</option>
                                    <option value="688">Tuvalu +688</option>
                                    <option value="256">Uganda +256</option>
                                    <option value="380">Ukraina +380</option>
                                    <option value="971">Uni Emirat Arab +971</option>
                                    <option value="44">Inggris Raya +44</option>
                                    <option value="1">Amerika Serikat +1</option>
                                    <option value="598">Uruguay +598</option>
                                    <option value="998">Uzbekistan +998</option>
                                    <option value="678">Vanuatu +678</option>
                                    <option value="379">Vatikan +379</option>
                                    <option value="58">Venezuela +58</option>
                                    <option value="84">Vietnam +84</option>
                                    <option value="681">Wallis dan Futuna +681</option>
                                    <option value="212">Sahara Barat +212</option>
                                    <option value="967">Yaman +967</option>
                                    <option value="260">Zambia +260</option>
                                    <option value="263">Zimbabwe +263</option>
                                </select>
                                <input type="text" id="phone-number" name="phone" placeholder="Phone Number" required>
                            </div>
                            <!-- <label for="message-input">Your Message:</label> -->
                            <textarea type="text" id="message-input" name="message" placeholder="Your Message" required></textarea>
                            <div>
                                <input type="checkbox" id="terms-condition" required>
                                <!-- <label for="terms-condition" class="terms-condition-class">I agree to the terms and conditions</label> -->
                                <label for="terms-condition" class="terms-condition-class">I accept and agree to <a href="termandcondition.php">The Terms and Conditions</a></label>
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
                        <label for="student-doc">Upload Proof of ID Card (optional):</label>
                        <input type="file" id="student-doc" name="student-doc">
                    </div>
                    <div class="file-upload-row">
                        <label for="resume">Upload Resume (optional):</label>
                        <input type="file" id="resume" name="resume">
                    </div>
                    <div class="warning" id="warningMessage4">Please upload the required documents.</div>
                </div>
            </div>

            <!--<div id="notification" class="notification" style="display: none;"></div>-->
            <div class="btn-group">
                <button id="prev-btn" type="button" style="display: none;">Prev</button>
                <button id="next-btn" type="button">Next</button>
                <button type="submit" id="submit" style="display: none; background: red; color: white;">Submit</button>
            </div>
        </form>
        <div id="notification" style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%); background-color: #4CAF50; color: white; padding: 10px; border-radius: 5px; z-index: 1000;"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
                const visaCountrySelect = document.getElementById('visaCountrySelect');
                const visaTypeSelect = document.getElementById('visaTypeSelect');
                const warningMessage2 = document.getElementById('warningMessage2');
                if (visaCountrySelect.value === "" || visaTypeSelect.value === "") {
                    warningMessage2.style.display = 'block';
                    return false;
                }
                warningMessage2.style.display = 'none';
                localStorage.setItem('visaCountry', visaCountrySelect.value);
                localStorage.setItem('visaType', visaTypeSelect.value);
                return true;
            }

            function validateStep4() {
                // const studentDoc = document.getElementById('student-doc');
                // const resume = document.getElementById('resume');
                // const warningMessage4 = document.getElementById('warningMessage4');
                // if (studentDoc.files.length === 0 || resume.files.length === 0) {
                //     warningMessage4.style.display = 'block';
                //     return false;
                // }
                // warningMessage4.style.display = 'none';
                return true;
            }

            nextBtn.addEventListener('click', function() {
                if (currentStep === 0 && !validateStep1()) return;
                if (currentStep === 1 && !validateStep2()) return;
                if (currentStep < steps.length - 1) {
                    showStep(currentStep + 1);
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
                    formData.append('visaCountry', localStorage.getItem('visaCountry'));
                    formData.append('visaType', localStorage.getItem('visaType'));
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
                    xhr.open('POST', 'training_visa-form.php', true);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            showNotification('Submission successful!');
                            setTimeout(function() {
                                window.location.href = 'training_visa.php';
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

        });

        document.getElementById('main-form').addEventListener('submit', function() {
            document.getElementById('submit').disabled = true;
        });
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