<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>

<body>
    <?php require 'navHeadSocial.php' ?>

    <?php

    #FOR languages
    include_once('admin/config.php');
    $sql = "SELECT name FROM skills WHERE type='language'";
    $getSkills = $conn->prepare($sql);
    $getSkills->execute();
    $skills = $getSkills->fetchAll();

    #FOR frameworks
    include_once('admin/config.php');
    $sql1 = "SELECT name FROM skills WHERE type='framework'";
    $getFramework = $conn->prepare($sql1);
    $getFramework->execute();
    $frameworks = $getFramework->fetchAll();


    ?>

    <div class="wrapper">
        <div class="contentContainer">
            <h1 class="pageTitle">Skills</h1>
            <div class="programmingLanguages">
                <h3>Programming Languages:</h3>
                <div class="plContainer">
                    <?php
                    foreach ($skills as $skill) {

                    ?>
                        <p><?= $skill['name'] ?></p>
                    <?php } ?>
                </div>

            </div>



            <div class="frameworks">
                <h3>Frameworks / Libraries:</h3>
                <div class="fContainer">
                    <?php

                    foreach ($frameworks as $framework) {

                    ?>
                        <p><?= $framework['name'] ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="pageTitleContainer">
        <h1>Skills</h1>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>