<?php
require 'navSide.php';
include_once('config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM skills WHERE id=$id";

$getSkills = $conn->prepare($sql);
$getSkills->execute();
$skills = $getSkills->fetchAll();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Skill</title>
</head>

<body>

    <div class="pageContainer">
        <h1>Update Skill</h1>
        <hr>
        <div class="formContainer">
            <form action="updateLogicSkill.php" method="POST">
                <input type="hidden" name="id" value="<?= $skills[0]['id'] ?>">
                <input type="text" name="name" value="<?= $skills[0]['name'] ?>" class="formInput" placeholder="Project's name">
                <select name="type">
                    <option value="language">Programming Language</option>
                    <option value="framework">Framework / Library </option>
                </select>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>
    </div>
    </div>
    <!--Close Wrapper-->
</body>

</html>