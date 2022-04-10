<?php
include_once('config.php');


if (isset($_POST['submit'], $_POST['id'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = file_get_contents($_FILES['image']['tmp_name']);



    if (empty($title) || empty($image) || empty($content)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1; blog.php');
 
    } else {
        $sql = "UPDATE blog SET title=:title,content=:content, image=:image, date=Now() WHERE id=:id";

        $insert = $conn->prepare($sql);
        $insert->bindParam(':id', $id);
        $insert->bindParam(':title', $title);
        $insert->bindParam(':content', $content);
        $insert->bindParam(':image', $image);

        $insert->execute();

        header("Location:blog.php");
    }
}
?>