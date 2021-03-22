<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    setcookie('email', $_POST['email'], time() + 3600);
}

if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])) {
    header('location: ../connexion.php?message=Vous devez remplir les 2 champs.&type=error&field=co');
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('location: ../connexion.php?message=Email invalide.&type=error&field=co');
    exit;
}

include ('../includes/config.php');

$q = 'SELECT id FROM user WHERE email = :email AND password = :password';
$req = $db->prepare($q);
$req->execute([
    'email' => $_POST['email'],
    'password' => hash('sha512', $_POST['password'])
]);
$ans = $req->fetch();

if ($ans) {
    session_start();
    $_SESSION['email'] = $_POST['email'];
    header('location: ../index.php');
    exit;
} else {
    header('location: ../connexion.php?message=Identifiants incorrects.&type=error&field=co');
    exit;
}