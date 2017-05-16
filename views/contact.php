<div class="grid grid-pad">
	<?php foreach ($Informations as $Informations):?>
		<div class="col-1-2">
			<h1><?php echo $Informations->intitulé_info;?></h1>
			<?php echo $Informations->contenu_info;?>
		</div>
	<?php endforeach ?>
</div>