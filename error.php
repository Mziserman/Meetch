<?php
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);

	require_once 'inscription.php';
	function get_errors($data){
		unset($invalide);
		$errors = array();
		$invalide = array();	
		if (empty($_POST['name'])){
			$errors['name_empty']="Nom vide";
			$invalide['name']=1;
		} else if (strlen(trim($_POST['name']))<3){
			$errors['name_too_short']="Nom trop court";
			$invalide['name']=1;
		}
		if (empty($_POST['surname'])){
			$errors['surname_empty']="Prénom vide";
			$invalide['surname']=1;
		} else if (strlen(trim($_POST['surname']))<3){
			$errors['surname_too_short']="Prénom trop court";
			$invalide['surname']=1;
		}
		if (empty($_POST['birth'])){
			$errors['birth_empty']="Date de naissance vide";
			$invalide['birth']=1;
		} else {
			$birth = explode("-", $_POST["birth"]);
			if ($birth[0]<1900){
				$errors["birth_year_too_old"]="Votre date de naissance n'est pas valide (Année trop vieille)";
				$invalide['birth']=1;
			} else if ($birth[0]>date("Y")-18){
				$errors["birth_year_too_recent"]="Vous devez avoir 18 ans pour vous inscrire";
				$invalide['birth']=1;
			}
		}
		if (empty($_POST['sexe'])){

		}
		if (!empty($invalide)){
			$errors['invalide']=$invalide;
		}
		return $errors;

	}	
	if (!empty($_POST)){
		$errors = get_errors($_POST);
		echo '<pre>';
		print_r($errors);
		echo '</pre>';
	}