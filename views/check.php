<?php 
if(isset($_POST['login']))
{
	$login = $_POST['login'];
	if (isset($_POST['password']))
	{
		$password = $_POST['password'];
		echo $login."</br>";
		echo $password;



	}
	else
	{
		echo "<h1>Erreur: Veuillez entrer votre mot de passe</h1>";
		include("login.php");
	}
}
else
{
	echo "<h1>Erreur: Veuillez entrer votre login</h1>";
	include("login.php");
}
?>