<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
        <div id="carre"> 
       
  <h2> Light sensor:</h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurh" src="image/ampoule.png" alt="Light sensor" />  
  <a href="index2.php?cible=capteursparpiece"> <img class="croixh" src="image/croix2.png" alt="fermeture" /> </a>
  <a href="index2.php?cible=capteurf"> <img class="flechedh" src="image/fleched.png" alt="switch" /> </a>
  <a href="index2.php?cible=capteurt"> <img class="flechegh" src="image/flecheg.png" alt="switch" /> </a>
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
