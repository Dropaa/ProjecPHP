<?php

session_start();

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header('location: ../index.php');
    exit;
}

if (!isset($_POST['name']) || empty($_POST['name']) || !isset($_POST['hp']) || empty($_POST['hp'])
    || !isset($_POST['attack']) || empty($_POST['attack']) || !isset($_POST['defense']) || empty($_POST['defense'])
    || !isset($_POST['speed']) || empty($_POST['speed']) || !isset($_FILES['image']) || empty($_FILES['image']['name'])) {
    header('location: ../add_pokemon.php?message=Vous devez remplir tous les champs.');
    exit;
}

include('../includes/config.php');

$q = 'SELECT * FROM pokemon WHERE name = :name';
$req = $db->prepare($q);
$req->execute([
    'name' => $_POST['name']
]);

$ans = $req->fetch();

if ($ans) {
    header('location: ../add_pokemon.php?message=Pokémon déjà découvert !');
    exit;
}

$acceptable = [
    'image/jpeg',
    'image/png',
    'image/gif'
];

if (!in_array($_FILES['image']['type'], $acceptable)) {
    header('location: ../add_pokemon.php?message=Type de fichier incorrect.');
    exit;
}
$maxSize = 1024 * 1024; // 1Mo

if($_FILES['image']['size'] > $maxSize) {
    header('location: ../add_pokemon.php?message=Ce fichier est trop lourd.');
    exit;
}

$path = '../uploads';

if(!file_exists($path)){
    mkdir($path, 0777);
}

$filename = $_FILES['image']['name'];

$array = explode('.', $filename);

$ext = '.' . end($array);

$filename = 'pokemon-' . $_POST['name'] . $ext;

$destination = $path . '/' . $filename;
move_uploaded_file($_FILES['image']['tmp_name'], $destination);

$q = 'SELECT id FROM user WHERE email = :email';
$req = $db->prepare($q);
$req->execute([
    'email' => $_SESSION['email']
]);

$ans = $req->fetch();

$uid = $ans['id'];

$q = 'INSERT INTO pokemon (nom, pv, attaque, defense, vitesse, image, id_user) values (:nom, :pv, :attaque, :defense, :vitesse, :image, :id_user)';
$req = $db->prepare($q);
$ans = $req->execute([
    'nom' => $_POST['name'],
    'pv' => $_POST['hp'],
    'attaque' => $_POST['attack'],
    'defense' => $_POST['defense'],
    'vitesse' => $_POST['speed'],
    'image' => $filename,
    'id_user' => $uid
]);

if ($ans) {
    header('location: ../add_pokemon.php?message=Pokémon ajouté avec succès !');
    exit;
} else {
    header('location: ../add_pokemon.php?message=Erreur lors de l\'ajout du Pokémon.');
    exit;
}