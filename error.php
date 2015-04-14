<?php
	// error_reporting(E_ALL); 
	// ini_set("display_errors", 1);
	require_once 'inc/config.php';
	require_once 'inscription.php';
	require_once 'sql-inscription.php';
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
		if (empty($_POST['city'])){
			$errors['city_empty']="Vous n'avez pas rempli votre ville";
			$invalide['city']=1;
		}
		if(empty($_POST['mail'])){
			$errors['mail_empty']="Vous n'avez pas remplis votre mail";
			$invalide['mail']=1;
		} 
		if(empty($_POST['cmail'])){
			$errors['cmail_empty']="Vous n'avez pas remplis votre confirmation de mail";
			$invalide['cmail']=1;
		}
		if (!isset($errors['mail_empty']) && !isset($errors['cmail_empty'])){
			if ($_POST['mail'] != $_POST['cmail']){
				$errors['mail_cmail_different']="Votre confirmation de mail est différente de votre mail";
				$invalide['mail']=1;
				$invalide['cmail']=1;
			}
		}
		if(empty($_POST['password'])){
			$errors['password_empty']="Vous n'avez pas remplis votre mot de passe";
			$invalide['password']=1;
		} 
		if(empty($_POST['cpassword'])){
			$errors['cpassword_empty']="Vous n'avez pas remplis votre confirmation de mot de passe";
			$invalide['cpassword']=1;
		}
		if (!isset($errors['password_empty']) && !isset($errors['cpassword_empty'])){
			if ($_POST['password'] != $_POST['cpassword']){
				$errors['password_cpassword_different']="Votre confirmation de mot de passe est différente de votre mot de passe";
				$invalide['password']=1;
				$invalide['cpassword']=1;
			}
		}
		if(!isset($invalide['mail'])){
			// $mail = htmlentities($_POST['mail']);
			// $sql = $pdo->prepare('SELECT mail FROM user WHERE mail = \''.$mail.'\';');
			// $sql->execute(array('.$mail.' => $_POST['mail']));

			// $res = $sql->fetch();

			// if ($res){
			// 	// S'il y a un résultat, c'est à dire qu'il existe déjà un mail dans la bdd
			// 	$errors['mail_already_present']="Votre mail est déjà enregistré";
			// 	$invalide['mail']=1;
			// }
		}
		if (!empty($invalide)){
			$errors['invalide']=$invalide;
		}
		return $errors;
	}
