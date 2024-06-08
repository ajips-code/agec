<!DOCTYPE html>
<html lang="en">
<?php include('../controllers/database.php');
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Australian Global Education Consultancy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/AGEC-Logo_Full-Colour.png" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: whitesmoke;
            z-index: 9999;
        }

        .popup {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 20px;
            /* background: linear-gradient(to bottom, #fff, #0077B5); */
            border-radius: 0;
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); */
            font-family: "Montserrat", sans-serif;
            z-index: 10000;
        }

        /* Style for close button */
        .close-btn {
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            color: #555;
            background: none;
            border: none;
        }

        /* Header style */
        .popup-header {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            text-align: center;
            padding: 10px 0;
        }

        .popup-header img {
            /* max-width: 100%;
            max-height: 80px; */
            width: 300px;
            height: auto;
            margin: 0 auto;
            padding-bottom: 30px;
            display: block;
            filter: drop-shadow(2px 2px 5px rgba(0, 0, 0, 0.5));
            /* Add drop shadow effect */
        }

        .popup-header p {
            font-size: x-large;
            font-weight: bolder;
            color: #D1A730;
        }

        .popup-header h1 {
            /* font-size: x-large; */
            font-weight: bolder;
            color: #D1A730;
        }

        .bolder-trusted {
            color: #7bff00;
            font-weight: 900;
        }

        /* Hide all steps except the first one */
        .popup .step {
            display: none;
            padding: 60px 80px 4px 80px;
            margin-top: 200px;
        }

        .popup .step.active {
            display: block;
        }

        .popup .step button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 700;
            text-transform: capitalize;
            line-height: 1.2;
            font-size: 14px;
        }

        /* Style for form inputs */
        .popup form input,
        .popup form select,
        .popup form textarea {
            margin-bottom: 5px;
            width: calc(100% - 20px);
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            color: red;
            /* Updated text color */
        }

        option {
            background-color: #0A3F7F;
            color: white;
        }

        option:checked {
            background-color: red;
            color: white;
        }


        /* Style for form columns */
        .form-column {
            width: 45%;
            float: left;
            margin-right: 2%;
        }

        /* Style for form container */
        .form-container::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Style for Previous and Next buttons */
        .popup .step button.prev-step,
        .popup .step button.next-step {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 700;
            text-transform: capitalize;
            line-height: 1.5;
            font-size: 15px;
            text-align: center;
        }

        .popup .step button.prev-step,
        .popup .step button.next-step {
            width: 130px;
            height: 40px;
        }

        .popup .step button.prev-step {
            background-color: #7a7a7a;
        }

        /* Style for Next button */
        .popup .step button.next-step {
            background-color: #00ff00;
        }

        .popup .step button#submit-form {
            background-color: #ff0000;
        }

        .button-prev-next {
            text-align: center;
            margin-top: 15px;
        }

        /* Style for footer */
        footer {
            margin-top: 10px;
            text-align: center;
            clear: both;
            padding-top: 8px;
            font-size: 16px;
            color: #fff;
            /* Updated text color */
        }

        /* Style for rating */
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
            color: #ffd700;
            margin-top: -5px;
        }

        .rating>span {
            display: inline-block;
            position: relative;
            font-size: 45px;
        }

        .rating>span:hover:before,
        .rating>span:hover~span:before {
            content: "\2605";
            position: absolute;
        }

        @media screen and (min-width: 1200px) {
            #open-popup {
                background-color: #D1A730;
                font-weight: 900;
                font-style: bold;
                font-size: 17px;
                line-height: 1.45;
                font-family: 'Nunito Sans', sans-serif;
                transition: all 0.3s ease;
                border: 2px solid transparent;
                padding: 15px 190px;
                cursor: pointer;
                color: #ffffff;
                margin-top: 20px;
                margin-left: 375px;
                border-radius: 30px;
            }

            .wrap-button {
                position: relative;
                margin-top: -225px;
                margin-bottom: 110px;
            }

            .step label {
                color: white;
            }

            .popup .step label[for="terms-condition"] {
                display: inline;
                font-size: 16px;
                vertical-align: middle;
                color: #fff !important;
            }

            label {
                font-size: 15px;
                margin: 10px;
                color: black !important;
            }
        }


        @media screen and (min-width: 992px) and (max-width: 1200px) {
            .popup {
                margin: 10% auto;
                border-radius: 40px 40px 0 0;
            }

            .popup .step {
                display: none;
                margin-top: 145px;
                color: white;
            }

            .popup .step button.prev-step,
            .popup .step button.next-step {
                width: 180px;
                height: 50px;
                font-size: 14px;
            }

            .popup form input,
            .popup form select,
            .popup form textarea {
                margin-bottom: 5px;
                width: calc(100% - 20px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 12px;
                color: #333;
                /* Updated text color */
            }

            #open-popup {
                background-color: #D1A730;
                font-weight: 900;
                font-style: bold;
                font-size: 17px;
                line-height: 1.45;
                font-family: 'Nunito Sans', sans-serif;
                transition: all 0.3s ease;
                border: 2px solid transparent;
                padding: 15px 190px;
                cursor: pointer;
                color: #ffffff;
                margin-top: 20px;
                margin-left: 97px;
                border-radius: 30px;
            }

            .step label {
                color: white;
            }

            .popup .step label[for="terms-condition"] {
                display: inline;
                font-size: 16px;
                vertical-align: middle;
                color: #fff !important;
            }

            label {
                font-size: 15px;
                margin: auto;
                color: white !important;
            }

            .wrap-button {
                position: relative;
                margin-top: -225px;
                margin-bottom: 110px;
            }
        }

        @media screen and (min-width: 601px) and (max-width: 992px) {
            .popup {
                margin: 10% 10%;
                border-radius: 40px 40px 0px 0px;
            }

            .popup form input,
            .popup form select,
            .popup form textarea {
                margin-bottom: 5px;
                width: calc(100% - 15px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 13px;
                color: #333;
                /* Updated text color */
            }

            .popup .step button.prev-step,
            .popup .step button.next-step {
                width: 180px;
                height: 55px;
            }

            #open-popup {
                background-color: #D1A730;
                font-weight: 900;
                font-style: bold;
                font-size: 16px;
                line-height: 1.5;
                font-family: 'Nunito Sans', sans-serif;
                transition: all 0.3s ease;
                border: 2px solid transparent;
                padding: 15px 200px;
                cursor: pointer;
                color: #ffffff;
                margin-top: 15px;
                margin-left: 170px;
                border-radius: 30px;
            }

            .popup .step label[for="terms-condition"] {
                display: inline;
                font-size: 16px;
                vertical-align: middle;
                color: white;
            }

            label {
                font-size: 17px;
                margin: auto;
                color: white;
            }

            .wrap-button {
                position: relative;
                margin-top: -220px;
                margin-bottom: 110px;
            }
        }

        @media screen and (max-width: 600px) {
            .wrap-button {
                position: relative;
                margin-top: -480px;
                margin-bottom: 430px;
                text-align: center;
            }

            .popup .step button.prev-step,
            .popup .step button.next-step {
                width: 135px;
                height: 40px;
                font-size: 13px;
                /* Adjust font size for smaller screens */
            }

            .popup form input,
            .popup form select,
            .popup form textarea {
                margin-bottom: 5px;
                width: calc(100% - 20px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 13px;
                color: #333;
                /* Updated text color */
            }

            /* Style for Previous and Next buttons */
            .popup .step button.prev-step {
                margin-top: 10px;
                padding: 10px 20px;
                background-color: #7a7a7a;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: 700;
                text-transform: capitalize;
                line-height: 1.5;
                font-size: 11px;
                text-align: center;
            }

            .popup .step button.next-step {
                margin-top: 10px;
                padding: 10px 20px;
                background-color: #00ff00;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-weight: 700;
                text-transform: capitalize;
                line-height: 1.5;
                font-size: 11px;
                text-align: center;
            }

            .popup .step label[for="terms-condition"] {
                display: inline;
                font-size: 13px;
                vertical-align: middle;
                color: white;
            }

            label {
                font-size: 11px;
                margin: auto;
                color: white;
            }

            #open-popup {
                background-color: #D1A730;
                font-weight: 900;
                font-style: bold;
                font-size: 23px;
                line-height: 1;
                font-family: 'Nunito Sans', sans-serif;
                transition: all 0.3s ease;
                border: 2px solid transparent;
                padding: 8px 40px;
                cursor: pointer;
                color: #ffffff;
                border-radius: 30px;
            }

            .popup {
                max-width: 70%;
                margin: 20% 5%;
            }

            .popup-header img {
                max-width: 100%;
                max-height: 80px;
                width: auto;
                height: auto;
                margin: 0 auto;
                align-items: center;
                padding-bottom: 30px;
                display: block;
                filter: drop-shadow(2px 2px 5px rgba(0, 0, 0, 0.5));
            }
        }
    </style>
</head>

<body>
    <!-- The Pop-Up -->
    <div class="overlay" id="myPopup">
        <div class="popup">
            <div class="popup-header">
                <img src="https://australianglobaleducationconsultancy.com/wp-content/uploads/2023/06/AGEC-Logo_Full-Colour.png" alt="Habibie Education Youth Logo">
                <h1>Australia's <b class="bolder-trusted">Trusted</b> Education Consultants</h1>
                <h2>Use your chance to achieve studying and working overseas</h2>
                <h3>We can help you start the journey</h3>
            </div>
            <!-- Close button -->
            <button class="close-btn" id="close-popup">×</button>

            <!-- Step 1 -->
            <div class="step active">
                <form id="step1-form">
                    <label for="program-selection">What Programs would you choose?</label>
                    <select id="program-selection" name="program" required>
                        <option value="">Select Programs</option>
                        <option value="rpl_certification">RPL Certification</option>
                        <option value="working_holiday_visa">Working Holiday Visa</option>
                        <option value="study_and_work_visa">Study and Work Visa</option>
                        <option value="tourist_visa">Tourist Visa</option>
                        <option value="pr_assesment_and_application">PR Assessment and Application </option>
                        <option value="germany_pathway">Germany Pathway Programmes</option>
                        <option value="overseas_jobs">Overseas Jobs Application </option>
                        <option value="courses">Courses </option>
                        <option value="training_visa">Training Visa </option>
                        <option value="internship_visa">Internship Visa (Temporary Activity Visa)</option>
                        <option value="business_visa">Business Visa</option>
                        <option value="trade_license">Trade License Application </option>
                        <option value="contruction_license">Construction License Application</option>
                        <option value="other_services">Other Services</option>
                        <!-- Add more options as needed -->
                    </select>
                    <label for="qualification-selection1">What qualification are you looking for?</label>
                    <select id="qualification-selection1" name="qualification" required>
                        <option value="">Select Qualification</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="PhD">PhD</option>
                        <!-- Add more qualification options as needed -->
                    </select>
                    <div class="button-prev-next">
                        <button type="button" class="prev-step">Previous</button>
                        <button type="button" class="next-step">Next</button>
                    </div>
                </form>
            </div>

            <!-- Step 2 -->
            <div class="step">
                <form id="step2-form">
                    <label for="years-selection">How many years do you want to work or study?</label>
                    <select id="years-selection" name="years" required>
                        <option value="">Select Years</option>
                        <option value="1-2years">1-2 years</option>
                        <option value="3-4years">3-4 years</option>
                        <option value="5-9years">5-9 years</option>
                        <option value="10+years">10+ years</option>
                    </select>
                    <label for="location-selection">Where is your work or study place like?</label>
                    <select id="location-selection" name="location" required>
                        <option value="">Select Location</option>
                        <option value="Germany">Germany</option>
                        <option value="Australia">Australia</option>
                        <option value="Overseas">Overseas</option>
                        <option value="Both">Both</option>
                    </select>
                    <div class="button-prev-next">
                        <button type="button" class="prev-step">Previous</button>
                        <button type="button" class="next-step">Next</button>
                    </div>
                </form>
            </div>

            <!-- Step 3 -->
            <div class="step">
                <form id="step3-form">
                    <label for="state-selection">What state do you live in?</label>
                    <select id="state-selection" name="state" required>
                        <option value="">Select State</option>
                        <option value="Asia">Asia</option>
                        <option value="Africa">Africa</option>
                        <option value="North America">North America</option>
                        <option value="South America">South America</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Europe">Europe</option>
                        <option value="Australia">Australia</option>
                    </select>
                    <label for="country-input">Where exactly?</label>
                    <input type="text" id="country-input" name="country" required>
                    <div class="button-prev-next">
                        <button type="button" class="prev-step">Previous</button>
                        <button type="button" class="next-step">Next</button>
                    </div>
                </form>
            </div>

            <!-- Step 4 -->
            <div class="step">
                <form id="step4-form">
                    <label for="qualification-radio">Do you have any formal qualifications?</label><br>
                    <input type="radio" id="qualification-yes" name="qualification-radio" value="yes" required>
                    <label for="qualification-yes">Yes</label><br>
                    <input type="radio" id="qualification-no" name="qualification-radio" value="no">
                    <label for="qualification-no">No</label><br>
                    <div class="button-prev-next">
                        <button type="button" class="prev-step">Previous</button>
                        <button type="button" class="next-step">Next</button>
                    </div>
                </form>
            </div>

            <!-- Step 5 -->
            <div class="step">
                <div class="form-container">
                    <div class="form-column">
                        <form id="step5-form">
                            <label for="name-input">Your Full Name:</label>
                            <input type="text" id="name-input" name="fullname" required>
                            <label for="email-input">Your Email:</label>
                            <input type="email" id="email-input" name="email" required>
                        </form>
                    </div>
                    <div class="form-column">
                        <form id="step5-form">
                            <label for="phone-input">Your Phone:</label>
                            <input type="tel" id="phone-input" name="phone" required>
                            <label for="message-input">Your Message:</label>
                            <textarea id="message-input" name="message" required></textarea>
                        </form>
                    </div>
                </div>
                <input type="checkbox" id="terms-condition" required>
                <label for="terms-condition" class="terms-condition-class">I agree to the terms and conditions</label>
                <div class="button-prev-next">
                    <button type="button" class="prev-step">Previous</button>
                    <button type="button" id="submit-form">Submit</button>
                </div>
            </div>

            <!-- Footer -->
            <footer>
                <p style="font-size: 13px; color:black;">Thank you for using our service! Please rate your experience:</p>
                <div class="rating" id="rating">
                    <span onclick="rate(1)">☆</span>
                    <span onclick="rate(2)">☆</span>
                    <span onclick="rate(3)">☆</span>
                    <span onclick="rate(4)">☆</span>
                    <span onclick="rate(5)">☆</span>
                </div>
            </footer>
        </div>
    </div>


    <script>
        // Panggil fungsi openPopup() saat halaman dimuat
        window.onload = function() {
            openPopup();
        };

        // JavaScript
        // Get the pop-up
        var popup = document.getElementById('myPopup');

        // Function to open the pop-up
        function openPopup() {
            popup.style.display = "block";
            // window.location.href = "index.php";
        }

        // Get the <span> element that closes the pop-up
        var span = document.getElementsByClassName("close-btn")[0];

        // When the user clicks on <span> (x), close the pop-up
        span.onclick = function() {
            popup.style.display = "none";
        }

        // When the user clicks anywhere outside of the pop-up, close it
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }

        // Function to close popup
        function closePopup() {
            window.location.href = "index.php";
        }

        // Navigation between steps
        var currentStep = 0;
        var steps = document.querySelectorAll('.step');

        function showStep(stepIndex) {
            // Hide all steps
            steps.forEach(function(step) {
                step.classList.remove('active');
            });
            // Show the current step
            steps[stepIndex].classList.add('active');
        }

        // Previous button click handler
        document.querySelectorAll('.prev-step').forEach(function(button) {
            button.addEventListener('click', function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        // Next button click handler
        document.querySelectorAll('.next-step').forEach(function(button) {
            button.addEventListener('click', function() {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        // Submit form
        document.getElementById('submit-form').addEventListener('click', function() {
            // You can add form submission logic here
            alert("Form submitted successfully!");
            setTimeout(function() {
                window.location.href = "index.php";
            }, 1000); // Delay redirection for 1 second
        });

        function rate(value) {
            // Highlight selected stars
            var stars = document.querySelectorAll('.rating span');
            for (var i = 0; i < stars.length; i++) {
                if (i < value) {
                    stars[i].classList.add('selected');
                } else {
                    stars[i].classList.remove('selected');
                }
            }

            // Send rating to server (you can implement your logic here)
            console.log("User rated:", value);
        }
    </script>



</body>

</html>