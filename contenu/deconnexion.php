<?php
	// On démarre la session
	session_start ();
	// On détruit les variables de notre session
	session_unset ();
	// On détruit notre session
	session_destroy ();
	// On redirige l'utilisateur vers la page d'accueil
	header('location: /WaW/index.php');
?>