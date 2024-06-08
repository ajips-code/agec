<?php
require_once('../controllers/database.php');
// Untuk debugging, tambahkan ini
file_put_contents('php://stderr', print_r($_POST, TRUE));
file_put_contents('php://stderr', print_r($_FILES, TRUE));
// Menggunakan objek database yang sudah Anda buat
$database = new Database();
$conn = $database->connection;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari request
    $program = $_POST['program'] ?? '';
    $qualification = $_POST['qualification'] ?? '';
    $language_level = $_POST['language_level'] ?? '';
    $country_origin = $_POST['country_origin'] ?? '';
    $first_name = $_POST['first-name'] ?? '';
    $sure_name = $_POST['sure-name'] ?? '';
    $email = $_POST['email'] ?? '';
    $country_code = $_POST['country-code'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    // Fungsi untuk menangani unggahan file
    function handle_upload($file_input_name)
    {
        $upload_dir = '../uploads/';
        if (isset($_FILES[$file_input_name]) && $_FILES[$file_input_name]['error'] == UPLOAD_ERR_OK) {
            $file_path = $upload_dir . basename($_FILES[$file_input_name]['name']);
            if (move_uploaded_file($_FILES[$file_input_name]['tmp_name'], $file_path)) {
                return $file_path;
            }
        }
        return null;
    }

    $resume_path = handle_upload('resume');
    $id_card1_path = handle_upload('id-card1');
    $id_card2_path = handle_upload('id-card2');
    $id_card3_path = handle_upload('id-card3');
    $id_card_other_path = handle_upload('id-card-other');

    // Mengambil nama file
    $resume_filename = isset($_FILES['resume']) ? $_FILES['resume']['name'] : '';
    $id_card1_filename = isset($_FILES['id-card1']) ? $_FILES['id-card1']['name'] : '';
    $id_card2_filename = isset($_FILES['id-card2']) ? $_FILES['id-card2']['name'] : '';
    $id_card3_filename = isset($_FILES['id-card3']) ? $_FILES['id-card3']['name'] : '';
    $id_card_other_filename = isset($_FILES['id-card-other']) ? $_FILES['id-card-other']['name'] : '';

    // Validasi input
    $errors = [];
    if (empty($program)) $errors[] = 'Program is required';
    if (empty($qualification)) $errors[] = 'Qualification is required';
    if (empty($language_level)) $errors[] = 'Language level is required';
    if (empty($country_origin)) $errors[] = 'Country of origin is required';
    if (empty($first_name)) $errors[] = 'First name is required';
    if (empty($sure_name)) $errors[] = 'Sure name is required';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required';
    if (empty($country_code)) $errors[] = 'Country code is required';
    if (empty($phone)) $errors[] = 'Phone number is required';
    if (empty($message)) $errors[] = 'Message is required';

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Menyiapkan query SQL untuk memasukkan data
        $sql = "INSERT INTO form_germany_programme (program, qualification, language_level, country_origin, first_name, sure_name, email, country_code, phone, message, resume_filename, id_card1_filename, id_card2_filename, id_card3_filename, id_card_other_filename) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Mempersiapkan statement
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            file_put_contents('php://stderr', 'Prepare failed: ' . $conn->error . "\n");
            die('Prepare failed: ' . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("sssssssssssssss", $program, $qualification, $language_level, $country_origin, $first_name, $sure_name, $email, $country_code, $phone, $message, $resume_filename, $id_card1_filename, $id_card2_filename, $id_card3_filename, $id_card_other_filename);

        // Menjalankan statement
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            file_put_contents('php://stderr', 'Execute failed: ' . $stmt->error . "\n");
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Menutup statement dan koneksi
        $stmt->close();
        $conn->close();
    }
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
    <link rel="stylesheet" href="../css/rpl_certification-form.css">

</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="../images/AGEC-Logo_Full-Colour.png" alt="Skills Certified Logo">
            <h2><b class="bolder-trusted">"</b><b class="gold" style="color:#D1A730; font-family: 'Bell MT'; font-weight:bolder; font-size: 40px;">Australia's <b class="bolder-trusted">Trusted</b> Education Consultancy</b><b class="bolder-trusted">"</b></h2>
            <h2>You are one step closer to starting your educational journey in Germany</h2>
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
            <?php
            $program = isset($_GET['program']) ? htmlspecialchars($_GET['program']) : '';
            $qualification = isset($_GET['qualification']) ? htmlspecialchars($_GET['qualification']) : '';
            ?>
            <div class="form-content">
                <h3 for="program">What Germany program are you interested in?</h3>
                <select id="program" name="program">
                    <option value="">Select Program</option>
                    <option value="STUDIUM AN HOCHSCHULEN UND UNIVERSITAT">STUDIUM AN HOCHSCHULEN UND UNIVERSITAT</option>
                    <option value="BERUFSSCHULE UND AUSBILDUNG">BERUFSSCHULE UND AUSBILDUNG</option>
                    <option value="FSJ - Freiwiliges Soziales Jahr : BFD - Federal Voluntary Service">FSJ - Freiwiliges Soziales Jahr : BFD - Federal Voluntary Service</option>
                    <option value="AUPAIR">AUPAIR</option>
                    <option value="AUSTAUSCHSCHULER">AUSTAUSCHSCHULER</option>
                    <option value="UNIVERSITATSREISE">UNIVERSITATSREISE</option>
                    <option value="LINGUAL INTERNATIONAL">LINGUAL INTERNATIONAL</option>
                </select>
                <!-- <label for="qualification">Select Qualification:</label> -->
                <select id="qualification">
                    <option value="">Select Qualification</option>
                </select>
            </div>
            <div class="warning" id="warningMessage1">Please select a program and qualification</div>
        </div>
        <div class="form-step" id="form-step-2">
            <div class="form-content">
                <div class="experience-container">
                    <div class="experience-container">
                        <div class="experience-question">What is your German language proficiency level?</div>
                        <div class="experience-btn-group" id="language-level">
                            <button type="button" data-value="A1">Beginner (A1)</button>
                            <button type="button" data-value="A2">Elementary (A2)</button>
                            <button type="button" data-value="B1">Intermediate (B1)</button>
                            <button type="button" data-value="B2">Upper Intermediate (B2)</button>
                            <button type="button" data-value="C1">Advanced (C1)</button>
                            <button type="button" data-value="C2">Proficient (C2)</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-3">
            <div class="form-content">
                <div class="container-state">
                    <h1 style="color:#363b6e;font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 700;">What is your Nationality?</h1>
                    <div class="country-input">
                        <label for="country-origin">Enter your country of origin:</label>
                        <input type="text" id="country-origin" name="country-origin" placeholder="Your Country">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-4">
            <div class="container-form">
                <div class="form-container">
                    <div class="form-column">
                        <form id="step4-form" method="POST" action="germany_programme-form.php">
                            <input type="hidden" name="program" id="hidden-program">
                            <input type="hidden" name="qualification" id="hidden-qualification">
                            <input type="hidden" name="experience_years" id="hidden-experience-years">
                            <input type="hidden" name="work_location" id="hidden-work-location">
                            <input type="hidden" name="state" id="hidden-state">
                            <h1 style="color:#363b6e;font-family: 'Montserrat', sans-serif; font-size: 22px; font-weight: 700; text-align:center; margin-bottom: 10px;">Please complete the personal details form!</h1>
                            <div class="student-row">
                                <input type="text" id="first-name-input" name="first-name" placeholder="First Name" required>
                                <input type="text" id="sure-name-input" name="sure-name" placeholder="Sure Name" required>
                            </div>
                            <input type="text" id="email-input" name="email" placeholder="Your email (This email will be used to process your enrollment and visa application with the relevant department!)" required>
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
                                    <option value="263">Zimbabwe

                                        +263</option>
                                </select>
                                <input type="text" id="phone-input" name="phone" placeholder="Your Phone" required>
                            </div>
                            <textarea id="message-input" name="message" placeholder="Your Message" required></textarea>
                            <input type="checkbox" id="terms-condition" required>
                            <label for="terms-condition" class="terms-condition-class">I accept and agree to <a href="termandcondition.php">The Terms and Conditions</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-step" id="form-step-5" method="POST" action="germany_programme-form.php" enctype="multipart/form-data">
            <div class="form-content">
                <h1 class="heading-upload">Upload 100 points ID</h1>
                <div class="file-upload-row">
                    <label for="id-card3">Upload ID Student Card (optional) : </label>
                    <input type="file" id="id-card3" name="id-card3">
                </div>
                <div class="file-upload-row">
                    <label for="resume">Upload Resume (optional) :</label>
                    <input type="file" id="resume" name="resume">
                </div>
                <div class="file-upload-row">
                    <label for="id-card1">Upload ID Card (optional) :</label>
                    <input type="file" id="id-card1" name="id-card1">
                </div>
                <div class="file-upload-row">
                    <label for="id-card2">Upload ID Passport  (optional) :</label>
                    <input type="file" id="id-card2" name="id-card2">
                </div>
                <div class="file-upload-row">
                    <label for="id-card-other">Other photo ID's (optional) :</label>
                    <input type="file" id="id-card-other" name="id-card-other">
                </div>
                <!-- <p class="description">Upload 100 points ID: (Passport, Student Card, Drivers License, Utility Bill, Phone Bill, Bank Card, Other photo ID's)</p> -->
                <div class="warning" id="warningMessage6">Please upload required documents.</div>
            </div>
            <audio id="notification-sound" src="../css/sounds/chatboat.mp3"></audio>
            <!-- Notification Banner -->
            <div id="notification" class="notification" onclick="showChatbot()">
                Welcome to Step 5! How can I assist you?
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
        // Function to handle state selection
        document.querySelectorAll('.state-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.state-option').forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                console.log('Selected state:', this.getAttribute('data-state'));
            });
        });

        // Function to check selection for language level
        function checkSelection() {
            const languageLevelGroup = document.getElementById('language-level');
            const warningMessage = document.getElementById('warningMessage');

            const levelSelected = languageLevelGroup.querySelector('button.active') !== null;

            if (levelSelected) {
                warningMessage.style.display = 'none';

                // Save value to local storage
                const languageLevel = languageLevelGroup.querySelector('button.active').getAttribute('data-value');
                localStorage.setItem('language_level', languageLevel);
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

        // Function to validate and show/hide warning message
        document.getElementById('next-btn').addEventListener('click', function() {
            const languageLevelGroup = document.getElementById('language-level');
            const warningMessage = document.getElementById('warningMessage');

            const levelSelected = languageLevelGroup.querySelector('button.active') !== null;

            if (levelSelected) {
                warningMessage.style.display = 'none';
            } else {
                warningMessage.style.display = 'block';
            }
        });

        const languageLevelBtns = document.querySelectorAll("#language-level button");
        languageLevelBtns.forEach(btn => btn.addEventListener("click", () => {
            languageLevelBtns.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            document.getElementById('language-level').value = btn.getAttribute("data-value");
        }));

        // Get Data state selection
        const stateOptions = document.querySelectorAll(".state-option");
        stateOptions.forEach(option => option.addEventListener("click", () => {
            stateOptions.forEach(o => o.classList.remove("selected"));
            option.classList.add("selected");
            document.querySelector('input[name="state"]').value = option.getAttribute("data-state");
        }));

        // Validation for step navigation
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
            var programSelect = document.getElementById("program");
            var qualificationSelect = document.getElementById("qualification");

            function qualificationSelectChange() {
                var program = programSelect.value;
                switch (program) {
                    case "STUDIUM AN HOCHSCHULEN UND UNIVERSITAT":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Bachelor of Science">Bachelor of Science</option>
                        <option value="Master of Science">Master of Science</option>
                        <option value="PhD">PhD</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "BERUFSSCHULE UND AUSBILDUNG":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Mechanic">Mechanic</option>
                        <option value="Electrician">Electrician</option>
                        <option value="Carpenter">Carpenter</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "FSJ - Freiwiliges Soziales Jahr : BFD - Federal Voluntary Service":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Social Worker">Social Worker</option>
                        <option value="Community Service">Community Service</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "AUPAIR":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Child Care">Child Care</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "AUSTAUSCHSCHULER":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="High School Exchange">High School Exchange</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "UNIVERSITATSREISE":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Bachelor of Arts">Bachelor of Arts</option>
                        <option value="Master of Arts">Master of Arts</option>
                        <option value="PhD">PhD</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    case "LINGUAL INTERNATIONAL":
                        qualificationSelect.innerHTML = `
                        <option value="">Select Qualification</option>
                        <option value="Not sure yet?">Not sure yet?</option>
                        <option value="Certificate in German Language">Certificate in German Language</option>
                        <option value="Diploma in German Language">Diploma in German Language</option>
                        <option value="others">Others</option>
                    `;
                        break;
                    default:
                        qualificationSelect.innerHTML = `<option value="">Select Qualification</option>`;
                }
            }
            programSelect.addEventListener("change", qualificationSelectChange);
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
                if (validateStep(currentStep)) {
                    saveToLocalStorage(currentStep);
                    submitForm();
                }
            });

            function validateStep(step) {
                // Implement validation logic for each step
                if (step === 0) {
                    return document.getElementById('program').value !== '';
                } else if (step === 1) {
                    return document.getElementById('qualification').value !== '';
                } else if (step === 2) {
                    return document.querySelector('#language-level button.active') !== null;
                } else if (step === 3) {
                    return document.getElementById('country-origin').value !== '';
                } else if (step === 4) {
                    const form = document.getElementById('step4-form');
                    return ['first-name', 'sure-name', 'email', 'country-code', 'phone', 'message'].every(id => form[id].value !== '');
                } else if (step === 5) {
                    const requiredFiles = ['resume'];
                    const idCards = ['id-card1', 'id-card2', 'id-card3', 'id-card-other'];

                    const allRequiredFilesUploaded = requiredFiles.every(id => document.getElementById(id).files.length > 0);
                    const atLeastOneIdCardUploaded = idCards.some(id => document.getElementById(id).files.length > 0);

                    if (!allRequiredFilesUploaded || !atLeastOneIdCardUploaded) {
                        document.getElementById('warningMessage6').style.display = 'block';
                        return false;
                    }

                    document.getElementById('warningMessage6').style.display = 'none';
                    return true;
                }
                return true;
            }

            function saveToLocalStorage(step) {
                if (step === 0) {
                    localStorage.setItem('program', document.getElementById('program').value);
                } else if (step === 1) {
                    localStorage.setItem('qualification', document.getElementById('qualification').value);
                } else if (step === 2) {
                    const languageLevelButton = document.querySelector('#language-level button.active');
                    const languageLevel = languageLevelButton ? languageLevelButton.getAttribute('data-value') : '';
                    localStorage.setItem('language_level', languageLevel);
                } else if (step === 3) {
                    const countryOrigin = document.getElementById('country-origin').value;
                    localStorage.setItem('country_origin', countryOrigin);
                } else if (step === 4) {
                    const form = document.getElementById('step4-form');
                    localStorage.setItem('first-name', form['first-name'].value);
                    localStorage.setItem('sure-name', form['sure-name'].value);
                    localStorage.setItem('email', form['email'].value);
                    localStorage.setItem('country-code', form['country-code'].value);
                    localStorage.setItem('phone', form['phone'].value);
                    localStorage.setItem('message', form['message'].value);
                } else if (step === 5) {
                    const resume = document.getElementById('resume').files[0];
                    const idCard1 = document.getElementById('id-card1').files[0];
                    const idCard2 = document.getElementById('id-card2').files[0];
                    const idCard3 = document.getElementById('id-card3').files[0];
                    const idCardOther = document.getElementById('id-card-other').files[0];
                    localStorage.setItem('resume_filename', resume ? resume.name : '');
                    localStorage.setItem('id_card1_filename', idCard1 ? idCard1.name : '');
                    localStorage.setItem('id_card2_filename', idCard2 ? idCard2.name : '');
                    localStorage.setItem('id_card3_filename', idCard3 ? idCard3.name : '');
                    localStorage.setItem('id_card_other_filename', idCardOther ? idCardOther.name : '');
                }
            }

            function submitForm() {
                const formData = new FormData();
                formData.append('program', localStorage.getItem('program'));
                formData.append('qualification', localStorage.getItem('qualification'));
                formData.append('language_level', localStorage.getItem('language_level'));
                formData.append('country_origin', localStorage.getItem('country_origin'));
                formData.append('first-name', localStorage.getItem('first-name'));
                formData.append('sure-name', localStorage.getItem('sure-name'));
                formData.append('email', localStorage.getItem('email'));
                formData.append('country-code', localStorage.getItem('country-code'));
                formData.append('phone', localStorage.getItem('phone'));
                formData.append('message', localStorage.getItem('message'));

                const resume = document.getElementById('resume').files[0];
                const idCard1 = document.getElementById('id-card1').files[0];
                const idCard2 = document.getElementById('id-card2').files[0];
                const idCard3 = document.getElementById('id-card3').files[0];
                const idCardOther = document.getElementById('id-card-other').files[0];

                if (resume) {
                    formData.append('resume', resume);
                }
                if (idCard1) {
                    formData.append('id-card1', idCard1);
                }
                if (idCard2) {
                    formData.append('id-card2', idCard2);
                }
                if (idCard3) {
                    formData.append('id-card3', idCard3);
                }
                if (idCardOther) {
                    formData.append('id-card-other', idCardOther);
                }

                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'germany_programme-form.php', true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        showNotification('Submission successful!');
                        setTimeout(function() {
                            window.location.href = 'germany_programme.php';
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

        function showNotification(message, isError = false) {
            const notification = document.getElementById('notification');
            notification.textContent = message;
            notification.classList.toggle('error', isError);
            notification.style.display = 'block';

            setTimeout(() => {
                notification.style.display = 'none';
            }, 3000);
        }

        // Set Notification
        document.addEventListener("DOMContentLoaded", function() {

            function showNotification(message, isError = false) {
                const notification = document.getElementById('notification');
                const notificationSound = document.getElementById('notification-sound');
                notificationSound.play();
                notification.textContent = message;
                notification.classList.toggle('error', isError);
                notification.style.display = 'block';

                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000);
            }

            // Trigger the notification when reaching step 5
            const step5 = document.getElementById('form-step-5');
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.target.style.display === 'block' && mutation.target.id === 'form-step-5') {
                        showNotification();
                    }
                });
            });

            observer.observe(step5, {
                attributes: true,
                attributeFilter: ['style']
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Function to show chatbot pop-up
            function showChatbot() {
                const chatbotPopup = document.getElementById('chatbot-popup');
                chatbotPopup.style.display = 'flex';
            }

            // Function to close chatbot pop-up
            function closeChatbot() {
                const chatbotPopup = document.getElementById('chatbot-popup');
                chatbotPopup.style.display = 'none';
            }

            // Function to send a message (placeholder function for now)
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

            // Attach functions to window object for global access
            window.showChatbot = showChatbot;
            window.closeChatbot = closeChatbot;
            window.sendMessage = sendMessage;
        });
    </script>

</body>

</html>