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
    <title>Projects</title>
</head>

<body>

    <?php require 'navHeadSocial.php' ?>

    <div class="wrapper">

        <div class="contentContainer">
            <h1 class="pageTitle">My Projects</h1>
            <div class="projectsContainer">
                <?php

                foreach ($projects as $project) {
                ?>
                    <div class="projectCard">
                        <?php echo '<img class="coverImage" src="data:image/jpeg;base64,' . base64_encode($project['image']) . '"/>';
                        ?>
                        <div class="contentForCard">
                            <h4><?= $project['name'] ?></h4>
                            <h5><?= $project['technologies'] ?></h5>
                            <h6><?= $project['description'] ?></h6>
                            <a target="_blank" href="<?= $project['github'] ?>">GitHub</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>


    <?php require 'footer.php' ?>


</body>

</html>