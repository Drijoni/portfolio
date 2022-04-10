<?php
require 'navSide.php';
include_once("config.php");

$sql = "SELECT * FROM skills";
$getSkills = $conn->prepare($sql);
$getSkills->execute();
$skills = $getSkills->fetchAll();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
</head>

<body>

    <div class="pageContainer">

        <h1>Skills</h1>
        <hr>
        <div class="scrollit">
            <table>
                <tr>
                    <th>Technologies</th>
                    <th>Type</th>
                    <th class="deleteUpdateTH">Manage</th>
                </tr>

                <tr>
                    <?php
                    $category = "skills";
                    foreach ($skills as $skill) {
                    ?>
                        <td><?= $skill['name'] ?></td>
                        <td><?= $skill['type'] ?></td>
                        <td class="deleteUpdateContainer">
                            <?= "<a class='dashboardDeleteBtn' href='delete.php?id=$skill[id]&arg=$category'>Delete</a>" ?>
                            <?= "<a class='dashboardUpdateBtn' href='updateSkill.php?id=$skill[id]'>Update</a>" ?>
                        </td>
                </tr>
            <?php } ?>
            </table>
        </div>
        <a href="addSkills.php" class="dashboardButton">Add a technology</a>
    </div>
    </div>
    <!--To close the Wrapper-->
</body>

</html>