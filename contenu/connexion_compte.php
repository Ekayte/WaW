<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Connexion</title>
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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<?php
  include('../include/menu.php');
  
  include('../include/haut.php');
  function valider($value){
	// si la valeur du champ prenom est non vide
	if($value !=0) {
		// les données sont ok, on peut envoyer le formulaire    
		return true;
	}
	else {
		// sinon on affiche un message
		// et on indique de ne pas envoyer le formulaire
		return false;
	}
  }
?>	
	
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action = "bienvenue.php" class="contact100-form validate-form" method = "get" onsubmit = "return $resultat">
				<span class="contact100-form-title">
					CONNEXION
				</span>
				
				<?php $resultat = FALSE; ?>
				<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre prénom">
					<span class="label-input100">Prénom *</span>
					<input class="input100" type="text" name="prenom" placeholder="Entrez votre prénom" required>
				</div>
				
				<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre nom">
					<span class="label-input100">Nom *</span>
					<input class="input100" type="text" name="nom" placeholder="Entrez votre nom" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Entrez votre Email">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="mail" placeholder="Entrez votre Email " required>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Téléphone</span>
					<input class="input100" type="text" name="telephone" placeholder="Entrez votre numéro de téléphone">
				</div>
				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" value = "valider" type = "submit">
						<span>
							Se connecter
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				
				<?php
				$bdd = new PDO ('mysql:host=localhost; dbname=waw; charset=utf8', 'root', 'root');
				if(isset($_GET['mail']) && isset($_GET['nom']) && isset($_GET['prenom'])){
					$req = $bdd->prepare('SELECT count(*) FROM joueur WHERE joueur_mail = :mail');
					$req->bindValue(':mail', $_GET['mail']);
					$req->execute();
					$resultat = $req->fetchColumn();
					if($resultat){
				?>
						<div align = "center"> 
							<?php echo 'Connexion réussie';?>
							<u><p>suivant</p></u>
						</div>
						
				<?php
					}
					else
					{
						echo 'Cette adresse est inconnue';
					}
				}
				
				?>
				
			</form>
			
			<h5 align = "center">Si vous n'avez pas de compte, cliquez <u><a href="creation_compte.php" style = "underline">ici</a></u></h5>
			
		</div>
	</div>

<?php
  include('..\include\bas.php');
?>

</body>
</html>