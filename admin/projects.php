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
                                <a href="manage-users.php#addmember" class="sidebar-link">manage team</a>
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
                        <h1>Projects</h1>
                    </div>
                </div>


                <h3><i>Projects will be added manually on the hostside due to styling.</i></h1>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</body>

</html>