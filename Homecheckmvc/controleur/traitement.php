<?php

// $idForm = uniqid();

 // if(!array_key_exists('idForm', $_SESSION)){                     // pour lancer une fois le formulaire et non plusieurs fois ! le securiser ! 

// 	$_SESSION['idForm']= $idForm; 
 // } 

if(isset($_POST["envoyer"])) {             // if(isset($_POST["envoyer"]) && $_SESSION['idForm']===$_POST['secureformulaire']) {
		$nom=$_POST['nom'];
		$email=$_POST['email'];
		$telephone=$_POST['telephone'];
		$message=$_POST['message'];
}
   

if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['message'])) {
    echo '<p>Attention, vous devez remplir tous les champs</p>';
} 

else {
    // connexion à la base
    include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql =  "UPDATE utilisateur SET message='".$message."' WHERE mail = '".$email."'";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       																		 // on affiche le résultat pour le visiteur
        echo '<span>Votre message à bien été envoyé !</span>';
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 

   // ini_set('sendmail_from', 'iribarne.manon@gmail.com'); 

    $nomEnvoyeur ="Domisep";
    $emailEnvoyer = "iribarne.manon@gmail.com";
    $entete ="MINE_Version : 1.0\r\n";
    $entete .= '"Content_Type : text html; charset="UTF-8"'."\r\n" ; 
    $entete .= " To : $nomEnvoyeur <$emailEnvoyer> \r\n"; 
    $entete .= "From : ".$email." \r\n";

   //  $message = "telephone:".$telephone."<br\>".$message;
    mail($emailEnvoyer,$message,$entete);


}
    	
?> 