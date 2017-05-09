
<?php 
session_start();

if(isset($_POST['login']))
{
	$login = $_POST['login'];
	if (isset($_POST['password']))
	{
		$_SESSION['login']
		/*openssl_encrypt($password, 'aes-128-cbc', $key);
		echo $password."</br>";*/



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