
<?php

    include("modele/connexion_bdd.php"); 
    $mailo = $bdd->query('SELECT mail FROM utilisateur');
    $reponse = $mailo->fetch();

ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","25");

    $to = $reponse['mail'];
    $subject = "Ajout d'un nouveau capteur";
    $body = "Bonjour," . "\r\n
    	 Votre capteur a été inséré avec succès. On vous remercie de votre confiance." . "\r\n
         Nous sommes à votre disposition pour toutes questions ou problèmes techniques." . "\r\n
    Cordialement, l'équipe de DOMISEP.";
    $headers = "From: DOMISEP@gmail.com";  

    if(mail($to, $subject, $body, $headers)){
       
        
    }
    else{ echo"Mail non transmit au client";
    }



?>