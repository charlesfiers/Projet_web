<section>
	<?php foreach ($commercants as $commercant): ?>
	<article>
		<header class="header_art_comm">
			<img src="<?php echo $commercant->photo ?>" class='commercant_pic'>
			<h1 class="inline_titleh1"><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h1>
		</header>
		<section>
			
		</section>
	</article>	
	<?php endforeach ?>
</section>

<?php
	/*echo $commercants[0]->nom_comm."<br/>";
	echo $boutiques[0]->adresse_boutique."<br/>";*/
?>