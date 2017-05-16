<?php
     foreach ($newsletter as $newsletter) {
     	$to=$newsletter->mail;
     	echo $to;
     

     // Sujet
     $subject = 'Test newsletter';

     // message
     $message = '
     <html>
      <head>
       <title>Test Newsletter Halle au Frais</title>
      </head>
      <body>
       Salut j ai réussi
      </body>
     </html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
     $headers .= 'From: Charles FIERS <charlesfiers@yahoo.fr>' . "\r\n";


     // Envoi
     mail($to, $subject, $message, $headers);
 }
?>
