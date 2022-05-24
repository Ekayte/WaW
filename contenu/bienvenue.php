<?php
	session_start ();
	$_SESSION['nom'] = $_GET['nom'];
	$_SESSION['prenom'] = $_GET['prenom'];
	$_SESSION['email'] = $_GET['mail'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Bienvenue</title>
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
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action = "/WaW/index.php" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Bon retour <?php echo $_GET['prenom'].' '.$_GET['nom'] ?>
				</span>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Retour à l'accueil
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>