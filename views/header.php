<!--CODE DE LA BARRE DU MENU-->

<header <?php echo 'id="'.$animback.'"';?> class="blockheader">
    <?php $news = 'News'; $infos = 'Infos';?>
    <div class="grid grid-pad">
        <div class="col-1-12">
         <a href="<?php echo BASE_URI; ?>."><img src="Medias/logoHaF.png" id="logo">
        </div>
        <div class="col-10-12">
            <nav id="bandeau" class="bandeau">
                <ul>
                    <a href="<?php echo BASE_URI; ?>"><li <?php if ($position==$infos){echo 'class="ici"';}?> ><?php echo $infos;?></li></a> <!--Attention correspond qu'à la machine locale à modifier-->
                    <a href="<?php echo BASE_URI; ?>actualites"><li <?php if ($position==$news){echo 'class="ici"';}?> ><?php echo $news;?></li></a>
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


<script>
function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
}

    var bouton = document.getElementById("bouton");
    var menu1 = document.getElementById("bandeau");
    var background = document.getElementById("header_background");

    bouton.addEventListener("click", function() {
        if (hasClass(menu1, "show")) {
            menu1.classList.toggle("visuallyshow");
            setTimeout(function() {
                menu1.classList.toggle("show");
            }, 700);

        } else {
            menu1.classList.toggle("show");
            menu1.classList.toggle("visuallyshow");
        }
      background.classList.toggle("blockheader_color"); //Gestion de l'apparition du background de la barre de navigation

  });
</script>