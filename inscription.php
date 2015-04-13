<?php
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
		<input type="text" name="nom" id="nom">
		<label for="nom">Nom</label>
		<br/>
		<input type="text" name="prenom">
		<label for="prenom" id="prenom">Prénom</label>
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
				<input type="checkbox" name="smen" id="smen">
				<label for="smen">Un homme</label>
				<input type="checkbox" name="sfemale" id="sfemale">
				<label for="sfemale">Une femme</label>
			</label>
		</p>
	    <p>
		    <input type="date" name="birth">
	   		<label for="birth">Date de naissance</label>
		</p>
		<p>
		<input type="text" name="city" id="city">
		<label for="city">Ville</label>
		</p>
	    <p>
   	   		<label>Que recherchez-vous ? <br/>
				<input type="checkbox" name="sasoeur" id="sasoeur">
				<label for="sasoeur">Ame soeur</label>
				<br/>
				<input type="checkbox" name="snight" id="snight">
				<label for="snight">Série d'un soir</label>
				<br/>
				<input type="checkbox" name="sfriend" id="sfriend">
				<label for="sfriend">Amitié</label>
				<br/>
			</label>
		</p>
		<select name="age" id="sage">
			<option value="0">18 à 29 ans</option>
			<option value="1">30 à 39 ans</option>
			<option value="2">40 à 49 ans</option>
			<option value="3">50 ans et plus</option>
		</select>
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