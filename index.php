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
			width: 50%;
			padding : 50px;
		}
		.bvn{
			text-align: center;
			font-weight: bold;
			font-size: 45px;
			margin-bottom: 200px;
		}

	</style>
</head>
<body>
	<?php include('includes/header.php'); ?>
	<div class="index_container">
		<div class="img">
			<img src="images/pikachu.png" class="pikachu">
		</div>
		<div class="bvn">
			<strong>BIENVENUE SUR LE POKEDEX DE L'ESGI !</strong>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>
</body>
</html>