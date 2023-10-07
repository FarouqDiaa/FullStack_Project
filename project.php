<?php include 'includes/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Academy</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/style.css"/>

</head>
<style>
  .con2{
    
    border-width: 0 5px 5px 5px;
    border-style: none solid solid solid;
    border-color: transparent #160151 #160151 #160151;
    padding: 20px;
    margin: 10px 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
    border-radius: 10px; 
    
  }
  </style>
<body style="background-color: rgb(245,245,245); ">
<?php include 'includes/navbarhome.php'; ?>

		<div id="home" class="hero-area" >
			<div class="bg-image bg-parallax overlay" style="background-image:url(coursesimg/headeralt.jpg);background-repeat: no-repeat;"></div>

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text">Beta Academy Courses</h1>
							<p class="lead white-text">You can find here more Workshops & Courses & Mega Programs in engineering & Management fields to help in your Career</p>
							<a class="btn btn-primary" href="#down">Get Started!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
<div style="text-align: center; background-color: #160151; padding: 10px;">
        <a href="#available-courses" style="color: white; margin-right: 20px;">Available Courses</a>
        <a href="#diplomas" style="color: white; margin-right: 20px;">Diplomas</a>
        <a href="#instructors" style="color: white; margin-right: 20px;">Instructors</a>
        <a href="#events" style="color: white;">Events</a>
</div>
    <div class="con2" style="background-color:rgba(240,240,245,0.6)">
    <h1 style="text-align: center; color: #160151; padding: 20px;" id="down">Available Courses & Diplomas</h1>

        <br>
        <div class="container mt-5" >
            <div class="row" style="display: flex; justify-content: space-between; flex-wrap:wrap " id ="available-courses">
            <?php
                            $sql = "SELECT * FROM courses";
                            $result = $conn->query($sql);
                            $courseCount = 0;
                            while($row = $result->fetch_assoc()){
                                if ($courseCount % 3 === 0) {
                                    echo '<div class="w-100"></div><br>'; 
                                }
                                echo "
                                    <div class='col-3'>
                                        <div class='card' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);'>
                                            <img src='coursesimg/". $row["course_image"] ."' class='card-img-top' alt='". $row["course_image"] ."' style='height:40vh;' />
                                            <div class='card-body'>
                                                <h5 class='card-title'>". $row["course_name"] ."</h5>
                                                <p class='card-text'>". $row["course_desc"] ."</p>
                                                <a href='courseoptions/coursedetails.php?cid=". $row["course_id"] ."' class='btn btn-primary'>View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                                $courseCount++;

                            }

            
            ?>
          </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <h1 style="text-align: center; color: #160151; padding: 20px;" id="diplomas">Diplomas</h1>
    <div class="con2" style="background-color: rgba(240, 240, 245, 0.6)">
        <div class="row">
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in Web Development</h3>
                    <p>This diploma program covers a wide range of web development topics.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in C++</h3>
                    <p>Explore the world of C++.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in Data Science</h3>
                    <p>Learn the fundamentals of data science and analytics.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in Mobile App Development</h3>
                    <p>Create mobile applications for Android and iOS platforms.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in Cybersecurity</h3>
                    <p>Enhance your skills in cybersecurity and protect digital assets.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Diploma in Digital Marketing</h3>
                    <p>Master digital marketing strategies and techniques.</p>
                    <button class="btn btn-primary">Enroll</button>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="con2" style="background-color: rgba(240, 240, 245, 0.6)">
    <h1 style="text-align: center; color: #160151; padding: 20px;" id="instructors">Instructors</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 1</h3><p>An expert in web development and programming.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 2</h3><p>Specializes in machine learning.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 3</h3><p>Expert in data science and analytics..</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 4</h3><p>Specializes in mobile app development.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 5</h3><p>Expert in cybersecurity.</p></div>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px; display:flex;">
                <img src="coursesimg/instructor.png" alt="Inst" style="max-width: 100%; height: 20vh;">&nbsp&nbsp&nbsp
                <div><h3>Instructor: Instructor 6</h3><p>Expert in digital marketing.</p></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="con2" style="background-color: rgba(240, 240, 245, 0.6)">
    <h1 style="text-align: center; color: #160151; padding: 20px;" id="events">Events</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Web Development Workshop</h3>
                    <p>Join us for an interactive web development workshop on October 14th.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Machine Learning Seminar</h3>
                    <p>Attend our machine learning seminar on September 20th to learn about the latest trends.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Data Science Conference</h3>
                    <p>Join the data science conference on November 5th and explore the world of data.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Mobile App Development Workshop</h3>
                    <p>Learn mobile app development in our workshop on December 10th.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Cybersecurity Summit</h3>
                    <p>Join the cybersecurity summit on October 28th to enhance your security skills.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
            <div class="col-md-6">
                <div style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); padding: 20px; border-radius: 5px; margin-bottom: 20px;">
                    <h3>Digital Marketing Workshop</h3>
                    <p>Master digital marketing strategies in our workshop on November 15th.</p>
                    <button class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
<?php include 'includes/footer.php'?>
</html>
