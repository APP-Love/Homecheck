<?php

 if ( isset($_POST['type1']) && isset($_POST['adresse1'])  && isset($_POST['codepostal1'])  && isset($_POST['ville1'])  && isset($_POST['superficie1'])  ){

$erreur2=" ";


 
  if (!empty($_POST['type1']) &&  !empty($_POST['adresse1']) &&  !empty($_POST['codepostal1']) &&  !empty($_POST['ville1']) &&  !empty($_POST['superficie1']))
  {
            $id=$_SESSION['id'];
            
            $adresse=$_POST['adresse1'];
            $code=$_POST['codepostal1'];
            $ville=$_POST['ville1'];
            $superficie=$_POST['superficie1'];
            

                    
      if($_POST['type1']=='maison'){
        $type=1;
      }
      if($_POST['type1']=='appartement'){
        $type=2;
      }

        include("modele/connexion_bdd.php"); 


    // on écrit la requête sql 
 
  $sql20 =  "INSERT INTO logement (id, id_utilisateur, typelogement, adresse, codepostal, ville, superficie) VALUES ('', '".$id."', '".$type."', '".$adresse."', '".$code."', '".$ville."', '".$superficie."')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql20);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 


$infoidlog = $bdd->query('SELECT id
                          FROM logement 
                          ORDER BY id DESC
                          LIMIT 1 ');


  $infoidlogement  = $infoidlog->fetch();
  $idl=$infoidlogement[0];

echo $idl;

 


$nbrcap=0;



 




 if (!empty($_POST['salon']))
  {
           
           include("modele/connexion_bdd.php"); 
             $sql21 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALON')";
                                            // on insère les informations du formulaire dans la table
  
        $bdd->exec($sql21);
                                           // on affiche le résultat pour le visiteur
       
  







}

 if (!empty($_POST['chambre1']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql22 = "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CHAMBRE1')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql22);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}

 if (!empty($_POST['chambre2']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql23 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CHAMBRE2')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql23);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}


 if (!empty($_POST['cuisine']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql24 = "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CUISINE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql24);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}

 if (!empty($_POST['sdb1']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql25 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALLE DE BAIN1')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql25);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}


 if (!empty($_POST['sdb2']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql26 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALLE DE BAIN2')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql26);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}

if (!empty($_POST['garage']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql27 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'GARAGE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql27);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}

if (!empty($_POST['terrasse']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql28 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', ''TERRASSE)";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql28);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}



}


      else {       
           
    $erreur2="<font color=red size=5> <center> The accommodation has not been registered, please fill in all fields </center></font>";                           
include("vue_anglais/addlogement.php");
          
      }

include("vue_anglais/accomodationSelected.php");

               
}
?>