<?php

include_once('sucess.php');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="css/dashboard.css">

<!--This contains the header and sidebar for dashboard, so I dont have to write the code over and over for other pages-->
<header>
    <div class="logoContainer">
        <p>RI</p>
    </div>
    <div class="logOut">
        <a href="logout.php">Log out</a>
    </div>
</header>

<div class="wrapper">
    <div class="sidebar" id="sidebar">
        <div class="menuContainer">
            <ul>
                <li><i class="fa-solid fa-dashboard"></i><a href="dashboard.php">Dashboard</a></li>
                <li><i class="fa-solid fa-file-code"></i><a href="projects.php">Projects</a></li>
                <li><i class="fa-solid fa-code"></i><a href="skills.php">Skills</a></li>
                <li><i class="fa-solid fa-rss"></i><a href="blog.php">Blog</a></li>
            </ul>
        </div>
        <p>Hello <?php echo $_SESSION['username'] ?></p>
    </div>
    <div id="toggleMenu"><i id="open" class="fa-solid fa-bars">
        </i>
        <i id="close" class="fa-solid fa-xmark"></i>
    </div>

    <script src="js/dashboard.js"></script>