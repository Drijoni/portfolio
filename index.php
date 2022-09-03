<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/images/drilogo.png">
    <title>Drijon</title>
</head>
<?php
require 'loader.php'; 
?>

<?php require 'navHeadSocial.php'; ?>

<body onload="showLoader()">

    <!-- Main Container-->
    <div class="wrapper">
        <div class="contentContainer" data-aos="fade-up" data-aos-delay="2000">
            <h1>Drijon Halili</h1>
            <p>I'm a hard-working web developer who aims to create elegant solutions in the least amount of time.</p>
            <a href="assets/files/DrijonHaliliCV.pdf" target="_blank">Resume</a>
        </div>
    </div>

    <!--Background Image-->
    <div class="backgroundImage" data-aos="fade-up" data-aos-delay="2000">
        <img src="assets/images/bgImage.png" alt="">
    </div>

    <div class="pageTitleContainer">
        <h1>Home</h1>
    </div>

    <?php require 'footer.php' ?>
    <script src="js/main.js"></script>

</body>

</html>