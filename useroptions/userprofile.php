<?php include '../includes/connection.php'?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../icons/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
</head>
<body>

    <?php 
        include '../includes/navbar.php';
        echo'<br>';
    ?>

    <?php
        if(!isset($_SESSION["loggedin"])){
            header("Location: login.php");
        }
    ?>

    <section style="background-color: white;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="../project.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="../coursesimg/user.png" alt="User Profile Picture" class="rounded-circle img-fluid" style="width: 150px;">
                            <br><br>
                            <?php echo"".$_SESSION["username"].""?>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Username</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo"".$_SESSION["username"].""?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo"".$_SESSION["email"].""?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Number</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">+201234567890</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">New Cairo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 mb-md-0">
                                <strong><br>&nbsp&nbsp Enrolled Courses: <strong>
                                <div class="card-body">
                                    <?php
                                        $id = $_GET['cid'];
                                        $sql = "SELECT * FROM users_courses
                                        INNER JOIN courses ON users_courses.cid = courses.course_id
                                        INNER JOIN users ON users_courses.uid = users.id
                                        WHERE uid = $id";                                                                       $result = $conn->query($sql);
                                        $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()){
                                            echo $row["course_name"] . "<br>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>