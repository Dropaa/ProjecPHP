<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
	<title>Page d'accueil</title>
</head>
<body>
	<?php
    $curr = 'index';
    include('includes/header.php')
    ?>
	<div class="index_container">
		<div class="img">
			<img src="images/pikachu.png" class="pikachu">
		</div>
			<h1 class="titreBvn"><strong>BIENVENUE SUR LE POKEDEX DE L'ESGI !</strong></h1>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>