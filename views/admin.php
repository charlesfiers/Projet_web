</br>
<?php if (!isset($admin)) :?>
	<?php
	echo "Vous n'êtes pas connecté, vous allez être redirigé vers la page de connexion.";
	$URL=BASE_URI."login";
	header("refresh:5;url= $URL");?>
<?php else: ?>
	<?php echo "Vous êtes connecté en tant que ".$admin->loginUser;?>

</br>
<form method="post" action="./admin">
<select name="action">
  <option value="create" <?php if (isset($_POST['action']) && $_POST['action']=='create'){echo " selected";}?>>Ajouter</option>
  <option value="modify" <?php if (isset($_POST['action']) && $_POST['action']=='modify'){echo " selected";}?>>Modifier</option>
  <option value="delete" <?php if (isset($_POST['action']) && $_POST['action']=='delete'){echo " selected";}?>>Supprimer</option>
</select>
<select name="objet">
  <option value="info" <?php if (isset($_POST['objet']) && $_POST['objet']=='info'){echo " selected";}?>>information</option>
  <option value="boutique" <?php if (isset($_POST['objet']) && $_POST['objet']=='boutique'){echo " selected";}?>>boutique</option>
  <option value="commercant" <?php if (isset($_POST['objet']) && $_POST['objet']=='commercant'){echo " selected";}?>>commerçant</option>
  <option value="news" <?php if (isset($_POST['objet']) && $_POST['objet']=='news'){echo " selected";}?>>article</option>
</select>
<input type="submit" value="GO">
</form>
<?php if((isset($_POST['action']) && isset($_POST['objet'])) || (isset($_POST['title']) && isset($_POST['content']))){
	switch ($_POST['action']) {
		case 'create':
			switch ($_POST['objet']) {
				case 'info':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><table><tr><td>Intitulé: </td><td><input type='text' name='title'></td></tr><tr><td>Contenu: </td><td><textarea rows='20' name='content'></textarea></td></tr><tr><td><input type='submit' value='Enregistrer'></td></tr></table></form>";

					
					if (isset($_POST['title']) && isset($_POST['content'])) {
						$new = ORM::for_table('Informations')->create();
						$new->intitulé_info=$_POST['title'];
						$new->contenu_info=$_POST['content'];
						$new->save();
					}
					
					break;

				case 'boutique':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><table><tr><td>Nom: </td><td><input type='text' name='title'></td></tr><tr><td>Adresse: </td><td><textarea rows='2' name='content'></textarea></td></tr><tr><td>Ville: </td><td><input type='text' name='ville'></td></tr><tr><td>Type: </td><td><input type='text' name='type'></td></tr><tr><td>Lien photo: </td><td><input type='text' name='photo' value='./Medias/Boutiques/exemple.png'></td></tr><tr><td><input type='submit' value='Enregistrer'></td></tr></table></form>";

					
					if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['photo']) && isset($_POST['ville']) && isset($_POST['type'])) {
						$new = ORM::for_table('boutique')->create();
						$new->nom_boutique=$_POST['title'];
						$new->adresse_boutique=$_POST['content'];
						$new->ville_boutique=$_POST['ville'];
						$new->type_boutique=$_POST['type'];
						$new->photo_boutique=$_POST['photo'];
						$new->save();
					}
					break;

				case 'commercant':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><table><tr><td>Nom: </td><td><input type='text' name='title'></td></tr><tr><td>Prénom: </td><td><input type='text' name='content'></td></tr><tr><td>Photo: </td><td><input type='text' name='picture' value='./Medias/Commercants/exemple.png'></td></tr><tr><td>Boutique: </td><td><select name='id_boutique'>";
					foreach ($boutiques as $boutique) {
						echo "<option value='".$boutique->id."'>".$boutique->nom_boutique."</option>";
					}
					echo "</select></td></tr><tr><td><input type='submit' value='Enregistrer'></td></tr></table></form>";

					
					if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['picture']) && isset($_POST['id_boutique'])) {
						$new = ORM::for_table('commercant')->create();
						$new->nom_comm=$_POST['title'];
						$new->prenom_comm=$_POST['content'];
						$new->photo=$_POST['picture'];
						$new->id_boutique=$_POST['id_boutique'];
						$new->save();
					}
					break;

				case 'news':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><table><tr><td>Titre: </td><td><input type='text' name='title'></td></tr><tr><td>Contenu: </td><td><textarea rows='20' name='content'></textarea></td></tr><tr><td>Description: </td><td><textarea rows='4' name='description'></textarea></td></tr><tr><td>Lien image: </td><td><input type='text' name='picture'></td></tr><tr><td>Légende: </td><td><textarea rows='4' name='legend'></textarea></td></tr><tr><td><input type='submit' value='Enregistrer'></td></tr></table></form>";
					if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['description']) && isset($_POST['picture']) && isset($_POST['legend'])) {
						$new = ORM::for_table('article')->create();
						$new->titre=$_POST['title'];
						$new->contenu=$_POST['content'];
						$new->description=$_POST['description'];
						$new->image=$_POST['picture'];
						$new->légende=$_POST['legend'];
						$new->save();
					}
					break;
				
				default:
					# code...
					break;
			}
			break;

		case 'modify':
			switch ($_POST['objet']) {
				case 'info':
					if (isset($_POST['test'])){
						$new = ORM::for_table('Informations')->find_one($_POST['id']);
						echo "Ancien : <table>";
						echo "<tr><td>Intitulé : </td><td>".$new->intitulé_info."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$new->contenu_info."</td></tr></table>";

						echo "<form method='POST' action='./admin'><input type='hidden' name='id' value='".$_POST['id']."'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='test'>";
						
						echo "Nouveau : <table>";
						echo "<tr><td>Intitulé : </td><td><input type='text' name='title' value='".$new->intitulé_info."'></td></tr>";
						echo "<tr><td>Contenu : </td><td><textarea rows='10' name='content'>".$new->contenu_info."</textarea></td></tr>";
						echo "<tr><td><input type='submit' value='Modifier'></td></tr></table>";
						echo "</form>";	

						if (isset($_POST['title']) && isset($_POST['content'])) {
							$new->intitulé_info=$_POST['title'];
							$new->contenu_info=$_POST['content'];
							$new->save();
						}

					}else{
						foreach ($infos as $info) {
						echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<table>";
						echo "<tr><td>Numéro info : </td><td>".$info->id."</td></tr>";
						echo "<input type='hidden' name='id' value='".$info->id."'>";
						echo "<input type='hidden' name='test'>";
						echo "<tr><td>Intitulé : </td><td>".$info->intitulé_info."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$info->contenu_info."</td></tr>";
						echo "<tr><td><input type='submit' value='Sélectionner'></td></tr></table>";
						echo "</form>";	
						}
					}
					break;

				case 'boutique':
					if (isset($_POST['test'])){
						$new = ORM::for_table('boutique')->find_one($_POST['id']);
						echo "Ancien : <table>";
						echo "<tr><td>Nom : </td><td>".$new->nom_boutique."</td></tr>";
						echo "<tr><td>Adresse : </td><td>".$new->adresse_boutique."</td></tr>";
						echo "<tr><td>Ville : </td><td>".$new->ville_boutique."</td></tr>";
						echo "<tr><td>Lien photo : </td><td>".$new->photo_boutique."</td></tr>";
						echo "<tr><td>Type : </td><td>".$new->type_boutique."</td></tr></table>";

						echo "<form method='POST' action='./admin'><input type='hidden' name='id' value='".$_POST['id']."'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='test'>";
						
						echo "Nouveau : <table>";
						echo "<tr><td>Nom : </td><td><input type='text' name='title' value='".$new->nom_boutique."'></td></tr>";
						echo "<tr><td>Adresse : </td><td><textarea rows='10' name='content'>".$new->adresse_boutique."</textarea></td></tr>";
						echo "<tr><td>Ville : </td><td><input type='text' name='ville' value='".$new->ville_boutique."'></td></tr>";
						echo "<tr><td>Lien photo : </td><td><input type='text' name='photo' value='".$new->photo_boutique."'></td></tr>";
						echo "<tr><td>Type : </td><td><input type='text' name='type' value='".$new->type_boutique."'></td></tr>";
						
						echo "<tr><td><input type='submit' value='Modifier'></td></tr></table>";
						echo "</form>";	

						if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['photo']) && isset($_POST['ville']) && isset($_POST['type']) ) {
							$new->nom_boutique=$_POST['title'];
							$new->adresse_boutique=$_POST['content'];
							$new->ville_boutique=$_POST['ville'];
							$new->type_boutique=$_POST['type'];
							$new->photo_boutique=$_POST['photo'];
							$new->save();
						}

					}else{
						foreach ($boutiques as $boutique) {
						echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<table>";
						echo "<tr><td>Numéro boutique : </td><td>".$boutique->id."</td></tr>";
						echo "<input type='hidden' name='id' value='".$boutique->id."'>";
						echo "<input type='hidden' name='test'>";
						echo "<tr><td>Nom : </td><td>".$boutique->nom_boutique."</td></tr>";
						echo "<tr><td>Adresse : </td><td>".$boutique->adresse_boutique."</td></tr>";
						echo "<tr><td>Ville : </td><td>".$boutique->ville_boutique."</td></tr>";
						echo "<tr><td>Type : </td><td>".$boutique->type_boutique."</td></tr>";
						echo "<tr><td>Lien photo : </td><td>".$boutique->photo_boutique."</td></tr>";
						echo "<tr><td><input type='submit' value='Sélectionner'></td></tr></table>";
						echo "</form>";	
						}
					}
					break;

				case 'commercant':
				if (isset($_POST['test'])){
						$new = ORM::for_table('commercant')->find_one($_POST['id']);
						$bout = ORM::for_table('boutique')->find_one($new->id_boutique);
						echo "Ancien : <table>";
						echo "<tr><td>Nom : </td><td>".$new->nom_comm."</td></tr>";
						echo "<tr><td>Prénom : </td><td>".$new->prenom_comm."</td></tr>";
						echo "<tr><td>Boutique : </td><td>".$bout->nom_boutique."</td></tr>";
						echo "<tr><td>Lien photo : </td><td>".$new->photo."</td></tr></table>";

						echo "<form method='POST' action='./admin'><input type='hidden' name='id' value='".$_POST['id']."'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='test'>";
						
						echo "Nouveau : <table>";
						echo "<tr><td>Nom : </td><td><input type='text' name='title' value='".$new->nom_comm."'></td></tr>";
						echo "<tr><td>Prénom : </td><td><input type='text' name='content' value='".$new->prenom_comm."'></td></tr>";
						echo "<tr><td>Boutique : </td><td>";
						echo "<select name='id_boutique'";
						foreach ($boutiques as $boutique) {
							echo "<option value='".$boutique->id."'>".$boutique->nom_boutique."</option>";
						}
						echo "</select>";
						echo "</td></tr>";
						echo "<tr><td>Lien photo : </td><td><input type='text' name='photo' value='".$new->photo."'></td></tr>";
						echo "<tr><td><input type='submit' value='Modifier'></td></tr></table>";
						echo "</form>";	

						if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['id_boutique']) && isset($_POST['photo'])) {
							$new->nom_comm=$_POST['title'];
							$new->prenom_comm=$_POST['content'];
							$new->id_boutique=$_POST['id_boutique'];
							$new->photo=$_POST['photo'];
							$new->save();
						}

					}else{
						echo "<form method='POST' action='./admin'><input type='hidden' name='test'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<select name='id'>";
						foreach ($commercants as $commercant) {
							echo "<option value='".$commercant->id."'>".$commercant->nom_comm." ".$commercant->prenom_comm."</option>";
						}
						echo "</select><br/><input type='submit' value='Sélectionner'></form>";
					}
					
					break;

				case 'news':
					if (isset($_POST['test'])){
						$new = ORM::for_table('article')->find_one($_POST['id']);
						echo "Ancien : <table>";
						echo "<tr><td>Titre : </td><td>".$new->titre."</td></tr>";
						echo "<tr><td>Description : </td><td>".$new->description."</td></tr>";
						echo "<tr><td>Lien image : </td><td>".$new->image."</td></tr>";
						echo "<tr><td>Légende : </td><td>".$new->légende."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$new->contenu."</td></tr></table>";

						echo "<form method='POST' action='./admin'><input type='hidden' name='id' value='".$_POST['id']."'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='test'>";
						
						echo "Nouveau : <table>";
						echo "<tr><td>Titre : </td><td><input type='text' name='title' value='".$new->titre."'></td></tr>";
						echo "<tr><td>Description : </td><td><input type='text' name='description' value='".$new->description."'></td></tr>";
						echo "<tr><td>Lien image : </td><td><input type='text' name='image' value='".$new->image."'></td></tr>";
						echo "<tr><td>Légende : </td><td><input type='text' name='legend' value='".$new->légende."'></td></tr>";
						echo "<tr><td>Contenu : </td><td><textarea rows='20' name='content'>".$new->contenu."</textarea></td></tr>";
						echo "<tr><td><input type='submit' value='Modifier'></td></tr></table>";
						echo "</form>";	

						if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['description']) && isset($_POST['legend']) && isset($_POST['image'])) {
							$new->titre=$_POST['title'];
							$new->contenu=$_POST['content'];
							$new->description=$_POST['description'];
							$new->image=$_POST['image'];
							$new->légende=$_POST['legend'];
							$new->save();
						}

					}else{
						foreach ($articles as $article) {
						echo "<form method='POST' action='./admin'><input type='hidden' name='test'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<table>";
						echo "<tr><td>Numéro article : </td><td>".$article->id."</td></tr>";
						echo "<input type='hidden' name='id' value='".$article->id."'>";
						echo "<tr><td>Titre : </td><td>".$article->titre."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$article->contenu."</td></tr>";
						echo "<tr><td>Description : </td><td>".$article->description."</td></tr>";
						echo "<tr><td><input type='submit' value='Modifier'></td></tr></table>";
						echo "</form>";	
						}
					}
					
					break;
				
				default:
					# code...
					break;
			}
			break;

		case 'delete':
			switch ($_POST['objet']) {
				case 'info':
					foreach ($infos as $info) {
						echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<table>";
						echo "<tr><td>Numéro info : </td><td>".$info->id."</td></tr>";
						echo "<input type='hidden' name='id".$info->id."' value='".$info->id."'>";
						echo "<tr><td>Intitulé : </td><td>".$info->intitulé_info."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$info->contenu_info."</td></tr>";
						echo "<tr><td><input type='submit' value='Supprimer'></td></tr></table>";
						echo "</form>";	
					}
					

					if (isset($_POST['id'.$info->id])){
						$new = ORM::for_table('Informations')->find_one($_POST['id'.$info->id]);
						$new->delete();
					}
					break;

				case 'boutique':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
					echo "<select name='id_boutique'";
					foreach ($boutiques as $boutique) {
						echo "<option value='".$boutique->id."'>".$boutique->nom_boutique."</option>";
					}
					echo "</select><br/><input type='submit' value='Enregistrer'></form>";

					if (isset($_POST['id_boutique'])){
						$test=0;
						$new = ORM::for_table('boutique')->find_one($_POST['id_boutique']);
						foreach ($commercants as $commercant) {
							if ($commercant->id_boutique==$new->id) {
								$test=1;
							}
						}
						if ($test==1) {
							echo "Voulez-vous supprimer ces commerçants ?<br/>";
							foreach ($commercants as $commercant) {
								if ($commercant->id_boutique==$new->id) {
									echo $commercant->nom_comm." ".$commercant->prenom_comm."<br/>";
								}
							}
							echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='id_boutique' value='".$_POST['id_boutique']."'><input type='hidden' name='test'>";
							echo "<input type='submit' value='Oui'>";
							if (isset($_POST['test'])){
								foreach ($commercants as $commercant) {
									if ($commercant->id_boutique==$new->id) {
										$sup = ORM::for_table('commercant')->find_one($commercant->id);
										$sup->delete();
									}
								}
								$new->delete();
							}
						}
					}
					break;

				case 'commercant':
					echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
					echo "<select name='id_comm'";
					foreach ($commercants as $commercant) {
						echo "<option value='".$commercant->id."'>".$commercant->nom_comm." ".$commercant->prenom_comm."</option>";
					}
					echo "</select><br/><input type='submit' value='Enregistrer'></form>";

					if (isset($_POST['id_comm'])){
						$new = ORM::for_table('commercant')->find_one($_POST['id_comm']);
						$new->delete();
					}
					break;

				case 'news':
					foreach ($articles as $article) {
						echo "<form method='POST' action='./admin'><input type='hidden' name='objet' value='".$_POST['objet']."'><input type='hidden' name='action' value='".$_POST['action']."'>";
						echo "<table>";
						echo "<tr><td>Numéro article : </td><td>".$article->id."</td></tr>";
						echo "<input type='hidden' name='id".$article->id."' value='".$article->id."'>";
						echo "<tr><td>Titre : </td><td>".$article->titre."</td></tr>";
						echo "<tr><td>Contenu : </td><td>".$article->contenu."</td></tr>";
						echo "<tr><td>Description : </td><td>".$article->description."</td></tr>";
						echo "<tr><td><input type='submit' value='Supprimer'></td></tr></table>";
						echo "</form>";	
					}
					

					if (isset($_POST['id'.$article->id])){
						$new = ORM::for_table('article')->find_one($_POST['id'.$article->id]);
						$new->delete();
					}
					break;
				
				default:
					# code...
					break;
			}
			break;
		
		default:
			# code...
			break;
	}
}
?>
<?php if (isset($_POST['objet']) && isset($_POST['action'])) :?>
	N'hésitez pas à refresh pour mettre à jour la base de donnée.
	<form method="POST" action="./admin"><input type='hidden' name='objet' value="<?php echo $_POST['objet'];?>"><input type='hidden' name='action' value="<?php echo $_POST['action'];?>"><input type="submit" value="Refresh"></form>
<?php endif;?>
<?php endif;?>