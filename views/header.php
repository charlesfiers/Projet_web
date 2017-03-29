<!--CODE DE LA BARRE DU MENU-->

<header <?php echo 'id="'.$animback.'"';?> class="blockheader">
    <div class="grid grid-pad">
        <div class="col-1-12">
         <a href="<?php echo BASE_URI; ?>."><img src="Medias/logoHaF.png" id="logo">
        </div>
        <div class="col-10-12">
            <nav id="menu" class="menu">
                <ul>
                    <a href="<?php echo BASE_URI; ?>"><li <?php if ($position=='Infos'){echo 'class="ici"';}?> >Infos</li></a> <!--Attention correspond qu'à la machine locale à modifier-->
                    <a href="<?php echo BASE_URI; ?>actualites"><li <?php if ($position=='News'){echo 'class="ici"';}?>>News</li></a>
                    <a href="<?php echo BASE_URI; ?>commercants"><li <?php if ($position=='Commercants'){echo 'class="ici"';}?>>Commerçants</li></a>
                    <a href="<?php echo BASE_URI; ?>contacts"><li <?php if ($position=='Contacts'){echo 'class="ici"';}?>>Contacts</li></a>
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
    var menu1 = document.getElementById("menu");
    var background = document.getElementById("header_background");
    var time;

    bouton.addEventListener("click", function() {
        clearTimeout(time);
        if (hasClass(menu1, "show")) {
            menu1.classList.toggle("visuallyshow");
            time = setTimeout("menu1.classList.toggle('show')",1000);
        } else {
            menu1.classList.toggle("show");
            time = setTimeout("menu1.classList.toggle('visuallyshow')",100);
        }
      background.classList.toggle("blockheader_color"); //Gestion de l'apparition du background de la barre de navigation


  });
</script>