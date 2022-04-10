<?php
require 'navSide.php'
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a project</title>
</head>

<body>

    <div class="pageContainer">

        <h1>Add a Project</h1>
        <hr>

        <div class="formContainer">
            <form action="projectLogic.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="name" class="formInput" placeholder="Project's name">
                <input type="text" name="technologies" class="formInput" placeholder="Technologies used: HTML, CSS, PHP etc...">
                <input type="file" name="image" class="formInput" id="image" style="display: none;" onchange="changeText()">
                <input type="text" name="github" class="formInput" placeholder="GitHub Repo">
                <label for="image" class="chooseFile" id="chooseFile">Choose an image for the project (max 700KB)</label>
                <textarea name="description" rows="4" cols="50" class="formInput" placeholder="Description for the project..."></textarea>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>

    </div>
    </div>
    <!--To close the Wrapper-->
</body>

</html>