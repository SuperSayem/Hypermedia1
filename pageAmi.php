<!DOCTYPE html>
<html lang="fr-CA">
<head>
	<title>
		Principal
	</title>
	<meta name="viewport" content="width=device=width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<script type="dist/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="dist/css/bootstrap.css">	
	<link rel=stylesheet href="style.css">
</head>
<body>
	<header>

	<nav>
		<div class="text-center">
				<figure>
					<img src="img/logo.svg" style="width: 100px"> <br/>
					<figurecaption> PhotoShare </figurecaption>
				</figure>
			</div>
		</div>
		<div class="conteneur conteneur-reparti" style="flex-wrap: nowrap;">
			<div class="conteneur" >
				<ul>
					<li><a href="pageAccueil.html"><button type="button" class="btn btn-primary"> Accueil </button></a></li>

					<li><a href="pageAmi.html"><button type="button" class="btn btn-primary">Mes Amis</button></a></li>
					<li><a href="pagePhoto.html"><button type="button" class="btn btn-primary">Mes Photos</button></a></li>
					<li><a href="pagePublic.html"><button type="button" class="btn btn-primary">Public</button></a></li>
				</ul>
			</div>
			<div class="conteneur conteneur-fin">
				<div class="dropdown">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  <img src="img/person.png" style="height: 30px">
					  </button>
					  <div class="dropdown-menu btn btn-primary" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="pageInscription.html">S'inscrire</a>
					    <a class="dropdown-item" href="pageConnexion.php">Se connecter</a>
					    <a class="dropdown-item" href="pageDeconnexion.html">Déconnexion</a>
					  </div>
				</div>
			</div>
		</div>
	</nav>
	</header>	
	
	<main style="min-height: 600px">
		<div class="input-group-prepend">
			<form action="ajouterAmi.php" method="post">
				<label for="nomAmi">Ajouter un ami</label>
				<input type="text" name="nomAmi">
				<input type="submit" name="submit">
			</form>
		</div>
		<div class="input-group-prepend">
			<form action="supprimerAmi.php" method="post">
				<label for="nomAmi">Supprimer un ami</label>
				<input type="text" name="nomAmi">
				<input type="submit" name="submit">
			</form>
		</div>
	   <div class="input-group-prepend" style="justify-content: center">
        	<form action="chargerImageAmi.php" method="post">
        		<input type="submit" name="" value="Afficher les photos de mes amis">
        	</form>
    	</div>
    	<?php session_start();echo $_SESSION["nom"]; ?>
	</main>

	<footer>
		<nav>
		<div class="conteneur conteneur-reparti">
			<div class="conteneur conteneur-vertical">
				<ul>
					<li>
					<a href="#"><button type="button" class="btn btn-primary"> Propos </button></a></li>
					<li>
					<a href="#"><button type="button" class="btn btn-primary"> Contact </button></a></li>
				</ul>
			</div>
			<div class="conteneur conteneur-vertical">
				<ul><li>
					<a href="#"><button type="button" class="btn btn-primary"> Notre entreprise </button></a></li>
				</ul>
			</div>
			
			<div class="conteneur conteneur-vertical">
				<ul><li>
					<a href="#"><button type="button" class="btn btn-primary"> Politique de confidentialitee </button></a></li>
				</ul>

			</div>
		</div>
	</nav>
	<small>© Copyright 2020. All rights reserved.</small>
	</footer>
</body>
</html>