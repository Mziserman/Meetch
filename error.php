<?php
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);

	require_once 'inscription.php';
	function get_errors($data){
		unset($invalide);
		unset($errors);
		$errors = array();
		$invalide = array();	
		if (empty($_POST['name'])){
			$errors['name_empty']="Nom vide";
			$invalide['name']=1;
		} else if (strlen(trim($_POST['name']))<3){
			$errors['name_too_short']="Nom trop court";
			$invalide['name']=1;
		}
		if (empty($_POST['first_name'])){
			$errors['first_name_empty']="Prénom vide";
			$invalide['first_name']=1;
		} else if (strlen(trim($_POST['first_name']))<3){
			$errors['first_name_too_short']="Prénom trop court";
			$invalide['first_name']=1;
		}
		$birth = explode("-", $_POST["birth_date"]);
		if ($birth[0]<1900){
			$errors["birth_date_year_too_old"]="Votre date de naissance n'est pas valide (Année trop vieille)";
			$invalide['birth_date']=1;
		} else if ($birth[0]>date("Y")-18){
			$errors["birth_date_year_too_recent"]="Vous devez avoir 18 ans pour vous inscrire";
			$invalide['birth_date']=1;
		} 
		if ($birth[1]=0){
			$errors["birth_date_month_empty"]="Veuillez rentrer une date valide";
			$invalide['birth_date']=1;
		}
		if ($birth[2]=0){
			$errors["birth_date_day_empty"]="Veuillez rentrer une date valide";
			$invalide['birth_date']=1;
		}
		if (empty($_POST['sex'])){
			$errors["sex_empty"]="Vous n'avez pas rentré votre sexe.";
			$invalide['sex']=1;
		}
		
		if ($_POST['soulmate']=="no" && $_POST['snight'] == "no" && $_POST['sfriend']="no"){
			$errors["searching_empty"]="Vous n'avez pas rentré ce que vous cherchez";
			$invalide['searching']=1;
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