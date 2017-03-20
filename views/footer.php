<!-- CODE POUR LA BARRE DE DEFILEMENT-->

<footer>

<div id="fond"></div>
<div id="banniere"></div>



	<script language="javascript">
	pictures = new Array()
		pictures[0] = '<?php echo BASE_URI; ?>Medias/icone1.png';
		pictures[1] = '<?php echo BASE_URI; ?>Medias/icone2.png';
		pictures[2] = '<?php echo BASE_URI; ?>Medias/icone3.png';
		longueur = pictures.length-1;

	var cliq = new objet(0,0);
	var flag = 0;
	var time;
	var multi = 1;

	plus(cliq);

	function objet(ch, fl){
		this.chiffre = ch;
		this.flag = fl;
	}

	function clique(chiffre, cliq){
		clearTimeout(time);
		var cliq2 = new objet(chiffre,0);
		delete cliq;
		multi = 5;
		plus(cliq2);
		multi = 1;
	}

	function disparition(cliq){
        setTimeout("document.getElementById('fond').classList.toggle('visuallyhidden');", 400);
        plus(cliq);
    }

	function plus(cliq)
	{
		if(cliq.chiffre == longueur)
    	    { cliq.chiffre = 0; }
    	    else
    	    { cliq.chiffre++; }
		
		switch(cliq.chiffre) {
    	case 0:
        	code_html = '<img src="'+pictures[cliq.chiffre+2]+'" class ="mini" onclick="clique(1,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi" onclick="clique(2,cliq)"><img src="'+pictures[cliq.chiffre+1]+'" class ="mini" onclick="clique(0,cliq)">';
        	break;
    	case 1:
        	code_html = '<img src="'+pictures[cliq.chiffre-1]+'" class ="mini" onclick="clique(2,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi" onclick="clique(0,cliq)"><img src="'+pictures[cliq.chiffre+1]+'" class ="mini" onclick="clique(1,cliq)">';
        	break;
    	case 2:
        	code_html = '<img src="'+pictures[cliq.chiffre-1]+'" class ="mini" onclick="clique(0,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi" onclick="clique(1,cliq)"><img src="'+pictures[cliq.chiffre-2]+'" class ="mini" onclick="clique(2,cliq)">';
		}
		code_html2 = '<img src="'+pictures[cliq.chiffre]+'">';

		document.getElementById("fond").innerHTML = code_html2;
		document.getElementById("banniere").innerHTML = code_html;
		time = setTimeout("disparition(cliq)", (multi*4000));
		setTimeout("document.getElementById('fond').classList.toggle('visuallyhidden')",3600);
	}

	</script>
</footer>