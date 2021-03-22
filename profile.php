<?php include ('includes/connexion_check.php'); ?>

<!DOCTYPE html>

<html>

<?php
$curr = 'profile';
include('includes/header.php')
?>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>

<h1 class="myaccountTitre">MON COMPTE</h1>
<div class="container-account">
<div class="infos">
    <h2><strong>Mes infos :</strong></h2>
    <h4>Pseudo :</h4>
    <h4>Email :</h4>

    <h4>Image de profil :</h4>
</div>

<div class="mypokemons">
    <h2><strong>Mes pokemons :</strong></h2>

</div>
</div>

</body>

<?php include('includes/footer.php') ?>

</html>
