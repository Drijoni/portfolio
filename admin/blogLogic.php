<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = file_get_contents($_FILES['image']['tmp_name']);


    if (empty($title) || empty($content) || empty($image)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1;blog.php');
    } else {
        $sql = "INSERT INTO blog (title, content, image,date) VALUES (:title, :content,:image, NOW())";
        $sqlQuery = $conn->prepare($sql);
        $sqlQuery->bindParam(':title', $title);
        $sqlQuery->bindParam(':content', $content);
        $sqlQuery->bindParam(':image', $image);

        $sqlQuery->execute();

        echo "<script>alert('Successfully added!')</script>";
        header('Refresh:0.1;dashboard.php');
    }
}?>