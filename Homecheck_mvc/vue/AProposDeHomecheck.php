
<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         <section>
        <div class="bienvenue">
          <!--  <source srcset="image/maison.jpg"  >
             <source srcset="image/smallmaison.jpg" media="(max-width: 940px)">!-->
             <img src="image/maison.jpg" alt="Image de Bienvenue"/> 
        </div>
        
        <br/>
        <div class="contact1"><a href="index.php?cible=contactez">Contactez-nous</a></div>
        <br/>
      </section>
         
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>





