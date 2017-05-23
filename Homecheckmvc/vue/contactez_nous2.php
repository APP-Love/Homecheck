<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
      
          <div>       
            <p class="title"> Contactez-nous : </p>
        <div class="box10">
            <form method="post" action="traitement.php" class="contact">   
                <label for="Nom"><h10>Nom</h10> :</label>
                <input type="text" name="nom" id="nom" placeholder="Ex : Jérémie" required />
                                            <br/>
                                            <br/>
                                             
                 <label for="Email">Email :</label>
                 <input type="email" name="email" id="email" required/>
                                             <br/>
                                             <br/>

                <label for="tel">Téléphone :</label>
                <input type="tel" name="tel" id="tel" required/>
                                            <br/>
                                            <br/>
                                            
                <label for="Message">Message :</label>
                <br/>
                <br/>
                
                <textarea name="message" id="message" rows="10" cols="50" required></textarea> 
                <br/>
                <br/>
                
                <input class="envoyerb" type="submit" value="Envoyer" />
                <br/>

            </form>

            <div class="box11">
                <img src="image/ISEP.jpeg" alt="photo de notre societe "/>
                <p class="cordone"> Appellez nous : 06.56.67.86.54  <br/> <br/>
                                     10 rue de Vanves <br/> 92700 ISSY LES MOULINEAUX 
                </p>
            </div>
        </div>
        </div>
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>


