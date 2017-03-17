<footer>
	<body onload="plus()">

<DIV ID="zone_bannieres" align="center"></DIV>

</body>

	<script language="javascript">
	function plus()
	{code_html = '<a href="'+liens[chiffre]+'" target="_blank"><img border="0" src="'+pictures[chiffre]+'"></a>';
	document.getElementById("zone_bannieres").innerHTML = code_html;
		if(chiffre == longueur)
    	    { chiffre = 0; }
    	    else
    	    { chiffre++; }
	changement = 1;
	//durée d'affichage d'une bannière en secondes
	window.setTimeout("plus()", (changement*20000));}

	pictures = new Array()
	pictures[0] = '<?php echo BASE_URI; ?>Medias/icone1.png';
	pictures[1] = '<?php echo BASE_URI; ?>Medias/icone2.png';
	pictures[2] = '<?php echo BASE_URI; ?>Medias/icone3.png';
	longueur = pictures.length-1;

	liens = new Array()
	liens[0] = 'lien_image1.html';
	liens[1] = 'lien_image2.html';
	liens[2] = 'lien_image3.html';
	chiffre = 0;
	</script>
</footer>