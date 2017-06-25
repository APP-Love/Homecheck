<?php $mai=$_SESSION['maison'];
include("modele/connexion_bdd.php");


$infopiece = $bdd->query('SELECT idp FROM  piece p 
          

             WHERE p.nom="SALON" AND p.id_logement="'.$mai.'" '
             );


  $info = $infopiece->fetch();
  $pieceid= $info[0];





 if ( isset($_POST['capteur']) && isset($_POST['pseudo'])){


 	if (!empty($_POST['capteur']) &&  !empty($_POST['pseudo'])){
                        
          $ref=$_POST['pseudo'];              
                    
      if($_POST['capteur']=='humidité'){
        $type=2;
        $description="Capteur humidité";
      }
      if($_POST['capteur']=='température'){
        $type=1;
        $description="Capteur de température";
      }
      if($_POST['capteur']=='fenêtre'){
        $type=3;
        $description="Capteur fenêtre";
      }

      if($_POST['capteur']=='lumiere'){
        $type=4;
        $description="Capteur de lumière";
      }

        include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '1', '".$ref."', '".$type."', '".$description."', '1')";
        
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
             
           
                                
         
      }


else {
 echo "There is a field not filled";

}
               

?>