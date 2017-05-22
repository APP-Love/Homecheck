
<?php
require "commun.php";
  

 $entete= entete(2);

    ob_start();
    ?>
         
       


             <section class="logementchoisi">

         <div class="carre" >
            
               <a href="index.php?cible=capteursparpiece" > <img class=" plan" src="image/plan maison.jpg" alt="Plan de la maison" /></a>
          
              <ul class="liste"> 
                  <p> <?php

  $reponse = $bdd->query('SELECT * FROM logement WHERE id=1');

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

?>
    
    



                   <p> <?php echo $donnees['adresse'] ." ". $donnees['code postal'] ." ". $donnees['ville']; ?> </p>
                  <p> <?php echo $donnees['superficie']; ?> mètres carrés</p>
                  <p> Nombre de pièces </p>
                  <p> Type de pièce </p>
                  <p> Nombre de personnes y vivant </p>
              </ul>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
           
            <a href="gestionadmin.php" ><div class="admin"> <p class="texte"> Gestion des administrateurs </p></div></a>
             
         </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>




