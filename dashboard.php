<?php
include 'includes/connection.php';
if (isset($_SESSION["usertype"]) && $_SESSION["usertype"] == 1) {
} else {
    header("Location: project.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <?php include 'includes/navbarhome.php'; ?>
    <br>

    <div class="container mt-5">
        <h1>Welcome to the Course Dashboard</h1>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Your Courses</h2>
                <div class="list-group">
                    <?php
                    $sql = "SELECT * FROM courses";
                    $result = $conn->query($sql);
                    echo "<div class='container'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "
                        <div class='row mb-3 border p-3'>
                            <div class='col'>
                                <strong>Course ID:</strong> " . $row["course_id"] . "<br>
                                <strong>Course Name:</strong> " . $row["course_name"] . "<br>
                                <strong>Price:</strong> " . $row["course_price"] . " $
                            </div>
                            <div class='col'>
                                <a class='btn btn-success' href='courseoptions/editcourse.php?cid=" . $row["course_id"] . "'><i class='fas fa-edit'>Edit</i></a>
                                <a class='btn btn-outline-danger' href='courseoptions/deletecourse.php?cid=" . $row["course_id"] . "'><i class='fas fa-trash-alt'>Delete</i></a>
                            </div>
                        </div>
                        ";
                    }
                    echo "</div>";
                    ?>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add a New Course</h5>
                        <p class="card-text">Click the button below to add a new course.</p>
                        <a href="courseoptions/addcourse.php" class="btn btn-success">
                            <i class="fas fa-plus-circle"></i> Add Course
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
