<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="SITE2.css" />
        <title>HomeCheck page d'accueil</title>
    </head>
    
    <body>
      
         <?php include 'header.php'; ?>
    <div class="box8"> 

            <div class="plan_automatisation">
            
                 <div class="plan"> 
                        <img src="image/plan.jpg" alt="plan" title="votre plan"/> 
                </div> 
                    <br/>  

                 <a href="automatisations.php"> 
                <div class="automatisation"> Automatisation 
               </div> </a>
               
            </div>
      
        <div class="info8">

            <div class="text8">
                     <p> Nombre de capteurs (informations dans la base de donnée) <br/>
                        Consommation générale de la maison <br/>
                    </p>
             </div>

              <div class="bloc">

                    <div class="bloc1"> 
                                 <div class="bloc2">
                                        <div class="text2"> 
                                                 Nom pièce 
                                        </div>             
                                         <div class="plan_piece"> 
                                                 <img src="image/?" alt="plan piece"/> 
                                        </div>         
                                </div>
         
                                <div class="text_piece">
                                        Nombre de capteurs (informations dans la base de donnée) 
                                                <br/>
                                             Consommation générale de la pièce 
                                </div>

                    </div>

                    <a href="pagecapteurt.php">
                    <div class="capteur">
                                <div class="capteur_img"> 

                                      <img src="image/capteur.png" alt=" capteur" /> 
                                </div> 
                                <label class="switch">
                                    <input type="checkbox" checked>
                                <div class="slider round">
                                </div>
                              </label>
                    </div>
                    </a>

                    <div class="bouton2">

                            <a href="ajouterCapteur.php" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Ajouter un capteur ou un actionneur"/>
                           </div> 
                            </a>


                            <a href="#" title="Supprimer un capteur ou un actionneur">
                            <div class="supprimer">
                                    <img src="image/supprimer.png" alt="Supprimer" />
                            </div>
                            </a>
                    </div>

            </div> <!-- div bloc !-->
             
    </div>  <!-- div info8 !-->
        
    </div>
       	  
        <?php include 'footer.php'; ?> 
       
    </body>
    
</html>