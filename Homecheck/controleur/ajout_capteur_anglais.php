<?php  
 include("modele/connexion_bdd.php");
  
/* changer en fonction des pièce que lon demande, voir avec thomas crée une varible $_SESSION[piece] */

$capteur = $bdd->query("SELECT * FROM capteuractionneur c WHERE  c.id_piece='".$idchoixpiece."' 
						 ");
$donneescapteur = $capteur->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneescapteur as $element){



if($element['type']==1 ){
  
 include 'vue_anglais/add_sensort.php';
 echo $a;                  
}   
if($element['type']==2){
  
 include 'vue_anglais/add_sensorh.php';
 echo $a;   
       
}

 
      

if($element['type']==3){
  
 include 'vue_anglais/add_sensorf.php';
 echo $a;                  
}

if($element['type']==4){
  
 include 'vue_anglais/add_sensorl.php';
 echo $a;                  
}
/*if($donneescapteur['type']== ){
  
 include 'vue/ajout_capteurh.php';
 echo $a;                  
}*/

}
?>