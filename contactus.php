<?php 
include 'includes/connection.php';
include 'includes/navbarhome.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Beta Academy</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <style>
        .con2 {
            position: relative;
            z-index: 1;
            border-width: 0 5px 5px 5px;
            border-style: none solid solid solid;
            border-color: transparent #160151 #160151 #160151;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            background: rgba(240, 240, 245, 0.6);
            text-align: center;
        }

        .hero-area {
            position: relative;
            background-image: url('coursesimg/header.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 0;
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
        }

        .logo {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body style="background-color: rgb(245, 245, 245); ">
<br>
<div class="hero-area">
        <div class="bg-image bg-parallax overlay"></div>
    </div>

    <div class="con2">
        <div class="logo-container">
            <img src="coursesimg/betanobg.png" alt="Beta Academy Logo" class="logo">
        </div>
        <h2>Contact Us</h2>
        <p>If you have any questions or inquiries, please feel free to get in touch with us:</p>
        <ul>
            <li>Email: <a>betaacademy18@gmail.com</a></li>
            <li>Phone: (+20)1120127810</li>
            <li>Facebook Page: <a href="https://www.facebook.com/BetaAcademy.B">www.facebook.com/BetaAcademy.B</a></li>
        </ul>
        <br><br><br><br>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
