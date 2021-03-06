<?php

if (!isset($_POST['nickname']) || empty($_POST['nickname']) || !isset($_POST['email']) || empty($_POST['email'])
    || !isset($_POST['password']) || empty($_POST['password']) || !isset($_FILES['image']) || empty($_FILES['image']['name'])) {
    header('location: ../connexion.php?message=Veuillez remplir tous les champs.&type=error&field=ins');
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('location: ../connexion.php?message=Email invalide.&type=error&field=ins');
    exit;
}

if (strlen($_POST['password']) < 8) {
    header('location: ../connexion.php?message=Votre mot de passe doit faire au moins 8 caractères.&type=error&field=ins');
    exit;
}

$uppercase = preg_match('@[A-Z]@', $_POST['password']);
$lowercase = preg_match('@[a-z]@', $_POST['password']);
$number = preg_match('@[0-9]@', $_POST['password']);

if (!$uppercase || !$lowercase || !$number) {
    header('location: ../connexion.php?message=Votre mot de passe doit au moins contenir une majuscule, une minuscule et un chiffre.&type=error&field=ins');
    exit;
}

include('../includes/config.php');

$q = 'SELECT * FROM user WHERE pseudo = :pseudo';
$req = $db->prepare($q);
$req->execute([
    'pseudo' => $_POST['nickname']
]);

$ans = $req->fetch();

if ($ans) {
    header('location: ../connexion.php?message=Pseudo déjà utilisé.&type=error&field=ins');
    exit;
}

$q = 'SELECT * FROM user WHERE email = :email';
$req = $db->prepare($q);
$req->execute([
    'email' => $_POST['email']
]);

$ans = $req->fetch();

if ($ans) {
    header('location: ../connexion.php?message=Email déjà utilisé.&type=error&field=ins');
    exit;
}



if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    $acceptable = [
        'image/jpeg',
        'image/png',
        'image/gif'
    ];

    if (!in_array($_FILES['image']['type'], $acceptable)) {
        header('location: ../connexion.php?message=Type de fichier incorrect.&type=error&field=ins');
        exit;
    }
    $maxSize = 1024 * 1024; // 1Mo

    if($_FILES['image']['size'] > $maxSize) {
        header('location: ../connexion.php?message=Ce fichier est trop lourd.&type=error&field=ins');
        exit;
    }

    $path = '../uploads';

    if(!file_exists($path)){
        mkdir($path, 0777);
    }

    $filename = $_FILES['image']['name'];

    $array = explode('.', $filename);

    $ext = '.' . end($array);

    $filename = 'image-' . time() . $ext;

    $destination = $path . '/' . $filename;
    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
}

$q = 'INSERT INTO user (pseudo, email, password, image) values (:pseudo, :email, :password, :image)';
$req = $db->prepare($q);
$reponse = $req->execute([
    'pseudo' => $_POST['nickname'],
    'email' => $_POST['email'],
    'password' => hash('sha512', $_POST['password']),
    'image' =>  isset($filename) ? $filename : ''
]);

if ($reponse) {
    header('location: ../connexion.php?message=Compte créé avec succès !&type=success&field=ins');
    exit;
} else {
    header('location: ../connexion.php?message=Erreur lors de l\'inscription.&type=error&field=ins');
    exit;
}
