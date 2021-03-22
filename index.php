<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<title>Page d'accueil</title>
	<style>
		html{
			font-family: Lato;
		}
		.img{
			text-align: center;
		}
		.pikachu{
            padding : 50px;
            width: 353px;
		}
		h1{
			text-align: center;
			font-weight: bold;
			font-size: 45px;
			margin-bottom: 200px;
		}

	</style>
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
			<h1><strong>BIENVENUE SUR LE POKEDEX DE L'ESGI !</strong></h1>
	</div>
	<?php include('includes/footer.php') ?>
</body>
</html>