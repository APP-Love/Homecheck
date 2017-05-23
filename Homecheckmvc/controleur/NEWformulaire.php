<?php

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
 
  $sql =  "INSERT INTO messagerie  VALUES ('', '".$nom."', '".$email."', '".$telephone."' ,'".$message."')";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       																		 // on affiche le résultat pour le visiteur
        echo '<span>Votre message à bien été envoyé !</span>';
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 



    $nomEnvoyeur ="Domisep";
    $emailEnvoyer = "iribarne.manon@gmail.com";
    $entete ="MINE_Version : 1.0\r\n";
    $entete .= '"Content_Type : text html; charset="UTF-8"'."\r\n" ; 
    $entete .= " To : $nomEnvoyeur <$emailEnvoyer> \r\n"; 
    $entete .= "From : $nom <$email> \r\n";

   //  $message = "telephone:".$telephone."<br\>".$message;
    mail($emailEnvoyer,$message,$entete);


}
    	
?> 