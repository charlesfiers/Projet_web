<?php 
  if(!(isset($_SESSION['name']) && isset($_SESSION['pw']))):// si on n'est pas connecté => affiche le formulaire de connexion
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
			<h1>Connexion administrateur</h1>
			<div class="menu_login">
				<form action="./check" method="post">
					<p>Login: <input type="text" name="login" /></p>
					<p>Mot de passe: <input type="password" name="password" /></p>
					<p><input type="submit" value="Valider"></p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<?php else:// si on est déjà connecté alors on affiche pas le formulaire de connexion?> 
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
			<p>Vous êtes déjà connecté.</p>
		</div>
	</div>
</body>
</html>
<?php endif; ?>

	
