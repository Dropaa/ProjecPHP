<!--?php include ('includes/connexion_check.php'); ?-->

<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
</head>

    <?php
    $curr = 'add_pokemon';
    include('includes/header.php');
    ?>

<body>
<div class="add_pokemon">
    <h1 class="titreADD"><strong>AJOUTER UN POKEMON</strong></h1>
    <form action="profile.php" role="form" method="post">
        <input type="text" name="name" placeholder="Nom" class="nom" required>
        <input type="text" name="hp" placeholder="PV" class="pv" required>
        <input type="text" name="attack" placeholder="Attaque" class="attaque" required>
        <input type="text" name="defense" placeholder="Défense" class="défense" required>
        <input type="text" name="speed" placeholder="Vitesse" class="vitesse" required>
        <p class="img"><strong>Image :</strong><input type="file" accept="image/png,image/jpeg,image/gif" class="file" required></p>
        <input type="submit" value="Ajouter" class="ajouter">
    </form>
</div>
</body>

<?php include('includes/footer.php') ?>

</html>
