<!-- CODE POUR LA BARRE DE DEFILEMENT-->

<footer>
<div id="f_g" onclick="clique2(chiffre)"></div><div id="f_d" onclick="clique3(chiffre)"></div>
<div id="fond"></div></div>
<div id="banniere"></div>
<div id="halo"></div>



	<script language="javascript">
	pictures = new Array()
		pictures[0] = '<?php echo BASE_URI; ?>Medias/icone1.png';
		pictures[1] = '<?php echo BASE_URI; ?>Medias/icone2.png';
		pictures[2] = '<?php echo BASE_URI; ?>Medias/icone3.png';
		longueur = pictures.length-1;

	var cliq = new objet(0,0);
	var time;
	var time2;
	var time3;
	var multi = 1;
	var chiffre=1;
	plus(cliq);

	function objet(ch){
		this.chiffre = ch;
	}

	function clique(chiffre, cliq){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		var cliq2 = new objet(chiffre);
		delete cliq;
		multi = 5;
		plus(cliq2);
	}

	function clique2(chiffre){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		switch(chiffre){
			case 0:
				chiffre=1;
			case 1:
				chiffre=2;
			case 2:
				chiffre=0;
		}
		var cliq2 = new objet(chiffre);
		delete cliq;
		multi = 5;
		plus(cliq2);
	}

	function clique3(chiffre){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		var cliq2 = new objet(chiffre);
		delete cliq;
		multi = 5;
		plus(cliq2);
	}

	function disparition(cliq){
		multi = 1;
        document.getElementById('fond').classList.toggle('visuallyhidden');
        plus(cliq);
    }

    function defilement(){
    	document.getElementById('banniere').classList.toggle('defile');
    	setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",600);
    	setTimeout("document.getElementById('banniere').classList.toggle('defile')",600);
    	setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",1200);	
    }

	function plus(cliq)
	{	
		if (chiffre==longueur) {chiffre=0;} else{chiffre++;};
		switch(chiffre) {
    	case 0:
        	code_html = '<img src="'+pictures[chiffre+2]+'" class ="mini" onclick="clique(1,cliq)"><img src="'+pictures[chiffre]+'" class ="maxi" onclick="clique(2,cliq)"><img src="'+pictures[chiffre+1]+'" class ="mini" onclick="clique(0,cliq)">';
        	break;
    	case 1:
        	code_html = '<img src="'+pictures[chiffre-1]+'" class ="mini" onclick="clique(2,cliq)"><img src="'+pictures[chiffre]+'" class ="maxi" onclick="clique(0,cliq)"><img src="'+pictures[chiffre+1]+'" class ="mini" onclick="clique(1,cliq)">';
        	break;
    	case 2:
        	code_html = '<img src="'+pictures[chiffre-1]+'" class ="mini" onclick="clique(0,cliq)"><img src="'+pictures[chiffre]+'" class ="maxi" onclick="clique(1,cliq)"><img src="'+pictures[chiffre-2]+'" class ="mini" onclick="clique(2,cliq)">';
		}
		code_html2 = '<img src="'+pictures[chiffre]+'">';

		document.getElementById("fond").innerHTML = code_html2;
		document.getElementById("banniere").innerHTML = code_html;
		time = setTimeout("disparition(cliq)", (multi*6000));
		time2 = setTimeout("document.getElementById('fond').classList.toggle('visuallyhidden')",((multi*6000)-(600)));
		time3 = setTimeout("defilement()", (multi*6000)-600);
	}

	</script>
</footer>