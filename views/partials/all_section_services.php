<style>
    :root {
        --main-color-3: #1f0404;
        --main-color-4: #ffffff;
        --main-color-1: #D1A730;
        --main-color-2: #00335c;
        --main-color-5: #e6e6e6;
        --main-color-3: #1f8c95;
        --fonts-1: "Montserrat", sans-serif !important;
        --fonts-2: "Poppins", sans-serif !important;
    }


    .custom-container-services {
        margin-top: 70px;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 140px;
        justify-content: center;
    }

    .custom-heading {
        font-size: 2.5em;
        color: var(--main-color-2);
        text-align: center;
        font-family: var(--fonts-1);
        margin-bottom: -2px;
    }

    .custom-p {
        margin-bottom: 50px;
    }



    .custom-service-card-all:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .custom-service-icon-all {
        font-size: 4em;
        color: var(--main-color-1);
        margin-right: 20px;
    }

    .custom-service-title-all {
        font-size: 1.3em !important;
        color: var(--main-color-2);
        margin-bottom: 10px;
        font-family: var(--fonts-1);
    }

    .custom-service-description-all {
        color: #666666;
        font-size: 14px;
        flex: 1;
        display: flex;
        /* align-items: center;
        justify-content: center;
        text-align: center; */
    }

    .custom-stretched-link {
        position: relative;
        z-index: 1;
    }

    .custom-service-card-all:hover .custom-stretched-link::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 10px;
    }

    .custom-row-services-all {
        display: flex;
        gap: 15px;
        /* margin-right: 15px;
        margin-left: 15px; */
        width: 100%;
        margin-top: 10px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .custom-col-lg-3 {
        flex: 0 0 calc(25% - 30px);
        max-width: calc(25% - 30px);
        display: flex;
    }

    @media (max-width: 992px) {
        .custom-col-lg-3 {
            flex: 0 0 calc(50% - 30px);
            max-width: calc(50% - 30px);
        }
    }

    @media (max-width: 576px) {
        .custom-col-lg-3 {
            flex: 0 0 calc(100% - 30px);
            max-width: calc(100% - 30px);
        }
    }
</style>

<div class="custom-container-services">
    <h1 class="custom-heading mt-5">Our Services</h1>
    <p class="custom-p text-center">Select one of services that you are interested in </p>
    <!-- <br>Most valued services -->
    <p class="custom-p text-center"></p>
    <div class="custom-row-services-all">
        <!-- Service Items -->
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#works" class="custom-stretched-link">RPL Certification</a></h4>
                    <p class="custom-service-description-all">Get your skills recognized with our RPL certification process.</p>
                </div>
            </div>
        </div>

        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#section--silo-info" class="custom-stretched-link">Internship</a></h4>
                    <p class="custom-service-description-all">Gain practical experience through our internship programs.</p>
                </div>
            </div>
        </div>

        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#adecco-container" class="custom-stretched-link">Jobs</a></h4>
                    <p class="custom-service-description-all">Find job opportunities that match your skills and interests.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">Tourist Visa</a></h4>
                    <p class="custom-service-description-all">Explore new destinations with our tourist visa services.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-row-services-all">
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">Working Visa</a></h4>
                    <p class="custom-service-description-all">Combine work and travel with our working holiday visa programs.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">Business Visa</a></h4>
                    <p class="custom-service-description-all">Facilitate your business travels with our business visa services.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="services-details.html" class="custom-stretched-link">PR Assessment</a></h4>
                    <p class="custom-service-description-all">Get assessed for permanent residency eligibility.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">ELICOS</a></h4>
                    <p class="custom-service-description-all">Improve your English skills with our ELICOS courses.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-row-services-all">
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">Study Visa</a></h4>
                    <p class="custom-service-description-all">Apply for a study visa to pursue your education abroad.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="services-details.html" class="custom-stretched-link">Germany Programme</a></h4>
                    <p class="custom-service-description-all">Explore our exclusive programs for studying and working in Germany.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="services-details.html" class="custom-stretched-link">Courses</a></h4>
                    <p class="custom-service-description-all">Choose from a variety of courses to enhance your skills and knowledge.</p>
                </div>
            </div>
        </div>
        <div class="custom-col-lg-3 mb-4">
            <div class="custom-service-card-all">
                <div>
                    <h4 class="custom-service-title-all"><a href="#visaa" class="custom-stretched-link">Others</a></h4>
                    <p class="custom-service-description-all">Explore new destinations with us as you need</p>
                </div>
            </div>
        </div>
    </div>
    <div class="custom-row-services-all">


    </div>
    <!-- End Service Items -->
</div>