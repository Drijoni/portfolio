<?php
include_once('config.php');


if (isset($_POST['submit'], $_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];

    if (empty($name) || empty($type)) {
        echo "<script>alert('Fill all the fields please!')</script>";
        header('Refresh:0.1; skills.php');
    } else {
        $sql = "UPDATE skills SET name=:name,type=:type WHERE id=:id";

        $insert = $conn->prepare($sql);
        $insert->bindParam(':id', $id);
        $insert->bindParam(':name', $name);
        $insert->bindParam(':type', $type);

        $insert->execute();

        header("Location:skills.php");
    }
}
?>
