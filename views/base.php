

<!-- CODE DE LA STRUCTURE DE TOUTES LES PAGES -->

<!DOCTYPE html>

<html>

<head>
    <meta charset='utf-8' />
    <?php echo $title; ?>
    <?php echo $icon; ?>
    <link rel="stylesheet" type="text/css" href="normalize.css" /><!--Reset css-->
    <link rel="stylesheet" type="text/css" href="simplegrid.css" /><!--Chargement de la grille SimpleGrid-->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <?php include("header.php");?>
	<main>
        <?php if (isset($main_content)) {
        echo $main_content;
    } ?>
	</main>
    <?php if (isset($footer)) {
        include("footer.php");
    } ?>
</body>
</html>