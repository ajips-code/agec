<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../controllers/database.php');
file_put_contents('php://stderr', print_r($_POST, TRUE));
file_put_contents('php://stderr', print_r($_FILES, TRUE));

$database = new Database();
$conn = $database->connection;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country = $_POST['country'];
    $goal = $_POST['goal'];
    $intake = $_POST['intake'];
    $english_level = $_POST['english_level'];
    $test_type = $_POST['test_type'];
    $test_score = $_POST['test_score'];
    $state = $_POST['state'];
    $first_name = $_POST['first_name'];
    $sure_name = $_POST['sure_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $id_card_path = null;
    $resume_path = null;
    if (isset($_FILES['id-card']) && $_FILES['id-card']['error'] == UPLOAD_ERR_OK) {
        $id_card_path = '../uploads/' . basename($_FILES['id-card']['name']);
        move_uploaded_file($_FILES['id-card']['tmp_name'], $id_card_path);
    }
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume_path = '../uploads/' . basename($_FILES['resume']['name']);
        move_uploaded_file($_FILES['resume']['tmp_name'], $resume_path);
    }

    $sql = "INSERT INTO form_elicos(country, goal, intake, english_level, test_type, test_score, state, first_name, sure_name, email, phone, message, id_card_path, resume_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssss", $country, $goal, $intake, $english_level, $test_type, $test_score, $state, $first_name, $sure_name, $email, $phone, $message, $id_card_path, $resume_path);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    } else {
        echo "New record created successfully";
        header('Location: elicos.php');
        exit();
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
    <link rel="stylesheet" href="../css/elicos-form.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
            <h2><b class="bolder-trusted">"</b><b class="gold" style="color:#D1A730; font-family: 'Bell MT'; font-weight:bolder; font-size: 40px;">Australia's <b class="bolder-trusted">Trusted</b> Education Consultancy</b><b class="bolder-trusted">"</b></h2>
            <h2>Improve your English language skills with our ELICOS programs</h2>
        </div>
        <div class="progress-bar">
            <div class="step active" id="step-1">1</div>
            <div class="step" id="step-2">2</div>
            <div class="step" id="step-3">3</div>
            <div class="step" id="step-4">4</div>
            <div class="step" id="step-5">5</div>
        </div>
        <div class="progress-line"></div>
        <form id="elicosForm" method="POST" action="elicos-form.php" enctype="multipart/form-data">
            <div class="form-step active" id="form-step-1">
                <div class="form-content">
                    <!-- <h3>Select Your Destination</h3> -->
                    <select id="countrySelect" name="country" required>
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
                    <select id="goalSelect" name="goal" required>
                        <option value="">Select Your Purpose</option>
                        <option value="To work in English Speaking Country">To Work in English Speaking Country</option>
                        <option value="To improve English Language proficiency">To Improve English Language Proficiency</option>
                        <option value="To Study at an Australian Collage or University">To Study at an Australian Collage or University</option>
                        <option value="To Prepare for language exam IELTS / TOEFL / PTE, ETC">To Prepare for Language Exam IELTS / TOEFL / PTE, ETC</option>
                        <option value="To teach in your home Country">To Teach in your Home Country</option>
                        <option value="Study Group">Study Group</option>
                        <option value="To learn English required for a specific context">To learn English Required for a Specific Context</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="warning" id="warningMessage1">Please select a country, goal, and intake</div>
            </div>
            <div class="form-step" id="form-step-2">
                <div class="form-content">
                    <select id="intakeSelect" name="intake" required>
                        <option value="">Select Your Intake</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <label for="englishLevel">What is your current English level?</label>
                    <select id="englishLevel" name="english_level" required>
                        <option value="">Select English Level</option>
                        <option value="Beginner">Beginner</option>
                        <option value="Elementary">Elementary</option>
                        <option value="Pre-Intermediate">Pre-Intermediate</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Upper-Intermediate">Upper-Intermediate</option>
                        <option value="Advanced">Advanced</option>
                        <option value="Proficient">Proficient</option>
                        <option value="Others">Others</option>
                    </select>

                    <label for="testType">Have you taken any English language test?</label>
                    <select id="testType" name="test_type" required>
                        <option value="">Select Test</option>
                        <option value="IELTS">IELTS</option>
                        <option value="TOEFL">TOEFL</option>
                        <option value="PTE">PTE</option>
                        <option value="OET">OET</option>
                        <option value="Cambridge">Cambridge</option>
                        <option value="None">None</option>
                    </select>

                    <label for="testScore">If yes, please specify your test score:</label>
                    <input type="number" id="testScore" name="test_score" placeholder="Test Score" step="0.1" min="0">
                </div>
            </div>
            <div class="form-step" id="form-step-3">
                <div class="form-content">
                    <label for="stateSelect">What is your preferred state?</label>
                    <div class="state-options">
                        <div class="state-option" data-state="NSW">
                            <img src="./images/NSW.JPG" alt="NSW">
                            <span>NSW</span>
                        </div>
                        <div class="state-option" data-state="VIC">
                            <img src="../images/vic.JPG" alt="VIC">
                            <span>VIC</span>
                        </div>
                        <div class="state-option" data-state="QLD">
                            <img src="../../images/qld.JPG" alt="QLD">
                            <span>QLD</span>
                        </div>
                        <div class="state-option" data-state="SA">
                            <img src="/images/SA.PNG" alt="SA">
                            <span>SA</span>
                        </div>
                        <div class="state-option" data-state="WA">
                            <img src="images/WAA.JPG" alt="WA">
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
                            <img src="../images/tas.jpg" alt="TAS">
                            <span>TAS</span>
                        </div>
                    </div>
                    <input type="hidden" name="state" id="state">
                </div>
            </div>
            <div class="form-step" id="form-step-4">
                <div class="form-content">
                    <form id="step4-form" method="POST" action="elicos-form.php">
                        <!-- <input type="hidden" name="industry" id="hidden-industry">
                        <input type="hidden" name="qualification" id="hidden-qualification">
                        <input type="hidden" name="experience_years" id="hidden-experience-years">
                        <input type="hidden" name="work_location" id="hidden-work-location">
                        <input type="hidden" name="state" id="hidden-state"> -->
                        <h1 style="color:#363b6e;font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 700; text-align:center; margin-bottom: 10px;">Please complete the personal details form!</h1>
                        <div class="student-row">
                            <input type="text" id="first-name-input" name="first-name" placeholder="First Name" required>
                            <input type="text" id="sure-name-input" name="sure-name" placeholder="Surname" required>
                        </div>
                        <!-- <div class="usi-row">
                            <label for="usi-number-input">Your USI Number:</label>
                            <p class="usi-description">What is <a href="https://portal.usi.gov.au/student/TermsAndConditions?ReturnUrl=%252fstudent%252fUsi%252fForgotten">USI Number</a> ?</p>
                        </div> -->
                        <!-- <input type="text" id="usi-number-input" name="usi-number" placeholder="Your USI Number" required> -->
                        <input type="text" id="email-input" name="email" placeholder="Your email (This email will be used to process your enrollment with the relevant department!)" required>
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
                        <div class="text-left">
                            <input type="checkbox" id="terms-condition" required>
                            <label for="terms-condition" class="terms-condition-class">I accept and agree to <a href="termandcondition.php"> The terms and conditions</a></label>
                            <!-- Animated text below terms and conditions -->
                            <div id="terms-animation"></div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="form-step" id="form-step-5">
                <div class="form-content">
                    <!-- <h1 class="heading-upload">Upload </h1> -->
                    <div class="file-upload-row">
                        <label for="id-card">Upload ID Card (optional)</label>
                        <input type="file" id="id-card" name="id-card">
                    </div>
                    <div class="file-upload-row">
                        <label for="resume">Upload Resume (optional)</label>
                        <input type="file" id="resume" name="resume">
                    </div>
                </div>
            </div>
            <!-- Tambahkan elemen berikut untuk notifikasi -->

            <div class="btn-group">
                <button type="button" id="prev-btn" style="display: none;">Prev</button>
                <button type="button" id="next-btn">Next</button>
                <button type="submit" id="submit-btn" style="display: none;">Submit</button>
            </div>
        </form>
    </div>
    <div id="notification" style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%); background-color: #4CAF50; color: white; padding: 10px; border-radius: 5px; z-index: 1000;"></div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const steps = document.querySelectorAll('.form-step');
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const submitBtn = document.getElementById('submit-btn');
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

            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.toggle('active', index === step);
                });
                prevBtn.style.display = step === 0 ? 'none' : 'inline-block';
                nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline-block';
                submitBtn.style.display = step === steps.length - 1 ? 'inline-block' : 'none';
                updateProgressLine();
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
                if (step === 0) {
                    return document.getElementById('countrySelect').value !== '' &&
                        document.getElementById('goalSelect').value !== '';
                }
                if (step === 1) {
                    const testType = document.getElementById('testType').value;
                    const testScore = document.getElementById('testScore').value;

                    return document.getElementById('intakeSelect').value !== '' &&
                        document.getElementById('englishLevel').value !== '' &&
                        (testType === 'None' || testScore !== '');
                }
                if (step === 2) {
                    return document.querySelector('.state-option.selected') !== null;
                }
                if (step === 3) {
                    return document.getElementById('first-name-input').value !== '' &&
                        document.getElementById('sure-name-input').value !== '' &&
                        document.getElementById('email-input').value !== '' &&
                        document.getElementById('phone-input').value !== '' &&
                        document.getElementById('terms-condition').checked;
                }
                return true;
            }

            function saveToLocalStorage(step) {
                if (step === 0) {
                    localStorage.setItem('country', document.getElementById('countrySelect').value);
                    localStorage.setItem('goal', document.getElementById('goalSelect').value);
                }
                if (step === 1) {
                    localStorage.setItem('intake', document.getElementById('intakeSelect').value);
                    localStorage.setItem('english_level', document.getElementById('englishLevel').value);
                    localStorage.setItem('test_type', document.getElementById('testType').value);
                    localStorage.setItem('test_score', document.getElementById('testScore').value);
                }
                if (step === 2) {
                    const selectedState = document.querySelector('.state-option.selected').getAttribute('data-state');
                    document.getElementById('state').value = selectedState;
                    localStorage.setItem('state', selectedState);
                }
                if (step === 3) {
                    localStorage.setItem('first_name', document.getElementById('first-name-input').value);
                    localStorage.setItem('sure_name', document.getElementById('sure-name-input').value);
                    localStorage.setItem('email', document.getElementById('email-input').value);
                    localStorage.setItem('country_code', document.getElementById('country-code').value);
                    localStorage.setItem('phone', document.getElementById('phone-input').value);
                    localStorage.setItem('message', document.getElementById('message-input').value);
                }
                if (step === 4) {
                    const idCard = document.getElementById('id-card').files[0];
                    const resume = document.getElementById('resume').files[0];
                    localStorage.setItem('id_card_filename', idCard ? idCard.name : '');
                    localStorage.setItem('resume_filename', resume ? resume.name : '');
                }
            }

            document.querySelectorAll('.state-option').forEach(option => {
                option.addEventListener('click', function() {
                    document.querySelectorAll('.state-option').forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            function submitForm() {
                const idCard = document.getElementById('id-card').files[0]; // Menyimpan file id-card dalam variabel idCard
                const resume = document.getElementById('resume').files[0]; // Menyimpan file resume dalam variabel resume

                const formData = new FormData();
                formData.append('country', localStorage.getItem('country'));
                formData.append('goal', localStorage.getItem('goal'));
                formData.append('intake', localStorage.getItem('intake'));
                formData.append('english_level', localStorage.getItem('english_level'));
                formData.append('test_type', localStorage.getItem('test_type'));
                formData.append('test_score', localStorage.getItem('test_score'));
                formData.append('state', localStorage.getItem('state'));
                formData.append('first_name', localStorage.getItem('first_name'));
                formData.append('sure_name', localStorage.getItem('sure_name'));
                formData.append('country_code', localStorage.getItem('country_code'));
                formData.append('email', localStorage.getItem('email'));
                formData.append('phone', localStorage.getItem('phone'));
                formData.append('message', localStorage.getItem('message'));

                if (idCard) {
                    formData.append('id-card', idCard);
                }
                if (resume) {
                    formData.append('resume', resume);
                }

                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'elicos-form.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        showNotification('Submission successful!');
                        setTimeout(function() {
                            window.location.href = 'elicos.php';
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

            function showNotification(message, isError = false) {
                const notification = document.getElementById('notification');
                notification.textContent = message;
                notification.classList.toggle('error', isError);
                notification.style.display = 'block';

                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            }

            showStep(currentStep);
        });
    </script>
</body>

</html>