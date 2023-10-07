<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Beta Academy</title>
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
    <?php include 'includes/navbarhome.php'; ?>
    <div class="hero-area">
        <div class="bg-image bg-parallax overlay"></div>
    </div>

    <div class="con2">
        <div class="logo-container">
            <img src="coursesimg/betanobg.png" alt="Beta Academy Logo" class="logo">
        </div>
        <h1 style="text-align: center; color: #160151;">About Us</h1>
        <div class="container mt-5">
            <div class="row">
                    <p>Beta Academy is a distinguished Training Center dedicated to nurturing and enhancing 
                        students' proficiency in both Technical and Non-technical Engineering Fields, as well 
                        as honing their Management and Soft skills. Our unwavering commitment extends to 
                        providing comprehensive online support through our dynamic Facebook page, empowering 
                        individuals not only in their educational pursuits but also in their professional 
                        careers.</p>
            </div>
        </div>
        <br><br><br><br>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
