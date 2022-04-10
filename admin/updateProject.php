<?php
require 'navSide.php';
include_once('config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM projects WHERE id=$id";

$getProject = $conn->prepare($sql);
$getProject->execute();
$projects = $getProject->fetchAll();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Project</title>
</head>

<body>
    <div class="pageContainer">
        <h1>Update Project</h1>
        <hr>
        <div class="formContainer">
            <form action="updateLogicProject.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $projects[0]['id'] ?>">
                <input type="text" name="name" value="<?= $projects[0]['name'] ?>" class="formInput" placeholder="Project's name">
                <input type="text" value="<?= $projects[0]['technologies'] ?>" name="technologies" class="formInput" placeholder="Technologies used: HTML, CSS, PHP etc...">
                <input type="file" value="" name="image" class="formInput" id="image" style="display: none;" onchange="changeText()">
                <input type="text" name="github" value="<?= $projects[0]['github'] ?>" class="formInput" placeholder="GitHub Repo">
                <label for="image" class="chooseFile" id="chooseFile">Update the image for the project (max 700KB)</label>
                <textarea value="<?= $projects[0]['description'] ?>" name="description" rows="4" cols="50" class="formInput" placeholder="Update your description..."></textarea>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>
    </div>
    </div>
    <!--Close Wrapper-->
</body>

</html>