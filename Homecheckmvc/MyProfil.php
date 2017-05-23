<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
       
        <section>
        <div class="boxprofil">

                <div class="boxphoto">
                     <img class="photoProfil" src="image/Msublime.jpg" alt="User"/> <br/>

                     <a class="centrer" href="index.php?cible=editprofil"><div class="modifierProfil"> Edit my profil </div></a>
                </div>
                
                <?php

 
?>
            <?php echo $_SESSION['id'] ; ?>
             <ul class="info">
                     <p>  <?php echo $_SESSION['prenom'] ." ". $_SESSION['nom'] ; ?> <br/> <br/>
                     Né le <?php echo $_SESSION['date_de_naissance'] ; ?>  <br/><br/>
                     <?php echo $_SESSION['tel'] ; ?>  <br/><br/>
                     <?php echo $_SESSION['mail'] ; ?>  <br/><br/>
                     

                     <p> <?php echo $_SESSION['adresse'] ; ?> <br/><br/>
                     <?php echo $_SESSION['code_postal'] ." ". $_SESSION['ville'] ; ?> <br/><br/>
                    </p>
            </ul>
        </div>
        
         </section>
     
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>


