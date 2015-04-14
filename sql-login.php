<?php


	if(!empty($_POST)){ // test si des données sont renvoyées

		$prepare = $pdo->prepare('SELECT * FROM user WHERE mail = :mail LIMIT 1'); // ne récupère qu'une ligne dans la table
		$prepare->bindValue(':mail',$_POST['mail']);
		$prepare->execute();

		$user = $prepare->fetch(); // récupérer

		if(!$user){
			echo 'Utilisateur non trouve';
		}

		else{
			if($user->password == hash('sha256',SALT.$_POST['password'])){ // vérifie le hash du MDP
				$_SESSION['id_co']  = $_POST['mail'];
				header('Location:profile.php');
				exit;
			}
			else{
				echo 'Mail ou password errone';
			}
		}
	}
