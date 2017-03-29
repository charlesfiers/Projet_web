<?php
    $arr_articles = array();
    $arr_articles[0] = array(
        'Adressse',
        'Centre Commercial Les Halles </br> 22 B rue du Général </br> Leclerc 80000 Amiens',
    );
	$arr_articles[1] = array(
		'Horaires',
		'Du mardi au samedi de 9h à 13h et de 15h à 19h et le dimanche de 9h à 12h30.',
	);
	$arr_articles[2] =array(
		'Rejoignez notre page facebook :',
	);
	$arr_articles[3] = array(
		'Plan d\'accès :',
	);
	$arr_articles[4] = array(
		'Parking',
		'Parking Vinci les Halles <br/> <br/> Vidéo surveillance <br/> <br/> Ouvert du Lundi au Samedi de 7h30 à 21h30 <br/> <br/> Fermé le Dimanche <br/> <br/>Capacité : 550 places <br/> <br/>Tarifs parking : <br/> <br/>15 minutes : gratuit <br/> 30 minutes : 0.70€ <br/> 45 minutes : 1.00€ <br/> 1h :1.30€ <br/> <br/> de 1h à 2h : 0.30€ <br/> le 1/4 heure <br/> de 2h à 8h : 0.20€ le 1/4 heure <br/> de 8h à 12h : 7.50€ <br/> de 12h à 24h : 8.50€ <br/> <br/> Ticket perdu 8.50€ <br/> <br/> Abonnement permanent 24/24h : <br/> <br/> Mensuel par prélèvement automatique : 60.00€ <br/> Mensuel : 66.00€ <br/> Trimestriel : 187.00€ <br/> Annuel : 694.00€ <br/> <br/>
		Jour (6h30-21h30) 6 jours par semaine - Du lundi au samedi : <br/> <br/> Mensuel par prélèvement automatique : 50.00€ <br/> Mensuel : 55.00€ <br/> Trimestriel : 160.00€ <br/> Annuel : 588.00€ <br/> <br/> Abonnement Moto 24/24h : <br/> <br/> Mensuel par prélèvement automatique : 41.00€ <br/> Mensuel : 44.00€ <br/> Trimestriel : 122.00€ <br/> Annuel : 425.00€ <br/> <br/> Forfait : <br/> <br/> 3 jours : 14.00€ <br/> 7 jours : 22.00€ <br/> 14 jours : 38.00€ <br/> <br/> Pour toute question, contacter le responsable du parking au : <br/> 03 22 09 64 58</p> '
	);
	$arr_articles[5] = array(
		'Abonnez-vous aux NewsLetter de la Halle au frais'
	);
?>
			<?php foreach($arr_articles as $arr_articles): ?>
			<?php foreach($arr_articles as $key => $value): ?>
				<li><?php echo $key.'<dl/>'.$value; ?></li>
			<?php endforeach; ?>
			<?php endforeach; ?>
