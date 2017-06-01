<?php



 if ( isset($_POST['type']) && isset($_POST['adresse'])  && isset($_POST['codepostal'])  && isset($_POST['ville'])  && isset($_POST['superficie'])  ){


 	if (!empty($_POST['type']) &&  !empty($_POST['adresse']) &&  !empty($_POST['codepostal']) &&  !empty($_POST['ville']) &&  !empty($_POST['superficie']))
  {
            $id=$_SESSION['id'];
            
            $adresse=$_POST['adresse'];
            $code=$_POST['codepostal'];
            $ville=$_POST['ville'];
            $superficie=$_POST['superficie'];
            

                    
      if($_POST['type']=='maison'){
      	$type=1;
      }
      if($_POST['type']=='appartement'){
      	$type=2;
      }

        include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql =  "INSERT INTO `logement` (`id`, `id_utilisateur`, `type`, `adresse`, `code postal`, `ville`, 'superficie') VALUES ('', '".$id."', '".$type."', '".$adresse."', '".$code."', '".$ville."', '".$superficie."')";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       																		 // on affiche le résultat pour le visiteur
        
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 




include("vue/logementChoisi.php");


}
             
           
      echo"veuillez remplir tout les champs";                            
include("vue/logementChoisi.php");
          
      }


else {
 echo "il y a un chaamps non remplit";
 include("vue/logementChoisi.php");

}
               

?>