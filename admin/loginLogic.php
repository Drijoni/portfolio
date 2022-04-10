<?php
session_start();


require 'config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (empty($username) || empty($password)) {
		echo "<script>alert('Fill all the fields please!')</script>";
		header('Refresh:0.1;login.php');
	} else {
		$sql = "SELECT id,username,password FROM admin WHERE username=:username AND password=:password";
		$query = $conn->prepare($sql);
		$query->bindParam(':username', $username);
		$query->bindParam(':password', $password);
		$query->execute(

			array(

				'username' => $_POST['username'],
				'password' => $_POST['password'],

			)

		);

		$count = $query->rowCount();

		if ($count > 0) {
			$_SESSION["username"]=$_POST["username"];
		
			header('Location:dashboard.php');
		} else {
			echo "<script>alert('Wrong Data')</script>";
			header('Refresh:0.1;login.php');
		}
	}
}
