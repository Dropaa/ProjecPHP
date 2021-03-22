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
    $curr = 'connexion';
    include('includes/header.php')
    ?>

<body>
<h1 class="titreConnexion"><strong>CONNEXION</strong></h1>
    <div class="container_connexion">


        <div class="connexion">
            <h2>Je possède un compte</h2>
            <?php
            if (isset($_GET['field']) && $_GET['field'] == 'co') {
                include('includes/message.php');
            }
            ?>
            <form action="verif/verif_connexion.php" role="form" method="post">

                <input type="email" name="email" placeholder="E-mail" class="emailConnexion" required>
                <input type="password" name="password" placeholder="Mot de passe" class="passwordConnexion" required>
                <input type="submit" value="Connexion" class="boutonConnexion">

            </form>
        </div>

        <div class="inscription">
            <h2>Je crée un compte</h2>
            <?php
            if (isset($_GET['field']) && $_GET['field'] == 'ins') {
                include('includes/message.php');
            }
            ?>
            <form action="verif/verif_inscription.php" role="form" method="post" enctype="multipart/form-data">

                <input type="text" name="nickname" placeholder="Pseudo" class="nicknameInscription" required>
                <input type="email" name="email" placeholder="E-mail" class="emailInscription" required>
                <input type="password" name="password" placeholder="Mot de passe" class="passwordInscription" required>
                <p class="profilImg"><strong>Image de profil :</strong> <input type="file" accept="image/png,image/jpeg,image/gif" name="image" class="fileInscription" required></p>
                <input type="submit" value="Inscription" class="boutonInscription">

            </form>
        </div>
    </div>

</body>

<?php include('includes/footer.php') ?>

</html>