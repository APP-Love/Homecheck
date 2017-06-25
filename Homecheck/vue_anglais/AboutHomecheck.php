
<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         <section>
        <div class="bienvenue">
          <!--  <source srcset="image/maison.jpg"  >
             <source srcset="image/smallmaison.jpg" media="(max-width: 940px)">!-->
             <img src="image/maison.jpg" alt="Welcoming image"/> 
        </div>
        
        <br/>
        <div class="contact1"><a href="index2.php?cible=contactez">Contact us</a></div>
        <br/>
      </section>
         
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>


