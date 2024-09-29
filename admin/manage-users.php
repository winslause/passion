<?php
session_start();
error_reporting(0);
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $description = $_POST['description'];

        $vimage = $_FILES["photo1"]["name"];

        move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/images/" . $_FILES["photo1"]["name"]);

        $sql = "INSERT INTO users(email1,name1,phone1,role1,description1,image1 ) VALUES(:email,:name,:phone,:role,:description,:vimage)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':vimage', $vimage, PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if ($lastInsertId) {
            $msg = "Team member added successfully";
            header('location:manage-users.php');
        } else {
            $error = "Something went wrong. Please try again";
        }
    }

    // Rest of your HTML code...
}
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
                                <a href="manage-users.php#addmember" class="sidebar-link">Add Member</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="manage-users.php#addmember" class="sidebar-link">Edit Member</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="manage-users.php#addmember" class="sidebar-link">Remove Member</a>
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
                                <a href="manage-gallery.php" class="sidebar-link">Add Image</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="manage-gallery.php" class="sidebar-link">Delete Image</a>
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

                <button class="btn btn-secondary float-lg-end" type="button" data-bs-theme="dark"
                    style="margin-left: 800px;">
                    <a href="/">logout</a>

                </button>

            </nav>




            <!-- MAIN CONTENT -->
            <main class="content px-3 py-2">

                <div class="container-fluid"
                    style="background-color: rgb(177, 173, 173);margin:10px; display:block; text-align: center;">
                    <div class="mb-3">
                        <h1>Manage Team Members</h1>
                    </div>
                    <button style="margin: 10px;" id="addNewUserBtn" type="button" class="btn btn-success float-lg-end"
                        data-bs-toggle="modal" data-bs-target="#mymodal">Add new team member</button>
                </div>
                <div class="container">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM users";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {                ?>
                                    <tr>
                                        <td><?php echo htmlentities($cnt); ?></td>
                                        <td><?php echo htmlentities($result->name1); ?></td>
                                        <td><?php echo htmlentities($result->email1); ?></td>
                                        <td><?php echo htmlentities($result->phone1); ?></td>
                                        <td><?php echo htmlentities($result->role1); ?></td>
                                        <td><?php echo htmlentities($result->description1); ?></td>

                                        <td>
                                            <button class="btn btn-warning btn-sm"
                                                onclick="location.href='manage-users.php?edit_id=<?php echo htmlentities($result->id); ?>'">Edit</button>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                        </td>
                                    </tr>
                            <?php $cnt = $cnt + 1;
                                }
                            } ?>
                        <tbody>
                    </table>


                </div>

                <div>

                </div>


                <!-- ADD NEW USER -->
                <center style="width: 50%;">




                    <form id="newUserForm" style="display: none;" style="width: 50%;" method="POST"
                        action="manage-users.php" enctype="multipart/form-data">
                        <!-- id="newUserForm" method="POST" action="manage-users.php" enctype="multipart/form-data -->
                        <h3><u>Add new member</u></h3>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                                placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="number" class="form-control" id="exampleInputPassword1" name="phone"
                                placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Role</label>
                            <input type="text" class="form-control" name="role" id="exampleInputPassword1"
                                placeholder="Team Role">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea type="text" class="form-control" name="description" id="exampleInputPassword1"
                                placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Photo</label>
                            <input type="file" class="form-control" name="photo1" id="exampleInputPassword1">
                        </div>


                        <button type="submit" name="submit" class="btn btn-primary"
                            style="margin: 10px;">Submit</button>
                    </form>



                </center>



















                <!-- EDIT USER -->
                <center style="width: 50%;">
                    <?php
                    if (isset($_GET['edit_id'])) {
                        $id = $_GET['edit_id'];
                        $sql = "SELECT * from users where id=:id";
                        $query = $dbh->prepare($sql);
                        $query->bindParam(':id', $id, PDO::PARAM_STR);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results as $result) {    ?>



                                <form method="POST" action="manage-users.php" id="updateUserForm" style="display: <?php echo isset($_GET['edit_id']) ? 'block' : 'none'; ?>;" style="width: 50%;"
                                    enctype="multipart/form-data">
                                    <h3><u>Update Team Member.</u></h3>
                                    <div class=" form-group">

                                        <input style="display:none;" type="number" id="updateUserId" name="user_id" value="<?php echo htmlentities($result->id); ?>">

                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                            aria-describedby="emailHelp" value="<?php echo htmlentities($result->email1); ?>">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                                            value="<?php echo htmlentities($result->name1); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1" name="phone"
                                            value="<?php echo htmlentities($result->phone1); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Role</label>
                                        <input type="text" class="form-control" name="role" id="exampleInputPassword1"
                                            value="<?php echo htmlentities($result->role1); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <textarea type="text" class="form-control" name="description" id="exampleInputPassword1"
                                            value=""><?php echo htmlentities($result->description1); ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Current Photo</label>
                                        <img src="../assets/images/<?php echo htmlentities($result->image1); ?>" alt="Current Photo" style="max-width: 200px; max-height: 200px; margin:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Update Photo </label>
                                        <input type="file" class="form-control" name="photo1" id="exampleInputPassword1">
                                    </div>


                                    <button type="submit" name="update" class="btn btn-primary" style="margin: 10px;">Update
                                        User</button>
                                </form>
                </center>
    <?php }
                        }
                    } ?>
    <?php

    if (isset($_POST['update'])) {
        $user_id = $_POST['user_id'];

        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $description = $_POST['description'];

        if ($_FILES["photo1"]["name"]) {
            $vimage = $_FILES["photo1"]["name"];
            move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/images/" . $_FILES["photo1"]["name"]);
        } else {
            $vimage = $result->image1; // Keep the existing image
        }
        $sql = "UPDATE users SET email1=:email, name1=:name, phone1=:phone, role1=:role, description1=:description, image1=:vimage WHERE id=:user_id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':description', $description, PDO::PARAM_STR);
        $query->bindParam(':vimage', $vimage, PDO::PARAM_STR);

        $query->execute();

        if ($query->rowCount() > 0) {
            $msg = "User updated successfully";
            // header('location:manage-users.php');
        } else {
            $error = "Something went wrong. Please try again";
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
        document.getElementById("addNewUserBtn").addEventListener("click", function() {
            var newUserForm = document.getElementById("newUserForm");
            newUserForm.style.display = newUserForm.style.display === "none" ? "block" : "none";
        });
    </script>
    <script>
        document.getElementById("updateUserBtn").addEventListener("click", function(event) {
            event.preventDefault();
            var updateUserForm = document.getElementById("updateUserForm");
            updateUserForm.style.display = updateUserForm.style.display === "none" ? "block" : "none";
        });
    </script>
    <script>
        document.querySelectorAll("#updateUserBtn").forEach(function(button) {
            button.addEventListener("click", function(event) {
                event.preventDefault();
                var userId = this.getAttribute('data-user-id');
                var updateUserForm = document.getElementById("updateUserForm");
                updateUserForm.style.display = updateUserForm.style.display === "none" ? "block" : "none";

                // You can now use userId to fetch the user's data and populate the form
                // For example:
                document.getElementById('updateUserId').value = userId;
            });
        });
    </script>
</body>

</html>