<?php
	require 'inc/config.php';
	//die('ok');
	//require_once 'error.php';
	require_once 'sql-login.php';
	if (!empty($_POST)){
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="#" method="post">
		<input type="email" name="mail" id="mail">
		<label for="mail">Votre email</label>
		<br/>
		<input type="password" name="password" id="password">
		<label for="password">Votre mot de passe</label>
		<br/>
		<input type="submit" name="valid">
	</form>
</body>
</html>