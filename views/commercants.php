<div id="com"><div class="grid grid-pad">	
	<section class="section_comm">
		<?php foreach ($commercants as $commercant): ?>
		<article>
			<header class="header_art_comm">
				<img src="<?php echo $commercant->photo ?>" class='commercant_pic'>
				<div class="div_align"><h1><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h1>
				<br/>
				<h2>
				<?php $id=$commercant->id_boutique;
				$bout = ORM::for_table('boutique')->find_one($id);
				echo $bout->type_boutique;
				?>
			</h2></div>

			</header>
			<section>
				<p class="align_on_char">   <?php echo "Adresse : ".$bout->adresse_boutique ?> 
          <?php echo "Ville : ".$bout->ville_boutique ?>
				</p><!--Alignement sur le caractère : ne pas toucher à la disposition => white-space css-->
			</section>
		</article>	
		<?php endforeach ?>
	</section>
</div>
</div>

<div class="grid grid-pad" id="menu_commercants">
	<?php $m=0;?>
	<?php foreach ($commercants as $commercant): ?>
			<div class="col-4">
			<div class="bulles">
			<a href="#ancre_<?php $m++;echo $m;?>">
			<img src="<?php echo $commercant->photo ?>" class="commercant_pic">
			<div class="commercant_desc">
				<h4><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h4>
				<h5><?php
				$id=$commercant->id_boutique;
				$bout = ORM::for_table('boutique')->find_one($id);
				echo $bout->type_boutique;
				?></h5>
			</div>
			</a>
		</div>
	</div>
	<?php endforeach ?>
</div>

<div class="grid grid-pad">
	<?php $n=0;?>
	<?php foreach ($commercants as $commercant): ?>
		<div class="commercant_info">
			<?php $id=$commercant->id_boutique;
				$bout = ORM::for_table('boutique')->find_one($id); ?>
			<h4 id="ancre_<?php $n++;echo $n;?>"><?php echo $commercant->nom_comm." ".$commercant->prenom_comm?></h4>
			<img src="<?php echo $bout->photo_boutique ?>">
			<h5><?php echo $bout->type_boutique; ?></h5>
				<?php echo "Nom : ".$bout->nom_boutique ?> </br>
				<?php echo "Adresse : ".$bout->adresse_boutique ?> </br>
          		<?php echo "Ville : ".$bout->ville_boutique ?>
			</div>

	<?php endforeach ?>
</div>