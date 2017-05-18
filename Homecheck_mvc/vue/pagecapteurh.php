

<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
        <div id="carre"> 
       
  <h2> Capteur d'Humidité :</h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurh" src="image/humi.png" alt="Capteur d'humidité" />  
  <a href="index.php?cible=capteursparpiece"> <img class="croixh" src="image/croix2.png" alt="fermeture" /> </a>
  <a href="index.php?cible=capteurf"> <img class="flechedh" src="image/fleched.png" alt="switch" /> </a>
  <a href="index.php?cible=capteurt"> <img class="flechegh" src="image/flecheg.png" alt="switch" /> </a>
  <img class="grapheh" src="image/graphehumi.png" alt="Graphique d'humidité" />  
   <ul id="menuh">


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




