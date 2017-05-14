<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
       
        <section>
        <div class="boxprofil">

                <div class="boxphoto">
                     <img class="photoProfil" src="image/Msublime.jpg" alt="Utilisateur"/> <br/>

                     <a class="centrer" href="modifierMonProfil.php"><div class="modifierProfil"> Modifier mon profil </div></a>
                </div>
                
                <?php 
                    if(isset($_POST['enregistrer'])) { 

                        if(isset($_POST['nom'])) { 

                            $nom = $_POST['nom'];
                        }

                        if(isset($_POST['prenom'])) { 

                            $prenom = $_POST['prenom'];
                        }

                   
                        if(isset($_POST['date'])) { 

                            $date = $_POST['date'];
                        }

                    }

                ?> 
             <ul class="info">
              <p>    <?php echo $nom + " " + $prenom; ?>  <br/> <br/>
                     Né le <?php echo (int)($date); ?> <br/> <br/>
                     Tel : <?php echo (int)($_POST['tel']); ?> <br/> <br/>
                    <?php echo htmlspecialchars($_POST['email']); ?> <br/> <br/>
            </p>
            <p> 
                    <?php echo $_POST['numeroDeRue' . " ".'adresse']; ?> <br/> <br/>
                    <?php echo $_POST['code'. " ". "ville"]); ?>  <br/> <br/>
            </p>
                   <!--  <p> Jeremie SUBLIME <br/> <br/>
                     Né le ../../.. <br/><br/>
                     tel: 06 00 00 00 00 <br/><br/>
                     jeremie.sublime@isep.fr <br/><br/>
                     </p>

                     <p> 10 rue de Vanves <br/><br/>
                     92130 Issy les Moulineaux <br/><br/>
                    </p> !-->
            </ul>
        </div>
        
         </section>
     
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>


