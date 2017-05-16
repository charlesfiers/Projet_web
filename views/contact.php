<div class="grid grid-pad">
	<?php foreach ($Informations as $Informations):?>
		<div class="col-1-2">
			<h1><?php echo $Informations->intitulé_info;?></h1>
			<?php echo $Informations->contenu_info;?>
		</div>
	<?php endforeach ?>
</div>


<div class="grid grid-pad">
		<div class="col-1-1">
			<h1>Inscription à la Newsletter</h1>
			<div class="newsletter">
				<form action="./contacts" method="post">
					<table>
						<tr>
							<td>Nom:</td><td><input type="text" name="nom" /></td>
						</tr>
						<tr>
							<td>Prénom:</td><td><input type="text" name="prenom" /></td>
						</tr>
						<tr>
							<td>Email:</td><td><input type="mail" name="mail" /></td>
						</tr>
					</table>
					<p><input type="submit" value="Valider"></p>
				</form>
				<?php
					if (isset($_POST['nom'])) {
						if (isset($_POST['prenom'])) {
							if (isset($_POST['mail'])) {
								$test=0;
								foreach ($newsletter as $newsletter) {
									if ($newsletter->mail==$_POST['mail']) {
										echo "Vous êtes déjà inscrit";
										$test=1;
									}
								}
								if ($test==0) {
									$newsletter = ORM::for_table('newsletter')->create();
									$newsletter->Nom = $_POST['nom'];
									$newsletter->Prénom = $_POST['prenom'];
									$newsletter->mail = $_POST['mail'];
									$newsletter->save();
								}							
							}
						}
					}

				?>
			</div>
		</div>
</div>

<!-- Icone Facebook -->
<a href="https://www.facebook.com/Halleaufrais/" target="_blank"><img id="logo_fb" src="<?php echo BASE_URI?>/Medias/logofb.png"></a>
