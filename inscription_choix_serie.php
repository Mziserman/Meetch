<?php
	$nb_page = file_get_contents('http://eztvapi.re/shows');
	$nb_page = json_decode($nb_page);
	// if (in_array(0, $nb_page))
	// 	echo"coucou";
	$page1 = file_get_contents('http://eztvapi.re/shows/1');
	$page1 = json_decode($page1);
	// for ($i=0; $i < 50; $i++) {
	// 	echo $page1[$i]->images->poster."<br/>";
	// }
	
	// echo '<pre>';
	// print_r($page1);
	// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php for ($i=0; $i < 50; $i++) { ?>
		<img src="<?= $page1[$i]->images->poster ?>" width="200em"/>
		<p><?= $page1[$i]->title ?></p>
	<?php } ?>
</body>
</html>