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
			<a href="index.php">Accueil</a>
			<a href="collection.php">Collection</a>
			<a href="add_pokemon.php">Ajouter un Pokemon</a>
			<a href="profile.php">Mon compte</a>
			<a href="includes/connexion_check.php">Déconnexion</a>
		</div>
	</div>
</header>