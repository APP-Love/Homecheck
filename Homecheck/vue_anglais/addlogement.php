<?php
include "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         


<div class="boxlogement ">
<div class="boxlogement2 ">
<div class="formu">
 
            
            <span class="ajouttitre1"> Add an accomodation </span>
                

        </div>
  <form method="post" action="index2.php?cible=insertionlogement">
<div class="formu2">
            
          

                <div class="ref1">
                      <p> Accomodation' type: <br/>
                              <select name="type1" id="type1">
                         <option value="maison"> House </option>
                         <option value="appartement"> Flat </option>
                         
                                </select>

                     </p>
                             <p>
                         <label> Adresse: <br/> </label>   <input type="text"  id="adresse1" name="adresse1" placeholder="ex: 238 rue de vanves"/>
                            </p>
                             <p>
                         <label> Zip code:  <br/> </label>  <input type="number"  id="codepostal1" name="codepostal1" placeholder="ex: 75000"/><br/>
                            </p>
                             <p>
                         <label> City: <br/> </label>   <input type="text"  id="ville1" name="ville1" placeholder="ex: Paris"/><br/>
                            </p>
                             <p>
                         <label> Area: <br/> </label>   <input type="number"  id="superficie1" name="superficie1" placeholder="ex: 110"/> Square meter<br/>
                            </p>
                </div>

   
   
                <div class="ref2">        
                            <p> Room of the house: <br/>
                                 <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Living room </label><br/>
                                <input type="checkbox" name="chambre1" id="chambre1" class="td3"/> <label for="chambre1"> Bedroom 1 </label><br/> 
                                <input type="checkbox" name="chambre2" id="chambre2" class="td3"/> <label for="chambre2"> Bedroom 2 </label><br/>
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Kitchen </label><br/>
                                <input type="checkbox" name="sdb1" id="sdb1" class="td3"/> <label for="sdb1"> Bathroom 1 </label><br/>
                                <input type="checkbox" name="sdb2" id="sdb2" class="td3"/> <label for="sdb2"> Bathroom 2 </label><br/>
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
<div class="messageErreur"> <?php echo $erreur2; ?> </div>
            </div>
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>