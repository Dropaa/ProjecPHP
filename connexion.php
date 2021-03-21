<!DOCTYPE html>
<html>

<body>

    <h1><strong>CONNEXION</strong></h1>

<div class="connexion">
    <h1>Je possède un compte</h1>
    <form action="verif/verif_connexion.php" role="form" method="post">

        <input type="email" name="email" placeholder="E-mail" class="emailConnexion" required>
        <input type="password" name="password" placeholder="Mot de passe" class="passwordConnexion" required>

        <input type="submit" value="Connexion" class="boutonConnexion">

    </form>
</div>

<div class="inscription">
    <h1>Je crée un compte</h1>
    <form action="verif/verif_inscription.php" role="form" method="post">

        <input type="text" name="nickname" placeholder="Pseudo" class="nicknameInscription" required>
        <input type="email" name="email" placeholder="E-mail" class="emailInscription" required>
        <input type="password" name="password" placeholder="Mot de passe" class="passwordInscription" required>
        <p><strong>Image de profil :</strong> <input type="file" accept="image/png" class="fileInscription" required></p>
        <input type="submit" value="Inscription" class="boutonInscription">

    </form>
</div>

</body>

</html>