<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <meta charset='utf-8' />
    <link rel="stylesheet" type="text/css" href="normalize.css" /><!--Reset css-->
    <link rel="stylesheet" type="text/css" href="simplegrid.css" /><!--Chargement de la grille SimpleGrid-->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="grid grid-pad">
	<header class="blockheader">
        <div class="grid grid-pad">
        <div class="col-1-12">
        	<img src="Medias/logoHaF.png" id="logo"> <!--changement de logo-->
        </div>
        <div class="col-3-12">
            
        </div>
        <div id="bandeau" class="animbando">
                <div class="col-3-12">
                        <div class="menu">
                	<h2 >Infos</h2>
                        </div>
                </div>
                <div class="col-3-12">
                        <div class="menu">
                        <h2 >News</h2>
                </div>
        </div>
        </div>
        <div class="col-1-12">
            
        </div>
        <div class="col-1-12">
                <img src="Medias/square.png" id="bouton">
        </div>
</div>
</header>


	<main>
            <?php foreach ($articles as $art) {
                echo $art->titre;
                echo $art->contenu;
            };
            ?>
	</main>
	<footer>
		
	</footer>
</div>

<script>
var bouton = document.getElementById("bouton");
var menu1 = document.getElementById("bandeau");

bouton.addEventListener("click", function() {
  
  menu1.classList.toggle("animbando");
  
});
</script>
</body>
</html>