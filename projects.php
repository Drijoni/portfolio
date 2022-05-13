<?php

include_once('admin/config.php');
$sql = "SELECT * FROM projects";
$getProjects = $conn->prepare($sql);
$getProjects->execute();
$projects = $getProjects->fetchAll();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <!--For swiper-->
    <title>Projects</title>
</head>

<body>
    <?php require 'navHeadSocial.php' ?>
    <div class="wrapper">
        <div class="contentContainer">
            <h1 class="pageTitle">My Projects</h1>
            <h3 class="checkMoreP">
                These are few of the projects I've worked on
            </h3>
            <div class="projectsContainer swiper">
                <div class="swiper-wrapper">
                    <?php
                    foreach ($projects as $project) {
                    ?>
                        <div class="swiper-slide">
                            <div class="projectCard">
                                <?php echo '<img class="coverImage" src="data:image/jpeg;base64,' . base64_encode($project['image']) . '"/>';
                                ?>
                                <div class="contentForCard ">
                                    <h4><?= $project['name'] ?></h4>
                                    <h5><?= $project['technologies'] ?></h5>
                                    <h6><?= $project['description'] ?></h6>
                                    <div class="buttonsContainer">
                                        <a target="_blank" href="<?= $project['github'] ?>">GitHub</a>
                                        <a target="_blank" href="<?= $project['preview'] ?>">Live Preview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    </div>
    <!--Close wrapper from body-->

    <?php require 'footer.php' ?>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            animationDuration: 1000,
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            centeredSlides: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

        });
    </script>
</body>

</html>