<?php
	session_start();
	require 'inc/config.php';
	//die('ok');
	require_once 'sql-profile.php';





?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil</title>
</head>
<body>
	<h1>Mon profil</h1>
	<h2>Sexe : <?= $user_info->sex ?></h2>
	<h2>Nom : <?= $user_info->name ?></h2>
	<h2>Prénom : <?= $user_info->first_name ?></h2>
	<h2>Date de naissance : <?= $user_info->birth_date ?></h2>
	<h2>Ville : <?= $user_info->city ?></h2>
	<h2>Interessé par : Hommes :  <?= $user_info->smale ?>		Femmes : <?= $user_info->sfemale ?></h2>
	<h2>Recherche : Ame soeur : <?= $user_info->sasoeur ?>		Série d'un soir : <?= $user_info->snight ?>			Amitié : <?= $user_info->sfriend ?> </h2>
	<h2>Age compris entre : <?= $user_info->age ?></h2>

</body>
</html>