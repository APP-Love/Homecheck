<?php
 include("modele/connexion_bdd.php");

$pieceid2=$_SESSION['choixp'];

  
/* changer en fonction des pièce que lon demande, voir avec thomas crée une varible $_SESSION[piece] */

$capteur = $bdd->query("SELECT * FROM capteuractionneur c WHERE  c.id_piece='".$pieceid2."' 
             ");
$donneescapteur = $capteur->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneescapteur as $element){

    if($element['type']==2){
  
$b="humidite";
       
}

 
if($element['type']==1 ){
  
   $b="temperature" ;              
}         

if($element['type']==3){
  
    
   $b="fenetre" ;             
}

if($element['type']==4){
  $b="lumiere";
                
}


$elem=$element['description'];
 ob_start();
    ?>
   
<option value=<?php echo $b; ?>> <?php echo $elem ?></option>;
    <?php
    $a = ob_get_clean();


echo $a;

}
?>
