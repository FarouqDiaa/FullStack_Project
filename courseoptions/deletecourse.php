<?php
    include '../includes/connection.php';

    $course_id = $_GET["cid"];

    $sql = "DELETE FROM courses WHERE course_id = $course_id";

    if($conn->query($sql) == true){
        echo "
        <div class='alert alert-success' role='alert'>
            Your course has been deleted successfully!
        </div>
        ";
        header("Location: ../dashboard.php");
    }
    else{
        echo "ERROR: $sql <br> $conn->error";
    }
?>