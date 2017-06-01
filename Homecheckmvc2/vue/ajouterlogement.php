<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
  <span class=ajouttitre> Ajouter un logement </span>
                <br/><br/>

<form method="post" action="index.php?cible=">
           <p> <label> Type de logement: </label> <br/>
                              <select name="type" id="type">
                         <option value="humidité"> Maison</option>
                         <option value="lumiere"> Appartement</option>
                         
                    </select>

                     </p>
 
      <p>
                         <label> Adresse: <br/> </label>  <br/> <input type="text"  id="adresse" name="adresse" placeholder="ex: 238 rue de vanves"/><br/>
                            </p>
                             <p>
                         <label> code postal:  <br/> </label>  <br/> <input type="text"  id="codepostal" name="codepostal" placeholder="ex: 75000"/><br/>
                            </p>
                             <p>
                         <label> ville: <br/> </label>  <br/> <input type="text"  id="ville" name="ville" placeholder="ex: Paris"/><br/>
                            </p>
                             <p>
                         <label> superficie: <br/> </label>  <br/> <input type="text"  id="superficie" name="superficie" placeholder="ex: 110"/> mètre carré<br/>
                            </p>
     
 
                            <p> <label> Pièce de la maison: </label> <br/>
                                 <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Salon </label><br/>
                                <input type="checkbox" name="chambre1" id="chambre1" class="td3"/> <label for="chambre1"> Chambre 1 </label><br/> 
                                <input type="checkbox" name="chambre2" id="chambre2" class="td3"/> <label for="chambre2"> Chambre 2 </label><br/>
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Cuisine </label><br/>
                                <input type="checkbox" name="sdb1" id="sdb1" class="td3"/> <label for="sdb1"> Salle de bain 1 </label><br/>
                                <input type="checkbox" name="sdb2" id="sdb2" class="td3"/> <label for="sdb2"> Salle de bain 2 </label><br/>
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrasse </label><br/>

                            </p>
      <input type="submit" value="Valider" /> 
    </form>
      









           
        <div class="formulaire">
 <a href="index.php?cible="> <img class="croix2" src="image/croix2.png" alt="fermeture" /> </a>
            
            <span class=ajouttitre> Ajouter un logement </span>
                <br/><br/><br/>


        
        <div class="formulaire2">
            
            <form method="post" action="index.php?cible=">

                <div class="reference">
                      <p> Type de logement: <br/>
                              <select name="type" id="type">
                         <option value="humidité"> Maison</option>
                         <option value="lumiere"> Appartement</option>
                         
                    </select>

                     </p>
                             <p>
                         <label> Adresse: <br/> </label>  <br/> <input type="text"  id="adresse" name="adresse" placeholder="ex: 238 rue de vanves"/><br/>
                            </p>
                             <p>
                         <label> code postal:  <br/> </label>  <br/> <input type="text"  id="codepostal" name="codepostal" placeholder="ex: 75000"/><br/>
                            </p>
                             <p>
                         <label> ville: <br/> </label>  <br/> <input type="text"  id="ville" name="ville" placeholder="ex: Paris"/><br/>
                            </p>
                             <p>
                         <label> superficie: <br/> </label>  <br/> <input type="text"  id="superficie" name="superficie" placeholder="ex: 110"/> mètre carré<br/>
                            </p>


                            <p> Pièce de la maison: <br/>
                                 <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Salon </label><br/>
                                <input type="checkbox" name="chambre1" id="chambre1" class="td3"/> <label for="chambre1"> Chambre 1 </label><br/> 
                                <input type="checkbox" name="chambre2" id="chambre2" class="td3"/> <label for="chambre2"> Chambre 2 </label><br/>
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Cuisine </label><br/>
                                <input type="checkbox" name="sdb1" id="sdb1" class="td3"/> <label for="sdb1"> Salle de bain 1 </label><br/>
                                <input type="checkbox" name="sdb2" id="sdb2" class="td3"/> <label for="sdb2"> Salle de bain 2 </label><br/>
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrasse </label><br/>
                            </p>
                </div>
         </div>
       

        <div class="confirmation"><h3> Vous recevrez un mail de validation confirmant l'ajout demandé. <br/> Merci de votre confiance. </h3> 
        </div> <br/><br/>

        
        <div class="valider"> 
        
<button type="submit">Valider</button>
     </form>
        </div> 

         <br/> <br/> <br/>

        </div>

    
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>