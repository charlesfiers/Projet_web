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

	plus(cliq);

	function objet(ch, fl){
		this.chiffre = ch;
		this.flag = fl;
	}

	function clique(chiffre, cliq){
		var cliq2 = new objet(chiffre,0);
		delete cliq;
		plus(cliq2);
	}
	function plus(objet)
	{
		if(objet.chiffre == longueur)
    	    { objet.chiffre = 0; }
    	    else
    	    { objet.chiffre++; }
		
		switch(objet.chiffre) {
    	case 0:
        	code_html = '<img src="'+pictures[objet.chiffre+2]+'" class ="mini" onclick="clique(1,objet)"><img src="'+pictures[objet.chiffre]+'" class ="maxi" onclick="clique(2,objet)"><img src="'+pictures[objet.chiffre+1]+'" class ="mini" onclick="clique(0,objet)">';
        	break;
    	case 1:
        	code_html = '<img src="'+pictures[objet.chiffre-1]+'" class ="mini" onclick="clique(2,objet)"><img src="'+pictures[objet.chiffre]+'" class ="maxi" onclick="clique(0,objet)"><img src="'+pictures[objet.chiffre+1]+'" class ="mini" onclick="clique(1,objet)">';
        	break;
    	case 2:
        	code_html = '<img src="'+pictures[objet.chiffre-1]+'" class ="mini" onclick="clique(0,objet)"><img src="'+pictures[objet.chiffre]+'" class ="maxi" onclick="clique(1,objet)"><img src="'+pictures[objet.chiffre-2]+'" class ="mini" onclick="clique(2,objet)">';
		}
		code_html2 = '<img src="'+pictures[objet.chiffre]+'">';

		document.getElementById("fond").innerHTML = code_html2;
		document.getElementById("banniere").innerHTML = code_html;
		window.setTimeout("plus("+objet+")", 4);
	}

	</script>
</footer>