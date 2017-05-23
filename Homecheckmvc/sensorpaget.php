<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
  
     <div id="carre"> 
       
  <h2> Temperature Sensor :</h2>
  <a href="#" class="Ont">On</a>
  <a href="#" class="Offt">Off</a>
  <img class="capteurt" src="image/thermo.png" alt="Temperature Sensor" />  
  <a href="index.php?cible=capteursparpiece"> <img class="croixt" src="image/croix2.png" alt="Closing" /> </a>
  <a href="index.php?cible=capteurh"> <img class="flechedt" src="image/fleched.png" alt="Closing" /> </a>
  <a href="index.php?cible=capteurf"> <img class="flechegt" src="image/flecheg.png" alt="Closing" /> </a>
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

   
    
    

    include 'gabarit.php';
?>


