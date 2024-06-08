<style>
    .container-care-training {
        display: flex;
        flex-direction: row;
        padding: 20px;
        gap: 20px;
        transition: all 0.3s ease-in-out;
    }

    .image-section-care-training {
        flex: 1;
        transition: transform 0.3s ease-in-out;
    }

    .image-care-training {
        width: 100%;
        height: auto;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }

    .content-section-care-training {
        flex: 2;
        transition: opacity 0.3s ease-in-out;
    }

    .title-care-training {
        font-size: 2em;
        margin-bottom: 10px;
    }

    .description-care-training {
        font-size: 1.2em;
        margin-bottom: 10px;
    }

    .motto-care-training {
        font-weight: bold;
        font-size: 1.5em;
        margin-top: 20px;
    }

    .container-care-training:hover .image-section-care-training {
        transform: scale(1.05);
    }

    .container-care-training:hover .image-care-training {
        transform: scale(1.05);
    }

    .container-care-training:hover .content-section-care-training {
        opacity: 0.8;
    }

    .header-title-touristt {
        text-align: center;
        /* margin-top: 160px; */
        color: var(--main-color-2);
        font-family: var(--fonts-1);
        font-size: 2.7vw;
        font-family: "Montserrat", sans-serif !important;
    }
</style>
<h1 class="header-title-touristt">Germany Programme </h1>
<div>
    <div class="container-care-training">
        <div class="image-section-care-training">
            <img src="../../../images/germany-program.png" alt="Nurses and Instructor" class="image-care-training">
        </div>
        <div class="content-section-care-training">
            <h1 class="title-care-training">Ausbildung or education recognition at Australian Global Education Consultancy</h1>
            <p class="description-care-training">
                Starting a working and education with us means embarking on a career with prospects. Whether you're completing training as a geriatric nursing assistant or opting for the new generalist nursing education, you can expect a diverse and exciting learning experience. You'll gain theoretical knowledge at our Habibie Global and gather plenty of practical experience in our various facilities. And after the training? – A multitude of opportunities await you within our organization. The same applies to your recognition year in child and youth welfare. Here too, you'll have the chance to gain diverse practical experience in our various groups and locations, make individual contributions, and carry out projects. Following the recognition year, there are numerous paths for further education and advancement into leadership positions within our child and youth welfare department.
            </p>
            <p class="motto-care-training">Gemeinsam Mensch sein</p>
        </div>
        <div class="flex-container-btn">
            <a href="./views/germany_programme.php" class="read-more">
                Learn More <span class="sr-only">about this is some title</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="./views/gemany_programme-form.php" class="read-more">
                Enrol Now <span class="sr-only">about this is some title</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.container-care-training');
        container.addEventListener('mouseenter', function() {
            container.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
        });
        container.addEventListener('mouseleave', function() {
            container.style.boxShadow = 'none';
        });
    });
</script>