<!DOCTYPE html>
<html>
<title>Moine</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="\WaW\style\style.css" >

<body class="w3-black">
	<!-- inclusion de la nav bar  -->
	
	<!-- Navbar -->
	<?php 
		include_once('../include/menu.php'); // inclusion de menu.php 
	?>
	
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center" style="max-width:2000px;margin-top:55px">
  <!-- Avatar image in top left corner -->
  <img src="\WaW\image\badge_moine.png" class="imClasse">

  <a href="paladin.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	<img src = "\WaW\image\badge_paladin_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>PALADIN</p>
  </a>
  <a href="voleur.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <img src = "\WaW\image\badge_voleur_rond.png" width ="60" height="60" alt="ca marche pas"/>
    <p>VOLEUR</p>
  </a>
  <a href="archer.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	<img src = "\WaW\image\badge_archer_rond.png" width ="60" height="60" alt="ca marche pas"/> 
	<p>ARCHER</p>
  </a>
  <a href="guerrier.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	<img src = "\WaW\image\badge_guerrier_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>GUERRIER</p>
  </a>
    <a href="mage.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
	<img src = "\WaW\image\badge_mage_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>MAGE</p>
  </a>
  
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <?php 
		include_once('../include/haut.php'); // inclusion de haut.php 
	?>
    <h1 class="w3-jumbo">Moine</h1>
    <img src="\WaW\image\moine.jpg" alt="moine" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Description</h2>
    <p>	
		<?php
			$user='root';
			$pass='root';
			$bdd = new PDO('mysql:host=localhost;dbname=WaW;charset=utf8', $user, $pass);
			
			//récuperer les noms des clients de la BDD
			$sql='SELECT cl_desc FROM Classe WHERE cl_code=6';
			$req = $bdd->prepare($sql);
			$reponse=$req->execute();
			
			while ($donnees = $req->fetch())
			{
				echo $donnees['cl_desc'].' ';
			}
				
			$req->closeCursor(); // Terminer le traitement de la requête
			// fermer la connexion
			$req = null;
			$bdd = null; 
		?>
    </p>
	<h2 class="w3-text-light-grey">Effet</h2>
    <p>	
		<?php
				$user='root';
				$pass='root';
				$bdd = new PDO('mysql:host=localhost;dbname=WaW;charset=utf8', $user, $pass);
				
				//récuperer les noms des clients de la BDD
				$sql='SELECT cl_effet FROM Classe WHERE cl_code=6';
				$req = $bdd->prepare($sql);
				$reponse=$req->execute();
				
				while ($donnees = $req->fetch())
				{
					echo $donnees['cl_effet'].' ';
				}
				
				$req->closeCursor(); // Terminer le traitement de la requête
				// fermer la connexion
				$req = null;
				$bdd = null; 
		?>
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">Prise en main de la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div><br>
    

</div>

</body>
</html>