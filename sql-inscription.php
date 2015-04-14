<?php
	require_once 'error.php';
	require_once 'inscription.php';

	if(!empty($_POST)){
		$errors = get_errors($_POST);
		if(empty($errors) || !isset($errors)){
			var_dump($errors);
			$prepare = $pdo->prepare('INSERT INTO user (sex, name, first_name, birth_date, city, smale, sfemale, sasoeur, snight, sfriend, age, mail, password) VALUES (:sex, :name, :first_name, :birth_date, :city, :smale, :sfemale, :sasoeur, :snight, :sfriend, :age, :mail, :password)');

			$prepare->bindValue(':sex',$_POST['sex']);
			$prepare->bindValue(':name',$_POST['name']);
			$prepare->bindValue(':first_name',$_POST['first_name']);
			$prepare->bindValue(':birth_date',$_POST['birth_date']);
			$prepare->bindValue(':city',$_POST['city']);
			$prepare->bindValue(':smale',$_POST['smale']);
			$prepare->bindValue(':sfemale',$_POST['sfemale']);
			$prepare->bindValue(':sasoeur',$_POST['soulmate']);
			$prepare->bindValue(':snight',$_POST['snight']);
			$prepare->bindValue(':sfriend',$_POST['sfriend']);
			$prepare->bindValue(':age',$_POST['age']);
			$prepare->bindValue(':mail',$_POST['mail']);
			$prepare->bindValue(':password',hash('sha256',SALT.$_POST['password'])); // hash le mdp*/

			if(isset($_POST['sex'])){
				$sex = htmlentities($_POST['sex']);
				$sql = $pdo->prepare('SELECT sex FROM user WHERE sex = \''.$sex.'\';');
				$sql->execute(array('.$sex.' => $_POST['sex']));
			}

			if(isset($_POST['name'])){
				$name = htmlentities($_POST['name']);
				$sql = $pdo->prepare('SELECT name FROM user WHERE name = \''.$name.'\';');
				$sql->execute(array('.$name.' => $_POST['name']));
			}

			if(isset($_POST['first_name'])){
				$first_name = htmlentities($_POST['first_name']);
				$sql = $pdo->prepare('SELECT first_name FROM user WHERE first_name = \''.$first_name.'\';');
				$sql->execute(array('.$first_name.' => $_POST['first_name']));
			}

			if(isset($_POST['birth_date'])){
				$birth_date = htmlentities($_POST['birth_date']);
				$sql = $pdo->prepare('SELECT birth_date FROM user WHERE birth_date = \''.$birth_date.'\';');
				$sql->execute(array('.$birth_date.' => $_POST['birth_date']));
			}

			if(isset($_POST['city'])){
				$city = htmlentities($_POST['city']);
				$sql = $pdo->prepare('SELECT city FROM user WHERE city = \''.$city.'\';');
				$sql->execute(array('.$city.' => $_POST['city']));
			}

			if(isset($_POST['smale'])){
				$smale = htmlentities($_POST['smale']);
				$sql = $pdo->prepare('SELECT smale FROM user WHERE smale = \''.$smale.'\';');
				$sql->execute(array('.$smale.' => $_POST['smale']));
			}

			if(isset($_POST['sfemale'])){
				$sfemale = htmlentities($_POST['sfemale']);
				$sql = $pdo->prepare('SELECT sfemale FROM user WHERE sfemale = \''.$sfemale.'\';');
				$sql->execute(array('.$sfemale.' => $_POST['sfemale']));
			}

			if(isset($_POST['soulmate'])){
				$sasoeur = htmlentities($_POST['soulmate']);
				$sql = $pdo->prepare('SELECT sasoeur FROM user WHERE sasoeur = \''.$sasoeur.'\';');
				$sql->execute(array('.$sasoeur.' => $_POST['soulmate']));
			}

			if(isset($_POST['snight'])){
				$snight = htmlentities($_POST['snight']);
				$sql = $pdo->prepare('SELECT snight FROM user WHERE snight = \''.$snight.'\';');
				$sql->execute(array('.$snight.' => $_POST['snight']));
			}


			if(isset($_POST['sfriend'])){
				$sfriend = htmlentities($_POST['sfriend']);
				$sql = $pdo->prepare('SELECT sfriend FROM user WHERE sfriend = \''.$sfriend.'\';');
				$sql->execute(array('.$sfriend.' => $_POST['sfriend']));
			}

			if(isset($_POST['age'])){
				$age = htmlentities($_POST['age']);
				$sql = $pdo->prepare('SELECT age FROM user WHERE age = \''.$age.'\';');
				$sql->execute(array('.$age.' => $_POST['age']));
			}



			if(isset($_POST['password'])){
				$password = htmlentities($_POST['password']);
				$sql = $pdo->prepare('SELECT password FROM user WHERE password = \''.$password.'\';');
				$sql->execute(array('.$password.' => $_POST['password']));
			}

			$prepare->execute();

			header('Location:login.php');
		}
	}


	/*$_FILES['user_img']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
	$_FILES['user_img']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
	$_FILES['user_img']['size']     //La taille du fichier en octets.
	$_FILES['user_img']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
	$_FILES['user_img']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.*/

	//if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";