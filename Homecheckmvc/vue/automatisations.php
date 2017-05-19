  <?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
         
        <Section>
            <div id="box"> 
                    <div class="automatisationtitre"> Les automatisations </div>
                <div class="box1">
                    
                        <div class="Ajout" > Ajout d'automatisation : </div> 
                <div class="box2">
                    
                        <div class="intitulé"> Action </div> 
                        <div class="intitulé" > Pièces </div>
                        <div class="intitulé"> Conditions </div>
                        <div class="intitulé" > Récurrence </div> 
                    
                </div>

                <div class="box3">
                            

                        <form method="post" action="index.php??cible=action">
                        <p>
                        <input type="radio" name="action" value="chauffage" id="chauffage" class="td3"> <label for="chauffage"> Chauffage </label><br/>
                         <input type="radio" name="action" value="ouverturevolets" id="ouverturevolets" class="td3"> <label for="ouverturevolets"> Ouverture des volets </label><br/>
                          <input type="radio" name="action" value="fermeturevolets" id="fermeturevolets" class="td3"> <label for="fermeturevolets"> Fermeture des Volets </label><br/>
                           <input type="radio" name="action" value="lumiere" id="lumiere" class="td3"> <label for="lumiere"> Lumiere </label><br/>
                        </p>
                        </form>


                        <form class="table2" method="post" action="index.php?cible=piece" >

                            <p> <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Salon </label><br/>
                                <input type="checkbox" name="chambre1" id="chambre1" class="td3"/> <label for="chambre1"> Chambre 1 </label><br/> 
                                <input type="checkbox" name="chambre2" id="chambre2" class="td3"/> <label for="chambre2"> Chambre 2 </label><br/>
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Cuisine </label><br/>
                                <input type="checkbox" name="sdb1" id="sdb1" class="td3"/> <label for="sdb1"> Salle de bain 1 </label><br/>
                                <input type="checkbox" name="sdb2" id="sdb2" class="td3"/> <label for="sdb2"> Salle de bain 2 </label><br/>
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrasse </label><br/>
                            </p>
                        </form>   

                            


                            
                        <nav1>
                            <ul >
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Température" ></label> 
                                        <input type="text" name="Température" id="Température" placeholder="Température..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de début" ></label> 
                                        <input type="text" name="Heure de début" id="Heure de début" placeholder="Heure de début..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de fin" ></label> 
                                        <input type="text" name="Heure de fin" id="Heure de fin" placeholder="Heure de fin..."/>
                                </form>
                            </ul>
                        </nav1>
                            

                        <form class="table2" method="post" action="index.php?cible=recurrence" >

                            <p> <input type="checkbox" name="lundi" id="lundi" class="td3"/> <label for="lundi"> Lundi </label><br>
                                <input type="checkbox" name="mardi" id="mardi" class="td3"/> <label for="mardi"> Mardi </label><br/>
                                <input type="checkbox" name="Mercredi" id="Mercredi" class="td3"/> <label for="Mercredi"> Mercredi </label><br/>
                                <input type="checkbox" name="Jeudi" id="Jeudi" class="td3"/> <label for="Jeudi"> Jeudi </label><br/>
                                <input type="checkbox" name="Vendredi" id="Vendredi" class="td3"/> <label for="Vendredi"> Vendredi </label><br/>
                                <input type="checkbox" name="Samedi" id="Samedi" class="td3"/> <label for="Samedi"> Samedi </label><br/>
                                <input type="checkbox" name="dimanche" id="dimanche" class="td3"/> <label for="dimanche"> Dimanche </label><br/>
                            </p>
                            </form>                            
                </div>
                <div class="box5">
                    <a href="#"><div class="enre"> Enregistrer </div></a>
                </div>
                </div>

                
              <div class="box4">
                    <div class="A1"> 

                    <table class="auto2" style="width:100%"> 
  <tr>
    <th class="auto1">Action</th>
    <th class="auto1">Piece(s)</th> 
    <th class="auto1">Condition</th>
    <th class="auto1">Recurrence</th>
  </tr>
  <tr>
    <td class="auto1">Chauffage</td>
    <td class="auto1">Cuisine, Chambre 1, Chambre 2</td> 
    <td class="auto1">20°C, de 10h a 20h</td>
    <td class="auto1">Lundi, Mardi </td>
  </tr>
  <tr>
    <td class="auto1">Ouverture des volets</td>
    <td class="auto1">Salon</td> 
    <td class="auto1">10h</td>
    <td class="auto1">Lundi, Mardi Mercredi Jeudi Vendredi</td>
  </tr>
</table> </div>
                    <div><a href="#"> <img class="croix1" src="image/croix.png" alt="supprimer automatisation" /></a></div>
                </div>

               


            </div>
        </Section>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>