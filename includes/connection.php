<?php
    session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "coursesdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error){
    die ("Sorry, Failed to connect: " . $conn->connect_error);
}
?>