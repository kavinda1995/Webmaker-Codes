<html>
	<head>
		<title>Login</title>
		<!-- Linking the Bootstrap CSS-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<!-- Linking the custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<center>
		<!-- Heading for the login -->
		<h1>Webmaker System</h1>
		<!-- Div (Division) for the login form -->
		<div class="login_form">
			<form method="POST" action="login.php">
				<!-- label for username -->
				<label for="username">Username : 
				</label>
				<!-- input box for username -->
				<input type="text" id="usern5ame" name="username">
				<!-- line break -->
				</br>
				<!-- label for password -->
				<label for="password">Password : 
				</label>
				<!-- input box for password -->
				<input type="password" id="password" name="password">
				</br>	
				<!-- login button -->
				<input type="submit" value="Login" class="btn btn-success"/>
				</br>
				<input type="reset" class="btn btn-info"/>
				</br>
				<!-- register button -->
				<button class="btn btn-danger">Register</button>
			</form>

		</div>


		<!-- Linking the JS Files -->
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.js">
		</center>
	</body> 	
</html>