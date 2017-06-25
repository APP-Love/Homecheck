<?php 

 include("modele/connexion_bdd.php");


$a=$_SESSION['maison']; 
$sql4="SELECT * FROM logement WHERE id_utilisateur='".$id."' ";
  $reponse1 = $bdd->query($sql4);

// On affiche chaque entrée une à une
                  

$donneescapteur1 = $reponse1->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneescapteur1 as $element){
$k=$element['id'];


$sql1="SELECT COUNT(*) FROM piece p 
WHERE p.id_logement= '".$k."'";

  $reponse1 = $bdd->query($sql1);
  $donnees1 = $reponse1->fetch();

include ('vue_anglais/leslogementsvue.php');
echo $a;
           
}


?>