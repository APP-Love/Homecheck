<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
       
        <section>
        <div class="boxprofil">

                <div class="boxphoto">
                     <img class="photoProfil" src="image/Msublime.jpg" alt="Utilisateur"/> <br/>

                     <a class="centrer" href="index.php?cible=editprofil"><div class="modifierProfil"> Modifier mon profil </div></a>
                </div>
                
                <?php

  $reponse = $bdd->query('SELECT * FROM utilisateur WHERE id=1');
$donnees = $reponse->fetch();
?>
            
             <ul class="info">
                     <p>  <?php echo $donnees['prenom'] ." ". $donnees['nom'] ; ?> <br/> <br/>
                     Né le <?php echo $donnees['date de naissance'] ; ?>  <br/><br/>
                     <?php echo $donnees['telephone'] ; ?>  <br/><br/>
                     <?php echo $donnees['mail'] ; ?>  <br/><br/>
                     

                     <p> <?php echo $donnees['adresse'] ; ?> <br/><br/>
                     <?php echo $donnees['code postal'] ." ". $donnees['ville'] ; ?> <br/><br/>
                    </p>
            </ul>
        </div>
        
         </section>
     
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>


