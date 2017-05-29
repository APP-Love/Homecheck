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

                <a href="index2.php?cible=automatisations"> 
                <div class="automatisation"> Automation
               </div> </a>
               
            </div>
      
        <div class="info8">

            <div class="text8">
            <?php
            $a=$_SESSION['id'];
$sql="SELECT COUNT(*) FROM capteuractionneur c 
INNER JOIN piece p ON c.id_piece=p.id 
INNER JOIN logement l ON p.id_logement=l.id
INNER JOIN utilisateur u ON l.id_utilisateur=u.id
WHERE u.id= '".$a."'";

  $reponse = $bdd->query($sql);
  $donnees = $reponse->fetch();

?>
    
                     <p> Number of sensors in the house : <?php  echo $donnees[0];   ?> <br/>
                        <br/>
                    </p>
             </div>

              <div class="bloc">

                    <div class="bloc1"> 
                                 <div class="bloc2">
                                        <div class="text2"> 
                                                 Name of the room 
                                        </div>             
                                         <div class="plan_piece"> 
                                                 <img src="image/?" alt="room map"/> 
                                        </div>         
                                </div>
         
                                <div class="text_piece">
                                        Number of sensors in the room:  <?php 
            $a=$_SESSION['id'];
$sql1="SELECT COUNT(*) FROM capteuractionneur WHERE id_piece=1 ";

  $reponse1 = $bdd->query($sql1);
  $donnees1 = $reponse1->fetch();


                                         echo $donnees1[0];   ?> 
                                                <br/>
                                              
                                </div>

                    </div>

                                       <div class="capteur">
                                      
                                            <?php
                                              include 'controleur/ajout_capteur_anglais.php';
                                            ?>

                    </div>

     

                    






                    <div class="bouton2">

                            <a href="index2.php?cible=ajoutcapteur" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Add a sensor or actuator"/>
                           </div> 
                            </a>


                            <a href="#" title="Delete a sensor or actuator">
                            <div class="supprimer">
                                    <img src="image/supprimer.png" alt="Supprimer" />
                            </div>
                            </a>
                    </div>

            </div> <!-- div bloc !-->
             
    </div>  <!-- div info8 !-->
        
    </div>
          
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>