<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
        <div id="carre"> 
       
  <h2> Humidity sensor :</h2>
  <a href="#" class="On">On</a>
  <a href="#" class="Off">Off</a>
  <img class="capteurh" src="image/humi.png" alt="Humidity sensor" />  
  <a href="index.php?cible=capteursparpiece"> <img class="croixh" src="image/croix2.png" alt="Closing" /> </a>
  <a href="index.php?cible=capteurf"> <img class="flechedh" src="image/fleched.png" alt="switch" /> </a>
  <a href="index.php?cible=capteurt"> <img class="flechegh" src="image/flecheg.png" alt="switch" /> </a>
  <img class="grapheh" src="image/graphehumi.png" alt="Humidity Graph" />  
   <ul id="menuh">


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




