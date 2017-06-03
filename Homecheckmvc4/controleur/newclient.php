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
 
  $sql =  "INSERT INTO utilisateur  VALUES ('','".$nom."','".$prenom."','".$identifiant."','".$mdp."','".$dateDEnaissance."','".$telephone."', '".$mail."', '".$adresse."' ,'".$codepostal."','".$ville."','".$type."','')";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       																		 // on affiche le résultat pour le visiteur
        //echo '<span> Le nouveau client a bien été enregistré!</span>';
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 

include ('vue/backoffice.php');

}
    	
?> 