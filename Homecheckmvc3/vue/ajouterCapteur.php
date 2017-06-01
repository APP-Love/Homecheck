<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
      <div class="carre2"> 

           
        <div class="formulaire">
 <a href="index.php?cible=capteursparpiece"> <img class="croix2" src="image/croix2.png" alt="fermeture" /> </a>
            
            <span class=ajouttitre> Ajouter un capteur </span>
                <br/><br/><br/>


        
        <div class="formulaire2">
                <div class="typecapteur">
                        <form method="post" action="index.php?cible=ajoutercapteur">
                         <p>
                          <label for="pays">Choisissez un type de capteur <br/> <br/></label>
                         <select name="capteur" id="capteur">
                         <option value="humidité">Capteur d'humidité</option>
                         <option value="lumiere">Capteur de lumière</option>
                          <option value="fenêtre">Capteur de fenêtre</option>
                           <option value="température">Capteur de température</option>
                         <option value="autre">Autre capteur</option>
          
                    </select>
                        </p>
                        
                </div> <br/>

                <div class="reference">
                        
                             <p>
                         <label>Référence du capteur <br/> </label>  <br/> <input type="text"  id="pseudo" name="pseudo" placeholder="Numéro de série..."/><br/><br/><br/><br/>
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

    </div>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

