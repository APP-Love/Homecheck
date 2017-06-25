  <?php
require "common.php";

$mai=$_SESSION['maison'];
 $entete= entete(2);

    ob_start();
    ?>
         
         
        <Section>
            <div id="box"> 
                    <div class="automatisationtitre"> AUTOMATISATIONS
                    </div>
                <div class="box1">
                     <div class="Ajout" > Add an automation : 
                    </div>  <br/> * : Compulsory options
                

                    <div class="box2">
                    
                        <div class="intitulé"> Action* </div> 
                        <div class="intitulé" > Room* </div>
                        <div class="intitulé"> Conditions </div>
                        <div class="intitulé" > Recurrence* </div> 
                    
                    </div>
  
<?php echo "<form method='post' action='index2.php?cible=auto&id=".htmlentities($mai)."'>";?>
                   
                            <div class="box3">
                    
                                    <div>
                                                <p>
                                                <input type="radio" name="action" value="chauffage" id="chauffage" class="td3"> <label for="chauffage"> Set temperature </label><br/>
                                                 <input type="radio" name="action" value="ouverturevolets" id="ouverturevolets" class="td3"> <label for="ouverturevolets"> Open shutters </label><br/>
                                                  <input type="radio" name="action" value="fermeturevolets" id="fermeturevolets" class="td3"> <label for="fermeturevolets"> Close shutters </label><br/>
                                                   <input type="radio" name="action" value="lumiere" id="lumiere" class="td3"> <label for="lumiere"> Switch on the light </label><br/>
                                                </p>
                                    </div>


                                    <div class="table2" >

                                            <p> <input type="radio" name="room" value="allroom" id="allroom" class="td3"/> <label for="allroom"> All rooms </label><br/>
                                                  <input type="radio" name="room" value="chambres" id="chambres" class="td3"/> <label for="chambres"> All bedrooms </label><br/>
                                                  <input type="radio" name="room" value="garageterrasse" id="garageterrasse" class="td3"/> <label for="garageterrasse"> Garage and terrace </label><br/>                              
                                                <input type="radio" name="room" id="cuisinesalon" value="cuisinesalon" class="td3"/> <label for="cuisinesalon"> Kitchen and living-room </label><br/>
                                                <input type="radio" name="room" value="sdb"  id="sdb" class="td3"/> <label for="sdb"> Bathroom(s) </label><br/>
                                              
                                            </p>
                                    </div>   

                            
                                    <nav1>
                                                <ul >
                                                    <div class="données" >
                                                            <label for=" Température" ></label> 
                                                            <input type="text" name="temperature" id="temperature" placeholder="Temperature (°C)"/>
                                                    </div>
                                                    <div class="données" >
                                                            <label for=" Heure de début" ></label> 
                                                            <input type="text" name="Hdebut" id="Hdebut" placeholder="Hour of beginning* (hh:mm)"/>
                                                    </div>
                                                    <div class="données"  >
                                                            <label for=" Heure de fin" ></label> 
                                                            <input type="text" name="Hfin" id="Hfin" placeholder="Hour of end* (hh:mm)"/>
                                                    </div>
                                                </ul>
                                    </nav1>
                            

                                     <div class="table2" >

                                            <p> <input type="radio"  name="recurrence" value="alldays" id="alldays" class="td3"/> <label for="alldays"> All days </label><br>
                                                <input type="radio" name="recurrence" id="lundivendredi" value="lundivendredi" class="td3"/> <label for="lundivendredi"> Monday to Friday </label><br/>
                                                <input type="radio" name="recurrence" id="weekend" value="weekend" class="td3"/> <label for="weekend"> Saturday and Sunday </label><br/>
                                                
                                            </p>
                                    </div>  
                            </div> 

                            <div class="box5">
                                   <input class="enre" type="submit" id="enre" name="enre" value="Saved"/>
                          
                            </div>  

                                            
                    </form>
                           

                </div>

            <div class="messageErreur"> <?php echo $erreur; ?> </div>
            
             <div class="automatisationtitre" > <br/> Save Automations: </div>

                
               
                    <?php include 'controleur/ENajouterAuto.php' ?>
               


            </div>
        </Section>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>