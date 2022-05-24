<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Inscription</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/WaW/style/template_formulaire/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/WaW/style/template_formulaire/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/WaW/style/template_formulaire/util.css">
	<link rel="stylesheet" type="text/css" href="/WaW/style/template_formulaire/main.css">
<!--===============================================================================================-->
</head>
<body>
<!----------------------------------------------------------------------------------->
<!-- 							inclusion des pages menu.ph et haut.php 		   -->
<!----------------------------------------------------------------------------------->
	
<?php
  include('../include/menu.php');
  
  include('../include/haut.php');
?>	
<!----------------------------------------------------------------------------------->
<!-- 		formulaire(saisi des informations pour la creation du joueur		   -->
<!----------------------------------------------------------------------------------->	
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					INSCRIPTION
				</span>
				<!-- saisi du prenom (obligatoir)-->
				<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre prénom">
					<span class="label-input100">Prenom *</span>
					<input class="input100" type="text" name="prenom" placeholder="Entrez votre prénom">
				</div>
				<!-- saisi du nom (obligatoir)-->
				<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre nom">
					<span class="label-input100">Nom *</span>
					<input class="input100" type="text" name="nom" placeholder="Entrez votre nom">
				</div>
				<!-- saisi du email (obligatoir)-->
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entrez votre Email">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="mail" placeholder="Entrez votre Email ">
				</div>
				<!-- saisi du téléphone-->
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Téléphone</span>
					<input class="input100" type="text" name="telephone" placeholder="Entrez votre numéro de téléphone">
				</div>
				
				<!-- envoie des données -->
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							S'inscrire
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
<!----------------------------------------------------------------------------------->
<!-- 		requete SQl permettant de inserer les donnée dans la BDD		 	   -->
<!----------------------------------------------------------------------------------->				
				<?php
					if (isset($_GET['prenom']))
					{
						$mysqli = new mysqli('localhost', 'root', 'root', 'waw');
						$mysqli->set_charset('utf8');
						$requete='INSERT INTO joueur VALUES(NULL,"'.$_GET['nom'].'","'.$_GET['prenom'].'","'.$_GET['mail'].'","'.$_GET['telephone'].'")';
						$resultat = $mysqli->query($requete);
						
						if ($resultat)
						{
							echo 'vous avez bien été enregistré';
						
				?>
							<a href="connexion_compte.php"> 
								<p>suivant</p>
							</a>
				<?php
						}
						else
						{
							echo 'Erreur';
						}
					}

				?>
			</form>

		</div>
	</div>

<?php
  include('..\include\bas.php');
?>


</body>
</html>
