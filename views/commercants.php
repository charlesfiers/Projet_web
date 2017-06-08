<?php $n=0;?>
<?php foreach ($paragraphe as $paragraphe): ?>
	<?php 
	$bout = Model::factory('Boutique')->where('type_boutique',$paragraphe->type_boutique)->find_many();
	foreach ($bout as $bout) {
		$bulles = Model::factory('Commercant')->where('id_boutique',$bout->id)->find_many();
	}
	?>
	
	<div class="grid grid-pad">
		<div class="col-1-1">
			<h2 id="ancre_<?php echo $n;$n++;?>"><?php echo $paragraphe->type_boutique ?></h2>
			<?php foreach ($bulles as $bulle): ?>
				<div class="col-4">
					<div class="bulles">
						<img src="<?php echo $bulle->photo ?>" class="commercant_pic">
						<div class="commercant_desc">
						<h4><?php echo $bulle->nom_comm." ".$bulle->prenom_comm?></h4>
					</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<div class="grid grid-pad">
	<?php foreach ($bout as $bout): ?>
		<div class="commercant_info">
			<img src="<?php echo $bout->photo_boutique ?>"></br>
			
			<?php echo "Nom : ".$bout->nom_boutique ?> </br>
			<?php echo "Adresse : ".$bout->adresse_boutique ?> </br>
          	<?php echo "Ville : ".$bout->ville_boutique ?>
		</div>
	<?php endforeach ?>
</div>
<?php endforeach ?>

