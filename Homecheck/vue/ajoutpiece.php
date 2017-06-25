<?php 


$mai=$_GET['id'];
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
 
<div class="boxlogement ">
<div class="boxlogement2 ">
<div class="formu">
 
            
            <span class=ajouttitre1> Ajouter une pièce  </span>
                

        </div>
   <?php echo " <form method='post' action='index.php?cible=insertionpiece&id=".htmlentities($mai)."'>";?>
<div class="formu2">
            
          

               
   
   
                <div class="ref2">        
                            <p> Quelle(s) pièce(s) voulez-vous ajouter   : <br/>
                                <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Salon </label><br/>
                                <input type="checkbox" name="chambre" id="chambre" class="td3"/> <label for="chambre1"> Chambre 1 </label><br/> 
                             
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Cuisine </label><br/>
                                <input type="checkbox" name="sdb" id="sdb" class="td3"/> <label for="sdb1"> Salle de bain 1 </label><br/>
                              
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrasse </label><br/>
                            </p>
                </div>
</div>


     
     <div class="valid">
     <input type="submit"> 
     </div>   
        
        
</form>
    </div>  
 <div class="messageErreur"> <?php echo $erreur2; ?> </div>
            </div>
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>