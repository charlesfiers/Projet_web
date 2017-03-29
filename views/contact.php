<?php
    $arr_articles = array();
    $arr_articles[0] = array(
        'Adressse',
        'Centre&nbsp;Commercial Les&nbsp;Halles 22 B rue du G&eacute;n&eacute;ral Leclerc <br/>80000 Amiens',
    );
	$arr_articles[1] = array(
		'Horaires',
		'Du Mardi au Samedi de 9h &agrave; 13h et de 15h &agrave; 19h <br/>Le Dimanche de 9h &agrave; 12h30',
	);
	$arr_articles[2] =array(
		'Rejoignez notre page facebook :',
	);
	$arr_articles[3] = array(
		'Plan d\'acc&egrave;s :',
	);
	$arr_articles[4] = array(
		'Parking',
		'Parking Vinci les Halles <br/> <br/> Vid&eacute;o surveillance <br/> <br/> Ouvert du Lundi au Samedi de 7h30 &agrave; 21h30 <br/> <br/> Ferm&eacute; le Dimanche <br/> <br/>Capacit&eacute; : 550 places <br/> <br/>Tarifs parking : <br/> <br/>15 minutes : gratuit <br/> 30 minutes : 0.70&nbsp;&euro; <br/> 45 minutes : 1.00&nbsp;&euro; <br/> 1h :1.30&nbsp;&euro; <br/> <br/> de 1h &agrave; 2h : 0.30&nbsp;&euro; <br/> le 1/4 heure <br/> de 2h &agrave; 8h : 0.20&nbsp;&euro; le 1/4 heure <br/> de 8h &agrave; 12h : 7.50&nbsp;&euro; <br/> de 12h &agrave; 24h : 8.50&nbsp;&euro; <br/> <br/> Ticket perdu 8.50&nbsp;&euro; <br/> <br/> Abonnement permanent 24/24h : <br/> <br/> Mensuel par pr&eacute;l&egrave;vement automatique : 60.00&nbsp;&euro; <br/> Mensuel : 66.00&nbsp;&euro; <br/> Trimestriel : 187.00&nbsp;&euro; <br/> Annuel : 694.00&nbsp;&euro; <br/> <br/>
		Jour (6h30-21h30) 6 jours par semaine - Du lundi au samedi : <br/> <br/> Mensuel par pr&eacute;l&egrave;vement automatique : 50.00&nbsp;&euro; <br/> Mensuel : 55.00&nbsp;&euro; <br/> Trimestriel : 160.00&nbsp;&euro; <br/> Annuel : 588.00&nbsp;&euro; <br/> <br/> Abonnement Moto 24/24h : <br/> <br/> Mensuel par pr&eacute;l&egrave;vement automatique : 41.00&nbsp;&euro; <br/> Mensuel : 44.00&nbsp;&euro; <br/> Trimestriel : 122.00&nbsp;&euro; <br/> Annuel : 425.00&nbsp;&euro; <br/> <br/> Forfait : <br/> <br/> 3 jours : 14.00&nbsp;&euro; <br/> 7 jours : 22.00&nbsp;&euro; <br/> 14 jours : 38.00&nbsp;&euro; <br/> <br/> Pour toute question, contacter le responsable du parking au : <br/> 03 22 09 64 58</p> '
	);
	$arr_articles[5] = array(
		'Abonnez-vous aux NewsLetter de la Halle au frais'
	);
?>
		<?php include("contact_data.php"); ?>
			<?php foreach($arr_articles as $arr_articles): ?>
			<?php foreach($arr_articles as $key => $value): ?>
				<li><?php echo $key.'<dl/>'.$value; ?></li>
			<?php endforeach; ?>
			<?php endforeach; ?>

	<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing16721"  >
		<form id="formAcymailing16721" action="/hallefrais/adresse-horaires" onsubmit="return submitacymailingform('optin','formAcymailing16721', 0)" method="post" name="formAcymailing16721"  >
		<div class="acymailing_module_form" >
						<table class="acymailing_form">
				<tr>
								<td class="acyfield_name acy_requiredField">
								<input id="user_name_formAcymailing16721"  style="width:100%" onfocus="if(this.value == 'Nom') this.value = '';" onblur="if(this.value=='') this.value='Nom';" type="text" class="inputbox required" name="user[name]" value="Nom" title="Nom"/>								</td></tr><tr>								<td class="acyfield_email acy_requiredField">
								<input id="user_email_formAcymailing16721"  style="width:100%" onfocus="if(this.value == 'E-mail') this.value = '';" onblur="if(this.value=='') this.value='E-mail';" type="text" class="inputbox required" name="user[email]" value="E-mail" title="E-mail"/>	</td></tr><tr>
					
					<td  class="acysubbuttons">
					<input class="button subbutton btn btn-primary" type="submit" value="S'abonner" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing16721', 0); }catch(err){alert('The form could not be submitted '+err);return false;}"/>
					</td>
				</tr>
