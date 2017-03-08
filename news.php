<?php
function callArticles($file)
{
	include($file);
	foreach ($articles as $key => $value) {
		echo"$key";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halle au Frais</title>
    <meta charset='utf-8' />
    <link rel="stylesheet" type="text/css" href="normalize.css" /><!--Reset css-->
    <link rel="stylesheet" type="text/css" href="simplegrid.css" /><!--Chargement de la grille SimpleGrid-->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="grid grid-pad">
	<?php include("header.php");?>
	<main>
		<?phpcallArticles('article.php');?>
	</main>
	</div>
</body>
<footer>
		
</footer>
</html>