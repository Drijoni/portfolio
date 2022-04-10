<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style-->
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <?php
    require 'navSide.php';
    ?>

    <div class="pageContainer">
        <!---->
        <h1>Dashboard</h1>
        <hr>

        <div class="statsContainer">
            <div class="card" id="projectsCard">
                <i class="fa-solid fa-folder"></i>
                <p><?php include 'config.php';
                    $count = $conn->prepare("SELECT count(*) FROM projects");
                    $count->execute();
                    $row = $count->fetch(PDO::FETCH_NUM);
                    $projectNum = $row[0];
                    echo "$projectNum";
                    ?></p>
                <h6>Total Projects</h6>
            </div>

            <div class="card" id="skillsCard">
                <i class="fa-solid fa-lightbulb"></i>
                <p><?php
                    include 'config.php';
                    $count = $conn->prepare("SELECT count(*) FROM skills");
                    $count->execute();
                    $row = $count->fetch(PDO::FETCH_NUM);
                    $skillsNum = $row[0];
                    echo "$skillsNum";
                    ?></p>
                <h6>Total Skills</h6>
            </div>

            <div class="card" id="blogsCard">
                <i class="fa-solid fa-file-pen"></i>
                <p><?php include 'config.php';
                    $count = $conn->prepare("SELECT count(*) FROM blog");
                    $count->execute();
                    $row = $count->fetch(PDO::FETCH_NUM);
                    $blogNum = $row[0];
                    echo "$blogNum";
                    ?></p>
                <h6>Total Blogs</h6>
            </div>
        </div>
    </div>

    </div>
    <!--For wrapper-->



</body>

</html>