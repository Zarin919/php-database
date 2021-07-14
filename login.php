
<?php


   include 'DbRead.php';




?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration form</title>
</head>
<body>
	<h1>Registration Form</h1>
 


<form method="post" action="welcome.php" name="registration">

		
		<fieldset>
		<legend>Login:</legend>
				<label for="username">User Name: </label>
		<input type="username" name="uname" required><br>

		<label for="password">Enter Password :</label>
		 <input type="password" name="pass" required><br>
		 <input type="submit" name="submit"value="Login">
		</fieldset>
 	</form>
</body>
</html>