<?php
require_once('../controllers/database.php');

// Debugging: Print POST and FILES data
file_put_contents('php://stderr', print_r($_POST, TRUE));
file_put_contents('php://stderr', print_r($_FILES, TRUE));

// Menggunakan objek database yang sudah Anda buat
$database = new Database();
$conn = $database->connection;

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = filter_input(INPUT_POST, 'country');
    $nationality = filter_input(INPUT_POST, 'nationality');
    $university = filter_input(INPUT_POST, 'university');
    $qualification = filter_input(INPUT_POST, 'qualification');
    $course = filter_input(INPUT_POST, 'course');
    $firstName = filter_input(INPUT_POST, 'first-name');
    $surname = filter_input(INPUT_POST, 'sure-name');
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone');
    $message = filter_input(INPUT_POST, 'message');

    // Handling file uploads
    $uploadsDir = '../uploads/';
    $uploadedFiles = ['id-card', 'resume', 'id-card-other'];
    $uploadedPaths = [];

    foreach ($uploadedFiles as $fileInput) {
        if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] === UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES[$fileInput]['tmp_name'];
            $fileName = basename($_FILES[$fileInput]['name']);
            $destPath = $uploadsDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                $uploadedPaths[$fileInput] = $destPath;
            } else {
                file_put_contents('php://stderr', "Failed to move uploaded file for $fileInput\n");
            }
        } else {
            file_put_contents('php://stderr', "File upload error for $fileInput: " . $_FILES[$fileInput]['error'] . "\n");
        }
    }

    // Insert data into the database
    try {
        $stmt = $conn->prepare('INSERT INTO form_courses (country, nationality, university, qualification, course, first_name, sure_name, email, phone, message, id_card_path, resume_path, id_card_other_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([
            $country,
            $nationality,
            $university,
            $qualification,
            $course,
            $firstName,
            $surname,
            $email,
            $phone,
            $message,
            $uploadedPaths['id-card'] ?? null,
            $uploadedPaths['resume'] ?? null,
            $uploadedPaths['id-card-other'] ?? null
        ]);

        echo "Form submitted successfully.";
    } catch (PDOException $e) {
        file_put_contents('php://stderr', "Database insertion error: " . $e->getMessage() . "\n");
        echo "Error: " . $e->getMessage();
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Australia's Globaleducation Consultancy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/icon" href="../images/AGEC-Logo_Full-Colour.png" />
    <link rel="stylesheet" href="../css/rpl_certification-form.css">

</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
            <h2><b class="bolder-trusted">"</b><b class="gold" style="color:#D1A730; font-family: 'Bell MT'; font-weight:bolder; font-size: 40px;">Australia's <b class="bolder-trusted">Trusted</b> Education Consultancy</b><b class="bolder-trusted">"</b></h2>
            <h2>Explore Our Comprehensive Courses Offerings</h2>
            <!-- <h3>Advance your career with our range of specialized courses. Enroll now and unlock new opportunities.</h3> -->
        </div>
        <div class="progress-container">
            <div class="progress-bar">
                <div class="step active" id="step-1">1</div>
                <div class="step" id="step-2">2</div>
                <div class="step" id="step-3">3</div>
                <div class="step" id="step-4">4</div>
            </div>
        </div>
        <div class="progress-line"></div>
        <div class="form-step active" id="form-step-1">
            <?php
            $industry = isset($_GET['industry']) ? htmlspecialchars($_GET['industry']) : '';
            $qualification = isset($_GET['qualification']) ? htmlspecialchars($_GET['qualification']) : '';
            ?>
            <div class="form-content">
                <!-- <label for="industry">Select Your Dreams Destination</label> -->
                <select id="countrySelect">
                    <option value="">Select Country of Destination</option>
                    <option value="Australia">Australia</option>
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
                <select id="nationalitySelect">
                    <option value="">Select Your Nationality</option>
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

            </div>
            <div class="warning" id="warningMessage1">Please select an industry and qualification</div>
        </div>
        <div class="form-step" id="form-step-2">
            <div class="form-content">
                <!-- <label for="universitySelect">University</label> -->
                <select id="universitySelect" required>
                    <option value="">Select University</option>
                    <option value="University of Melbourne">University of Melbourne</option>
                    <option value="University of Sydney">University of Sydney</option>
                    <option value="Australian National University">Australian National University</option>
                    <option value="University of Queensland">University of Queensland</option>
                    <option value="Monash University">Monash University</option>
                    <option value="University of New South Wales">University of New South Wales</option>
                    <option value="University of Western Australia">University of Western Australia</option>
                    <option value="University of Adelaide">University of Adelaide</option>
                    <option value="University of Technology Sydney">University of Technology Sydney</option>
                    <option value="Macquarie University">Macquarie University</option>
                    <option value="Queensland University of Technology">Queensland University of Technology</option>
                    <option value="University of Wollongong">University of Wollongong</option>
                    <option value="Curtin University">Curtin University</option>
                    <option value="Griffith University">Griffith University</option>
                    <option value="Deakin University">Deakin University</option>
                    <option value="University of Newcastle">University of Newcastle</option>
                    <option value="James Cook University">James Cook University</option>
                    <option value="La Trobe University">La Trobe University</option>
                    <option value="University of South Australia">University of South Australia</option>
                    <option value="Swinburne University of Technology">Swinburne University of Technology</option>
                    <option value="Murdoch University">Murdoch University</option>
                    <option value="University of Tasmania">University of Tasmania</option>
                    <option value="Bond University">Bond University</option>
                    <option value="University of New England">University of New England</option>
                    <option value="Charles Darwin University">Charles Darwin University</option>
                    <option value="Victoria University">Victoria University</option>
                    <option value="Southern Cross University">Southern Cross University</option>
                    <option value="Central Queensland University">Central Queensland University</option>
                    <option value="University of Canberra">University of Canberra</option>
                    <option value="Edith Cowan University">Edith Cowan University</option>
                    <option value="Federation University Australia">Federation University Australia</option>
                    <option value="Charles Sturt University">Charles Sturt University</option>
                    <option value="University of Southern Queensland">University of Southern Queensland</option>
                </select>

                <!-- <label for="industrySelect">Industry</label> -->
                <select id="qualificationSelect" required>
                    <option value="">Select Qualification</option>
                    <option value="MBA">MBA</option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Courses">Courses</option>
                    <option value="TAFE">TAFE</option>
                    <option value="Trade Courses">Trade Courses</option>
                    <option value="Other Qualification">Other Qualification</option>
                </select>

                <!-- <label for="courseSelect">Course</label> -->
                <select id="courseSelect" required>
                    <option value="">Select Courses</option>
                </select>
            </div>
        </div>
        <div class="form-step" id="form-step-3">
            <div class="container-form">
                <div class="form-container">
                    <div class="form-column">
                        <form id="step3-form" method="POST" action="courses-form.php">
                            <input type="hidden" name="industry" id="hidden-industry">
                            <input type="hidden" name="qualification" id="hidden-qualification">
                            <input type="hidden" name="experience_years" id="hidden-experience-years">
                            <input type="hidden" name="work_location" id="hidden-work-location">
                            <input type="hidden" name="state" id="hidden-state">
                            <h1 style="color:#363b6e;font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 700; text-align:center; margin-bottom: 30px;">Please complete the personal details form!</h1>
                            <div class="student-row">
                                <input type="text" id="first-name-input" name="first-name" placeholder="First Name" required>
                                <input type="text" id="sure-name-input" name="sure-name" placeholder="Surname" required>
                            </div>
                            <input type="text" id="email-input" name="email" placeholder="Your email (This email will be used to process your enrollment!)" required>
                            <div class="student-row">
                                <select id="country-code" name="country-code">
                                    <option value="">Country Code</option>
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
                                <input type="text" id="phone-input" name="phone" placeholder="Your Phone" required>
                            </div>
                            <textarea id="message-input" name="message" placeholder="Your Message" required></textarea>
                            <input type="checkbox" id="terms-condition" required>
                            <label for="terms-condition" class="terms-condition-class">I accept and agree to <a href="termandcondition.php">the Terms and Conditions</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-4" method="POST" action="courses-form.php" enctype="multipart/form-data">
            <div class="form-content">
                <h1 class="heading-upload">Upload 100 points ID</h1>
                <div class="file-upload-row">
                    <label for="id-card">Upload ID Student Card (optional) :</label>
                    <input type="file" id="id-card" name="id-card">
                </div>
                <div class="file-upload-row">
                    <label for="resume">Upload Resume (optional) :</label>
                    <input type="file" id="resume" name="resume">
                </div>
                <div class="file-upload-row">
                    <label for="id-card-other">Other photo ID's (optional) :</label>
                    <input type="file" id="id-card-other" name="id-card-other">
                </div>
                <!-- <p class="description">Upload 100 points ID: (Passport, Student Card, Drivers License, Utility Bill, Phone Bill, Bank Card, Other photo ID's)</p> -->
                <div class="warning" id="warningMessage6">Please upload required documents, if have.</div>
            </div>
            <audio id="notification-sound" src="../css/sounds/chatboat.mp3"></audio>
            <!-- Notification Banner -->
            <div id="notification" class="notification" onclick="showChatbot()">
                Welcome to the Last Step, How can I assist you?
            </div>

            <!-- Chatbot Pop-up -->
            <div id="chatbot-popup" class="chatbot-popup" style="display: none;">
                <div class="chatbot-header">
                    <div class="agent-info">
                        <img src="../images/student.jpg" alt="Agent Photo" class="agent-photo">
                        <div class="agent-details">
                            <h4 class="agent-details-name">Luca</h4>
                            <p class="agent-details-desc">Chat Agent</p>
                        </div>
                    </div>
                    <button id="close-chatbot" onclick="closeChatbot()">X</button>
                </div>
                <div class="chatbot-content">
                    <div class="message agent-message">
                        <p class="agent-details-welc">Welcome to Skills Certified Australia! Let me know if I can help with anything today.</p>
                    </div>
                    <div class="message user-message">
                        <p class="agent-details-user">How can I get certified?</p>
                    </div>
                </div>
                <div class="chatbot-input">
                    <input type="text" id="user-input" placeholder="Write a message...">
                    <button id="send-btn" onclick="sendMessage()">Send</button>
                </div>
            </div>
        </div>
        <div class="btn-group">
            <button id="prev-btn" style="display: none;">Prev</button>
            <button id="next-btn">Next</button>
            <button type="submit" id="submit" style="display:none; background:#92C026; color:white;">Submit</button>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll('.form-step');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit');
            const progressBar = document.querySelector('.progress-line');

            let currentStep = 0;

            const universityOptions = {
                "Australia": [
                    "University of Melbourne",
                    "University of Sydney",
                    "Australian National University",
                    "University of Queensland",
                    "Monash University",
                    "University of New South Wales",
                    "University of Western Australia",
                    "University of Adelaide",
                    "University of Technology Sydney",
                    "Macquarie University",
                    "Queensland University of Technology",
                    "University of Wollongong",
                    "Curtin University",
                    "Griffith University",
                    "Deakin University",
                    "University of Newcastle",
                    "James Cook University",
                    "La Trobe University",
                    "University of South Australia",
                    "Swinburne University of Technology",
                    "Murdoch University",
                    "University of Tasmania",
                    "Bond University",
                    "University of New England",
                    "Charles Darwin University",
                    "Victoria University",
                    "Southern Cross University",
                    "Central Queensland University",
                    "University of Canberra",
                    "Edith Cowan University",
                    "Federation University Australia",
                    "Charles Sturt University",
                    "University of Southern Queensland"
                ],
                "Germany": [
                    "Technical University of Munich",
                    "Ludwig Maximilian University of Munich",
                    "Heidelberg University",
                    "Humboldt University of Berlin",
                    "University of Freiburg",
                    "University of Tübingen",
                    "University of Göttingen",
                    "University of Bonn",
                    "University of Mannheim",
                    "RWTH Aachen University",
                    "University of Stuttgart",
                    "Karlsruhe Institute of Technology",
                    "University of Cologne",
                    "University of Hamburg",
                    "University of Leipzig",
                    "University of Würzburg",
                    "University of Bremen",
                    "University of Kiel",
                    "University of Erlangen-Nuremberg",
                    "Darmstadt University of Technology"
                ],
                "Afghanistan": [
                    "Kabul University",
                    "American University of Afghanistan"
                ],
                "South Africa": [
                    "University of Cape Town",
                    "University of the Witwatersrand",
                    "Stellenbosch University"
                ],
                "Albania": [
                    "University of Tirana",
                    "Polytechnic University of Tirana"
                ],
                "Germany": [
                    "Technical University of Munich",
                    "Ludwig Maximilian University of Munich",
                    "Heidelberg University"
                ],
                "Andorra": [
                    "Universitat d'Andorra"
                ],
                "Angola": [
                    "Agostinho Neto University",
                    "Catholic University of Angola"
                ],
                "Anguilla": [
                    "Saint James School of Medicine"
                ],
                "Antarctica": [],
                "Antigua and Barbuda": [
                    "University of Health Sciences Antigua",
                    "American University of Antigua"
                ],
                "Netherlands Antilles": [],
                "Saudi Arabia": [
                    "King Saud University",
                    "King Abdullah University of Science and Technology"
                ],
                "Algeria": [
                    "University of Algiers",
                    "University of Science and Technology Houari Boumediene"
                ],
                "Argentina": [
                    "University of Buenos Aires",
                    "National University of La Plata"
                ],
                "Armenia": [
                    "Yerevan State University",
                    "American University of Armenia"
                ],
                "Aruba": [
                    "University of Aruba"
                ],
                "Austria": [
                    "University of Vienna",
                    "Vienna University of Technology"
                ],
                "Azerbaijan": [
                    "Baku State University",
                    "Azerbaijan State Oil and Industry University"
                ],
                "Bahamas": [
                    "University of the Bahamas"
                ],
                "Bahrain": [
                    "University of Bahrain",
                    "Arabian Gulf University"
                ],
                "Bangladesh": [
                    "University of Dhaka",
                    "Bangladesh University of Engineering and Technology"
                ],
                "Barbados": [
                    "University of the West Indies at Cave Hill"
                ],
                "Belarus": [
                    "Belarusian State University",
                    "Belarusian National Technical University"
                ],
                "Belgium": [
                    "KU Leuven",
                    "Ghent University",
                    "Université catholique de Louvain"
                ],
                "Belize": [
                    "University of Belize",
                    "Galen University"
                ],
                "Benin": [
                    "University of Abomey-Calavi"
                ],
                "Bhutan": [
                    "Royal University of Bhutan"
                ],
                "Bolivia": [
                    "Higher University of San Andrés",
                    "University of San Simón"
                ],
                "Bosnia and Herzegovina": [
                    "University of Sarajevo",
                    "University of Banja Luka"
                ],
                "Botswana": [
                    "University of Botswana",
                    "Botswana International University of Science and Technology"
                ],
                "Brazil": [
                    "University of São Paulo",
                    "State University of Campinas",
                    "Federal University of Rio de Janeiro"
                ],
                "British Virgin Islands": [
                    "H. Lavity Stoutt Community College"
                ],
                "Brunei": [
                    "University of Brunei Darussalam"
                ],
                "Bulgaria": [
                    "Sofia University",
                    "Technical University of Sofia"
                ],
                "Burkina Faso": [
                    "University of Ouagadougou"
                ],
                "Burundi": [
                    "University of Burundi"
                ],
                "Chad": [
                    "University of N'Djamena"
                ],
                "Chile": [
                    "University of Chile",
                    "Pontifical Catholic University of Chile"
                ],
                "China": [
                    "Tsinghua University",
                    "Peking University",
                    "Fudan University"
                ],
                "Cyprus": [
                    "University of Cyprus",
                    "Cyprus University of Technology"
                ],
                "Cocos Islands": [],
                "Colombia": [
                    "National University of Colombia",
                    "University of the Andes"
                ],
                "Comoros": [
                    "University of the Comoros"
                ],
                "Congo": [
                    "Marien Ngouabi University"
                ],
                "Cook Islands": [],
                "Costa Rica": [
                    "University of Costa Rica",
                    "National University of Costa Rica"
                ],
                "Croatia": [
                    "University of Zagreb",
                    "University of Split"
                ],
                "Cuba": [
                    "University of Havana",
                    "CUJAE (Technical University of Havana)"
                ],
                "Faroe Islands": [
                    "University of the Faroe Islands"
                ],
                "Fiji": [
                    "University of the South Pacific",
                    "Fiji National University"
                ],
                "Philippines": [
                    "University of the Philippines",
                    "Ateneo de Manila University"
                ],
                "Finland": [
                    "University of Helsinki",
                    "Aalto University"
                ],
                "France": [
                    "Sorbonne University",
                    "University of Paris",
                    "École Polytechnique"
                ],
                "Gabon": [
                    "Omar Bongo University"
                ],
                "Gambia": [
                    "University of the Gambia"
                ],
                "Georgia": [
                    "Tbilisi State University",
                    "Ilia State University"
                ],
                "Ghana": [
                    "University of Ghana",
                    "Kwame Nkrumah University of Science and Technology"
                ],
                "Gibraltar": [
                    "University of Gibraltar"
                ],
                "Greece": [
                    "National and Kapodistrian University of Athens",
                    "Aristotle University of Thessaloniki"
                ],
                "Greenland": [
                    "University of Greenland"
                ],
                "Grenada": [
                    "St. George's University"
                ],
                "Guadeloupe": [],
                "Guam": [
                    "University of Guam"
                ],
                "Guatemala": [
                    "University of San Carlos of Guatemala"
                ],
                "Guinea": [
                    "University Gamal Abdel Nasser of Conakry"
                ],
                "Guinea-Bissau": [
                    "Amílcar Cabral University"
                ],
                "Guyana": [
                    "University of Guyana"
                ],
                "Haiti": [
                    "University of Haiti"
                ],
                "Honduras": [
                    "National Autonomous University of Honduras"
                ],
                "Hong Kong": [
                    "University of Hong Kong",
                    "Hong Kong University of Science and Technology"
                ],
                "Hungary": [
                    "Eötvös Loránd University",
                    "Budapest University of Technology and Economics"
                ],
                "Iceland": [
                    "University of Iceland",
                    "Reykjavik University"
                ],
                "India": [
                    "Indian Institute of Technology (IIT) Bombay",
                    "Indian Institute of Science",
                    "University of Delhi"
                ],
                "Indonesia": [
                    "University of Indonesia",
                    "Gadjah Mada University"
                ],
                "Iran": [
                    "University of Tehran",
                    "Sharif University of Technology"
                ],
                "Iraq": [
                    "University of Baghdad",
                    "Al-Mustansiriya University"
                ],
                "Ireland": [
                    "Trinity College Dublin",
                    "University College Dublin"
                ],
                "Isle of Man": [],
                "Israel": [
                    "Hebrew University of Jerusalem",
                    "Technion - Israel Institute of Technology"
                ],
                "Italy": [
                    "University of Bologna",
                    "Sapienza University of Rome",
                    "Politecnico di Milano"
                ],
                "Jamaica": [
                    "University of the West Indies at Mona",
                    "University of Technology, Jamaica"
                ],
                "Japan": [
                    "University of Tokyo",
                    "Kyoto University",
                    "Osaka University"
                ],
                "Jersey": [],
                "Jordan": [
                    "University of Jordan",
                    "Jordan University of Science and Technology"
                ],
                "Kazakhstan": [
                    "Al-Farabi Kazakh National University",
                    "Nazarbayev University"
                ],
                "Kenya": [
                    "University of Nairobi",
                    "Kenyatta University"
                ],
                "Kiribati": [],
                "Kuwait": [
                    "Kuwait University"
                ],
                "Kyrgyzstan": [
                    "Kyrgyz National University",
                    "American University of Central Asia"
                ],
                "Laos": [
                    "National University of Laos"
                ],
                "Latvia": [
                    "University of Latvia",
                    "Riga Technical University"
                ],
                "Lebanon": [
                    "American University of Beirut",
                    "Lebanese University"
                ],
                "Lesotho": [
                    "National University of Lesotho"
                ],
                "Liberia": [
                    "University of Liberia"
                ],
                "Libya": [
                    "University of Tripoli"
                ],
                "Liechtenstein": [
                    "University of Liechtenstein"
                ],
                "Lithuania": [
                    "Vilnius University",
                    "Kaunas University of Technology"
                ],
                "Luxembourg": [
                    "University of Luxembourg"
                ],
                "Macau": [
                    "University of Macau"
                ],
                "Macedonia": [
                    "Ss. Cyril and Methodius University of Skopje"
                ],
                "Madagascar": [
                    "University of Antananarivo"
                ],
                "Malawi": [
                    "University of Malawi"
                ],
                "Malaysia": [
                    "University of Malaya",
                    "Universiti Kebangsaan Malaysia"
                ],
                "Maldives": [
                    "Maldives National University"
                ],
                "Mali": [
                    "University of Bamako"
                ],
                "Malta": [
                    "University of Malta"
                ],
                "Marshall Islands": [
                    "College of the Marshall Islands"
                ],
                "Martinique": [],
                "Mauritania": [
                    "University of Nouakchott"
                ],
                "Mauritius": [
                    "University of Mauritius"
                ],
                "Mayotte": [],
                "Mexico": [
                    "National Autonomous University of Mexico",
                    "Monterrey Institute of Technology and Higher Education"
                ],
                "Micronesia": [
                    "College of Micronesia-FSM"
                ],
                "Moldova": [
                    "Moldova State University"
                ],
                "Monaco": [],
                "Mongolia": [
                    "National University of Mongolia"
                ],
                "Montenegro": [
                    "University of Montenegro"
                ],
                "Montserrat": [],
                "Morocco": [
                    "Mohammed V University",
                    "Cadi Ayyad University"
                ],
                "Mozambique": [
                    "Eduardo Mondlane University"
                ],
                "Myanmar": [
                    "University of Yangon"
                ],
                "Namibia": [
                    "University of Namibia"
                ],
                "Nauru": [],
                "Nepal": [
                    "Tribhuvan University"
                ],
                "Netherlands": [
                    "University of Amsterdam",
                    "Delft University of Technology",
                    "Utrecht University"
                ],
                "New Caledonia": [],
                "New Zealand": [
                    "University of Auckland",
                    "University of Otago",
                    "Victoria University of Wellington"
                ],
                "Nicaragua": [
                    "National Autonomous University of Nicaragua"
                ],
                "Niger": [
                    "Abdou Moumouni University"
                ],
                "Nigeria": [
                    "University of Ibadan",
                    "University of Lagos",
                    "Obafemi Awolowo University"
                ],
                "Niue": [],
                "Norfolk Island": [],
                "Northern Mariana Islands": [],
                "Norway": [
                    "University of Oslo",
                    "Norwegian University of Science and Technology"
                ],
                "Oman": [
                    "Sultan Qaboos University"
                ],
                "Pakistan": [
                    "Quaid-i-Azam University",
                    "Lahore University of Management Sciences",
                    "University of the Punjab"
                ],
                "Palau": [],
                "Palestine": [
                    "Birzeit University",
                    "An-Najah National University"
                ],
                "Panama": [
                    "University of Panama"
                ],
                "Papua New Guinea": [
                    "University of Papua New Guinea"
                ],
                "Paraguay": [
                    "National University of Asunción"
                ],
                "Peru": [
                    "National University of San Marcos",
                    "Pontifical Catholic University of Peru"
                ],
                "Philippines": [
                    "University of the Philippines",
                    "Ateneo de Manila University",
                    "De La Salle University"
                ],
                "Poland": [
                    "University of Warsaw",
                    "Jagiellonian University"
                ],
                "Portugal": [
                    "University of Lisbon",
                    "University of Porto"
                ],
                "Puerto Rico": [
                    "University of Puerto Rico"
                ],
                "Qatar": [
                    "Qatar University"
                ],
                "Kyrgyz Republic": [],
                "Reunion": [],
                "Romania": [
                    "University of Bucharest",
                    "Babes-Bolyai University"
                ],
                "Russia": [
                    "Lomonosov Moscow State University",
                    "Saint Petersburg State University",
                    "Novosibirsk State University"
                ],
                "Rwanda": [
                    "University of Rwanda"
                ],
                "Saint Helena": [],
                "Saint Kitts and Nevis": [],
                "Saint Pierre and Miquelon": [],
                "Saint Vincent and the Grenadines": [],
                "Samoa": [
                    "National University of Samoa"
                ],
                "San Marino": [],
                "Sao Tome and Principe": [],
                "Saudi Arabia": [
                    "King Saud University",
                    "King Abdullah University of Science and Technology"
                ],
                "Senegal": [
                    "Cheikh Anta Diop University"
                ],
                "Seychelles": [
                    "University of Seychelles"
                ],
                "Sierra Leone": [
                    "University of Sierra Leone"
                ],
                "Singapore": [
                    "National University of Singapore",
                    "Nanyang Technological University"
                ],
                "Slovakia": [
                    "Comenius University",
                    "Slovak University of Technology in Bratislava"
                ],
                "Slovenia": [
                    "University of Ljubljana",
                    "University of Maribor"
                ],
                "Solomon Islands": [
                    "Solomon Islands National University"
                ],
                "Somalia": [
                    "Mogadishu University"
                ],
                "South Africa": [
                    "University of Cape Town",
                    "University of the Witwatersrand",
                    "Stellenbosch University"
                ],
                "South Korea": [
                    "Seoul National University",
                    "Korea Advanced Institute of Science and Technology",
                    "Yonsei University"
                ],
                "South Sudan": [
                    "University of Juba"
                ],
                "Spain": [
                    "University of Barcelona",
                    "Autonomous University of Madrid",
                    "Complutense University of Madrid"
                ],
                "Sri Lanka": [
                    "University of Colombo",
                    "University of Peradeniya"
                ],
                "Sudan": [
                    "University of Khartoum"
                ],
                "Suriname": [
                    "Anton de Kom University of Suriname"
                ],
                "Svalbard and Jan Mayen": [],
                "Swaziland": [
                    "University of Eswatini"
                ],
                "Sweden": [
                    "Lund University",
                    "Uppsala University",
                    "Stockholm University"
                ],
                "Switzerland": [
                    "ETH Zurich",
                    "University of Zurich",
                    "University of Geneva"
                ],
                "Syria": [
                    "University of Damascus"
                ],
                "Taiwan": [
                    "National Taiwan University",
                    "National Cheng Kung University"
                ],
                "Tajikistan": [
                    "Tajik National University"
                ],
                "Tanzania": [
                    "University of Dar es Salaam"
                ],
                "Thailand": [
                    "Chulalongkorn University",
                    "Mahidol University"
                ],
                "East Timor": [
                    "National University of East Timor"
                ],
                "Togo": [
                    "University of Lomé"
                ],
                "Tokelau": [],
                "Tonga": [
                    "University of the South Pacific - Tonga Campus"
                ],
                "Trinidad and Tobago": [
                    "University of the West Indies at St. Augustine",
                    "University of Trinidad and Tobago"
                ],
                "Tunisia": [
                    "University of Tunis"
                ],
                "Turkey": [
                    "Middle East Technical University",
                    "Boğaziçi University",
                    "Istanbul University"
                ],
                "Turkmenistan": [
                    "Turkmen State University"
                ],
                "Turks and Caicos Islands": [],
                "Tuvalu": [],
                "Uganda": [
                    "Makerere University"
                ],
                "Ukraine": [
                    "Taras Shevchenko National University of Kyiv",
                    "National Technical University of Ukraine"
                ],
                "United Arab Emirates": [
                    "United Arab Emirates University",
                    "Khalifa University"
                ],
                "United Kingdom": [
                    "University of Oxford",
                    "University of Cambridge",
                    "Imperial College London"
                ],
                "United States": [
                    "Harvard University",
                    "Stanford University",
                    "Massachusetts Institute of Technology"
                ],
                "Uruguay": [
                    "University of the Republic"
                ],
                "Uzbekistan": [
                    "National University of Uzbekistan"
                ],
                "Vanuatu": [],
                "Vatican": [],
                "Venezuela": [
                    "Central University of Venezuela"
                ],
                "Vietnam": [
                    "Vietnam National University, Hanoi",
                    "Vietnam National University, Ho Chi Minh City"
                ],
                "Wallis and Futuna": [],
                "Western Sahara": [],
                "Yemen": [
                    "University of Sana'a"
                ],
                "Zambia": [
                    "University of Zambia"
                ],
                "Zimbabwe": [
                    "University of Zimbabwe"
                ]
            };

            const courses = {
                "MBA": [
                    "Social Services", "Psychology", "Nursing", "Dentistry", "Business", "Cyber Security", "Computer Science", "Accounting", "Architecture", "Teaching", "Automotive", "Tourism and Hospitality Management", "Physiotherapy", "MBA", "MBA Colleges", "Executive MBA Colleges", "MBA Exams", "CAT", "MAT", "Online MBA", "MBA College Predictors"
                ],
                "Courses": [
                    "Community Service", "Civil Construction", "Nursing", "Automotive", "Tourism and Hospitality Management", "Aged care and Disability Support", "Business", "Journalism", "Psychology", "Accounting", "Information Technology", "Education and Teaching", "Midwifery", "Counselling", "Engineering", "Top Engineering Colleges", "Engineering Colleges", "Engineering Exams", "JEE Main", "JEE Advanced", "Engineering College Predictors"
                ],
                "Bachelor": [
                    "Accounting (University of Melbourne, Australian National University, University of Queensland, University of Sydney, University of New South Wales, University of Adelaide, Edith Cowan University)",
                    "Computer and Information Technology (University of Melbourne, Australian National University, RMIT University, University of Queensland, University of Sydney, University of New South Wales, La Trobe University)",
                    "Nursing and Midwifery (Monash University, Griffith University, University of Adelaide, La Trobe University, University of Technology Sydney, University of Sydney)",
                    "Engineering (University of Melbourne, Monash University, University of New South Wales, University of Queensland, University of Sydney)",
                    "Education and Teaching (University of Canberra, University of Wollongong, Monash University, Deakin University, University of Queensland, University of Sydney)",
                    "Dentistry (University of Sydney, Monash University, University of Technology Sydney"
                ],
                "Medicine": [
                    "NEET UG", "NEET PG", "NEET SS", "NEET MDS", "INI CET", "FMGE", "AIAPGET", "Top Medical Colleges", "Medical Colleges", "Medical Exams"
                ],
                "Design": ["Fashion Designing", "Interior Design", "Graphic Design", "Jewellery Design", "Web Design", "Furniture Design", "Game Design", "Product Design", "Textile Design", "Visual Merchandising", "Ceramic & Glass Design", "Film & Video Design", "UI/UX", "Footwear Design", "Automotive Design", "Communication Design", "Apparel Design", "Exhibition Design", "Information Design", "Knitwear Design", "Leather Design", "Toy Design", "Lifestyle Accessory Design"],
                "TAFE": ["Accounting", "Business and Management", "Animal Care and Aquaculture", "Automotive and Engineering", "Aviation", "Building and Construction", "Creative Industries", "Digital Media and Information Technology", "Early Childhood Education and Community Services", "Health and Beauty", "Hospitality", "Cookery and Tourism", "Land and Environmental Management", "Maritime", "Nursing"],
                "Trade Courses": ["Beauty Therapy", "Massage Therapist", "Salon Management", "Hairdressing", "Painting and Decorating", "Automotive", "Finance and Mortgage Broking", "Real Estate", "Meat Processing", "Early Childcare", "Training and Assessment", "Nail Technology", "Fitness", "Commercial Cookery", "Baking", "Patisserie", "Retail Management", "Ageing Support", "Disability", "Mental Health", "Early Childhood", "Carpentry", "Bricklaying", "Concreting", "Building and Construction", "Plumbing", "Demolition", "Roof Tiling", "Landscape Construction", "Wall and Floor Tiling"],
                "Other Qualifications": ["Animation", "B.Com", "B.Sc", "BBA", "CA", "Fashion Designing", "Hotel Management", "Law", "Mass Communication & Media", "MBBS"]
            };

            document.getElementById('countrySelect').addEventListener('change', function() {
                const selectedCountry = this.value;
                const universitySelect = document.getElementById('universitySelect');
                universitySelect.innerHTML = '<option value="">Select University</option>';
                if (selectedCountry in universityOptions) {
                    universityOptions[selectedCountry].forEach(function(university) {
                        const option = document.createElement('option');
                        option.value = university;
                        option.text = university;
                        universitySelect.add(option);
                    });
                }
            });

            document.getElementById('qualificationSelect').addEventListener('change', function() {
                const selectedQualification = this.value;
                const courseSelect = document.getElementById('courseSelect');
                courseSelect.innerHTML = '<option value="">Select Course</option>';
                if (selectedQualification in courses) {
                    courses[selectedQualification].forEach(function(course) {
                        const option = document.createElement('option');
                        option.value = course;
                        option.text = course;
                        courseSelect.add(option);
                    });
                }
            });

            function updateProgressLine() {
                const stepsCompleted = currentStep + 1;
                const totalSteps = steps.length;
                const progressPercent = (stepsCompleted / totalSteps) * 100;
                progressBar.style.width = `${progressPercent}%`;
            }

            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.toggle('active', index === step);
                });
                prevBtn.style.display = step === 0 ? 'none' : 'inline-block';
                nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline-block';
                submitBtn.style.display = step === steps.length - 1 ? 'inline-block' : 'none';
                updateProgressLine();
            }

            function validateStep4() {
                // Add your validation logic here if needed
                return true;
            }

            nextBtn.addEventListener('click', () => {
                currentStep++;
                showStep(currentStep);
            });

            prevBtn.addEventListener('click', () => {
                currentStep--;
                showStep(currentStep);
            });

            submitBtn.addEventListener('click', function(e) {
                if (currentStep === steps.length - 1 && validateStep4()) {
                    e.preventDefault(); // Prevent the default form submission

                    const formData = new FormData();
                    formData.append('country', document.getElementById('countrySelect').value);
                    formData.append('nationality', document.getElementById('nationalitySelect').value);
                    formData.append('university', document.getElementById('universitySelect').value);
                    // formData.append('industry', document.getElementById('industrySelect').value);
                    formData.append('qualification', document.getElementById('qualificationSelect').value);
                    formData.append('course', document.getElementById('courseSelect').value);
                    formData.append('first-name', document.getElementById('first-name-input').value);
                    formData.append('sure-name', document.getElementById('sure-name-input').value);
                    formData.append('email', document.getElementById('email-input').value);
                    formData.append('phone', document.getElementById('phone-input').value);
                    formData.append('message', document.getElementById('message-input').value);

                    const studentDoc = document.getElementById('id-card').files[0];
                    const resume = document.getElementById('resume').files[0];
                    const idCardOther = document.getElementById('id-card-other').files[0];

                    if (studentDoc) {
                        formData.append('id-card', studentDoc);
                    }
                    if (resume) {
                        formData.append('resume', resume);
                    }
                    if (idCardOther) {
                        formData.append('id-card-other', idCardOther);
                    }

                    // Log the form data for debugging
                    for (var pair of formData.entries()) {
                        console.log(pair[0] + ', ' + pair[1]);
                    }

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', 'courses-form.php', true);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            showNotification('Submission successful!');
                            setTimeout(function() {
                                window.location.href = 'courses.php';
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

        function showNotification(message, isError = false) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.classList.toggle('error', isError);
            notification.style.display = 'block';

            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        function showChatbot() {
            const chatbotPopup = document.getElementById('chatbot-popup');
            chatbotPopup.style.display = 'flex';
        }

        function closeChatbot() {
            const chatbotPopup = document.getElementById('chatbot-popup');
            chatbotPopup.style.display = 'none';
        }

        function sendMessage() {
            const userInput = document.getElementById('user-input');
            const message = userInput.value;
            if (message.trim() !== '') {
                const userMessage = document.createElement('div');
                userMessage.className = 'message user-message';
                userMessage.innerText = message;
                document.querySelector('.chatbot-content').appendChild(userMessage);
                userInput.value = '';
                document.querySelector('.chatbot-content').scrollTop = document.querySelector('.chatbot-content').scrollHeight;
            }
        }
    </script>
</body>

</html>