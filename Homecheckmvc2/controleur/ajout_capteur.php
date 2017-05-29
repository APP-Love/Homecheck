<?php 
 include("modele/connexion_bdd.php");

$capteur = $bdd->query('SELECT * FROM capteuractionneur WHERE id_piece=1');
$donneescapteur = $capteur->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneescapteur as $element){



if($element['type']==2){
  
 include 'vue/ajout_capteurh.php';
 echo $a;   
       
}

 
if($element['type']==1 ){
  
 include 'vue/ajout_capteurf.php';
 echo $a;                  
}         

if($element['type']==3){
  
 include 'vue/ajout_capteurt.php';
 echo $a;                  
}

if($element['type']==4){
  
 include 'vue/ajout_capteurl.php';
 echo $a;                  
}
/*if($donneescapteur['type']== ){
  
 include 'vue/ajout_capteurh.php';
 echo $a;                  
}*/

}
?>