<!-- CODE POUR LA BARRE DE DEFILEMENT-->

<footer>
	<body onload="plus()">
<div id="fond"></div>
<DIV ID="banniere"></DIV>

</body>

	<script language="javascript">
	function plus()
	{
		if(chiffre == longueur)
    	    { chiffre = 0; }
    	    else
    	    { chiffre++; }
	changement = 1;
	switch(chiffre) {
    case 0:
        code_html = '<a href="'+liens[chiffre+2]+'"><img src="'+pictures[chiffre+2]+'" class ="mini"></a><a href="'+liens[chiffre]+'"><img src="'+pictures[chiffre]+'" class ="maxi"></a><a href="'+liens[chiffre+1]+'"><img src="'+pictures[chiffre+1]+'" class ="mini"></a>';
        break;
    case 1:
        code_html = '<a href="'+liens[chiffre-1]+'"><img src="'+pictures[chiffre-1]+'" class ="mini"></a><a href="'+liens[chiffre]+'"><img src="'+pictures[chiffre]+'" class ="maxi"></a><a href="'+liens[chiffre+1]+'"><img src="'+pictures[chiffre+1]+'" class ="mini"></a>';
        break;
    case 2:
        code_html = '<a href="'+liens[chiffre-1]+'"><img src="'+pictures[chiffre-1]+'" class ="mini"></a><a href="'+liens[chiffre]+'"><img src="'+pictures[chiffre]+'" class ="maxi"></a><a href="'+liens[chiffre-2]+'"><img src="'+pictures[chiffre-2]+'" class ="mini"></a>';
}
	code_html2 = '<img src="'+pictures[chiffre]+'">';
	//durée d'affichage d'une bannière en secondes
	window.setTimeout("plus()", (changement*4000));
	document.getElementById("fond").innerHTML = code_html2;
	document.getElementById("banniere").innerHTML = code_html;}

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