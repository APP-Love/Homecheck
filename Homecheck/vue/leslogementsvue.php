<?php 
  ob_start();
    ?>
      <section class="logementchoisi">
     
         <div class="carre" >
            
              <?php echo "<a href='index.php?cible=capteursparpiece&id=".htmlentities($k)."'> <img class='plan' src='image/plan maison.jpg' alt='Plan de la maison'/></a>";?>
          
              <ul class="liste"> 

                  <p>



  
    
                   <p> <?php echo $element['adresse'] ." ". $element['codepostal'] ." ". $element['ville']; ?> </p>
                  <p> <?php echo $element['superficie']; ?> mètres carrés</p>
                  <p> Nombre de pièces: <?php echo $donnees1[0]; ?> </p>
                
              </ul>


<?php echo " <a href='index.php?cible=gestionadmin&id=".htmlentities($k)."'><div class='admin'> <p class='texte'> Gestion des administrateurs </p></div></a>";?>

           
           
           
             
         </div>

          </section>
    <?php
    
     $a = ob_get_clean();


  

?>