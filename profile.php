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

<style>
    body{
        font-family: 'Lato', sans-serif;
    }

    .myaccountTitre{
        text-align: center;
        padding-top: 50px;
    }

    .infos{
        border-bottom: 1px solid;
        border-color: grey;
    }

    .container-account{
        padding-left: 200px;
        padding-right: 200px;

    }

    .infos{
        padding-top: 20px;
        padding-bottom: 100px;
    }

    .mypokemons{
        padding-top: 20px;
    }

</style>

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
