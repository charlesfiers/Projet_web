<!--REFONTE DU HEADER-->
<header <?php echo 'id="'.$animback.'"';?> class="blockheader">
    <?php $news = 'News'; $infos = 'Infos';?>
    <div class="grid grid-pad">
        <div class="col-1-12">
         <img src="Medias/logoHaF.png" id="logo"> <!--changement de logo-->
        </div>
        <div class="col-10-12">
            <nav id="bandeau" <?php echo 'class="'.$anim.'"';?>>
                <ul>
                    <a href="<?php echo BASE_URI; ?>."><li <?php if ($position==$infos){echo 'id="ici"';}?> ><?php echo $infos;?></li></a> <!--Attention correspond qu'à la machine locale à modifier-->
                    <a href="<?php echo BASE_URI; ?>actualites"><li <?php if ($position==$news){echo 'id="ici"';}?> ><?php echo $news;?></li></a>
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