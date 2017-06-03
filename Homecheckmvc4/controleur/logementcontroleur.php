<?php 


 include("modele/connexion_bdd.php");

 
$sql4="SELECT * FROM logement WHERE id_utilisateur='".$id."' ";
  $reponse1 = $bdd->query($sql4);

// On affiche chaque entrée une à une
                  

$donneescapteur1 = $reponse1->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneescapteur1 as $element){


include ('vue/leslogementsvue.php')
echo $a;
           
}


?>