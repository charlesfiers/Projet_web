<!-- CODE POUR LA BARRE DE DEFILEMENT-->

<footer>
<div id="f_g" onclick="clique2(position)"></div><div id="f_d" onclick="clique3(position)"></div>
<div id="fond"></div></div>
<div id="banniere"></div>
<div id="halo"></div>



	<script language="javascript">
	pictures = new Array()
		pictures[0] = '<?php echo BASE_URI; ?>Medias/icone1.png';
		pictures[1] = '<?php echo BASE_URI; ?>Medias/icone2.png';
		pictures[2] = '<?php echo BASE_URI; ?>Medias/icone3.png';
		longueur = pictures.length-1;

	var cliq = new objet(0);
	var time;
	var time2;
	var time3;
	var time4;
	var time5;
	var multi = 1;
	var position = 0;
	plus(cliq);

	function objet(ch){
		this.chiffre = ch;
	}

	function clique(chiffre,cliq){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		clearTimeout(time4);
		clearTimeout(time5);
		var cliq2 = new objet(chiffre);
		cliq = cliq2;
		delete cliq2;
		multi = 5;
		plus(cliq);
	}

	function clique2(position){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		clearTimeout(time4);
		clearTimeout(time5);
		switch (position){
			case 0:
				position = 1
				break;
			case 1:
				position = 2
				break;
			case 2:
				position = 0
				break;
		}
		var cliq2 = new objet(position);
		cliq = cliq2;
		delete cliq2;
		multi = 5;
		plus(cliq);
	}

	function clique3(position){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		clearTimeout(time4);
		clearTimeout(time5);
		var cliq2 = new objet(position);
		cliq = cliq2;
		delete cliq2;
		multi = 5;
		plus(cliq);
	}

	function plus(cliq)
	{	
		if (cliq.chiffre==longueur) {cliq.chiffre=0;} else{cliq.chiffre++;};
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
		position = cliq.chiffre;
		time = setTimeout("transition(cliq)", (multi*6000));
		
	}

	function transition(cliq){
		document.getElementById('fond').classList.toggle('visuallyhidden');
		time = setTimeout("document.getElementById('fond').classList.toggle('visuallyhidden')",500);
		document.getElementById('banniere').classList.toggle('defile');
    	time2 = setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",500);
    	time3 = setTimeout("document.getElementById('banniere').classList.toggle('defile')",500);
    	time4 = setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",1000);
		multi = 1;
        time5 = setTimeout("plus(cliq)",500);
	}

	</script>
</footer>