
<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
     <div id="carre"> 
       
  <h2> Capteur de Température :</h2>
  <a href="#" class="Ont">On</a>
  <a href="#" class="Offt">Off</a>
  <img class="capteurt" src="image/thermo.png" alt="Capteur de Temperature" />  
  <a href="index.php?cible=capteursparpiece"> <img class="croixt" src="image/croix2.png" alt="fermeture" /> </a>
  <a href="index.php?cible=capteurh"> <img class="flechedt" src="image/fleched.png" alt="fermeture" /> </a>
  <a href="index.php?cible=capteurf"> <img class="flechegt" src="image/flecheg.png" alt="fermeture" /> </a>
  <img class="graphet" src="image/graphetemp.jpg" alt="Graphique de temperature" />  
   <ul id="menut">


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


