

<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
        <div id="carre"> 
       
  <h2> Capteur de lumière:<?php
include 'controleur/trame.php';
   $var=0;

  $k=$_SESSION['maison'];
$sql11="SELECT * FROM information WHERE type=4 ";
$reponse11 = $bdd->query($sql11);
$donnees11 = $reponse11->fetchAll(PDO:: FETCH_ASSOC);;

foreach ($donnees11 as $element) {
  
    
     $var = $element['id'];
         
}

$sql12="SELECT donneesphysiques FROM information WHERE id='$var' ";
$reponse12 = $bdd->query($sql12);
$donnees12 = $reponse12->fetch(); 
if($donnees12[0]==1){$donnees12[0]= "Lumière allumée";}
if($donnees12[0]==0){$donnees12[0]= "Lumière éteinte";}

echo $donnees12[0];?></h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurh" src="image/ampoule.png" alt="Capteur de lumière" />  

  <img class="grapheh" src="image/graphehumi.png" alt="Graphique d'humidité" />  
   

         </div>

    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>
