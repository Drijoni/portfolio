<?php

$server ="localhost";
$db = "portfolio";
$username = "root";
$password = "";


try {
    $conn = new PDO("mysql:host=$server;dbname=$db",$username,$password);
}
catch(PDOException $e){ 
    echo "Not connected".$e->getMessage();
}


?>