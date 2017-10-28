<?php
	// $_POST - to get the data if the method is POST
	// $_GET - to get the data if the method is GET

	// var_dump($_POST);

	$username = $_POST['username'];
	$password = $_POST['password'];

	//checking the username and password is correct

	if ($username == "admin" && $password == "123"){
		echo "<center><h1>Hello Admin</h1></center>";
	}
	else{
		echo "<center><h1>Username or Password incorrect</h1></center>";
	}
?>