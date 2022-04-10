<?php
require 'navSide.php';
include_once("config.php");

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

    <div class="pageContainer">
        <!---->
        <h1>Projects</h1>
        <hr>
        <div class="scrollit">
            <table>
                <tr>
                    <th>Project's Name</th>
                    <th class="hideMobile">Technologies used</th>
                    <th class="deleteUpdateTH">Manage</th>
                </tr>
                <tr>
                    <?php

                    $category = "projects";
                    foreach ($projects as $project) {

                    ?>

                        <td><?= $project['name'] ?></td>
                        <td class="hideMobile"><?= $project['technologies'] ?> </td>
                        <td class="deleteUpdateContainer">

                            <?= "<a class='dashboardDeleteBtn' href='delete.php?id=$project[id]&arg=$category'>Delete</a>" ?>
                            <?= "<a class='dashboardUpdateBtn' href='updateProject.php?id=$project[id]'>Update</a>" ?>
                        </td>
                </tr>
            <?php } ?>

            </table>
        </div>


        <a href="addProject.php" class="dashboardButton">Add a project</a>
    </div>

    </div>
    <!--To close the Wrapper-->
</body>

</html>