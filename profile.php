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
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

<h1 class="myaccountTitre">MON COMPTE</h1>
<div class="container-account">
<div class="infos">
    <?php
    include ('includes/config.php');
    $q = 'SELECT * FROM user WHERE email = :email';
    $req = $db->prepare($q);
    $req->execute([
            'email' => $_SESSION['email']
    ]);

    $ans = $req->fetch();

    $uid = $ans['id'];
    $pseudo = $ans['pseudo'];
    $email = $ans['email'];
    $image = $ans['image'];
    ?>
    <h2 class="titreInfos"><strong>Mes infos :</strong></h2>
    <h4>Pseudo : <?= $pseudo ?></h4>
    <h4>Email : <?= $email ?></h4>

    <h4>Image de profil : <img src="uploads/<?= $image ?>" height="120" width="120" class="imgprofile"></h4>
</div>

<div class="mypokemons">
    <h2><strong>Mes pokemons :</strong></h2>
    <div class="pokemonCollect">
        <?php
        $q = 'SELECT * FROM pokemon WHERE id_user = :id_user ORDER BY nom';
        $req = $db->prepare($q);
        $req->execute([
            'id_user' => $uid
        ]);

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
</div>
</div>

</body>

<?php include('includes/footer.php') ?>

</html>
