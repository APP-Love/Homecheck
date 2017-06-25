
<?php
require "commun.php";
  
include ( 'modele/connexion_bdd.php');
 $entete= entete(2);

    ob_start();
    ?>
         
  
             
             <?php
              $id=$_SESSION['id'];
             include "controleur/leslogements.php";
   
?>
         
           <div class="bouton2">

                            <a href="index.php?cible=ajoutlogement" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Ajouter un logement"/>
                           </div> 
                            </a>


                            
                    </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>




