<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
        <div id="carre"> 
       
  <h2> Light sensor:<?php
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
if($donnees12[0]==1){$donnees12[0]= "Light on ";}
if($donnees12[0]==0){$donnees12[0]= "Light off";}
echo $donnees12[0];?></h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurh" src="image/ampoule.png" alt="Light sensor" />  
 

  <img class="grapheh" src="image/graphehumi.png" alt="Graph of Light" />  
   <ul id="menuh">


        <li>

                
                <a href="#">Secondes</a>

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
