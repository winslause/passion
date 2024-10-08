<!DOCTYPE html>
<html lang="en">

<head>
    <title>Passion Driven</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="We are working through online path, here we are sharing online links. As per issues and problems we can also serve at community level. Our service is not limited in one sector we provide all kind of service in social, economic, financial, educational, emotional cultural and environmental issues.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        .project-image {
            filter: grayscale(0%);
            transition: filter 0.6s ease-in-out;
        }

        .project-image:hover {
            filter: grayscale(0%);
        }

        @media (hover: none) {
            .project-image {
                filter: grayscale(0%);
                transition: filter 0.6s ease-in-out;
            }

            .project-image:active {
                filter: grayscale(0%);
            }

            /* .navbar-brand img {
                height: 30px !important;
            } */
        }

        /* Existing styles... */

        @media (max-width: 991px) {
            .navbar-brand {
                max-width: 80%;
            }

            .navbar-toggler {
                order: 2;
            }

            .brand-text {
                font-size: 18px;
            }
        }


        .project-image1 {
            filter: grayscale(0%);
            transition: filter 0.6s ease-in-out;
        }

        .project-image1:hover {
            filter: grayscale(0%);
        }

        @media (hover: none) {
            .project-image1 {
                filter: grayscale(0%);
                transition: filter 0.6s ease-in-out;
            }

            .project-image1:active {
                filter: grayscale(0%);
            }
        }
    </style>
    <style>
        .navbar {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            padding: 15px 0;
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0056b3 !important;
            font-size: 24px;
        }

        .nav-link {
            color: #333 !important;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.2s ease;
            padding: 10px 15px;
        }

        .nav-link:hover {
            color: #0056b3 !important;
            transform: translateY(-2px);
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        #homeCarousel {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>

    <style>
        .project-image1 {
            position: absolute;
            /* Position images on top of each other */
            opacity: 0;
            transition: opacity 1s ease-in-out;
            /* Fade transition for 1 second */
        }

        .project-image1.show {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./assets/images/logo.jpg" alt="logo" height="60" class="d-inline-block align-top me-2">
                <span class="brand-text">PASSION DRIVEN</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./mission.php">Objectives</a></li>
                    <li class="nav-item"><a class="nav-link" href="./service.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="./index.php#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Projects Section -->
    <section class="container my-5">
        <div class="text-center mb-5" style="background-color:deeppink;">
            <h1 class="display-4" style="margin:10px">Our Projects</h1>
            <p class="lead">We are here to give back to the society</p>
        </div>

        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-md-6">
                <img src="./assets/images/mwanadada.png" class="img-fluid project-image" alt="Mwanadada project">
            </div>
            <div class="col-md-6">
                <h2>Mwanadada project</h2>
                <p>Our emphasis and base on informing, training and guiding young girls on menstrual hygiene, menstrual hygiene products usage and disposal, sexual health, GBV and Rape.</p>
                <p>The above topics are all well scripted in our manual guide book which enables smooth facilitation of our classes.</p>
                <p>The program is also incorporated with life skills and mentorship to break the monotony of classroom boredom and to enable the girls keep informed of values, code of conduct and self-actualization in day-to-day life.</p>
                <p>After completion of the course our aim is to have champions and leaders whom can share and guide others through the training given unto them. We also promote a number of girls into our main group as beneficiaries of part of the program to help us whenever we do facilitation on the same topics to girls of their same age.</p>
            </div>
        </div>

        <div class="row align-items-center mb-5" data-aos="fade-up" id="chessmove">
            <div class="col-md-6 order-md-2">
                <div style="position: relative; height: 300px;"> <!-- Ensure a container for positioning images -->
                    <img src="./assets/images/ches1.jpg" class="img-fluid project-image1 show" id="slide1" alt="Chess club">
                    <img src="./assets/images/chess2.jpg" class="img-fluid project-image1" id="slide2" alt="Chess club">
                    <img src="./assets/images/chess3.jpg" class="img-fluid project-image1" id="slide3" alt="Chess club">
                    <img src="./assets/images/chess4.jpg" class="img-fluid project-image1" id="slide4" alt="Chess club">
                    <img src="./assets/images/chess5.jpg" class="img-fluid project-image1" id="slide5" alt="Chess club">
                    <img src="./assets/images/chess6.jpg" class="img-fluid project-image1" id="slide6" alt="Chess club">
                </div>
            </div>



            <div class="col-md-6 order-md-1">
                <h2>Chess club</h2>
                <p>Growing up in Kibera we had a lot of playing fields as we continue growing so does the developments around our locality hence the space which was used as playing field were develop and it was difficult now for us to go and play football and most of sports this pose a huge risk to the generation which is coming up since they have a lot of time if not well utilized it can go to waste. Secondly Kibera being largest informal settlements In Nairobi when kids get a lot of time, they may end up in substance abuse in boys and teenage pregnancy in girls, with this we introduced chess in Kibera.</p>
                <p>Our classes run each Saturday from 2:00 - 4:00pm at Anajali primary school, besides chess we do mentorship to the kids and also have a group therapy where they talk on how they feel. Apart from having fun chess has diverse skills like critical and analytical thinking, responsibility, turn taking improving and sharpening their memories. these lessons equip the kids with lifelong skills which they will use after school and beyond we believe the way to save the future is to start small.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h2>Passion Driven</h2>
                    <p>Giving back to the society</p>
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone"></i> <a href="tel:+254712345678" class="text-light">+254712345678</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:wenstech@gmail.com" class="text-light">wenstech@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="./about.php" class="text-light">About</a></li>
                        <li><a href="./mission.php" class="text-light">Objectives</a></li>
                        <li><a href="./service.php" class="text-light">Projects</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Additional footer content if needed -->
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-dark text-center text-light py-2">
        <small>© 2024 All Rights Reserved Passion Driven</small>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            debounceDelay: 50,
            throttleDelay: 99,
            offset: 120,
            delay: 0,
            duration: 1000,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',
        });
    </script>
    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.project-image1');

        function showSlides() {
            // Hide all images by removing the 'show' class
            slides.forEach(slide => {
                slide.classList.remove('show');
            });

            // Increment the slide index
            slideIndex++;

            // If we've reached the end of the slides, loop back to the start
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            // Show the current slide by adding the 'show' class
            slides[slideIndex - 1].classList.add('show');

            // Change slide every 3 seconds (3000 milliseconds)
            setTimeout(showSlides, 4000);
        }

        // Initialize the slideshow when the page loads
        showSlides();
    </script>
</body>

</html>