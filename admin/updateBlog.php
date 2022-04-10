<?php
require 'navSide.php';
include_once('config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM blog WHERE id=$id";

$getBlog = $conn->prepare($sql);
$getBlog->execute();
$blogs = $getBlog->fetchAll();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Blog</title>
</head>

<body>
    <div class="pageContainer">
        <h1>Update Blog</h1>
        <hr>
        <div class="formContainer">
            <form action="updateLogicBlog.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $blogs[0]['id'] ?>">
                <input type="text" name="title" value="<?= $blogs[0]['title'] ?>" class="formInput" placeholder="Blog's title">
                <Textarea name="content" rows="8" cols="50" value="<?= $blogs[0]['content'] ?>" class="formInput" placeholder="Blog's Content"></Textarea>
                <input type="file" name="image" class="formInput" id="image" style="display: none;" value="" onchange="changeText()">
                <label for="image" class="chooseFile" id="chooseFile">Choose a cover image for blog (max 700KB)</label>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>
    </div>

    </div>
    <!--Close Wrapper-->
</body>

</html>