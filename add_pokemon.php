<?php include ('includes/connexion_check.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

    <?php
    $curr = 'add_pokemon';
    include('includes/header.php');
    ?>

<style>

    body{
        font-family: 'Lato', sans-serif;
    }
    .add_pokemon{
        margin-left: 461px;
        margin-right: 461px;
        margin-top: 80px;
        margin-bottom: 100px;
    }

    .file{
        font-size: 14px;
    }

    .img{
        font-size: 20px;
    }

    h1{
        padding: 10px;
        text-align: center;
    }

    .nom,.pv, .attaque, .défense, .vitesse, .ajouter {
        border-radius: 4px;
        border: 1px solid;
        border-color: grey;
        font-size: 20px;
    }

    .file{
        padding-left: 5px;
    }

    ::placeholder{
        color: #626978;
    }
    .nom, .pv, .attaque, .défense, .vitesse {
        display: inline-block;
        width: 35vw;
        padding: 16px;
        margin-bottom: 10px;
    }
    .ajouter{
        border: hidden;
        color: white;
        width: 40vw;
        padding: 16px;
        background-color: #4CAF50;
        font-size: 20px;
    }

    .ajouter:hover{
        opacity: .9;
    }

</style>

<body>
<div class="add_pokemon">
    <h1><strong>AJOUTER UN POKEMON</strong></h1>
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
