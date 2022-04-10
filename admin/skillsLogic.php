<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $type = $_POST['type'];


    if (empty($name) || empty($type)) {
        echo "<script>alert('Fill all the fields please!')</script>";        
        
    } else {
        $sql = "INSERT INTO skills (name,type) VALUES (:name,:type)";

        $sqlQuery = $conn->prepare($sql);
        $sqlQuery->bindParam(':name', $name);
        $sqlQuery->bindParam(':type', $type);
        $sqlQuery->execute();

        echo "<script>alert('Successfully added!')</script>";
        header('Refresh:0.1;dashboard.php');
    }
}
?>