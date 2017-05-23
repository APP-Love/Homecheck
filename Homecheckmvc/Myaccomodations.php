<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
         
       <section>
      
        <div class="les2">

        <div class="logement">

            <a href="index.php?cible=logementchoisi"> 
        <div class=" image_maison"> 
         
                <img src="image/image_maison.jpg" alt="maison" title="Access to your house"> 
        </div> 
                
               
                <p class="info2">
                        House
                        <br/>
                        Address
                </p>
       
         </a>
       </div>
       
        <div class="logement">

            <a href="index.php?cible=logementchoisi"> 
            <div class=" image_appartement"> 
                <img src="image/image_appartement.jpg" alt="maison" title="Access to your appartement"> 
            </div> 
                
                
                <p class="info2">
                            Appartement
                            <br/>
                            Address
                </p>
            
            </a>

        </div>
  
        </div>
        </section>
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

