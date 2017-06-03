<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();


    ?>

     <div class="carre2"> 

           
        <div class="formulaire">
 <a href="index2.php?cible=capteursparpiece"> <img class="croix2a" src="image/croix2.png" alt="fermeture" /> </a>
            
            <span class=ajouttitre> Add a sensor </span>
                <br/><br/><br/>


        
        <div class="formulaire2">
                <div class="typecapteur">
                        <form method="post" action="index2.php?cible=ajoutercapteur">
                         <p>
                          
                         <label for="pays">Choose a type of sensor<br/> <br/></label>
                    <select name="capteur" id="capteur">
                         <option value="humidité">Humidity sensor</option>
                         <option value="lumiere">Brightness sensor</option>
                         <option value="fenêtre">Windows sensor</option>
                           <option value="température">Temperature sensor</option>
                         <option value="autre">Other sensor</option>
          
          
                    </select>
                        </p>
                        
                </div> <br/>

                <div class="reference">
                        
                             <p>
                         <label>Reference of the sensor <br/> </label>  <br/> <input type="text"  id="pseudo" name="pseudo" placeholder="Serial number..."/><br/><br/><br/><br/>
                            </p>
                            
                </div>
         </div>
       

        <div class="confirmation"><h3> You will receive a confirmation mail. <br/> Thank you for your trust. </h3> 
        </div> <br/><br/>

        
        <div class="valider"> 
        
<button type="submit"> Confirmation </button>
</form>
        </div> 

         <br/> <br/> <br/>

        </div>

    </div>
         

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>

