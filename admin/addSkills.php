<?php
require 'navSide.php'
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a skill</title>
</head>

<body>

    <div class="pageContainer">

        <h1>Add a technology</h1>
        <hr>

        <div class="formContainer">
            <form action="skillsLogic.php" method="POST">
                <input type="text" name="name" class="formInput" placeholder="Technology's name">
                <select name="type" class="formInput">
                    <option value="language">Programming Language</option>
                    <option value="framework">Framework / Library </option>
                </select>
                <Button name="submit" class="dashboardButton">Submit</Button>
            </form>
        </div>

    </div>
    </div>
    <!--To close the Wrapper-->
</body>

</html>