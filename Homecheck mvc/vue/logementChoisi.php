
<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
       
             <section class="logementchoisi">

         <div class="carre" >
            
               <a href="capteursParPiece.php" > <img class=" plan" src="image/plan maison.jpg" alt="Plan de la maison" /></a>
          
              <ul class="liste"> 
                  <p> Adresses </p>
                  <p> Superficie </p>
                  <p> Nombre de pièces </p>
                  <p> Type de pièce </p>
                  <p> Nombre de personnes y vivant </p>
              </ul>
           
           
            <a href="gestionadmin.php" ><div class="admin"> <p class="texte"> Gestion des administrateurs </p></div></a>
             
         </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>




