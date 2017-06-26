<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
     <div id="carre"> 
       
  <h2> Temperature Sensor : <?php
include 'controleur/trame.php';
   $var=0;

  $k=$_SESSION['maison'];
$sql11="SELECT * FROM information WHERE type=1 ";
$reponse11 = $bdd->query($sql11);
$donnees11 = $reponse11->fetchAll(PDO:: FETCH_ASSOC);;

foreach ($donnees11 as $element) {
  
    
     $var = $element['id'];
         
}

$sql12="SELECT donneesphysiques FROM information WHERE id='$var' ";
$reponse12 = $bdd->query($sql12);
$donnees12 = $reponse12->fetch(); 

echo $donnees12[0];?> </h2>
  <a href="#" class="Ont">On</a>
  <a href="#" class="Offt">Off</a>
  <img class="capteurt" src="image/thermo.png" alt="Temperature Sensor" />  
  <?php echo " <a href='index2.php?cible=capteursparpiece&id=".htmlentities($k)."'><img class='croixt' src='image/croix2.png' alt='Closing' /> </a>";?>

 
  <a href="index2.php?cible=capteurh"> <img class="flechedt" src="image/fleched.png" alt="Closing" /> </a>
  <a href="index2.php?cible=capteurf"> <img class="flechegt" src="image/flecheg.png" alt="Closing" /> </a>
  <img class="graphet" src="image/graphetemp.jpg" alt="Graph of Temperature" />  
   <ul id="menut">


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


