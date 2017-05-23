<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
        
          <div class="box8"> 

            <div class="plan_automatisation">
            
                 <div class="plan"> 
                        <img src="image/plan.jpg" alt="plan" title="votre plan"/> 
                </div> 
                    <br/>  

                 <a href="index.php?cible=automatisations"> 
                <div class="automatisation"> Automation 
               </div> </a>
               
            </div>
      
        <div class="info8">

            <div class="text8">
            <?php

  $reponse = $bdd->query('SELECT * FROM logement WHERE id=1');
$donnees = $reponse->fetch();
?>
    
                     <p> Number of sensors (informations in the data base) <br/>
                        General consumption of the house <br/>
                    </p>
             </div>

              <div class="bloc">

                    <div class="bloc1"> 
                                 <div class="bloc2">
                                        <div class="text2"> 
                                                 Name of the room 
                                        </div>             
                                         <div class="plan_piece"> 
                                                 <img src="image/?" alt="plan piece"/> 
                                        </div>         
                                </div>
         
                                <div class="text_piece">
                                        Number of sensors (informations in the data base) 
                                                <br/>
                                             General consumption of the house 
                                </div>

                    </div>

                    <a href="index.php?cible=capteurt">
                    <div class="capteur">
                                <div class="capteur_img"> 

                                      <img src="image/capteur.png" alt=" sensor" /> 
                                </div> 
                                <label class="switch">
                                    <input type="checkbox" checked>
                                <div class="slider round">
                                </div>
                              </label>
                    </div>
                    </a>

                    <div class="bouton2">

                            <a href="index.php?cible=ajoutcapteur" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Add a sensor or an actuator"/>
                           </div> 
                            </a>


                            <a href="#" title="Delete a sensor or an actuator">
                            <div class="supprimer">
                                    <img src="image/supprimer.png" alt="Delete" />
                            </div>
                            </a>
                    </div>

            </div> <!-- div bloc !-->
             
    </div>  <!-- div info8 !-->
        
    </div>
          
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

