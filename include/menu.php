<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<title>WaW_menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" type="text/css" href="..\style\style.css" >-->
<link rel="stylesheet" type="text/css" href="\WaW\style\style.css">

<body>

	<!-- Barre de navigation -->
	<div class="w3-top">
	  <div class="w3-bar w3-black w3-card">
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="\WaW\contenu\connexion_compte.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SE CONNECTER</a>
		<a href="/WaW/index.php#trailer" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TRAILER</a>
		<a href="/WaW/index.php#classe" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CLASSE</a>
		<a href="/WaW/index.php#race" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RACE</a>
		<a href="/WaW/index.php#persos" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MES PERSONNAGES</a>
		<a href="/WaW/contenu/creation_personnage.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CRÉER UN PERSONNAGE</a>
		<a href="/WaW/contenu/deconnexion.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SE DÉCONNECTER</a>
	  </div>
	</div>
	
</body>
</html>