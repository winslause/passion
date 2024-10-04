<?php
session_start();
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('config.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1 0 auto;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
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
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="./assets/images/logo.jpg" alt="logo" height="90" class="d-inline-block align-top me-2">
                    <span style="font-size: 24px; color: blue; font-weight: bold;">PASSION DRIVEN</span>
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
    </header>

    <main>
        <div style="background-color:deeppink;" class="container-fluid py-3 text-center text-white mb-4">
            <h1>Our Gallery</h1>
        </div>


        <div class="container">
            <h2 class="mb-4 text-center">Gallery Images</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <?php
                $sql = "SELECT * FROM gallery ORDER BY id DESC";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);

                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {
                ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="assets/images/<?php echo htmlentities($result->image_path); ?>" class="card-img-top" alt="<?php echo htmlentities($result->title); ?>">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo htmlentities($result->title); ?></h5>
                                    <p class="card-text flex-grow-1"><?php echo htmlentities($result->description); ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<div class='col-12'><p class='text-center'>No images found in the gallery.</p></div>";
                }
                ?>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Passion Driven</h2>
                    <p>Giving back to the society</p>
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-phone"></i> <a href="tel:+254712345678" class="text-white">+254712345678</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:wenstech@gmail.com" class="text-white">wenstech@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="./about.php" class="text-white">About</a></li>
                        <li><a href="./mission.php" class="text-white">Mission</a></li>
                        <li><a href="./service.php" class="text-white">Projects</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="bg-secondary text-white text-center py-2">
        © 2024 All Rights Reserved Passion Driven
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>