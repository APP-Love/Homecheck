  <?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
         
        <Section>
            <div id="box"> 
                    <div class="automatisationtitre"> Les automatisations 
                    </div>
                <div class="box1">
                    
                     <div class="Ajout" > Ajout d'automatisation : 
                    </div> 
                

                    <div class="box2">
                    
                        <div class="intitulé"> Action </div> 
                        <div class="intitulé" > Pièces </div>
                        <div class="intitulé"> Conditions </div>
                        <div class="intitulé" > Récurrence </div> 
                    
                    </div>
                    <form method="post" action="index.php?cible=auto">  
                            <div class="box3">
                    
                                    <div>
                                                <p>
                                                <input type="radio" name="action" value="chauffage" id="chauffage" class="td3"> <label for="chauffage"> Chauffage </label><br/>
                                                 <input type="radio" name="action" value="ouverturevolets" id="ouverturevolets" class="td3"> <label for="ouverturevolets"> Ouverture des volets </label><br/>
                                                  <input type="radio" name="action" value="fermeturevolets" id="fermeturevolets" class="td3"> <label for="fermeturevolets"> Fermeture des Volets </label><br/>
                                                   <input type="radio" name="action" value="lumiere" id="lumiere" class="td3"> <label for="lumiere"> Lumiere </label><br/>
                                                </p>
                                    </div>


                                    <div class="table2" >

                                            <p> <input type="radio" name="room" value="allroom" id="allroom" class="td3"/> <label for="allroom"> Toutes les pieces </label><br/>
                                                  <input type="radio" name="room" value="chambres" id="chambres" class="td3"/> <label for="chambres"> Toutes les chambres </label><br/>
                                                  <input type="radio" name="room" value="garageterrasse" id="garageterrasse" class="td3"/> <label for="garageterrasse"> Garage et terrasse </label><br/>                              
                                                <input type="radio" name="room" id="cuisinesalon" value="cuisinesalon" class="td3"/> <label for="cuisinesalon"> Cuisine et salon </label><br/>
                                                <input type="radio" name="room" value="sdb"  id="sdb" class="td3"/> <label for="sdb"> Salle(s) de bain </label><br/>
                                              
                                            </p>
                                    </div>   

                            
                                    <nav1>
                                                <ul >
                                                    <div class="données" >
                                                            <label for=" Température" ></label> 
                                                            <input type="text" name="temperature" id="temperature" placeholder="Température..."/>
                                                    </div>
                                                    <div class="données" >
                                                            <label for=" Heure de début" ></label> 
                                                            <input type="text" name="Hdebut" id="Hdebut" placeholder="Heure de début..."/>
                                                    </div>
                                                    <div class="données"  >
                                                            <label for=" Heure de fin" ></label> 
                                                            <input type="text" name="Hfin" id="Hfin" placeholder="Heure de fin..."/>
                                                    </div>
                                                </ul>
                                    </nav1>
                            

                                     <div class="table2" >

                                            <p> <input type="radio"  name="recurrence" value="alldays" id="alldays" class="td3"/> <label for="alldays"> Tous les jours </label><br>
                                                <input type="radio" name="recurrence" id="lundivendredi" value="lundivendredi" class="td3"/> <label for="lundivendredi"> Lundi au Vendredi </label><br/>
                                                <input type="radio" name="recurrence" id="weekend" value="weekend" class="td3"/> <label for="weekend"> Samedi et Dimanche </label><br/>
                                                
                                            </p>
                                    </div>  
                            </div> 

                            <div class="box5">
                                   <input class="enre" type="submit" id="enre" name="enre" value="Enregistrer"/>
                          
                            </div>  

                                            
                    </form>
                           
                </div>
            

                
                <div class="box4">
                    <div class="A1"> A1 </div>
                    <div><a href="#"> <img class="croix1" src="image/croix.png" alt="supprimer automatisation" /></a></div>
                </div>

                <div class="box4">
                    <div class="A1"> A2 </div>
                    <div > <a href="#"> <img class="croix1" src="image/croix.png" alt="supprimer automatisation" /></a></div>
                </div>


            </div>
        </Section>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>