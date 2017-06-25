<?php

$mai=$_GET['id'];
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
 
<div class="boxlogement ">
<div class="boxlogement2 ">
<div class="formu">
 
            
            <span class=ajouttitre1> Add Room  </span>
                

          </div>
   <?php echo " <form method='post' action='index2.php?cible=insertionpiece&id=".htmlentities($mai)."'>";?>
<div class="formu2">
            
          
   
   
                <div class="ref2">        
                            <p> Which room(s) do you want to add ?  : <br/>
                                 <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Living room </label><br/>
                                <input type="checkbox" name="chambre" id="chambre" class="td3"/> <label for="chambre1"> Bedroom </label><br/> 
                             
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Kitchen </label><br/>
                                <input type="checkbox" name="sdb" id="sdb" class="td3"/> <label for="sdb1"> Bathroom </label><br/>
                              
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrace </label><br/>
                            </p>
                </div>
</div>




     
     <div class="valid">
     <input type="submit"> 
     </div>   
        
        
</form>
    </div>  
 <div class="messageErreur"> <?php echo $erreur3; ?> </div>
            </div>
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>