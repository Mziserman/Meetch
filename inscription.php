<?php
	require_once 'error.php';
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
	<title>Document</title>
</head>
<body>
	<form action="#" method="post">
		<input type="text" name="name" id="name">
		<label for="name">Nom</label>
		<br/>
		<input type="text" name="surname">
		<label for="surname" id="surname">Prénom</label>
		 <p>
		    <input type="date" name="birth">
	   		<label for="birth">Date de naissance</label>
		</p>
		<p>
		<input type="text" name="city" id="city">
		<label for="city">Ville</label>
		</p>
		<p>
			<label>Vous êtes : <br/>
	   	   		<label for="imale">Un homme</label>
				<input type="radio" name="sexe" id="imale" value="imale">
				<label for="ifemale">Une femme</label>
				<input type="radio" name="sexe" id="ifemale" value="ifemale">
			</label>
	    </p>
	    <p>
	    	<label>Vous recherchez :<br/>
				<input type="checkbox" name="smale" id="smale">
				<label for="smale">Un homme</label>
				<input type="checkbox" name="sfemale" id="sfemale">
				<label for="sfemale">Une femme</label>
			</label>
		</p>
	    <p>
   	   		<label>Vous recherchez : <br/>
				<input type="checkbox" name="soulmate" id="soulmate">
				<label for="soulmate">Ame soeur</label>
				<br/>
				<input type="checkbox" name="snight" id="snight">
				<label for="snight">Série d'un soir</label>
				<br/>
				<input type="checkbox" name="sfriend" id="sfriend">
				<label for="sfriend">Amitié</label>
				<br/>
			</label>
		</p>
		<label>Dans quelle tranche d'age : <br/>
			<select name="age" id="sage">
				<option value="0">18 à 29 ans</option>
				<option value="1">30 à 39 ans</option>
				<option value="2">40 à 49 ans</option>
				<option value="3">50 ans et plus</option>
			</select>
		</label>
		<br/>
		<input type="email" name="mail" id="mail">
		<label for="mail">Votre email</label>
		<br/>
		<input type="email" name="cmail" id="cmail">
		<label for="cmail">Confirmez votre email</label>
		<br/>
		<input type="password" name="psw" id="psw">
		<label for="psw">Votre mot de passe</label>
		<br/>
		<input type="password" name="cpsw" id="cpsw">
		<label for="cpsw">Confirmez votre mot de passe</label>
		<br/>
		<input type="submit" name="valid">
	</form>
</body>
</html>