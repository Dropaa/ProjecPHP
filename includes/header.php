<style>
	body{
		margin: auto;
	}
	.header{
        display: flex;
        justify-content: space-between;
		background-color:  #AAA;
		color: #FFF;
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 30px;
		padding-right: 30px;
	}
	.logo {
    display: inline-block;
	}
	.navigation{
		align-self: center;
	}
	.navigation a{
		color:white;
		text-decoration: none;
		font-size: 18px;
		padding: 0.5em;
	}
	.navigation a:hover{
		text-decoration: underline;
	}
</style>
<header>
	<div class="header">
		<div class="logo">
			<img src="images/logo.png" height="40px">
		</div>
		<div class="navigation">
			<a href="index.php" style="text-decoration: <?= $curr == 'index' ? 'underline' : '' ?>">Accueil</a>
			<a href="collection.php" style="text-decoration: <?= $curr == 'collection' ? 'underline' : '' ?>">Collection</a>
            <?php

            if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
                echo '<a href="add_pokemon.php" style="text-decoration: ' . ($curr == 'add_pokemon' ? 'underline' : '') . '">Ajouter un Pokemon</a>';
                echo '<a href="profile.php" style="text-decoration: ' . ($curr == 'profile' ? 'underline' : '') . '">Mon compte</a>';
                echo '<a href="disconnect.php">Déconnexion</a>';
            } else {
                echo '<a href="connexion.php" style="text-decoration: ' . ($curr == 'connexion' ? 'underline' : '') . '">Connexion</a>';
            }
            ?>
		</div>
	</div>
</header>