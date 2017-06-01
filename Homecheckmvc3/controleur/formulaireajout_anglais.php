<?php



 if ( isset($_POST['capteur']) && isset($_POST['pseudo'])){


 	if (!empty($_POST['capteur']) &&  !empty($_POST['pseudo'])){
                        
          $ref=$_POST['pseudo'];              
      if($_POST['capteur']=='humidité'){
      	$type=2;
      }
      if($_POST['capteur']=='température'){
      	$type=3;
      }if($_POST['capteur']=='fenêtre'){
      	$type=1;
      }

      if($_POST['capteur']=='lumiere'){
      	$type=4;
      }

        include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '1', '".$ref."', '".$type."', 'capteur', '1')";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql);
       																		 // on affiche le résultat pour le visiteur
        
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 




include("vue_anglais/sensorPerRoom.php");


}
             
           
      echo"veuillez remplir tout les champs";                            
include("vue_anglais/addSensor.php");
          
      }


else {
 echo "il y a un chaamps non remplit";

}
               

?>