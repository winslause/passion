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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="./assets/images/logo.jpg" alt="logo" height="90" class="d-inline-block align-top me-2">
          <span style="font-size: 24px; color: blue; font-weight: bold;">PASSION DRIVEN</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./about.php">About us</a></li>
          <li class="nav-item"><a class="nav-link" href="./mission.php">Objectives</a></li>
          <li class="nav-item"><a class="nav-link" href="./service.php">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link " href="./index.php#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="text-center mb-5" style="background-color:deeppink;">
        <h1>About Us</h1>
        <p class="lead" style="margin:20px;">We are here to give back to the society</p>
      </div>
      <div class="row align-items-center" data-aos="fade-up">
        <div class="col-lg-6">
          <h2></h2>
          <p>As form of giving back it was an initiative of going to different children home in Nairobi to spending time with the kids at those centers. With the help of leadership team which plans in advance and visit the home before the day of the event this helps in easier access of location and getting the numbers of kids which helps in planning, from there they select one Sunday which is usually last Sunday of the month since all members are available.</p>
          <p>As part of the program of the day the team:</p>
          <ol>
            <li>prepares meals for the kids,</li>
            <li>washing of their clothes,</li>
            <li>general cleanup of the center,</li>
            <li>plays in door games like chess,</li>
            <li>outdoors games like football and Cati in women.</li>
          </ol>
          <p>It helps the team helps to remind themselves f their younger age when growing up, as a result the team always get good feedback from centers they asked us to always visit them.</p>
          <p>So far we have been able to visit more than 11 sub counties in Nairobi out 17:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Kibera</li>
            <li class="list-group-item">wamo Kawangware</li>
            <li class="list-group-item">cana in Sinai</li>
            <li class="list-group-item">Thoogoto in kikuyu</li>
            <li class="list-group-item">Osiligi in Kiserian</li>
            <li class="list-group-item">Amazing wonders in Kahawa west</li>
            <li class="list-group-item">Brydes center in Kitengela</li>
            <li class="list-group-item">Emmanuel home in Kamulu</li>
            <li class="list-group-item">Kariobangi outreach In Kariobangi</li>
          </ul>
          <p>Some of the homes the team has visited more than once also the team has visited Kenyatta national hospital for the kids who are diagnosed with cancer. During the visit the team also share on menstrual health, menstrual hygiene and menstrual cycle in girls and mentorship in boys this helps in both boys and girl's empowerment.</p>
        </div>
        <div class="col-lg-6">
          <img src="./assets/images/about4.jpg" class="img-fluid" alt="About Image">
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="h6 text-uppercase text-secondary">Our Team</h2>
        <p class="display-5">We are here to uplift the society.</p>
        <hr class="w-25 mx-auto">
      </div>

      <div class="row g-4">
        <?php
        $sql = "SELECT * FROM users";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
          foreach ($results as $result) {
        ?>
            <div class="col-md-4">
              <div class="card h-100 border-0 shadow">
                <img src="./assets/images/<?php echo htmlentities($result->image1); ?>" class="card-img-top" alt="<?php echo htmlentities($result->name1); ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlentities($result->name1); ?></h5>
                  <p class="card-text"><?php echo htmlentities($result->description1); ?></p>
                </div>
                <div class="card-footer bg-white border-top-0">
                  <small class="text-muted">
                    <i class="fas fa-lightbulb text-primary me-2"></i>
                    <?php echo htmlentities($result->role1); ?>
                  </small>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h2>Passion Driven</h2>
          <p>Giving back to the society</p>
          <h5>Contact Us</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-phone me-2"></i><a href="tel:+254712345678" class="text-white">+254712345678</a></li>
            <li><i class="fas fa-envelope me-2"></i><a href="mailto:wenstech@gmail.com" class="text-white">wenstech@gmail.com</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <h5>About</h5>
          <ul class="list-unstyled">
            <li><a href="./about.php" class="text-white">About</a></li>
            <li><a href="./mission.php" class="text-white">Mission</a></li>
            <li><a href="./service.php" class="text-white">Projects</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <!-- Additional footer content if needed -->
        </div>
      </div>
    </div>
  </footer>

  <div class="bg-dark text-white text-center py-3">
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
</body>

</html>