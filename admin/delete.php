<?php 
include_once('config.php');

$id = $_GET['id'];
$cat = $_GET['arg']; // get category

$sql = "DELETE FROM $cat WHERE id=:id";

$del = $conn->prepare($sql);
$del->bindParam(':id',$id);
$del->execute();

echo $cat;
echo $id;

header("Location:dashboard.php");

#update, on hover sidebar, login, and index
#tmmr responsive 
#asap! 


?>