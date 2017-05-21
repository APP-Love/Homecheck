<?php 
 include("modele/connexion_bdd.php");

$capteur = $bdd->query('SELECT * FROM capteuractionneur WHERE etat=1');
$donneescapteur = $capteur->fetch(PDO:: FETCH_ASSOC);

if($donneescapteur['type']==1){
  
 include 'vue/ajout_capteurh.php';
 echo $a;                  
}

 if($donneescapteur['type']==1 ){
  
 include 'vue/ajout_capteurf.php';
 echo $a;                  
}


if($donneescapteur['type']==1){
  
 include 'vue/ajout_capteurt.php';
 echo $a;                  
}
/*if($donneescapteur['type']== ){
  
 include 'vue/ajout_capteurh.php';
 echo $a;                  
}*/


?>