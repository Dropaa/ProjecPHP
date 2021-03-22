<?php session_start(); ?>

<!DOCTYPE html>
<html>

<?php
$curr = 'collection';
include('includes/header.php')
?>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<h1 class="allpokemonTitre">TOUS LES POKEMONS</h1>
<div class="pokemonCollect">
<?php

include ('includes/config.php');

$q = 'SELECT * FROM pokemon ORDER BY nom';
$req = $db->query($q);
$ans = $req->fetchAll(PDO::FETCH_ASSOC);

foreach ($ans as $key => $pokemon) {
    echo '<figure>';
    echo '<img src="uploads/' . $pokemon['image'] .'" height="200" width="200">';
    echo '<figcaption>';
    echo '<H4>' . $pokemon['nom'] . '</H4>';
    echo '<p> PV:' . $pokemon['pv'] .'</p>';
    echo '<p> Attaque:' . $pokemon['attaque'] .'</p>';
    echo '<p> Défense:' . $pokemon['defense'] .'</p>';
    echo '<p> Vitesse:' . $pokemon['vitesse'] .'</p>';
    echo '</figcaption>';
    echo '</figure>';
}
?>
</div>

</body>

<?php include('includes/footer.php') ?>

</html>
