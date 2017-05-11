
<?php 

if (isset($_POST)){ //si on est passé par le formulaire
	if(isset($_POST['login'])) //si un login a été entré
	{
		$login = $_POST['login'];
		if (isset($_POST['password']))//si un mdp a été rentré
		{
			$password = md5($_POST['password']);
			//echo "<script type='text/javascript'>alert('".$password."')</script>";
			
			foreach ($log_check as $log) { //boucle de parcours de la table log_check pour chercher si l'utilisateur existe
				if (($log->loginUser == $login) && ($log->passUser == $password)) {
					$_SESSION['name']=$login;
					$_SESSION['pw']=$password;
					header( "refresh:0;url=http://127.0.0.1:8080/edsa-PROJETTUT/" ); //redirection vers la page d'après connexion
				}
			}
			if (!(isset($_SESSION['name']))) { //c'est donc qu'on a pas trouvé de login correspondant dans la BDD
				echo "<strong>Mauvaise combinaison login/mot de passe</strong>";
				include("login.php");			
			}
		}
		else
		{
			echo "<strong>Erreur: Veuillez entrer votre mot de passe</strong>";
			include("login.php");
		}
	}
	else
	{
		echo "<strong>Erreur: Veuillez entrer votre login</strong>";
		include("login.php");
	}
}
else
{
	header('./login');
}
?>