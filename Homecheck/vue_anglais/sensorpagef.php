<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
    
  
  <div id="carre"> 
       
  <h2> Window sensor :<?php
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
if($donnees12[0]==1){$donnees12[0]= "volet fermé";}
if($donnees12[0]==0){$donnees12[0]= "volet ouvert";}
echo $donnees12[0];?></h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurf" src="image/fenetre.jpg" alt="Window sensor" />

  <a href="index2.php?cible=capteurt"> <img class="flechedf" src="image/fleched.png" alt="Closing" /> </a>
  <a href="index2.php?cible=capteurh"> <img class="flechegf" src="image/flecheg.png" alt="Closing" /> </a> 
  <img class="graphef" src="image/graphehumi.png" alt="Temperature Graph" />  
   <ul id="menuf">


        <li>

                
                <a href="#">Seconds</a>

                <ul>

                        <li><a href="#">Hours</a></li>

                        <li><a href="#">Today</a></li>

                        <li><a href="#">Weeks</a></li>

                        <li><a href="#">Months</a></li>

                        <li><a href="#">Years</a></li>
        </li>

  </ul>

         </div>
     
     
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>
