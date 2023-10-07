<style>
    .search-box input.form-control {
        background-color: white; 
    }

    .search-box input.form-control:focus {
        background-color: transparent;
    }
</style>
<?php
if (session_id() == ''){session_start();}
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] &&  $_SESSION["usertype"] == 1){
    echo"
<nav class='navbar navbar-expand-lg navbar-light' style='height: 10vh; position: fixed; width: 100%; z-index: 1000; background-color: rgb(240, 240, 245);'>
    <div class='container'>
        <div class='navbar-brand'>
            <img src='../coursesimg/betanobg.png' height='60vh' alt='Beta Academy Pic'>
        </div>
        <form class='form-inline'>
            <div class='input-group search-box' style='border-radius: 25px; overflow: hidden; width: 30vw;'>
                <input type='text' class='form-control border-0 rounded-left' placeholder='Search for...' aria-label='Search for...'>
                <div class='input-group-append'>
                    <button class='btn btn-primary rounded-right shadow' type='button'>
                        <i class='fas fa-search'></i>
                    </button>
                </div>
            </div>
        </form>

        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'
            aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../project.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../dashboard.php'>Dashboard</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/enrolledcourses.php'>Enrolled Courses</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/logout.php'>Log Out</a>
                </li>
            </ul>
            <ul class='navbar-nav ml-3'>
                <li class='nav-item'>
                <a class='nav-link' href='../useroptions/userprofile.php?cid=". $_SESSION["id"]."'>
                        <img src='../coursesimg/user.png' height='40vh' alt='user'>
                </a></li>
            </ul>
        </div>
    </div>
</nav>";
}else if ( isset($_SESSION["usertype"])&& $_SESSION["usertype"] == 0){
    echo"
<nav class='navbar navbar-expand-lg navbar-light' style='height: 10vh; position: fixed; width: 100%; z-index: 1000; background-color: rgb(240, 240, 245);'>
    <div class='container'>
        <div class='navbar-brand'>
            <img src='../coursesimg/betanobg.png' height='60vh' alt='Beta Academy Pic'>
        </div>
        <form class='form-inline'>
            <div class='input-group search-box' style='border-radius: 25px; overflow: hidden; width: 30vw;'>
                <input type='text' class='form-control border-0 rounded-left' placeholder='Search for...' aria-label='Search for...'>
                <div class='input-group-append'>
                    <button class='btn btn-primary rounded-right shadow' type='button'>
                        <i class='fas fa-search'></i>
                    </button>
                </div>
            </div>
        </form>

        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'
            aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../project.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/enrolledcourses.php'>Enrolled Courses</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/logout.php'>Log Out</a>
                </li>
            </ul>
            <ul class='navbar-nav ml-3'>
                <li class='nav-item'>
                    <a class='nav-link' href='../useroptions/userprofile.php?cid=". $_SESSION["id"]."'>
                        <img src='../coursesimg/user.png' height='40vh' alt='user'>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
}else{
    echo"<nav class='navbar navbar-expand-lg navbar-light' style='height: 10vh; position: fixed; width: 100%; z-index: 1000; background-color: rgb(240, 240, 245);'>
    <div class='container'>
        <div class='navbar-brand'>
            <img src='../coursesimg/betanobg.png' height='60vh' alt='Beta Academy Pic'>
        </div>
        <form class='form-inline'>
            <div class='input-group search-box' style='border-radius: 25px; overflow: hidden; width: 30vw;'>
                <input type='text' class='form-control border-0 rounded-left' placeholder='Search for...' aria-label='Search for...'>
                <div class='input-group-append'>
                    <button class='btn btn-primary rounded-right shadow' type='button'>
                        <i class='fas fa-search'></i>
                    </button>
                </div>
            </div>
        </form>

        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav'
            aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav'>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../project.php'>Home</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/login.php'>Log In</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' style='color: rgb(13, 110, 253); align-self: center;' href='../useroptions/register.php'>Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
}
?>