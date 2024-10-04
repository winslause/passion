<?php
session_start();
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('config.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name1, email1, message1) VALUES(:name, :email, :message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Message sent successfully";
    } else {
        $error = "Something went wrong. Please try again";
    }
}
?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .bg-light-gray {
            background-color: #f0f0f0;
        }

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

        .carousel-img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .carousel-img {
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            .carousel-img {
                height: 200px;
            }
        }
    </style>



</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./assets/images/logo.jpg" alt="logo" height="60" class="d-inline-block align-top me-2">
                <span style="font-size: 24px; color: #0056b3; font-weight: bold;">PASSION DRIVEN</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php">About us</a></li>
                    <li class="nav-item"><a class="nav-link" href="./mission.php">Objectives</a></li>
                    <li class="nav-item"><a class="nav-link" href="./service.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Carousel -->
    <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-wrap="true" data-bs-interval="2500">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./assets/images/home-1.png" class="d-block w-100 carousel-img" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/mwanadada.png" class="d-block w-100 carousel-img" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide1.jpg" class="d-block w-100 carousel-img" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="./assets/images/slide2.jpg" class="d-block w-100 carousel-img" alt="Slide 4">
            </div>
        </div>
    </div>


    <!-- Home Section -->
    <section id="home" class="py-5 " style="background-color:gray;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center" data-aos="fade-up" style="margin:10px;">
                    <h1 class="display-4">Giving back to the society</h1>
                    <p class="lead">Our aim is to have champions and leaders whom can share and guide others.</p>
                    <a href="#contact" class="btn btn-primary btn-lg">CONTACT</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center" data-aos="fade-up">
                <div class="col-md-6">
                    <h2>Our Group</h2>
                    <p><strong>Passion Driven</strong> is a registered self-help group in Kibera constituency Nairobi Kenya. The group was started by our founder who had just an idea of visiting one children home in Kibera FOLKS he communicated to few friends in which he got support donations, clothes, sanitary towels and soaps with this it formed a team.</p>
                    <p>The program of the day was to cook play games with the kids and make sure they have fun, after the event every person who came had enjoyed themselves to the brim, the team which was present for the first day was around 15 people after this the members chose the leaders and decided that it should be done more and more from there the leadership team planned events after one month there is an event.</p>
                </div>
                <div class="col-md-6">
                    <img src="./assets/images/about7.jpg" class="img-fluid" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Section -->
    <section id="service" class="py-5 bg-gray" style="background-color:deeppink;">

        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h3>Our Services</h3>
                <h2 class="display-4">Our aim is to have champions and leaders <br> whom can share and guide others.</h2>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5" style="background-image: url('assets/images/contact.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8" data-aos="fade-up">
                    <h2 class="text-center mb-4">Let's Connect</h2>
                    <p class="text-center mb-5">Please contact us and we will get back to you.</p>
                    <?php if (isset($msg)) : ?>
                        <div class="alert alert-success text-center" id="flash-message">
                            <?php echo $msg; ?>
                        </div>
                    <?php endif; ?>
                    <form action="index.php" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
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
                        <li><i class="fas fa-envelope"></i> <a href="mailto:wenbusale383@gmail.com" class="text-light">wenstech@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="./about.php" class="text-light">About</a></li>
                        <li><a href="./mission.php" class="text-light">Objectives</a></li>
                        <li><a href="./service.php" class="text-light">Projects</a></li>
                        <li><a href="./admin/index.php" class="text-light">Admin Login</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <!-- Additional footer content if needed -->
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-dark text-light text-center py-2">
        <small>© 2024 All Rights Reserved Passion Driven</small>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>