<?php
 include("modele/connexion_bdd.php");
 $mai=$_SESSION['maison'];
 $infopiece = $bdd->query('SELECT idp FROM  piece p 
          

             WHERE p.nom="SALON" AND p.id_logement="'.$mai.'" '
             );


  $info = $infopiece->fetch();
  $pieceid= $info[0];

$REF = $bdd->query('SELECT * FROM reference');


 if ( isset($_POST['capteur']) && isset($_POST['pseudo'])){


  if (!empty($_POST['capteur']) &&  !empty($_POST['pseudo'])){
                        
          $ref=$_POST['pseudo'];

      if($_POST['capteur']=='humidité'){

            if($retour = $REF->fetch()){

                    if($_POST['pseudo']=='101'){ 

                     $type=2;
                    $description="Capteur humidité";
                           include 'vue_anglais/add_sensorh.php';

                            $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                              try {
                                  $bdd->query($sql);
                                                                     // on affiche le résultat pour le visiteur
                                  
                              } 
                              catch (Exception $e) {
                                      $e->getMessage();
                              }

                          include ("controleur/mailcapteur_anglais.php");

                    }
                 else {
                          
                       }

                    if($_POST['pseudo']=='102'){ 

                     $type=2;
                    $description="Capteur humidité";
                           include 'vue_anglais/add_sensorh.php';
                            
                            $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                              try {
                                  $bdd->query($sql);
                                                                     // on affiche le résultat pour le visiteur
                                  
                              } 
                              catch (Exception $e) {
                                      $e->getMessage();
                              }

                              include ("controleur/mailcapteur_anglais.php");
                    }
                 else {

                       }

                       if($_POST['pseudo']=='103'){ 

                     $type=2;
                    $description="Capteur humidité";
                           include 'vue_anglais/add_sensorh.php';
                             

                            $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");

                    }
                 else {

                       }
          }
      }


      if($_POST['capteur']=='température'){

        if($retour = $REF->fetch()){

                if($_POST['pseudo']=='ABC'){ 

                     $type=1;
                     $description="Capteur de température";
                       include 'vue_anglais/add_sensort.php';
                        

                        $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");
                  }
                 else {

                 }

                 if($_POST['pseudo']=='DEF'){ 

                     $type=1;
                     $description="Capteur de température";
                       include 'vue_anglais/add_sensort.php';
                         

                        $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");

                  }
                 else {

                 }

                 if($_POST['pseudo']== 'GHI'){ 

                     $type=1;
                     $description="Capteur de température";
                       include 'vue_anglais/add_sensort.php';
                    

                        $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");

                  }
                 else {

                 }
      
        }

    }

      if($_POST['capteur']=='fenêtre'){

        if($retour = $REF->fetch()){

          if($_POST['pseudo']== '1A1'){ 

               $type=3;
        $description="Capteur fenêtre";
                 include 'vue_anglais/add_sensorf.php';
                  

                  $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");

            }
           else {

           }

           if($_POST['pseudo']== '2B2'){ 

               $type=3;
               $description="Capteur fenêtre";
                 include 'vue_anglais/add_sensorf.php';
                  

                  $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }


                        include ("controleur/mailcapteur_anglais.php");

            }
           else {

           }

           if($_POST['pseudo']== '3C3'){ 

               $type=3;
        $description="Capteur fenêtre";
                 include 'vue_anglais/add_sensorf.php';
                 

                  $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");
            }
           else {

           }
        
      }

    }

      if($_POST['capteur']=='lumiere'){

        if($retour = $REF->fetch()){

            if($_POST['pseudo']== 'LUM1'){ 

                   $type=4;
                $description="Capteur de lumière";
                     include 'vue_anglais/add_sensorl.php';
                      

                      $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                        try {
                            $bdd->query($sql);
                                                               // on affiche le résultat pour le visiteur
                            
                        } 
                        catch (Exception $e) {
                                $e->getMessage();
                        }

                        include ("controleur/mailcapteur_anglais.php");
                }
               else {

               }
         
                if($_POST['pseudo']== 'LUM2'){ 

                   $type=4;
                $description="Capteur de lumière";
                     include 'vue_anglais/add_sensorl.php';
                     

                      $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                      try {
                          $bdd->query($sql);
                                                             // on affiche le résultat pour le visiteur
                          
                      } 
                      catch (Exception $e) {
                              $e->getMessage();
                      }

                      include ("controleur/mailcapteur_anglais.php");

                }
               else {

               }

               if($_POST['pseudo']== 'LUM3'){ 

                   $type=4;
                   $description="Capteur de lumière";
                     include 'vue_anglais/add_sensorl.php';
                    


                      $sql =  "INSERT INTO `capteuractionneur` (`numero de serie`, `id_piece`, `reference`, `type`, `description`, `etat`) VALUES ('', '".$pieceid."', '".$ref."', '".$type."', '".$description."', '1')";
                                            // on insère les informations du formulaire dans la table
                try {
                    $bdd->query($sql);
                                                       // on affiche le résultat pour le visiteur
                    
                } 
                catch (Exception $e) {
                        $e->getMessage();
                } 
                
                include ("controleur/mailcapteur_anglais.php");


                }
               else {

               }

                    }

    }

        include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 



    include("vue_anglais/sensorPerRoom.php");


}
             
           
      echo"Please complete all fields";                            
include("vue_anglais/addSensor.php");
          
      }


else {
 echo "There is an unfilled field";

}
               

?>