<?php
require "common.php";
  

 $entete= entete(2);

    ob_start();
    ?>
         
       


             <section class="logementchoisi">

         <div class="carre" >
            
               <a href="index.php?cible=capteursparpiece" > <img class=" plan" src="image/plan maison.jpg" alt="House map" /></a>
          
              <ul class="liste"> 
                  <p> <?php

  $reponse = $bdd->query('SELECT * FROM logement WHERE id=1');

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

?>
    
    



                   <p> <?php echo $donnees['adresse'] ." ". $donnees['code postal'] ." ". $donnees['ville']; ?> </p>
                  <p> <?php echo $donnees['superficie']; ?> square metre</p>
                  <p> Number of room </p>
                  <p> Type of room </p>
                  <p> Number of inhabitant </p>
              </ul>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
           
            <a href="gestionadmin.php" ><div class="admin"> <p class="texte"> Management of administrators </p></div></a>
             
         </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>




