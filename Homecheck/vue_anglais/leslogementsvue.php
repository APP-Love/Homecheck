
<?php 
  ob_start();
    ?>
      <section class="logementchoisi">
     
         <div class="carre" >
            
              <?php echo "<a href='index2.php?cible=capteursparpiece&id=".htmlentities($k)."'> <img class='plan' src='image/plan maison.jpg' alt='Plan de la maison'/></a>";?>
          
              <ul class="liste"> 

                  <p>



  
    
                   <p> <?php echo $element['adresse'] ." ". $element['codepostal'] ." ". $element['ville']; ?> </p>
                  <p> <?php echo $element['superficie']; ?> Square meter</p>
                  <p> Number of rooms: <?php echo $donnees1[0]; ?> </p>
                
              </ul>




           
           
            <a href="index2.php?cible=gestionadmin" ><div class="admin"> <p class="texte">  Management of the administrators </p></div></a>
             
         </div>

          </section>
    <?php
    
     $a = ob_get_clean();


     
   
    
    

  

?>