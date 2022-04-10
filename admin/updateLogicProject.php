<?php
include_once('config.php');


if (isset($_POST['submit'], $_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $technologies = $_POST['technologies'];
    $description = $_POST['description'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $github = $_POST['github'];


    if (empty($name) || empty($technologies) || empty($description) || empty($image) || empty($github)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1; projects.php');
    } else {
        $sql = "UPDATE projects SET name=:name,technologies=:technologies,description=:description,image=:image,github=:github WHERE id=:id";

        $insert = $conn->prepare($sql);
        $insert->bindParam(':id', $id);
        $insert->bindParam(':name', $name);
        $insert->bindParam(':technologies', $technologies);
        $insert->bindParam(':description', $description);
        $insert->bindParam(':image', $image);
        $insert->bindParam(':github', $github);

        $insert->execute();

        header("Location:projects.php");
    }
}
?>