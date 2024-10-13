<?php
session_start();
error_reporting(0);
include('../config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>admin portal</title>
    </head>

    <body>
        <div class="wrapper">
            <!-- Sidebar -->
            <aside id="sidebar">
                <div class="h-100">
                    <div class="sidebar-logo">
                        <a href="#" style="color: blue;">Passion Driven</a>
                    </div>
                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">

                        </li>
                        <li class="sidebar-item">
                            <a href="home.php" class="sidebar-link">
                                <i class="fa-solid fa-list pe-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="manage-users.php" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
                                <i class="fa-regular fa-file-lines pe-2"></i>
                                Members
                            </a>
                            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="manage-users.php#addmember" class="sidebar-link">Manage Team</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard"
                                aria-expanded="false" aria-controls="dashboard">
                                <i class="fa-solid fa-sliders pe-2"></i>
                                Gallery
                            </a>
                            <ul id="dashboard" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="manage-gallery.php" class="sidebar-link">manage gallery</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li class="sidebar-header">

                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#multi"
                                aria-expanded="false" aria-controls="multi">
                                <i class="fa-solid fa-share-nodes pe-2"></i>
                                Projects
                            </a>
                            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                        Manage Projects
                                    </a>
                                    <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                        <li class="sidebar-item">
                                            <a href="projects.php" class="sidebar-link">Add Project</a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="projects.php" class="sidebar-link">Edit/Remove project</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"></li>
                        <a href="contact-us.php" class="sidebar-link">
                            <i class="fa-solid fa-list pe-2"></i>
                            Contact Us
                        </a>
                        </li>
                        <li class="sidebar-item" style="margin-top: 30px; margin-bottom:30px">
                            <a href="logout.php" class="sidebar-link">
                                <i class="fa-solid fa-sign-out-alt pe-2"></i>
                                logout
                            </a>
                        </li>

                        <li class="sidebar-item" style="margin-top: 30px; margin-bottom:30px">
                            <a href="changepassword.php" class="sidebar-link">
                                <i class="fa-solid fa-key pe-2"></i>
                                Change password
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Main Component -->
            <div class="main">
                <nav class="navbar navbar-expand px-3 border-bottom">
                    <!-- Button for sidebar toggle -->
                    <button class="btn" type="button" data-bs-theme="dark">
                        <span class="navbar-toggler-icon" style="background-color: black;"></span>

                    </button>

                    <!-- <button class="btn btn-secondary float-lg-end" type="button" data-bs-theme="dark"
                    style="margin-left: 800px;">
                    <a href="logout.php">logout</a>

                </button> -->

                </nav>




                <!-- MAIN CONTENT -->
                <main class="content px-3 py-2">

                    <div class="container-fluid"
                        style="background-color: deeppink;margin:10px; display:block; text-align: center;">
                        <div class="mb-3">
                            <h1>Gallery</h1>
                        </div>
                    </div>

                    <!-- Add this inside the <main> element -->
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <h2 class="mb-4">Add New Image to our Gallery</h2>
                                <form action="manage-gallery.php" id="uploadForm" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="imageTitle" class="form-label">Image Title</label>
                                        <input type="text" class="form-control" id="imageTitle" name="imageTitle" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="imageDescription" class="form-label">Image Description</label>
                                        <textarea class="form-control" id="imageDescription" name="imageDescription" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="imageFile" class="form-label">Select Image</label>
                                        <input type="file" class="form-control" id="imageFile" name="imageFile" accept="image/*" required>
                                        <span id="error-message" style="color: red;"></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="addImage">Add to Gallery</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_POST['addImage'])) {
                        $imageTitle = $_POST['imageTitle'];
                        $imageDescription = $_POST['imageDescription'];
                        $imageName = $_FILES['imageFile']['name'];
                        $imageTmp = $_FILES['imageFile']['tmp_name'];
                        $uploadPath = "../assets/images/" . $imageName;

                        if (move_uploaded_file($imageTmp, $uploadPath)) {
                            $sql = "INSERT INTO gallery (title, description, image_path) VALUES (:title, :description, :image_path)";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':title', $imageTitle, PDO::PARAM_STR);
                            $query->bindParam(':description', $imageDescription, PDO::PARAM_STR);
                            $query->bindParam(':image_path', $imageName, PDO::PARAM_STR);

                            if ($query->execute()) {
                                echo "<div class='alert alert-success mt-3'>Image added to gallery successfully!</div>";
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Error adding image to gallery. Please try again.</div>";
                            }
                        } else {
                            echo "<div class='alert alert-danger mt-3'>Error uploading image. Please try again.</div>";
                        }
                    }
                    ?>






                    <!-- Add this after the form for adding new images -->
                    <div class="container mt-5">
                        <h2 class="mb-4">Gallery Images</h2>
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM gallery ORDER BY id DESC";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                            ?>
                                    <div class="col-md-4 mb-4">
                                        <div class="card">
                                            <img src="../assets/images/<?php echo htmlentities($result->image_path); ?>" class="card-img-top" alt="<?php echo htmlentities($result->title); ?>">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo htmlentities($result->title); ?></h5>
                                                <p class="card-text"><?php echo htmlentities($result->description); ?></p>
                                                <form action="manage-gallery.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo htmlentities($result->id); ?>">
                                                    <button type="submit" class="btn btn-danger" name="deleteImage" onclick="return confirm('Are you sure you want to delete this image?')">Delete</button>
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

                            // Now delete the database entry
                            $sql = "DELETE FROM gallery WHERE id = :delete_id";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':delete_id', $delete_id, PDO::PARAM_INT);

                            if ($query->execute()) {
                                echo "<div class='alert alert-success mt-3'>Image deleted successfully!</div>";
                                echo "<script>window.location.href = 'manage-gallery.php';</script>";
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Error deleting image. Please try again.</div>";
                            }
                        }
                    }
                    ?>


                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
        <script>
            document.getElementById('uploadForm').addEventListener('submit', function(e) {
                const fileInput = document.getElementById('imageFile');
                const file = fileInput.files[0];
                const maxSize = 2 * 1024 * 1024; // 2MB in bytes
                const errorMessage = document.getElementById('error-message');

                if (file) {
                    if (file.size > maxSize) {
                        errorMessage.textContent = "File size must be less than 2MB.";
                        e.preventDefault(); // Prevent form submission
                    } else {
                        errorMessage.textContent = ""; // Clear any previous errors
                    }
                }
            });
        </script>
    </body>

    </html><?php } ?>