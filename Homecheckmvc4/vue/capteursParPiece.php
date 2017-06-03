<?php
require "commun.php";
 

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
                <div class="automatisation"> Automatisation 
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
    
                     <p> Nombre de capteurs dans la maison : <?php  echo $donnees[0];   ?> <br/>
                        <br/>
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
                                        Nombre de capteurs dans la pièce:  <?php 
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
                                              include 'controleur/ajout_capteur.php';
                                            ?>

                    </div>

     

                    






                    <div class="bouton2">

                            <a href="index.php?cible=ajoutcapteur" >  
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
          
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

