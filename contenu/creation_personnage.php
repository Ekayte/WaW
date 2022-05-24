<!DOCTYPE php>
<html>
<title>creation personnage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="\WaW\style\style.css" >

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/WaW/style/template_formulaire/css/util.css">
<!--===============================================================================================-->
	
<body class="w3-black">
	<?php 
		include_once('../include/menu.php'); // inclusion de menu.php 
	?>
<!----------------------------------------------------------------------------------->
<!--						sidebar classe										   -->
<!----------------------------------------------------------------------------------->
<form method="get">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="opacitypaladin()" >
	<img src = "\WaW\image\badge_paladin_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>PALADIN</p>
	<?php 
		$classe = 1;
		$armure = 70;
		$vie = 90;
		$degat = 40;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="opacityvoleur()">
	<img src = "\WaW\image\badge_voleur_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>VOLEUR</p>
	<?php 
		$classe = 2;
		$armure = 20;
		$vie = 60;
		$degat = 90;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-black"onclick="opacityarcher()">
    <img src = "\WaW\image\badge_archer_rond.png" width ="60" height="60" alt="ca marche pas"/>
    <p>ARCHER</p>
	<?php 
		$classe = 3;
		$armure = 30;
		$vie = 50;
		$degat = 90;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-black"onclick="opacityguerrier()">
	<img src = "\WaW\image\badge_guerrier_rond.png" width ="60" height="60" alt="ca marche pas"/> 
	<p>GUERRIER</p>
	<?php 
		$classe = 4;
		$armure = 90;
		$vie = 70;
		$degat = 10;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-black"onclick="opacitymage()">
	<img src = "\WaW\image\badge_mage_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>MAGE</p>
	<?php 
		$classe = 5;
		$armure = 10;
		$vie = 50;
		$degat = 80;
	?>
  </span>
  <span  class="w3-bar-item w3-button w3-padding-large w3-hover-black" onclick="opacitymoine()">
	<img src = "\WaW\image\badge_moine_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>MOINE</p>
	<?php 
		$classe = 6;
		$armure = 50;
		$vie = 50;
		$degat = 50;
	?>
  </span>
</nav>
<!----------------------------------------------------------------------------------->
<!--								sidebar race								   -->
<!----------------------------------------------------------------------------------->

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar2 w3-bar-block w3-small w3-hide-small w3-right">
  <!-- Avatar image in top left corner -->
  <span  class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacitynain()">
	<img src = "\WaW\image\nains_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NAIN</p>
	<?php 
		$race = 1;
		$intel = 40;
		$force = 70;
		$vitesse = 10;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacityelfe()">
	<img src = "\WaW\image\elfe_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>&nbsp;&nbsp;&nbsp;&nbsp;ELFE</p>
	<?php 
		$race = 2;
		$intel = 50;
		$force = 30;
		$vitesse = 90;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacityorque()">
    <img src = "\WaW\image\orque_rond.png" width ="60" height="60" alt="ca marche pas"/>
    <p>&nbsp;&nbsp;ORQUE</p>
	<?php 
		$race = 3;
		$intel = 70;
		$force = 80;
		$vitesse = 10;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacitytroll()">
	<img src = "\WaW\image\troll_rond.png" width ="60" height="60" alt="ca marche pas"/> 
	<p>&nbsp;&nbsp;&nbsp;TROLL</p>
	<?php 
		$race = 4;
		$intel = 70;
		$force = 30;
		$vitesse = 50;
	?>
  </span>
  <span class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacitygnome()">
	<img src = "\WaW\image\gnome_rond.png" width ="60" height="60" alt²="ca marche pas"/> 
    <p>&nbsp;GNOME</p>
	<?php 
		$race = 5;
		$intel = 80;
		$force = 30;
		$vitesse = 50;
	?>
  </span>
    <span class="w3-bar-item w3-button w3-padding-large w3-hover-grey"onclick="opacityhumain()">
	<img src = "\WaW\image\humain_rond.png" width ="60" height="60" alt="ca marche pas"/> 
    <p>HUMAIN</p>
	<?php 
		$race = 6;
		$intel = 50;
		$force = 50;
		$vitesse = 50;
	?>
  </span>
</nav>


<!----------------------------------------------------------------------------------->
<!--						image classe & race		 							   -->
<!----------------------------------------------------------------------------------->
<div style="max-width:2000px;margin-top:46px">
	<img src = "\WaW\image\badge_paladin_rond.png" alt="ca marche pas" class="im-classe-paladin" id="opaimpaladin"/> 
	<img src = "\WaW\image\badge_voleur_rond.png" alt="ca marche pas" class="im-classe-voleur" id="opaimvoleur"/>
	<img src = "\WaW\image\badge_archer_rond.png" alt="ca marche pas" class="im-classe-archer" id="opaimarcher"/>
	<img src = "\WaW\image\badge_guerrier_rond.png" alt="ca marche pas" class="im-classe-guerrier" id="opaimguerrier"/>
	<img src = "\WaW\image\badge_mage_rond.png" alt="ca marche pas" class="im-classe-mage" id="opaimage"/>
	<img src = "\WaW\image\badge_moine_rond.png" alt="ca marche pas" class="im-classe-moine" id="opaimoine"/>
	
	<img src = "\WaW\image\nains_rond.png" alt="ca marche pas" class="im-classe-nain"id="opaimnain"/> 
	<img src = "\WaW\image\elfe_rond.png" alt="ca marche pas" class="im-classe-elfe"id="opaimelfe"/>
	<img src = "\WaW\image\orque_rond.png" alt="ca marche pas" class="im-classe-orque"id="opaimorque"/>
	<img src = "\WaW\image\troll_rond.png" alt="ca marche pas" class="im-classe-troll"id="opaimgnome"/>
	<img src = "\WaW\image\gnome_rond.png" alt="ca marche pas" class="im-classe-gnome"id="opaimtroll"/>
	<img src = "\WaW\image\humain_rond.png" alt="ca marche pas" class="im-classe-humain"id="opaimhumain"/>
     
</div>

<!----------------------------------------------------------------------------------->
<!--						caracteristique classe								   -->
<!----------------------------------------------------------------------------------->
<div class="carpaladin" id="opacarpaladin">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:70%" ></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:40%"></div>
    </div>
	<br>
</div>



<div class="carvoleur" id="opacarvoleur">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:20%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:60%""></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
	<br>
</div>



<div class="cararcher" id="opacararcher">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:30%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
	<br>
</div>



<div class="carguerrier" id="opacarguerrier">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:70%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:10%"></div>
    </div>
	<br>
</div>



<div class="carmage"id="opacarmage">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:10%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:80%"></div>
    </div>
	<br>
</div>


<div class="carmoine"id="opacarmoine">
    <h3 class="w3-text-light-grey">Caractértistiques liées à la classe</h3>
    <p class="w3-wide">tank</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">heal</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
    <p class="w3-wide">DPS</p>
    <div class="w3-white"style="height:28px;width: 400px">
      <div class="w3-dark-grey" style="height:28px;width:50%"></div>
    </div>
	<br>
</div>

<!----------------------------------------------------------------------------------->
<!--						aptitude race										   -->
<!----------------------------------------------------------------------------------->
<h3 class="titreapptitude">Aptitudes liées à la race</h3>
	<div class = "rectanglefont">
        <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
		<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
	</div>

<div id="opacityapnain">
	<div class = "intelnain">
        <h3>+40</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forcenain">
        <h3>+70</h3>
		<h3>force</h3>
	</div>
		<div class = "vitessenain">
        <h3>+10</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<div id="opacityapelfe">
	<div class = "intelelfe">
        <h3>+50</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forceelfe">
        <h3>+30</h3>
		<h3>force</h3>
	</div>
		<div class = "vitesseelfe">
        <h3>+90</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<div id="opacityaporque">
	<div class = "intelorque">
        <h3>+70</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forceorque">
        <h3>+80</h3>
		<h3>force</h3>
	</div>
		<div class = "vitesseorque">
        <h3>+10</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<div id="opacityaptroll">
	<div class = "inteltroll">
        <h3>+70</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forcetroll">
        <h3>+30</h3>
		<h3>force</h3>
	</div>
		<div class = "vitessetroll">
        <h3>+50</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<div id="opacityapgnome">
	<div class = "intelgnome">
        <h3>+80</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forcegnome">
        <h3>+30</h3>
		<h3>force</h3>
	</div>
		<div class = "vitessegnome">
        <h3>+50</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<div id="opacityaphumain">
	<div class = "intelhumain">
        <h3>+50</h3>
		<h3>intelligence</h3>
	</div>
		<div class = "forcehumain">
        <h3>+50</h3>
		<h3>force</h3>
	</div>
		<div class = "vitessehumain">
        <h3>+50</h3>
		<h3>vitesse</h3>
	</div>
</div> 

<!----------------------------------------------------------------------------------->
<!--						psoeudo compétence tailles poids 					   -->
<!----------------------------------------------------------------------------------->
<div class = "cadrefont">
	<h3>&nbsp;</h3>
</div>

	<div class = "psoeudo">
		<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre prénom">
			<span class="label-input100">Pseudo *</span>
			<input class="input100" type="text" name="pseudo" placeholder="Nom du personnage" required>
		</div>
	</div>
	<div class = "compspe">
		<div class="wrap-input100 validate-input bg1" data-validate="Entrez votre prénom">
			<span class="label-input100">Compétence spé *</span>
			<input class="input100" type="text" name="compspe" placeholder="Compétence spé" required>
		</div>
	</div>
	
	
	<div class = "tailles">
		<p>Tailles</p>
		<input type="range" name="tailles"/>
	</div>
	
	
	<div class = "poids">
		<p>Poids</p>
		<input type="range" name="poids"/>
	</div>
	
	<input type="submit" value="Ajouter" class = "creaperso"/>
<!----------------------------------------------------------------------------------->
<!--						interaction avec la base de données					   -->
<!----------------------------------------------------------------------------------->	




	<?php
	$bdd = new PDO('mysql:host=localhost; dbname=waw; charset=utf8', 'root', 'root');
	if(isset($_GET['pseudo']) && isset($_GET['compspe']) && isset($_GET['tailles']) && isset($_GET['poids']) && isset($_SESSION['prenom']) && isset($_SESSION['nom']) && isset($_SESSION['email']))
	{
		$pseudo = $_GET['pseudo'];
		$compspe = $_GET['compspe'];
		$tailles = 1+$_GET['tailles']/100;
		$poids = $_GET['poids'];
		
		$email = (string)$_SESSION['email'];
		
		$req = $bdd->prepare('SELECT joueur_code FROM joueur WHERE joueur_mail = "'.$email.'"');
		$req->execute();
		$donnees = $req->fetch();
		$code = (string)$donnees['joueur_code'];
		$req->closeCursor();
		
		$requete='INSERT INTO Personnage VALUES(NULL,"'.$pseudo.'","'.$compspe.'",1,"'.$armure.'","'.$vie.'","'.$tailles.'","'.$poids.'","'.$vitesse.'","'.$force.'","'.$intel.'","'.$degat.'","'.$code.'","'.$race.'","'.$classe.'")';
			
		$resultat = $bdd->prepare('INSERT INTO personnage VALUES(NULL,"'.$pseudo.'","'.$compspe.'",1,"'.$armure.'","'.$vie.'","'.$tailles.'","'.$poids.'","'.$vitesse.'","'.$force.'","'.$intel.'","'.$degat.'","'.$code.'","'.$race.'","'.$classe.'")');
		$resultat->execute();
						
		if ($resultat)
		{
						
	?>
		<div class = "textvalidation">
	<?php
			echo ' vous avez bien créer un nouveau personnage';	
	?>
		</div>
		
			<a href="/WaW/index.php" class = "suivantcreaperso"> 
				<p class = "suivantcreaperso">suivant</p>
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
<!----------------------------------------------------------------------------------->
<!--						script pour faire changer l'opacité					   -->
<!----------------------------------------------------------------------------------->

<script>
/* script permetant de changer l'opacité des image classe et race du milieu 
	de l'ecran lorsque l'on appuis sur les bouton de la sidebar */
	
/*classe */
	function opacitypaladin() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "1";
		document.getElementById("opaimvoleur").style.opacity = "0";
		document.getElementById("opaimarcher").style.opacity = "0";
		document.getElementById("opaimguerrier").style.opacity = "0";
		document.getElementById("opaimage").style.opacity = "0";
		document.getElementById("opaimoine").style.opacity = "0";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "1";
		document.getElementById("opacarvoleur").style.opacity = "0";
		document.getElementById("opacararcher").style.opacity = "0";
		document.getElementById("opacarguerrier").style.opacity = "0";
		document.getElementById("opacarmage").style.opacity = "0";
		document.getElementById("opacarmoine").style.opacity = "0";
		
		document.getElementById("opacarpaladin").php.opacity = "1";
	}
		function opacityvoleur() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "0";
		document.getElementById("opaimvoleur").style.opacity = "1";
		document.getElementById("opaimarcher").style.opacity = "0";
		document.getElementById("opaimguerrier").style.opacity = "0";
		document.getElementById("opaimage").style.opacity = "0";
		document.getElementById("opaimoine").style.opacity = "0";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "0";
		document.getElementById("opacarvoleur").style.opacity = "1";
		document.getElementById("opacararcher").style.opacity = "0";
		document.getElementById("opacarguerrier").style.opacity = "0";
		document.getElementById("opacarmage").style.opacity = "0";
		document.getElementById("opacarmoine").style.opacity = "0";
	
	}
		function opacityarcher() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "0";
		document.getElementById("opaimvoleur").style.opacity = "0";
		document.getElementById("opaimarcher").style.opacity = "1";
		document.getElementById("opaimguerrier").style.opacity = "0";
		document.getElementById("opaimage").style.opacity = "0";
		document.getElementById("opaimoine").style.opacity = "0";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "0";
		document.getElementById("opacarvoleur").style.opacity = "0";
		document.getElementById("opacararcher").style.opacity = "1";
		document.getElementById("opacarguerrier").style.opacity = "0";
		document.getElementById("opacarmage").style.opacity = "0";
		document.getElementById("opacarmoine").style.opacity = "0";
	
	}
		function opacityguerrier() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "0";
		document.getElementById("opaimvoleur").style.opacity = "0";
		document.getElementById("opaimarcher").style.opacity = "0";
		document.getElementById("opaimguerrier").style.opacity = "1";
		document.getElementById("opaimage").style.opacity = "0";
		document.getElementById("opaimoine").style.opacity = "0";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "0";
		document.getElementById("opacarvoleur").style.opacity = "0";
		document.getElementById("opacararcher").style.opacity = "0";
		document.getElementById("opacarguerrier").style.opacity = "1";
		document.getElementById("opacarmage").style.opacity = "0";
		document.getElementById("opacarmoine").style.opacity = "0";
	
	}
		function opacitymage() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "0";
		document.getElementById("opaimvoleur").style.opacity = "0";
		document.getElementById("opaimarcher").style.opacity = "0";
		document.getElementById("opaimguerrier").style.opacity = "0";
		document.getElementById("opaimage").style.opacity = "1";
		document.getElementById("opaimoine").style.opacity = "0";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "0";
		document.getElementById("opacarvoleur").style.opacity = "0";
		document.getElementById("opacararcher").style.opacity = "0";
		document.getElementById("opacarguerrier").style.opacity = "0";
		document.getElementById("opacarmage").style.opacity = "1";
		document.getElementById("opacarmoine").style.opacity = "0";
	
	}
		function opacitymoine() 
	{
		/* opacité image*/
		document.getElementById("opaimpaladin").style.opacity = "1";
		document.getElementById("opaimvoleur").style.opacity = "0";
		document.getElementById("opaimarcher").style.opacity = "0";
		document.getElementById("opaimguerrier").style.opacity = "0";
		document.getElementById("opaimage").style.opacity = "0";
		document.getElementById("opaimoine").style.opacity = "1";
		/* opacité caractéristique*/
		document.getElementById("opacarpaladin").style.opacity = "0";
		document.getElementById("opacarvoleur").style.opacity = "0";
		document.getElementById("opacararcher").style.opacity = "0";
		document.getElementById("opacarguerrier").style.opacity = "0";
		document.getElementById("opacarmage").style.opacity = "0";
		document.getElementById("opacarmoine").style.opacity = "1";

	
	}
	
	/*race*/
		function opacitynain() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "1";
		document.getElementById("opaimelfe").style.opacity = "0";
		document.getElementById("opaimorque").style.opacity = "0";
		document.getElementById("opaimtroll").style.opacity = "0";
		document.getElementById("opaimgnome").style.opacity = "0";
		document.getElementById("opaimhumain").style.opacity = "0";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "1";
		document.getElementById("opacityapelfe").style.opacity = "0";
		document.getElementById("opacityaporque").style.opacity = "0";
		document.getElementById("opacityaptroll").style.opacity = "0";
		document.getElementById("opacityapgnome").style.opacity = "0";
		document.getElementById("opacityaphumain").style.opacity = "0";
	
	}
			function opacityelfe() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "0";
		document.getElementById("opaimelfe").style.opacity = "1";
		document.getElementById("opaimorque").style.opacity = "0";
		document.getElementById("opaimtroll").style.opacity = "0";
		document.getElementById("opaimgnome").style.opacity = "0";
		document.getElementById("opaimhumain").style.opacity = "0";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "0";
		document.getElementById("opacityapelfe").style.opacity = "1";
		document.getElementById("opacityaporque").style.opacity = "0";
		document.getElementById("opacityaptroll").style.opacity = "0";
		document.getElementById("opacityapgnome").style.opacity = "0";
		document.getElementById("opacityaphumain").style.opacity = "0";
	
	}
			function opacityorque() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "0";
		document.getElementById("opaimelfe").style.opacity = "0";
		document.getElementById("opaimorque").style.opacity = "1";
		document.getElementById("opaimtroll").style.opacity = "0";
		document.getElementById("opaimgnome").style.opacity = "0";
		document.getElementById("opaimhumain").style.opacity = "0";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "0";
		document.getElementById("opacityapelfe").style.opacity = "0";
		document.getElementById("opacityaporque").style.opacity = "1";
		document.getElementById("opacityaptroll").style.opacity = "0";
		document.getElementById("opacityapgnome").style.opacity = "0";
		document.getElementById("opacityaphumain").style.opacity = "0";
	
	}
			function opacitytroll() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "0";
		document.getElementById("opaimelfe").style.opacity = "0";
		document.getElementById("opaimorque").style.opacity = "0";
		document.getElementById("opaimtroll").style.opacity = "1";
		document.getElementById("opaimgnome").style.opacity = "0";
		document.getElementById("opaimhumain").style.opacity = "0";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "0";
		document.getElementById("opacityapelfe").style.opacity = "0";
		document.getElementById("opacityaporque").style.opacity = "0";
		document.getElementById("opacityaptroll").style.opacity = "1";
		document.getElementById("opacityapgnome").style.opacity = "0";
		document.getElementById("opacityaphumain").style.opacity = "0";
	
	}
			function opacitygnome() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "0";
		document.getElementById("opaimelfe").style.opacity = "0";
		document.getElementById("opaimorque").style.opacity = "0";
		document.getElementById("opaimtroll").style.opacity = "0";
		document.getElementById("opaimgnome").style.opacity = "1";
		document.getElementById("opaimhumain").style.opacity = "0";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "0";
		document.getElementById("opacityapelfe").style.opacity = "0";
		document.getElementById("opacityaporque").style.opacity = "0";
		document.getElementById("opacityaptroll").style.opacity = "0";
		document.getElementById("opacityapgnome").style.opacity = "1";
		document.getElementById("opacityaphumain").style.opacity = "0";
	
	}
			function opacityhumain() 
	{
		/* opacité image*/
		document.getElementById("opaimnain").style.opacity = "0";
		document.getElementById("opaimelfe").style.opacity = "0";
		document.getElementById("opaimorque").style.opacity = "0";
		document.getElementById("opaimtroll").style.opacity = "0";
		document.getElementById("opaimgnome").style.opacity = "0";
		document.getElementById("opaimhumain").style.opacity = "1";
		/* opacité apptitude*/
		document.getElementById("opacityapnain").style.opacity = "0";
		document.getElementById("opacityapelfe").style.opacity = "0";
		document.getElementById("opacityaporque").style.opacity = "0";
		document.getElementById("opacityaptroll").style.opacity = "0";
		document.getElementById("opacityapgnome").style.opacity = "0";
		document.getElementById("opacityaphumain").style.opacity = "1";
	
	}
	
</script>





</body>
</html>

