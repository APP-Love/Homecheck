<?php
require "common.php";
  

 $entete= entete(2);

    ob_start();
    ?>
   <?php
              $id=$_SESSION['id'];
             include "controleur/leslogements_anglais.php";
   
?>



           <div class="bouton2">

                            <a href="index2.php?cible=ajoutlogement" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Add Home"/>
                           </div> 
                            </a>


                            
                    </div>

    
         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    include 'gabarit_anglais.php';
?>




