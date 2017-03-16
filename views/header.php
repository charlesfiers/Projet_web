<header class="blockheader">
        <div class="grid grid-pad">
        <div class="col-1-12">
        	<img src="Medias/Logo_HAF.jpg" id="logo">
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
                <img src="Medias/bouton.jpg" id="bouton">
        </div>
</div>
</header>


<script>
var bouton = document.getElementById("bouton");
var menu1 = document.getElementById("bandeau");

bouton.addEventListener("click", function() {
  
  menu1.classList.toggle("animbando");
  
});
</script>