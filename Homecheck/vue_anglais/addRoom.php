<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
 
<div class="boxlogement ">
<div class="boxlogement2 ">
<div class="formu">
 
            
            <span class=ajouttitre1> Add a Room  </span>
                

        </div>
  <form method="post" action="index2.php?cible=insertionpiecet">
<div class="formu2">
            
          

                <div class="ref1">
                      <p>Housing type: <br/>
                              <select name="type" id="type">
                         <option value="maison"> House</option>
                         <option value="appartement"> Flat</option>
                         
                                </select>

                     </p>
                             <p>
                         <label> Adresse: <br/> </label>   <input type="text"  id="adresse" name="adresse" placeholder="ex: 238 rue de vanves"/>
                            </p>
                             <p>
                         <label> Postal code:  <br/> </label>  <input type="number"  id="codepostal" name="codepostal" placeholder="ex: 75000"/><br/>
                            </p>
                             <p>
                         <label> City: <br/> </label>   <input type="text"  id="ville" name="ville" placeholder="ex: Paris"/><br/>
                            </p>
                             <p>
                         <label> Area: <br/> </label>   <input type="number"  id="superficie" name="superficie" placeholder="ex: 110"/> square meter <br/>
                            </p>
                </div>

   
   
                <div class="ref2">        
                            <p> Which Room(s) : <br/>
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
 <div class="messageErreur"> <?php echo $erreur1; ?> </div>
            </div>
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>