<div class="grid grid-pad">	
	<section class="section_comm">
		<?php foreach ($commercants as $commercant): ?>
		<article>
			<header class="header_art_comm">
				<img src="<?php echo $commercant->photo ?>" class='commercant_pic'>
				<div class="div_align"><h1><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h1>
				<br/>
				<h2><?php echo $boutiques[$commercant->id_boutique -1]->type_boutique?></h2></div>

			</header>
			<section>
				<p class="align_on_char">   <?php echo "Adresse : ".$boutiques[$commercant->id_boutique -1]->adresse_boutique ?> 
          <?php echo "Ville : ".$boutiques[$commercant->id_boutique -1]->ville_boutique ?>
				</p><!--Alignement sur le caractère : ne pas toucher à la disposition => white-space css-->
			</section>
		</article>	
		<?php endforeach ?>
	</section>
</div>

<div class="grid grid-pad">
	<?php foreach ($commercants as $commercant): ?>
			<div class="col-1-6">
			<div class="bulles">
			<img src="<?php echo $commercant->photo ?>" class="commercant_pic">
			<div class="commercant_desc">
				<h4><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h4>
				<h5><?php echo $boutiques[$commercant->id_boutique -1]->type_boutique?></h5>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>