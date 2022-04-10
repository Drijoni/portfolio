<?php

require 'navSide.php';
include_once('config.php');
$sql = "SELECT * FROM blog";
$getBlogs = $conn->prepare($sql);

$getBlogs->execute();
$blogs = $getBlogs->fetchAll();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
</head>

<body>

    <div class="pageContainer">

        <h1>My Blog</h1>
        <hr>
        <div class="scrollit">
            <table>
                <tr>
                    <th>Blog title</th>
                    <th>Posted on</th>
                    <th class="deleteUpdateTH">Manage</th>
                </tr>
                <?php
                $category = "blog";
                foreach ($blogs as $blog) {

                ?>
                    <tr>

                        <td><?= $blog['title'] ?></td>
                        <td><?= $blog['date'] ?></td>
                        <td class="deleteUpdateContainer">
                            <?= "<a class='dashboardDeleteBtn' href='delete.php?id=$blog[id]&arg=$category'>Delete</a>" ?>
                            <?= "<a class='dashboardUpdateBtn' href='updateBlog.php?id=$blog[id]'>Update</a>" ?>
                        </td>

                    </tr>
                <?php }

                ?>


            </table>
        </div>
        <a href="addBlog.php" class="dashboardButton">Add a blog</a>

    </div>


    </div>

    <!--To close the Wrapper-->
</body>

</html>
