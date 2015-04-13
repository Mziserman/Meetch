<?php
	require 'inc/config.php';
	//die('ok');
	require_once 'error.php';
	if (!empty($_POST)){
		echo '<pre>';
		print_r($_POST);
		echo '</pre>';
	}


	if(!empty($_POST)){

		$prepare = $pdo->prepare('INSERT INTO user (sex, name, first_name, birth_date, city, sman, sfemale, sasoeur, snight, sfriend, age, mail, password) VALUES (:sex, :name, :first_name, :birth_date, :city, :sman, :sfemale, :sasoeur, :snight, :sfriend, :age, :mail, :password)');

		$prepare->bindValue(':sex',$_POST['sex']);
		$prepare->bindValue(':name',$_POST['name']);
		$prepare->bindValue(':first_name',$_POST['first_name']);
		$prepare->bindValue(':birth_date',$_POST['birth_date']);
		$prepare->bindValue(':city',$_POST['city']);
		$prepare->bindValue(':sman',$_POST['sman']);
		$prepare->bindValue(':sfemale',$_POST['sfemale']);
		$prepare->bindValue(':sasoeur',$_POST['sasoeur']);
		$prepare->bindValue(':snight',$_POST['snight']);
		$prepare->bindValue(':sfriend',$_POST['sfriend']);
		$prepare->bindValue(':age',$_POST['age']);
		$prepare->bindValue(':mail',$_POST['mail']);
		$prepare->bindValue(':password',hash('sha256',SALT.$_POST['password'])); // hash le mdp

		if(isset($_POST['sex'])){
			$sex = htmlentities($_POST['sex']);
			$sql = $pdo->prepare('SELECT sex FROM user WHERE sex = \''.$sex.'\';');
			$sql->execute(array('.$sex.' => $_POST['sex']));
		}

		if(isset($_POST['name'])){
			$sex = htmlentities($_POST['name']);
			$sql = $pdo->prepare('SELECT name FROM user WHERE name = \''.$name.'\';');
			$sql->execute(array('.$name.' => $_POST['name']));
		}

		$prepare->execute();

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
		<p>
			<label>Vous êtes : <br/>
	   	   		<label for="imale">Un homme</label>
				<input type="radio" name="sex" id="imale" value="imale">
				<label for="ifemale">Une femme</label>
				<input type="radio" name="sex" id="ifemale" value="ifemale">
			</label>
	    </p>
		<input type="text" name="name" id="name">
		<label for="name">Nom</label>
		<br/>
		<input type="text" name="first_name" id="first_name">
		<label for="first_name" id="first_name">Prénom</label>
		<br/>
		 <p>
		    <input type="date" name="birth_date">
	   		<label for="birth_date">Date de naissance</label>
		</p>
		<p>
		<input type="text" name="city" id="city">
		<label for="city">Ville</label>
		</p>

	    <p>
	    	<label>Vous recherchez :<br/>
				<input type="checkbox" name="sman" id="sman">
				<label for="smen">Un homme</label>
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
		<input type="password" name="password" id="password">
		<label for="password">Votre mot de passe</label>
		<br/>
		<input type="password" name="cpassword" id="cpassword">
		<label for="cpsw">Confirmez votre mot de passe</label>
		<br/>
		<input type="submit" name="valid">
	</form>
</body>
</html>