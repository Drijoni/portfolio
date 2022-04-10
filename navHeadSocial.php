<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
</head>

<body>

    <!--Navbar-->
    <div class="menuContainer">
        <nav class="menuItems">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="blog.php">Blog</a></li>

            </ul>
        </nav>

        <div id="toggleMenu"><i id="open" class="fa-solid fa-bars">
            </i>
            <i id="close" class="fa-solid fa-xmark"></i>
        </div>


    </div>
        <!--Sidenav-->
        <div id="mySidenav" class="sidenav">
            <div>
                <a href="index.php">Home </a>
                <a href="about.php">About </a>
                <a href="skills.php">Skills </a>
                <a href="projects.php">Projects </a>
                <a href="blog.php">Blog </a>

            </div>
            <div>
                <ul class="mobileIcons">
                    <li> <a href="mailto:drinihalili15@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                    <li> <a href="https://www.linkedin.com/in/drijon/" target="_blank"> <i class="fa-brands fa-linkedin"></i>
                        </a> </li>
                    <li> <a target="_blank" href="https://github.com/Drijoni/"><i class="fa-brands fa-github"></i </li>
                    <li><a onclick="showDiscord()"><i class="fa-brands fa-discord"></i></a></li>
                </ul>
            </div>
        </div>


    <!--Header and Logo-->
    <header>
        <div class="logoContainer">
                <p>RI</p>
        </div>
    </header>


    <!--Social Icons Container-->
    <div class="socialsContainer">
        <ul>
            <li>
                <a href="mailto:drinihalili15@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
            </li>

            <li>
                <a href="https://www.linkedin.com/in/drijon/" target="_blank"> <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>

            <li>
                <a target="_blank" href="https://github.com/Drijoni/"><i class="fa-brands fa-github"></i></a>
            </li>

            <li>
                <a onmouseover="showDiscord()"><i class="fa-brands fa-discord"></i></a>
            </li>
        </ul>
    </div>
    <script src="js/main.js"></script>
</body>

</html>