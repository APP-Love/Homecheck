


<?php



 if ( isset($_POST['type']) && isset($_POST['adresse'])  && isset($_POST['codepostal'])  && isset($_POST['ville'])  && isset($_POST['superficie'])  ){

$erreur1=" ";
 
  if (!empty($_POST['type']) &&  !empty($_POST['adresse']) &&  !empty($_POST['codepostal']) &&  !empty($_POST['ville']) &&  !empty($_POST['superficie']) &&     !empty($_POST['salon']))
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
 
  $sql4000 =  "INSERT INTO logement (id, id_utilisateur, typelogement, adresse, codepostal, ville, superficie) VALUES ('', '".$id."', '".$type."', '".$adresse."', '".$code."', '".$ville."', '".$superficie."')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->query($sql4000);
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


 


$nbrcap=0;

 if (!empty($_POST['salon']))
  {
           
           include("modele/connexion_bdd.php"); 
             $sql3 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALON')";
                                            // on insère les informations du formulaire dans la table
    
        $bdd->exec($sql3);
                                           // on affiche le résultat pour le visiteur
       
  







}

 if (!empty($_POST['chambre1']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql4 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CHAMBRE1')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql4);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}

 if (!empty($_POST['chambre2']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql5 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CHAMBRE2')";
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
             $sql6 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'CUISINE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql6);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}

 if (!empty($_POST['sdb1']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql7 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALLE DE BAIN1')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql7);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}


 if (!empty($_POST['sdb2']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql8 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'SALLE DE BAIN2')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql8);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 







}

if (!empty($_POST['garage']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql9 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', 'GARAGE')";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql9);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}

if (!empty($_POST['terrasse']))
  {
          
           include("modele/connexion_bdd.php"); 
             $sql10 =  "INSERT INTO piece (idp, id_logement, nombredecapteurs, nom) VALUES ('', '".$idl."','".$nbrcap."', ''TERRASSE)";
                                            // on insère les informations du formulaire dans la table
    try {
        $bdd->exec($sql10);
                                           // on affiche le résultat pour le visiteur
       
    } 
    catch (Exception $e) {
            $e->getMessage();
    } 






}



}


      else {       
           
    $erreur1="<font color=red size=5> <center> Le logement n'a pas été enregistrée, veuillez remplir le formulaire entièrement  et choisir au moins un salon comme pièce  </center></font>";                           
include("vue/ajouterlogement.php");
          
      }

include("vue/logementChoisi.php");

               
}
?>