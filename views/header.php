<!--REFONTE DU HEADER-->
<header id="header_background" class="blockheader">

    <div class="grid grid-pad">
        <div class="col-1-12">
         <img src="Medias/logoHaF.png" id="logo"> <!--changement de logo-->
        </div>
        <div class="col-10-12">
            <nav id="bandeau" class="animbando">
                <ul>
                    <a href="http://localhost/Projet/Projet_web/"><li>Infos</li></a> <!--Attention correspond qu'à la machine locale à modifier-->
                    <a href="<?php echo BASE_URI; ?>actualites"><li>News</li></a>
                    <li>News</li>
                    <li>News</li>
                    <li>News</li>
                    <li>News</li>
                </ul>
            </nav>
        </div>
        <div class="col-1-12">
            <img src="Medias/square.png" id="bouton">
        </div>
    </div>
</header>
<!--FIN DE REFONTE-->

<script>
    var bouton = document.getElementById("bouton");
    var menu1 = document.getElementById("bandeau");
    var background = document.getElementById("header_background");

    bouton.addEventListener("click", function() {

      menu1.classList.toggle("animbando");
      background.classList.toggle("blockheader_color"); //Gestion de l'apparition du background de la barre de navigation

  });
</script>