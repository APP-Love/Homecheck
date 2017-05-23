<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
    
  
  <div id="carre"> 
       
  <h2> Window sensor :</h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurf" src="image/fenetre.jpg" alt="Window sensor" />
  <a href="index.php?cible=capteursparpiece"> <img class="croixf" src="image/croix2.png" alt="Closing" /> </a>
  <a href="index.php?cible=capteurt"> <img class="flechedf" src="image/fleched.png" alt="Closing" /> </a>
  <a href="index.php?cible=capteurh"> <img class="flechegf" src="image/flecheg.png" alt="Closing" /> </a> 
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

   
    
    

    include 'gabarit.php';
?>
