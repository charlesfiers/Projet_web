<DOCTYPE html>
<html>
	<head>
		<title>Contact/Adresse et Horaires-La Halle au Frais</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php include('contact_data.php'); ?>
			<?php foreach($arr_articles as $arr_articles): ?>
			<?php foreach($arr_articles as $key => $value): ?>
				<li><?php echo $key.'<dl/>'.$value; ?></li>
			<?php endforeach; ?>
			<?php endforeach; ?>
	</body>
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
</html>