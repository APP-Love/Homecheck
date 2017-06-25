<?php

$mai2= $_SESSION['maison'];
$erreur3=" ";

$nbrcap=0;

 if ( isset($_POST['salon']) || isset($_POST['chambre'])  || isset($_POST['cuisine'])  || isset($_POST['sdb']) || isset($_POST['garage']) || isset($_POST['terrasse']) ){


 
 
 if (!empty($_POST['salon']))
  {
           
           include("modele/connexion_bdd.php"); 
             $sql3 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('','".$mai2."','".$nbrcap."', 'SALON')";
                                            // on insère les informations du formulaire dans la table
    
        $bdd->exec($sql3);
                                           // on affiche le résultat pour le visiteur
       
  







}

 








 if (!empty($_POST['chambre']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql5 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('','".$mai2."', '".$nbrcap."', 'CHAMBRE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql5);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}


 if (!empty($_POST['cuisine']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql6 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$mai2."','".$nbrcap."', 'CUISINE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql6);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}

 if (!empty($_POST['sdb']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql7 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$mai2."', '".$nbrcap."', 'SALLE DE BAIN')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql7);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}


 
if (!empty($_POST['terrasse']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql100 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$mai2."', '".$nbrcap."', ''TERRASSE)";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql100);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}









if (!empty($_POST['garage']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql9 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('','".$mai2."', '".$nbrcap."', 'GARAGE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql9);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}



include("vue_anglais/sensorPerRoom.php");

}

      else {       
           
    $erreur3="<font color=red size=5> <center> The piece has not been registered, please check at least one piece </center></font>";                           
include("vue_anglais/ajoutpiece.php");
          
      }



               

?>