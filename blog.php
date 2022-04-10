<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>

    <?php

    require 'navHeadSocial.php';

    ?>



    <?php

    include_once('admin/config.php');
    $sql = "SELECT * FROM blog";
    $getBlogs = $conn->prepare($sql);
    $getBlogs->execute();
    $blogs = $getBlogs->fetchAll();


    ?>


    <div class="wrapper">
        <div class="contentContainer">
            <h1 class="pageTitle"> Blog</h1>
            <div class="blogsContainer">

                <?php foreach ($blogs as $blog) {

                ?>

                    <div class="cardBlog">
                        <?php echo '<img class="coverImage" src="data:image/jpeg;base64,' . base64_encode($blog['image']) . '"/>';
                        ?>
                        <div class="contentBlog">
                            <h4><?= $blog['title'] ?></h4>
                            <h5><?= $blog['content'] ?></h5>

                            <h6>Date: <?= $blog['date'] ?></h6>
                        </div>

                    </div>

                <?php } ?>
            </div>
        </div>
    </div>

    <div class="pageTitleContainer">
        <h1>Blog</h1>
    </div>
    <?php require 'footer.php' ?>

</body>

</html>