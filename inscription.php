<?php
	require 'inc/config.php';
	//die('ok');

	require_once 'error.php';
	require_once 'sql-inscription.php';
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
</head>
<body>

	<?php if (!empty($errors)) { ?>
		<div class="errors">
			<?php foreach($errors as $_error){ ?>
			<p>
				<?php 
					if(!is_array($_error)){
						echo $_error; 
					}
					?>
			<p>
			<?php } ?>
		</div>
	<?php } ?>

	<form method="post" action="page.php" enctype="multipart/form-data">	

		<p>
			<label>Vous êtes : <br/>
				<label for="imale">Un homme</label>
				<input type="radio" name="sex" id="imale" value="imale" checked>
				<label for="ifemale">Une femme</label>
				<input type="radio" name="sex" id="ifemale" value="ifemale" <?= $_POST['sex']=='ifemale' ? 'checked' : '' ?>>
			</label>
		</p>
		<input type="text" name="name" id="name" value="<?= $_POST['name'] ?>">
		<label for="name">Nom</label>
		<br/>
		<input type="text" name="first_name" id="first_name" value="<?= $_POST['first_name']?>">
		<label for="first_name">Prénom</label>
		<br/>
		<p>
			<input type="date" name="birth_date" id="birth_date" value="<?= $_POST['birth_date']?>">
			<label for="birth_date">Date de naissance</label>
		</p>
		<p>
			<input type="text" name="city" id="city" value="<?= $_POST['city']?>">
			<label for="city">Ville</label>
		</p>

		<p>
			<label>Vous recherchez :<br/>
				<input type="hidden" name="smale" value="no">
				<input type="checkbox" name="smale" id="smale" <?= $_POST['smale']=='on' ? 'checked' : '' ?>>
				<label for="smale">Un homme</label>
				<input type="hidden" name="sfemale" value="no">
				<input type="checkbox" name="sfemale" id="sfemale" <?= $_POST['sfemale']=='on' ? 'checked' : '' ?>>
				<label for="sfemale">Une femme</label>
			</label>
		</p>
		<p>
			<label>Vous recherchez : <br/>
					<input type="hidden" name="soulmate" value="no">
					<input type="checkbox" name="soulmate" id="soulmate" <?= $_POST['soulmate']=='on' ? 'checked' : '' ?> >
					<label for="soulmate">Ame soeur</label>
					<br/>
					<input type="hidden" name="snight" value="no">
					<input type="checkbox" name="snight" id="snight" <?= $_POST['snight']=='on' ? 'checked' : '' ?>>
					<label for="snight">Série d'un soir</label>
					<br/>
					<input type="hidden" name="sfriend" value="no">
					<input type="checkbox" name="sfriend" id="sfriend" <?= $_POST['sfriend']=='on' ? 'checked' : '' ?>>
					<label for="sfriend">Amitié</label>
					<br/>
			</label>
		</p>
		<label>Dans quelle tranche d'age : <br/>
			<select name="age" id="sage">
				<option value="0" <?= $_POST['age']==0 ? 'selected' : '' ?> >18 à 29 ans</option>
				<option value="1" <?= $_POST['age']==1 ? 'selected' : '' ?> >30 à 39 ans</option>
				<option value="2" <?= $_POST['age']==2 ? 'selected' : '' ?> >40 à 49 ans</option>
				<option value="3" <?= $_POST['age']==3 ? 'selected' : '' ?> >50 ans et plus</option>
			</select>
		</label>
		<br/>
		<br/>
		<input type="email" name="mail" id="mail" value="<?= $_POST['mail']?>">
		<label for="mail">Votre email</label>
		<br/>
		<input type="email" name="cmail" id="cmail" value="<?= $_POST['cmail']?>">
		<label for="cmail">Confirmez votre email</label>
		<br/>
		<input type="password" name="password" id="password">
		<label for="password">Votre mot de passe</label>
		<br/>
		<input type="password" name="cpassword" id="cpassword">
		<label for="cpassword">Confirmez votre mot de passe</label>
		<br/>
		
		<input type="submit" name="valid">
	</form>
</body>
</html>
