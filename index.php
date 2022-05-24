<!DOCTYPE html>
<html lang="en">
<title>WaW</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style/style.css" >

<body>

<?php
  include('\include\menu.php');
  
  include('\include\haut.php');
?>


	 <!-- Trailer --> 
   <div class="w3-pink" id="trailer">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1600px">
    <h2 class="w3-wide">TRAILER</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-wide">
	  <iframe width="1210" height="630" src="https://www.youtube.com/watch?v=bdNxt-F62hI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"; "allowfullscreen"></iframe>
	</div></div></div>
	 
	 
  <!-- Sélection de la classe --> 
   <div class="w3-blue" id="classe">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1600px">
    <h2 class="w3-wide">CLASSE</h2>
    <div class="w3-row w3-padding-32" class="opaIm">
      <div class="w3-col s2">
        <p>Paladin</p>
		<a href="contenu\paladin.php">
			<img src = "image\badge_paladin_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	  </div>
      <div class="w3-col s2">
        <p>Voleur</p>
		<a href="contenu\voleur.php">
			<img src = "image\badge_voleur_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	  </div>
      <div class="w3-col s2">
        <p>Archer</p>
		<a href="contenu\archer.php">
			<img src = "image\badge_archer_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Guerrier</p>
		<a href="contenu\guerrier.php">
			<img src = "image\badge_guerrier_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Mage</p>
		<a href="contenu\mage.php">
			<img src = "image\badge_mage_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Moine</p>
		<a href="contenu\moine.php">
			<img src = "image\badge_moine_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 
	 
    </div>
    </div>
  </div>
  
    <!-- Sélection de la race --> 
   <div class="w3-pink" id="race">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1600px">
    <h2 class="w3-wide">RACE</h2>
    <div class="w3-row w3-padding-32">
      <div class="w3-col s2">
        <p>Nain</p>
		<a href="contenu\nain.php">
			<img src = "image\nains_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	  </div>
      <div class="w3-col s2">
        <p>Elfe</p>
		<a href="contenu\elfe.php">
			<img src = "image\elfe_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	  </div>
      <div class="w3-col s2">
        <p>Orque</p>
		<a href="contenu\orque.php">
			<img src = "image\orque_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Troll</p>
		<a href="contenu\troll.php">
			<img src = "image\troll_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Gnome</p>
		<a href="contenu\gnome.php">
			<img src = "image\gnome_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 <div class="w3-col s2">
        <p>Humain</p>
		<a href="contenu\humain.php">
			<img src = "image\humain_rond.png" width ="150" height="140" alt="ca marche pas"/> 
		</a>      
	 </div>
	 </div>
	 </div>
	 </div>	
	 
	 <!-- The Band Section Personnage --> 
   <div class="w3-blue" id="persos">
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:1600px">
    <h2 class="w3-wide">TES PERSONNAGES</h2>
    <div class="w3-row w3-padding-32" class="opaIm">
	<?php 
		$bdd = new PDO ('mysql:host=localhost; dbname=waw; charset=utf8', 'root', 'root');
		if(isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['email'])){
			$email = (string)$_SESSION['email'];
			$req = $bdd->prepare('SELECT R.race_code FROM race R INNER JOIN personnage P ON R.race_code = P.race_code INNER JOIN joueur J ON P.joueur_code = J.joueur_code WHERE joueur_mail = "'.$email.'"');
			$req->execute();
			$donnees = $req->fetch();
			switch($donnees['race_code']){
				case 1 :
	?>
				<div>
					<p>Nain</p>
					<img src = "image\nains_rond.png" width ="150" height="140" alt="ca marche pas"/>    
				</div>	
	<?php       
				break;
				case 2 :
	?>
				<div>
					<p>Elfe</p>
					<img src = "image\elfe_rond.png" width ="150" height="140" alt="ca marche pas"/>     
				</div>	
	<?php       
				break;
				case 3 :
	?>
				<div>
					<p>Orque</p>
					<img src = "image\orque_rond.png" width ="150" height="140" alt="ca marche pas"/>      
				</div>	
	<?php       
				break;
				case 4 :
	?>
				<div>
					<p>Troll</p>
					<img src = "image\troll_rond.png" width ="150" height="140" alt="ca marche pas"/>       
				</div>	
	<?php       
				break;
				case 5 :
	?>
				<div>
					<p>Gnome</p>
					<img src = "image\gnome_rond.png" width ="150" height="140" alt="ca marche pas"/>      
				</div>	
	<?php       
				break;
				case 6 :
	?>
				<div>
					<p>Humain</p>
					<img src = "image\humain_rond.png" width ="150" height="140" alt="ca marche pas"/>       
				</div>	
	<?php
				break;
				default : 
					echo 'Il faut se connecter et avoir un ou plusieurs personnages pour les voir ici.';
					break;
			}
			$req->closeCursor();
			
			//On effectue la requête pour connaître la classe
			
			$req = $bdd->prepare('SELECT C.cl_code FROM classe C INNER JOIN personnage P ON C.cl_code = P.cl_code INNER JOIN joueur J ON P.joueur_code = J.joueur_code WHERE joueur_mail = "'.$email.'"');
			$req->execute();
			$donnees = $req->fetch();
			switch($donnees['cl_code']){
				case 1 :
	?>
				<div>
					<p>Paladin</p>
					<img src = "image\badge_paladin_rond.png" width ="150" height="140" alt="ca marche pas"/>    
				</div>	
	<?php       
				break;
				case 2 :
	?>
				<div>
					<p>Voleur</p>
					<img src = "image\badge_voleur_rond.png" width ="150" height="140" alt="ca marche pas"/>     
				</div>	
	<?php       
				break;
				case 3 :
	?>
				<div>
					<p>Archer</p>
					<img src = "image\badge_archer_rond.png" width ="150" height="140" alt="ca marche pas"/>      
				</div>	
	<?php       
				break;
				case 4 :
	?>
				<div>
					<p>Guerrier</p>
					<img src = "image\badge_guerrier_rond.png" width ="150" height="140" alt="ca marche pas"/>       
				</div>	
	<?php       
				break;
				case 5 :
	?>
				<div>
					<p>Mage</p>
					<img src = "image\badge_mage_rond.png" width ="150" height="140" alt="ca marche pas"/>      
				</div>	
	<?php       
				break;
				case 6 :
	?>
				<div>
					<p>Moine</p>
					<img src = "image\badge_moine_rond.png" width ="150" height="140" alt="ca marche pas"/>       
				</div>	
	<?php
				break;
				default : 
					break;
			}
			$req->closeCursor();
			
			// On effectue la requête pour avoir le psuedo du personnage
			
			$req = $bdd->prepare('SELECT P.perso_ps FROM personnage P INNER JOIN joueur J ON P.joueur_code = J.joueur_code WHERE joueur_mail = "'.$email.'"');
			$req->execute();
			$donnees = $req->fetch();
	?>
		</br>
		<h2>Pseudo : <?php echo $donnees['perso_ps'];?></h2>
	<?php
		}
		else{
			echo 'Il faut se connecter et avoir un ou plusieurs personnages pour les voir ici.';
		}
	?>
	 
	 
    </div>
    </div>
  </div>
  
  
<?php
  include('\include\bas.php');
?>

</body>
</html>
