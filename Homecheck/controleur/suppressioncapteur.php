



<?php
$pieceid=$_SESSION['choixp'];
include ("modele/connexion_bdd.php") ; 

 if ( isset($_POST['supprimercapteur'])){
if (!empty($_POST['supprimercapteur'])){
                        
         
      if($_POST['supprimercapteur']=='humidite'){
      	$type=2;
        
      }
      if($_POST['supprimercapteur']=='temperature'){
      	$type=1;
      
      }
      if($_POST['supprimercapteur']=='fenetre'){
      	$type=3;
             }

      if($_POST['supprimercapteur']=='lumiere'){
      	$type=4;
        
      }
     



    // on écrit la requête sql 
   
  $sql30 =  "DELETE FROM  capteuractionneur  WHERE type= '".$type."' AND id_piece='".$pieceid."'";
    																				// on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql30);
       																		 // on affiche le résultat pour le visiteur
        
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 



$_POST['choixpieces']=$_SESSION['choixp'];
include("vue/capteursParPiece.php");


}
             
      else{ echo"veuillez remplir tout les champs";                            
include("vue/suprimer.php");}     
     
          
      }
              

?>