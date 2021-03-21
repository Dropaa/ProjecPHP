<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<style>

    body{
        font-family: 'Lato', sans-serif;
    }
    .add_pokemon{
        margin-left: 461px;
        margin-right: 461px;
        margin-top: 200px ;
    }

    h1{
        padding: 10px;
        text-align: center;
    }

    .nom,.pv, .attaque, .défense, .vitesse, .ajouter {
        border-radius: 5px;
        border: 1px solid;
        border-color: grey;
        font-size: 16px;
    }

    .file{
        padding-left: 5px;
    }

    ::placeholder{
        color: #626978;
    }
    .nom, .pv, .attaque, .défense, .vitesse {
        display: inline-block;
        width: 100%;
        padding: 12px;
        margin-bottom: 10px;
    }
    .ajouter{
        border: hidden;
        color: white;
        width: 103%;
        padding: 12px;
        background-color: #4DAE50;
        font-size: 16px;
    }

    .ajouter:hover{
        opacity: .9;
    }

</style>

<body>
<div class="add_pokemon">
    <h1><strong>AJOUTER UN POKEMON</strong></h1>
    <form action="profile.php" role="form" method="post">
        <input type="text" name="nom" placeholder="Nom" class="nom" required>
        <input type="text" name="pv" placeholder="PV" class="pv" required>
        <input type="text" name="attaque" placeholder="Attaque" class="attaque" required>
        <input type="text" name="défense" placeholder="Défense" class="défense" required>
        <input type="text" name="vitesse" placeholder="Vitesse" class="vitesse" required>
        <p><strong>Image :</strong><input type="file" accept="image/png" class="file" required></p>
        <input type="submit" value="Ajouter" class="ajouter">
    </form>
</div>
</body>
</html>
