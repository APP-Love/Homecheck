
<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
    
  
  <div id="carre"> 
       
  <h2> Capteur Fenêtre :<?php
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
if($donnees12[0]==1){$donnees12[0]= "shutters close";}
if($donnees12[0]==0){$donnees12[0]= "shutters open";}
echo $donnees12[0];?></h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurf" src="image/fenetre.jpg" alt="Capteur de fenetre" />

  <a href="index.php?cible=capteurt"> <img class="flechedf" src="image/fleched.png" alt="fermeture" /> </a>
  <a href="index.php?cible=capteurh"> <img class="flechegf" src="image/flecheg.png" alt="fermeture" /> </a> 
  <img class="graphef" src="image/graphehumi.png" alt="Graphique de temperature" />  
   <ul id="menuf">


        <li>

                
                <a href="#">Secondes</a>

                <ul>

                        <li><a href="#">Heures</a></li>

                        <li><a href="#">Auj.</a></li>

                        <li><a href="#">Semaines</a></li>

                        <li><a href="#">Mois</a></li>

                        <li><a href="#">Années</a></li>
        </li>

  </ul>

         </div>
     
     
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>
