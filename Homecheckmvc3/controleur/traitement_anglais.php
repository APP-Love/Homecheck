<?php



if(isset($_POST["envoyer"])) {             // if(isset($_POST["envoyer"]) && $_SESSION['idForm']===$_POST['secureformulaire']) {
		$nom=$_POST['nom'];
		$email=$_POST['email'];
		$telephone=$_POST['telephone'];
		$message=$_POST['message'];
}
   

if (empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['telephone']) || empty($_POST['message'])) {
    echo '<p>Caution, you must fill all fields</p>';
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
        echo '<span>Your message has been sent !</span>';
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 

    ini_set("SMTP","smtp.gmail.com");
    ini_set("smtp_port","25");

    $to = "iribarne.manon@gmail.com";
    $subject = $_POST['telephone'];
    $body = $_POST['message'];
    $headers = "From: ".$email."" . "\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo"ok";
    }
    else{ echo"non";
    }
        
    


}
    	
?> 