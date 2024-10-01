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
    <meta name="description" content="We are working through online path, here we are sharing online links. As per issues and problems we can also serve at community level. Our service is not limited in one sector we provide all kind of service in social,
        economic, financial, educational, emotional cultural and environmental issues.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        <style>.card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            flex-grow: 1;
        }
    </style>
    </style>
</head>

<body>

    <!-- Navbar Started-->
    <header id="header">
        <div class="nav">
            <div class="nav-brand">
                <img src="./assets/images/logo.jpg" alt="logo" srcset="">
                <h2>Passion Driven</h2>
            </div>
            <div class="nav-item">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About us</a></li>
                    <li><a href="./mission.php">Objectives</a></li>
                    <li><a href="./service.php">Projects</a></li>
                    <li><a href="gallery">Gallary</a></li>
                    <li><a href="./index.php#contact" class="contact-btn">Contact</a></li>
                </ul>
                <div class="toggle" onclick="toggle()"></div>

            </div>
        </div>
    </header>


    <div class="container"
        style="background-color: deeppink;margin:10px; text-align:center;">
        <div class="mb-3">
            <h1>Our Gallery</h1>
        </div>
    </div>
    <!-- gallery -->
    <!-- Add this after the form for adding new images -->
    <div class="container-fluid mt-5">
        <h2 class="mb-4">Gallery Images</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <?php
            $sql = "SELECT * FROM gallery ORDER BY id DESC";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);

            if ($query->rowCount() > 0) {
                foreach ($results as $result) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card">
                            <img src="assets/images/<?php echo htmlentities($result->image_path); ?>" class="card-img-top" alt="<?php echo htmlentities($result->title); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlentities($result->title); ?></h5>
                                <h6 class="card-text" style="font-size: 14px;"><?php echo htmlentities($result->description); ?></h6>
                                <form action="manage-gallery.php" method="POST">
                                    <input type="hidden" name="delete_id" value="<?php echo htmlentities($result->id); ?>">
                                    <!-- <button type="submit" class="btn btn-danger" name="deleteImage" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p>No images found in the gallery.</p>";
            }
            ?>
        </div>
    </div>

    <?php
    if (isset($_POST['deleteImage'])) {
        $delete_id = $_POST['delete_id'];

        // First, get the image path to delete the file
        $sql = "SELECT image_path FROM gallery WHERE id = :delete_id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':delete_id', $delete_id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);

        if ($result) {
            $image_path = "../assets/images/" . $result->image_path;
            if (file_exists($image_path)) {
                unlink($image_path);
            }

            // // Now delete the database entry
            // $sql = "DELETE FROM gallery WHERE id = :delete_id";
            // $query = $dbh->prepare($sql);
            // $query->bindParam(':delete_id', $delete_id, PDO::PARAM_INT);

            // if ($query->execute()) {
            //     echo "<div class='alert alert-success mt-3'>Image deleted successfully!</div>";
            //     echo "<script>window.location.href = 'manage-gallery.php';</script>";
            // } else {
            //     echo "<div class='alert alert-danger mt-3'>Error deleting image. Please try again.</div>";
            // }
        }
    }
    ?>




    <!-------- Footer Started --------->


    <section id="footer">
        <div class="main-footer">
            <div class="logoinfo" data-aos="fade-up">
                <h2>Passion Driven</h2>
                <p>Giving back to the society</p>

                <div class="contact-details">
                    <h1>Contact Us</h1>
                    <li>
                        <div class="fa fa-phone"></div><a href="tel:+919326048690">+254712345678</a>
                    </li>
                    <li>
                        <div class="fa fa-envelope"></div><a href="mailto:wenbusale383@gmail.com">wenstech@gmail.com</a>
                    </li>
                    </li>
                </div>
            </div>
            <div class="com " data-aos="fade-up">
                <h1>About</h1>
                <ul>
                    <li><a href="./about.php">About</a></li>
                    <li><a href="./mission.php">Mission</a></li>
                    <li><a href="./service.php"> Projects</a></li>
                </ul>
            </div>
            <div class="info " data-aos="fade-up">
                <!-- <h1>Infomation</h1>
                <ul>
                    <li><a href="">Blogs</a></li>
                    <li><a href="">Gallary</a></li>
                    <li><a href="">Contact</a></li>
                </ul> -->
            </div>
        </div>
    </section>

    <footer>
        © 2024 All Rights Reserved Passion Driven
    </footer>



    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
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

    <script src="./assets/main.js "></script>

</body>

</html>