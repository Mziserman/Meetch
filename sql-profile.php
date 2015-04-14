<?php

if(isset($_SESSION['id_co'])){

		$prepare = $pdo->prepare('SELECT id FROM user WHERE mail = :mail LIMIT 1'); // ne récupère qu'une ligne dans la table
		$prepare->bindValue(':mail',$_SESSION['id_co']);
		$prepare->execute();

		$user = $prepare->fetch(); // récupérer
		$user_id = $user->id;

		if($user_id > 0){
			$prepare = $pdo->prepare('SELECT * FROM user WHERE id = :id LIMIT 1'); // ne récupère qu'une ligne dans la table
			$prepare->bindValue(':id',$user_id);
			$prepare->execute();
			$user_info = $prepare->fetch(); // récupérer
		}
	}

	if($user_info->sex == 'ifemale'){
		$user_info->sex = 'Femme';
	}
	else{
		$user_info->sex = 'Homme';
	}

	if($user_info->smale == 'on'){
		$user_info->smale = 'Oui';
	}
	else{
		$user_info->smale = 'Non';
	}
	if($user_info->sfemale == 'on'){
		$user_info->sfemale = 'oui';
	}
	else{
		$user_info->sfemale = 'non';
	}
	if($user_info->sasoeur == 'on'){
		$user_info->sasoeur = 'Oui';
	}
	else{
		$user_info->sasoeur = 'Non';
	}
	if($user_info->snight == 'on'){
		$user_info->snight = 'Oui';
	}
	else{
		$user_info->snight = 'Non';
	}
	if($user_info->sfriend == 'on'){
		$user_info->sfriend = 'Oui';
	}
	else{
		$user_info->sfriend = 'Non';
	}
	switch ($user_info->age) {
    case 0:
        $user_info->age = '18 à 29 ans';
        break;
    case 1:
         $user_info->age = '30 à 39 ans';
        break;
    case 2:
         $user_info->age = '40 à 49 ans';
        break;
    case 3:
        $user_info->age = '50 ans et plus';
        break;
	}