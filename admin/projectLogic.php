<?php

require 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $technologies = $_POST['technologies'];
    $description = $_POST['description'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $github = $_POST['github'];


    if (empty($name) || empty($technologies) || empty($description) || empty($image) || empty($github)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1;projects.php');
    } else {


        $sql = "INSERT INTO projects (name,technologies,description,image,github) VALUES (:name,:technologies,:description,:image,:github)";


        $sqlQuery = $conn->prepare($sql);
        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':technologies', $technologies);
        $sqlQuery->bindParam(':description', $description);
        $sqlQuery->bindParam(':image', $image);
        $sqlQuery->bindParam(':github', $github);
        $sqlQuery->execute();

        echo "<script>alert('Successfully added!')</script>";
        header("Location:projects.php");
        
    }
}
?>