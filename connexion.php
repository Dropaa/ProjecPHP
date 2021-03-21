<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

    <?php include('includes/header.php') ?>

<style>

    body{
        font-family: 'Lato', sans-serif;
    }

    .container_connexion{

        display: flex;
        margin-left: 461px;
        margin-right: 461px;
    }

    .emailConnexion, .passwordConnexion, .nicknameInscription, .emailInscription, .passwordInscription, .boutonConnexion, .boutonInscription{
        display: inline-block;
        width: 88.5%;
        padding: 16px;
        font-size: 20px;
        border-radius: 4px;
        border: 1px solid;
        border-color: grey;
    }

    .boutonInscription, .boutonConnexion{
        width: 95.5%;
        background-color: #4CAF50;
        color: white;
        border: hidden;
    }


    .boutonConnexion:hover, .boutonInscription:hover{
        opacity: .9;
    }

    input{
        margin: 10px;
    }


    .profilImg{
        font-size: 20px;
    }

    h1{
        text-align: center;
    }

    h2, p{
        padding-left: 10px;
    }

    .fileInscription{
        margin: 0;
    }

    h2{
        margin-top: 25px;
    }

    .connexion{
        border: 1px solid;
        border-color: grey;
        padding-bottom: 10px;
        width: 49%;
        margin-right: 1%;
        height: 55%;
        padding: 8px;
        padding-bottom: 20px;
    }

    .inscription{
        border: 1px solid;
        border-color: grey;
        padding-top: 10px;
        width: 49%;
        margin-left: 1%;
        padding: 8px;
        padding-bottom: 20px;

    }

</style>

<body>
<h1><strong>CONNEXION</strong></h1>
    <div class="container_connexion">


        <div class="connexion">
            <h2>Je possède un compte</h2>
            <form action="verif/verif_connexion.php" role="form" method="post">

                <input type="email" name="email" placeholder="E-mail" class="emailConnexion" required>
                <input type="password" name="password" placeholder="Mot de passe" class="passwordConnexion" required>

                <input type="submit" value="Connexion" class="boutonConnexion">

            </form>
        </div>

        <div class="inscription">
            <h2>Je crée un compte</h2>
            <form action="verif/verif_inscription.php" role="form" method="post">

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