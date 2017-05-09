

<?php
//A AMENAGER AVEC LES COOKIES



 session_destroy() 


//détruit la session => deconnexion. 

 ?> 

<!DOCTYPE html>

<html>

<head>
	<meta charset='utf-8' />
	<link rel="stylesheet" type="text/css" href="normalize.css" /><!--Reset css-->
	<link rel="stylesheet" type="text/css" href="simplegrid.css" /><!--Chargement de la grille SimpleGrid-->
	<link rel="stylesheet" type="text/css" href="style2.css" />
	<title>Login</title>
</head>
<body>
	<div class="grid grid-pad">
		<div class="col-1-1">
			<p>Vous êtes déconnecté : vous allez être redirigé dans 5 secondes</p>
			<?php header( "refresh:5;url=http://127.0.0.1:8080/edsa-PROJETTUT/" ); //redirection vers la page d'après connexion ?>
		</div>
	</div>
</body>
</html>