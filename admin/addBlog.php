<?php

require 'navSide.php'

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a blog</title>
</head>

<body>

    <div class="pageContainer">
        <h1>Add a blog</h1>
        <hr>
        <div class="formContainer">
            <form action="blogLogic.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="title" class="formInput" placeholder="Blog's title">
                <Textarea name="content" rows="8" cols="50" class="formInput" placeholder="Blog's Content"></Textarea>
                <input type="file" name="image" class="formInput" id="image" style="display: none;" onchange="changeText()">
                <label for="image" class="chooseFile" id="chooseFile">Choose a cover image for blog</label>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>
    </div>

    </div>
    <!--To close the Wrapper-->
</body>

</html>