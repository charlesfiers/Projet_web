<!-- CODE POUR LA BARRE DE DEFILEMENT-->

<footer>
<div id="f_g" onclick="clique2(position)"></div><div id="f_d" onclick="clique3(position)"></div>
<div id="fond"></div></div>
<div id="banniere"></div>



	<script language="javascript">
	pictures = new Array()
		pictures[0] = '<?php echo BASE_URI; ?>Medias/image1petit.png';
		pictures[1] = '<?php echo BASE_URI; ?>Medias/image2petit.png';
		pictures[2] = '<?php echo BASE_URI; ?>Medias/image3petit.png';
		pictures[3] = '<?php echo BASE_URI; ?>Medias/image4petit.png';
		pictures[4] = '<?php echo BASE_URI; ?>Medias/image1.png';
		pictures[5] = '<?php echo BASE_URI; ?>Medias/image2.png';
		pictures[6] = '<?php echo BASE_URI; ?>Medias/image3.png';
		pictures[7] = '<?php echo BASE_URI; ?>Medias/image4.png';
		
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

	function hasClass(element, cls) {
    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
	}

	function clique(x,cliq){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		clearTimeout(time4);
		clearTimeout(time5);
		cliq.chiffre=x;
		multi = 5;
		transition2(cliq);
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
		cliq.chiffre=position;
		multi = 5;
		transition2(cliq);
	}

	function clique3(position){
		clearTimeout(time);
		clearTimeout(time2);
		clearTimeout(time3);
		clearTimeout(time4);
		clearTimeout(time5);
		cliq.chiffre=position;
		multi = 5;
		transition2(cliq);
	}

	function plus(cliq)
	{	
		if (cliq.chiffre==2) {cliq.chiffre=0;} else{cliq.chiffre++;};
		switch(cliq.chiffre) {
    	case 0:
        	code_html = '<img src="'+pictures[cliq.chiffre+2]+'" class ="mini" onclick="clique(1,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi"><img src="'+pictures[cliq.chiffre+1]+'" class ="mini" onclick="clique(0,cliq)">';
        	break;
    	case 1:
        	code_html = '<img src="'+pictures[cliq.chiffre-1]+'" class ="mini" onclick="clique(2,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi"><img src="'+pictures[cliq.chiffre+1]+'" class ="mini" onclick="clique(1,cliq)">';
        	break;
    	case 2:
        	code_html = '<img src="'+pictures[cliq.chiffre-1]+'" class ="mini" onclick="clique(0,cliq)"><img src="'+pictures[cliq.chiffre]+'" class ="maxi"><img src="'+pictures[cliq.chiffre-2]+'" class ="mini" onclick="clique(2,cliq)">';
			break;
		}
		if (cliq.chiffre==2) {
			code_html2 = '<img src="'+pictures[cliq.chiffre+4]+'" id="devant"><img src="'+pictures[4]+'" id="derriere">';
		} else{
			code_html2 = '<img src="'+pictures[cliq.chiffre+4]+'" id="devant"><img src="'+pictures[cliq.chiffre+5]+'" id="derriere">';
		};		


		document.getElementById("fond").innerHTML = code_html2;
		document.getElementById("banniere").innerHTML = code_html;
		position = cliq.chiffre;
		time = setTimeout("transition(cliq)", (multi*6000));
		
	}

	function transition(cliq){
		document.getElementById('devant').classList.toggle('visuallyhidden');
		time = setTimeout("document.getElementById('devant').classList.toggle('visuallyhidden')",500);
		document.getElementById('banniere').classList.toggle('defile');
    	time2 = setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",500);
    	time3 = setTimeout("document.getElementById('banniere').classList.toggle('defile')",500);
    	time4 = setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",1000);
		multi = 1;
        time5 = setTimeout("plus(cliq)",500);
	}

	function transition2(cliq){
		time3 = setTimeout("plus(cliq)",600);
		if (hasClass(document.getElementById('devant'),'visuallyhidden')) {
			document.getElementById('devant').classList.toggle('visuallyhidden');
		};
		document.getElementById('banniere').classList.toggle('visuallyhidden');
		time2 = setTimeout("document.getElementById('banniere').classList.toggle('visuallyhidden')",600);
		multi = 1;
	}

	</script>
</footer>