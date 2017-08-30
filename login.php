<?php
	// $_POST - to get the data if the method is POST
	// $_GET - to get the data if the method is GET

	// var_dump($_POST);

	$username = $_POST['username'];
	$password = $_POST['password'];

	//checking the username and password is correct

	if ($username == "admin" && $password == "123"){
		echo "Hello Admin";
	}
	else{
		echo "Username or Password incorrect";
	}
?>