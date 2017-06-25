<?php

if(isset($_POST["ENREGISTRER"])) {   
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $identifiant= $_POST['identifiant'];     
        $mdp= $_POST['mdp'];
        $dateDEnaissance= $_POST['dateDEnaissance'];      
        $telephone= $_POST['telephone'];         
		$mail=$_POST['mail'];
        $adresse= $_POST['adresse']; 
        $codepostal= $_POST['codepostal'];
        $ville= $_POST['ville'];
        $type= $_POST['type'];


}
   

if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['identifiant']) || empty($_POST['mdp']) || empty($_POST['dateDEnaissance']) || empty($_POST['telephone']) || empty($_POST['mail']) || empty($_POST['adresse']) || empty($_POST['codepostal']) || empty($_POST['ville']) || empty($_POST['type'])) {
    echo '<p>Attention, vous devez remplir tous les champs</p>';
} 

else {
    // connexion à la base
    include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql =  "INSERT INTO utilisateur  VALUES ('','".$nom."','".$prenom."','".$identifiant."','".$mdp."','".$dateDEnaissance."','".$telephone."', '".$mail."', '".$adresse."' ,'".$codepostal."','".$ville."','".$type."','','on','on','on','on','on','on','on')";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       	include ('vue/backoffice.php');															 // on affiche le résultat pour le visiteur
        //echo '<span> Le nouveau client a bien été enregistré!</span>';
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 



	ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","25");

    $to = $_POST['mail'];
    $subject = "Bienvenue chez DOMISEP";
    $body = "Bonjour"." ".$prenom."," . "\r\n
    	 Votre profil a été cré avec succès. Vous êtes dès alors client de la société DOMISEP.". "\r\n
    	 Afin de vous connecter, il vous sera indipensable de connaitre votre identifiant : ".$identifiant."  ainsi que votre mot de passe créé par téléphone avec un de nos responsables." . "\r\n Si par mégarde, vous oubliez votre mot de passe, n'hesitez pas à rappeler nos services. Nous répondrons le plus rapidement à vos attentes." . "\r\n
    Cordialement, l'équipe d'Homecheck.";
    $headers = "From: DOMISEP@gmail.com";  

    if(mail($to, $subject, $body, $headers)){
        echo"Mail a bien été envoyé au client";
    }
    else{ echo"Mail non transmit au client";
    }

}
    	
?> 