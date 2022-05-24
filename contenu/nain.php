<!DOCTYPE php>
<html>
<title>Nain</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="\WaW\style\style.css" >

<body class="w3-white">
	<!-- inclusion de la nav bar  -->
	
	<!-- Navbar -->
	<?php 
		include_once('../include/menu.php'); // inclusion de menu.php 
	?>
	
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-white" style="max-width:2000px;margin-top:55px">
  <!-- Avatar image in top left corner -->
  <img src="\WaW\image\nains.jpg" class="imClasse">

  <a href="elfe.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
	<img src = "\WaW\image\elfe_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>ELFE</p>
  </a>
  <a href="orque.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
    <img src = "\WaW\image\orque_rond.png" width ="60" height="60" alt="ca marche pas"/>
    <p>ORQUE</p>
  </a>
  <a href="troll.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
	<img src = "\WaW\image\troll_rond.png" width ="60" height="60" alt="ca marche pas"/> 
	<p>TROLL</p>
  </a>
  <a href="gnome.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
	<img src = "\WaW\image\gnome_rond.png" width ="60" height="60" alt²="ca marche pas"/> 
    <p>GNOME</p>
  </a>
    <a href="humain.php" class="w3-bar-item w3-button w3-padding-large w3-hover-grey">
	<img src = "\WaW\image\humain_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>HUMAIN</p>
  </a>
  
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-white" id="home">
    <?php 
		include_once('../include/haut.php'); // inclusion de haut.php 
	?>
    <h1 class="w3-jumbo">Nain</h1>
    <img src="\WaW\image\nain.jpg" alt="nain" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-black">Description</h2>
    <p>	
		<?php
			$user='root';
			$pass='root';
			$bdd = new PDO('mysql:host=localhost;dbname=WaW;charset=utf8', $user, $pass);
			
			//récuperer les noms des clients de la BDD
			$sql='SELECT race_desc FROM Race WHERE race_code=1';
			$req = $bdd->prepare($sql);
			$reponse=$req->execute();
			
			while ($donnees = $req->fetch())
			{
				echo $donnees['race_desc'].' ';
			}
				
			$req->closeCursor(); // Terminer le traitement de la requête
			// fermer la connexion
			$req = null;
			$bdd = null; 
		?>
    </p>
	<h2 class="w3-text-black">Effet</h2>
    <p>	
		<?php
				$user='root';
				$pass='root';
				$bdd = new PDO('mysql:host=localhost;dbname=WaW;charset=utf8', $user, $pass);
				
				//récuperer les noms des clients de la BDD
				$sql='SELECT race_effet FROM Race WHERE race_code=1';
				$req = $bdd->prepare($sql);
				$reponse=$req->execute();
				
				while ($donnees = $req->fetch())
				{
					echo $donnees['race_effet'].' ';
				}
				
				$req->closeCursor(); // Terminer le traitement de la requête
				// fermer la connexion
				$req = null;
				$bdd = null; 
		?>
    </p>
    <h3 class="w3-padding-16 w3-text-black">Spécificité</h3>
    <p class="w3-wide">force</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">vitesse</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:10%"></div>
    </div>
    <p class="w3-wide">vie</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:40%"></div>
    </div><br>
    

</div>

</body>
</html>