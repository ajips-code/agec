        // // for take data state selected
        // document.querySelectorAll('.state-option').forEach(option => {
        //     option.addEventListener('click', function() {
        //         document.querySelectorAll('.state-option').forEach(opt => opt.classList.remove('selected'));
        //         this.classList.add('selected');
        //         console.log('Selected state:', this.getAttribute('data-state'));
        //     });
        // });

        // // function for shotring options except others option is in bellow always
        // function sortOptions(selectId) {
        //     var select = document.getElementById(selectId);
        //     var options = select.options;
        //     var arr = [];

        //     for (var i = 1; i < options.length; i++) {
        //         if (options[i].value !== "Others") {
        //             arr.push(options[i].text);
        //         }
        //     }

        //     arr.sort();

        //     for (var i = 1, j = 0; i < options.length; i++) {
        //         if (options[i].value !== "Others") {
        //             options[i].text = arr[j];
        //             options[i].value = arr[j];
        //             j++;
        //         }
        //     }

        //     // Move the "Others" option to the bottom
        //     var othersOption;
        //     for (var i = 1; i < options.length; i++) {
        //         if (options[i].value === "Others") {
        //             othersOption = options[i];
        //             select.remove(i);
        //             select.add(othersOption);
        //         }
        //     }
        // }
        // // Call the function with the select ID
        // sortOptions('industry');


        // // function for get data selected from 3th step form that experience year and work location
        // function checkSelection() {
        //     const experienceYearsGroup = document.getElementById('experience-years');
        //     const workLocationGroup = document.getElementById('work-location');
        //     const warningMessage = document.getElementById('warningMessage');

        //     const experienceSelected = experienceYearsGroup.querySelector('button.active') !== null;
        //     const locationSelected = workLocationGroup.querySelector('button.active') !== null;

        //     if (experienceSelected && locationSelected) {
        //         warningMessage.style.display = 'none';

        //         // Sava value to local storage
        //         const experienceYears = experienceYearsGroup.querySelector('button.active').getAttribute('data-value');
        //         const workLocation = workLocationGroup.querySelector('button.active').getAttribute('data-value');
        //         localStorage.setItem('experience_years', experienceYears);
        //         localStorage.setItem('work_location', workLocation);
        //     }
        // }


        // document.querySelectorAll('.experience-btn-group button').forEach(button => {
        //     button.addEventListener('click', function() {
        //         const group = this.parentNode;

        //         group.querySelectorAll('button').forEach(btn => btn.classList.remove('active'));
        //         this.classList.add('active');

        //         console.log('Selected value:', this.getAttribute('data-value'));
        //         checkSelection();
        //     });
        // });

        // document.getElementById('next-btn').addEventListener('click', function() {
        //     const experienceYearsGroup = document.getElementById('experience-years');
        //     const workLocationGroup = document.getElementById('work-location');
        //     const warningMessage = document.getElementById('warningMessage');

        //     const experienceSelected = experienceYearsGroup.querySelector('button.active') !== null;
        //     const locationSelected = workLocationGroup.querySelector('button.active') !== null;

        //     if (experienceSelected && locationSelected) {
        //         warningMessage.style.display = 'none';
        //     } else {
        //         warningMessage.style.display = 'block';
        //     }
        // });

        // const experienceYearsBtns = document.querySelectorAll("#experience-years button");
        // experienceYearsBtns.forEach(btn => btn.addEventListener("click", () => {
        //     experienceYearsBtns.forEach(b => b.classList.remove("active"));
        //     btn.classList.add("active");
        //     document.getElementById('experience-years').value = btn.getAttribute("data-value");
        // }));

        // const workLocationBtns = document.querySelectorAll("#work-location button");
        // workLocationBtns.forEach(btn => btn.addEventListener("click", () => {
        //     workLocationBtns.forEach(b => b.classList.remove("active"));
        //     btn.classList.add("active");
        //     document.getElementById('work-location').value = btn.getAttribute("data-value");
        // }));

        // const experienceYearsSelect = document.getElementById('experience-years');
        // const workLocationSelect = document.getElementById('work-location');


        // // Get Data state selection
        // const stateOptions = document.querySelectorAll(".state-option");
        // stateOptions.forEach(option => option.addEventListener("click", () => {
        //     stateOptions.forEach(o => o.classList.remove("selected"));
        //     option.classList.add("selected");
        //     document.querySelector('input[name="state"]').value = option.getAttribute("data-state");
        // }));


        // // validation step for flow step to next step and previous step and get the lines of number steps 
        // document.addEventListener("DOMContentLoaded", function() {
        //     const steps = document.querySelectorAll('.step');
        //     const formSteps = document.querySelectorAll('.form-step');
        //     const nextBtn = document.getElementById('next-btn');
        //     const prevBtn = document.getElementById('prev-btn');

        //     let currentStep = 0;

        //     function updateProgressLine() {
        //         const progressLine = document.querySelector('.progress-line');
        //         const activeStep = document.querySelector('.step.active');
        //         if (activeStep) {
        //             const activeStepIndex = Array.from(steps).indexOf(activeStep);
        //             const progress = (activeStepIndex / (steps.length - 1)) * 100;
        //             progressLine.style.width = `${progress}%`;
        //         }
        //     }

        //     function showStep(stepIndex) {
        //         steps[currentStep].classList.remove('active');
        //         formSteps[currentStep].classList.remove('active');

        //         currentStep = stepIndex;

        //         steps[currentStep].classList.add('active');
        //         formSteps[currentStep].classList.add('active');

        //         prevBtn.style.display = currentStep > 0 ? 'inline-block' : 'none';
        //         nextBtn.style.display = currentStep < steps.length - 1 ? 'inline-block' : 'none';
        //         updateProgressLine();
        //     }

        //     nextBtn.addEventListener('click', function() {
        //         if (currentStep < steps.length - 1) {
        //             showStep(currentStep + 1);
        //         } else {
        //             alert('Form submitted!');
        //         }
        //     });

        //     prevBtn.addEventListener('click', function() {
        //         if (currentStep > 0) {
        //             showStep(currentStep - 1);
        //         }
        //     });

        //     showStep(currentStep);
        // });


        // // Get data selected from step 1 to show the options for step 2
        // document.addEventListener("DOMContentLoaded", function() {
        //     var industrySelect = document.getElementById("industry");
        //     var qualificationSelect = document.getElementById("qualification");

        //     function qualificationSelectChange() {
        //         var industry = industrySelect.value;
        //         switch (industry) {
        //             case "Mechanical Engineering":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Engineering - Fabrication Trade (MEM30319)">Certificate III in Engineering - Fabrication Trade (MEM30319)</option>
        //                     <option value="Certificate III in Engineering - Mechanical Trade (MEM30219)">Certificate III in Engineering - Mechanical Trade (MEM30219)</option>
        //                     <option value="Diploma of Engineering - Advanced Trade (MEM50119)">Diploma of Engineering - Advanced Trade (MEM50119)</option>
        //                     <option value="Advanced Diploma of Engineering Technology - Mechanical (22479VIC)">Advanced Diploma of Engineering Technology - Mechanical (22479VIC)</option>
        //                     <option value="Bachelor of Mechanical Engineering">Bachelor of Mechanical Engineering</option>
        //                     <option value="Master of Mechanical Engineering">Master of Mechanical Engineering</option>
        //                 `;
        //                 break;
        //             case "Construction":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Carpentry (CPC30220)">Certificate III in Carpentry (CPC30220)</option>
        //                     <option value="Certificate III in Painting and Decorating (CPC30620)">Certificate III in Painting and Decorating (CPC30620)</option>
        //                     <option value="Certificate IV in Building and Construction (CPC40120)">Certificate IV in Building and Construction (CPC40120)</option>
        //                     <option value="Diploma of Building and Construction (Building) (CPC50220)">Diploma of Building and Construction (Building) (CPC50220)</option>
        //                     <option value="Advanced Diploma of Building and Construction (Management) (CPC60220)">Advanced Diploma of Building and Construction (Management) (CPC60220)</option>
        //                     <option value="Bachelor of Construction Management">Bachelor of Construction Management</option>
        //                     <option value="Master of Construction Management">Master of Construction Management</option>
        //                 `;
        //                 break;
        //             case "Finance":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate IV in Accounting and Bookkeeping (FNS40222)">Certificate IV in Accounting and Bookkeeping (FNS40222)</option>
        //                     <option value="Diploma of Accounting (FNS50222)">Diploma of Accounting (FNS50222)</option>
        //                     <option value="Advanced Diploma of Accounting (FNS60222)">Advanced Diploma of Accounting (FNS60222)</option>
        //                     <option value="Bachelor of Finance">Bachelor of Finance</option>
        //                     <option value="Master of Finance">Master of Finance</option>
        //                 `;
        //                 break;
        //             case "Civil Construction":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Civil Construction (RII30920)">Certificate III in Civil Construction (RII30920)</option>
        //                     <option value="Certificate III in Civil Construction Plant Operations (RII30820)">Certificate III in Civil Construction Plant Operations (RII30820)</option>
        //                     <option value="Certificate IV in Civil Construction Design (RII40720)">Certificate IV in Civil Construction Design (RII40720)</option>
        //                     <option value="Diploma of Civil Construction Design (RII50520)">Diploma of Civil Construction Design (RII50520)</option>
        //                     <option value="Advanced Diploma of Civil Construction (RII60520)">Advanced Diploma of Civil Construction (RII60520)</option>
        //                     <option value="Bachelor of Civil Engineering">Bachelor of Civil Engineering</option>
        //                     <option value="Master of Civil Engineering">Master of Civil Engineering</option>
        //                 `;
        //                 break;
        //             case "Social Work":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate IV in Community Services (CHC42015)">Certificate IV in Community Services (CHC42015)</option>
        //                     <option value="Diploma of Community Services (CHC52015)">Diploma of Community Services (CHC52015)</option>
        //                     <option value="Bachelor of Social Work">Bachelor of Social Work</option>
        //                     <option value="Master of Social Work">Master of Social Work</option>
        //                 `;
        //                 break;
        //             case "IT":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate IV in Information Technology (ICT40120)">Certificate IV in Information Technology (ICT40120)</option>
        //                     <option value="Diploma of Information Technology (ICT50220)">Diploma of Information Technology (ICT50220)</option>
        //                     <option value="Advanced Diploma of Information Technology (ICT60220)">Advanced Diploma of Information Technology (ICT60220)</option>
        //                     <option value="Bachelor of Information Technology">Bachelor of Information Technology</option>
        //                     <option value="Master of Information Technology">Master of Information Technology</option>
        //                 `;
        //                 break;
        //             case "Hospitality":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Hospitality (SIT30616)">Certificate III in Hospitality (SIT30616)</option>
        //                     <option value="Certificate IV in Hospitality (SIT40416)">Certificate IV in Hospitality (SIT40416)</option>
        //                     <option value="Diploma of Hospitality Management (SIT50416)">Diploma of Hospitality Management (SIT50416)</option>
        //                     <option value="Advanced Diploma of Hospitality Management (SIT60316)">Advanced Diploma of Hospitality Management (SIT60316)</option>
        //                     <option value="Bachelor of Hospitality Management">Bachelor of Hospitality Management</option>
        //                     <option value="Master of Hospitality Management">Master of Hospitality Management</option>
        //                 `;
        //                 break;
        //             case "Agriculture":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Agriculture (AHC30116)">Certificate III in Agriculture (AHC30116)</option>
        //                     <option value="Certificate IV in Agriculture (AHC40116)">Certificate IV in Agriculture (AHC40116)</option>
        //                     <option value="Diploma of Agriculture (AHC50116)">Diploma of Agriculture (AHC50116)</option>
        //                     <option value="Advanced Diploma of Agribusiness Management (AHC60316)">Advanced Diploma of Agribusiness Management (AHC60316)</option>
        //                     <option value="Bachelor of Agricultural Science">Bachelor of Agricultural Science</option>
        //                     <option value="Master of Agricultural Science">Master of Agricultural Science</option>
        //                 `;
        //                 break;
        //             case "Education":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Early Childhood Education and Care (CHC30113)">Certificate III in Early Childhood Education and Care (CHC30113)</option>
        //                     <option value="Diploma of Early Childhood Education and Care (CHC50113)">Diploma of Early Childhood Education and Care (CHC50113)</option>
        //                     <option value="Bachelor of Education (Primary)">Bachelor of Education (Primary)</option>
        //                     <option value="Bachelor of Education (Secondary)">Bachelor of Education (Secondary)</option>
        //                     <option value="Master of Education">Master of Education</option>
        //                 `;
        //                 break;
        //             case "Entertainment":
        //                 qualificationSelect.innerHTML = `
        //                     <option value="">Select Qualification</option>
        //                     <option value="Certificate III in Screen and Media (CUA31020)">Certificate III in Screen and Media (CUA31020)</option>
        //                     <option value="Diploma of Screen and Media (CUA51020)">Diploma of Screen and Media (CUA51020)</option>
        //                     <option value="Advanced Diploma of Screen and Media (CUA60620)">Advanced Diploma of Screen and Media (CUA60620)</option>
        //                     <option value="Bachelor of Arts (Entertainment Industries)">Bachelor of Arts (Entertainment Industries)</option>
        //                     <option value="Master of Arts (Entertainment Industries)">Master of Arts (Entertainment Industries)</option>
        //                 `;
        //                 break;
        //             default:
        //                 qualificationSelect.innerHTML = `<option value="">Select Qualification</option>`;
        //         }
        //     }
        //     industrySelect.addEventListener("change", qualificationSelectChange);
        // });


        // // Call all functions and create validation to save into local storage and return also send data to server and then php validation can save into database
        // document.addEventListener('DOMContentLoaded', function() {
        //     const steps = document.querySelectorAll('.form-step');
        //     const nextBtn = document.getElementById('next-btn');
        //     const prevBtn = document.getElementById('prev-btn');
        //     const submitBtn = document.getElementById('submit');
        //     let currentStep = 0;

        //     function showStep(step) {
        //         steps.forEach((s, index) => {
        //             s.classList.toggle('active', index === step);
        //         });
        //         prevBtn.style.display = step === 0 ? 'none' : 'inline-block';
        //         nextBtn.style.display = step === steps.length - 1 ? 'none' : 'inline-block';
        //         submitBtn.style.display = step === steps.length - 1 ? 'inline-block' : 'none';
        //     }

        //     nextBtn.addEventListener('click', () => {
        //         if (validateStep(currentStep)) {
        //             saveToLocalStorage(currentStep);
        //             currentStep++;
        //             showStep(currentStep);
        //         }
        //     });

        //     prevBtn.addEventListener('click', () => {
        //         currentStep--;
        //         showStep(currentStep);
        //     });

        //     submitBtn.addEventListener('click', () => {
        //         saveToLocalStorage(currentStep);
        //         submitForm();
        //     });

        //     function validateStep(step) {
        //         // if (step === 4) { // Validasi hanya pada langkah 5
        //         //     const form = document.getElementById('step5-form');
        //         //     return ['fullname', 'usi-number', 'email', 'phone'].every(id => form[id].value !== '');
        //         // }
        //         // return true;
        //         // if (step === 0) {
        //         //     return document.getElementById('industry').value !== '';
        //         // } else if (step === 1) {
        //         //     return document.getElementById('qualification').value !== '';
        //         // } else if (step === 2) {
        //         //     return document.querySelector('#experience-years button.active') && document.querySelector('#work-location button.active');
        //         // } else if (step === 3) {
        //         //     return document.querySelector('.state-options .selected') !== null;
        //         // } else if (step === 4) {
        //         //     const form = document.getElementById('step5-form');
        //         //     return ['fullname', 'usi-number', 'email', 'phone'].every(id => form[id].value !== '');
        //         // }
        //         return true;
        //     }

        //     function showNotification(message, isError = false) {
        //         const notification = document.getElementById('notification');
        //         notification.textContent = message;
        //         notification.classList.toggle('error', isError);
        //         notification.style.display = 'block';

        //         setTimeout(() => {
        //             notification.style.display = 'none';
        //         }, 3000);
        //     }

        //     function saveToLocalStorage(step) {
        //         if (step === 0) {
        //             localStorage.setItem('industry', document.getElementById('industry').value);
        //         } else if (step === 1) {
        //             localStorage.setItem('qualification', document.getElementById('qualification').value);
        //         } else if (step === 2) {
        //             const experienceYearsButton = document.querySelector('#experience-years button.active');
        //             const workLocationButton = document.querySelector('#work-location button.active');
        //             const experienceYears = experienceYearsButton ? experienceYearsButton.getAttribute('data-value') : '';
        //             const workLocation = workLocationButton ? workLocationButton.getAttribute('data-value') : '';
        //             localStorage.setItem('experience_years', experienceYears);
        //             localStorage.setItem('work_location', workLocation);
        //             console.log('Experience years:', experienceYears);
        //             console.log('Work location:', workLocation);
        //         } else if (step === 3) {
        //             const state = document.querySelector('.state-options .selected')?.dataset.state;
        //             localStorage.setItem('state', state);
        //         } else if (step === 4) {
        //             const form = document.getElementById('step5-form');
        //             localStorage.setItem('fullname', form.fullname.value);
        //             localStorage.setItem('usi-number', form['usi-number'].value);
        //             localStorage.setItem('email', form.email.value);
        //             localStorage.setItem('phone', form.phone.value);
        //             localStorage.setItem('message', form.message.value);
        //         } else if (step === 5) {
        //             const visaDoc = document.getElementById('visa-doc').files[0];
        //             const resume = document.getElementById('resume').files[0];

        //             // Save file names to local storage
        //             localStorage.setItem('visa_doc_filename', visaDoc ? visaDoc.name : '');
        //             localStorage.setItem('resume_filename', resume ? resume.name : '');
        //         }
        //     }

        //     function submitForm() {
        //         const formData = new FormData();
        //         formData.append('industry', localStorage.getItem('industry'));
        //         formData.append('qualification', localStorage.getItem('qualification'));
        //         formData.append('experience_years', localStorage.getItem('experience_years'));
        //         formData.append('work_location', localStorage.getItem('work_location'));
        //         formData.append('state', localStorage.getItem('state'));
        //         formData.append('fullname', localStorage.getItem('fullname'));
        //         formData.append('usi-number', localStorage.getItem('usi-number'));
        //         formData.append('email', localStorage.getItem('email'));
        //         formData.append('phone', localStorage.getItem('phone'));
        //         formData.append('message', localStorage.getItem('message'));

        //         const visaDoc = document.getElementById('visa-doc').files[0];
        //         const resume = document.getElementById('resume').files[0];
        //         if (visaDoc) {
        //             formData.append('visa-doc', visaDoc);
        //         }
        //         if (resume) {
        //             formData.append('resume', resume);
        //         }

        //         const xhr = new XMLHttpRequest();
        //         xhr.open('POST', 'rpl_certification-form.php', true);
        //         xhr.onload = function() {
        //             if (xhr.status === 200) {
        //                 showNotification('Submission successful!');
        //                 setTimeout(function() {
        //                     window.location.href = 'rpl_certification.php';
        //                 }, 3000);
        //             } else {
        //                 showNotification('Submission failed with status: ' + xhr.status, true);
        //             }
        //         };

        //         xhr.onerror = function() {
        //             showNotification('Request failed', true);
        //         };

        //         try {
        //             xhr.send(formData);
        //         } catch (error) {
        //             console.error('Error sending form data:', error);
        //             showNotification('An error occurred while submitting the form', true);
        //         }
        //     }
        //     showStep(currentStep);
        // });
