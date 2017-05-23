 <?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
         
        <Section>
            <div id="box"> 
                    <div class="automatisationtitre"> Automation </div>
                <div class="box1">
                    
                        <div class="Ajout" > Add an automation : </div> 
                <div class="box2">
                    
                        <div class="intitulé"> Action </div> 
                        <div class="intitulé" > Rooms </div>
                        <div class="intitulé"> Conditions </div>
                        <div class="intitulé" > Recurrence </div> 
                    
                </div>

                <div class="box3">
                            

                        <form method="post" action="index.php??cible=action">
                        <p>
                        <input type="radio" name="action" value="chauffage" id="chauffage" class="td3"> <label for="chauffage"> Heater </label><br/>
                         <input type="radio" name="action" value="ouverturevolets" id="ouverturevolets" class="td3"> <label for="ouverturevolets"> Open the shutters </label><br/>
                          <input type="radio" name="action" value="fermeturevolets" id="fermeturevolets" class="td3"> <label for="fermeturevolets"> Close the shutters </label><br/>
                           <input type="radio" name="action" value="lumiere" id="lumiere" class="td3"> <label for="lumiere"> Light </label><br/>
                        </p>
                        </form>


                        <form class="table2" method="post" action="index.php?cible=piece" >

                            <p> <input type="checkbox" name="salon" id="salon" class="td3"/> <label for="salon"> Living room </label><br/>
                                <input type="checkbox" name="chambre1" id="chambre1" class="td3"/> <label for="chambre1"> Bedroom 1 </label><br/> 
                                <input type="checkbox" name="chambre2" id="chambre2" class="td3"/> <label for="chambre2"> Bedroom 2 </label><br/>
                                <input type="checkbox" name="cuisine" id="cuisine" class="td3"/> <label for="cuisine"> Kitchen </label><br/>
                                <input type="checkbox" name="sdb1" id="sdb1" class="td3"/> <label for="sdb1"> Bathroom 1 </label><br/>
                                <input type="checkbox" name="sdb2" id="sdb2" class="td3"/> <label for="sdb2"> Bathroom 2 </label><br/>
                                <input type="checkbox" name="garage" id="garage" class="td3"/> <label for="garage"> Garage </label><br/>
                                <input type="checkbox" name="terrasse" id="terrasse" class="td3"/> <label for="terrasse"> Terrace </label><br/>
                            </p>
                        </form>   

                            


                            
                        <nav1>
                            <ul >
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Température" ></label> 
                                        <input type="text" name="Température" id="Température" placeholder="Temperature..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de début" ></label> 
                                        <input type="text" name="Heure de début" id="Heure de début" placeholder="Beginning time..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de fin" ></label> 
                                        <input type="text" name="Heure de fin" id="Heure de fin" placeholder="Ending time..."/>
                                </form>
                            </ul>
                        </nav1>
                            

                        <form class="table2" method="post" action="index.php?cible=recurrence" >

                            <p> <input type="checkbox" name="lundi" id="lundi" class="td3"/> <label for="lundi"> Monday </label><br>
                                <input type="checkbox" name="mardi" id="mardi" class="td3"/> <label for="mardi"> Tuesday </label><br/>
                                <input type="checkbox" name="Mercredi" id="Mercredi" class="td3"/> <label for="Mercredi"> Wednesday </label><br/>
                                <input type="checkbox" name="Jeudi" id="Jeudi" class="td3"/> <label for="Jeudi"> Thursday </label><br/>
                                <input type="checkbox" name="Vendredi" id="Vendredi" class="td3"/> <label for="Vendredi"> Friday </label><br/>
                                <input type="checkbox" name="Samedi" id="Samedi" class="td3"/> <label for="Samedi"> Saturday </label><br/>
                                <input type="checkbox" name="dimanche" id="dimanche" class="td3"/> <label for="dimanche"> Sunday </label><br/>
                            </p>
                            </form>                            
                </div>
                <div class="box5">
                    <a href="#"><div class="enre"> Save </div></a>
                </div>
                </div>

                
                <div class="box4">
                    <div class="A1"> A1 </div>
                    <div><a href="#"> <img class="croix1" src="image/croix.png" alt="delete automation" /></a></div>
                </div>

                <div class="box4">
                    <div class="A1"> A2 </div>
                    <div > <a href="#"> <img class="croix1" src="image/croix.png" alt="delete automation" /></a></div>
                </div>


            </div>
        </Section>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>