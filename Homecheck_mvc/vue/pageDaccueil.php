

<?php
require "commun.php";
 

 $entete= entete(1);

    ob_start();
    ?>
        
         <section>  
        
        <div class="bienvenue">
                <img src="image/maison.jpg" alt="Image de Bienvenue"/>
        </div>
        </br>
        <h1 class="img">Bienvenue sur HomeCheck</h1>

        <p class="textec">
            HomeCheck est une société de domotique qui peut vous faciliter la vie. Notre société prône le confort de ses clients en permettant la personnalisation de votre habitation que ce soit un appartement ou une maison Homecheck sera toujours présent.
        </p>
        
        <p class="textec">
            Grâce à HomeCheck, vous avez accès à votre habitation où que vous soyez dans le monde. En effet, notre plateforme est accessible dans tous les pays du monde grâce à une connection internet suffisante. HomeCheck à une dimension internationale, notre plateforme est configurable en Anglais et en Français.
        </p>
        
        <p class="textec"> Blabla à continuer je suis à court d'idées et d'inspiration</p>



        <h2 class="img">Contactez-nous !</h2> 
        <div class="contactez1">
          <table class="tdc1" >
            <tr>
                <td class="tdc">
                
                     <form method="post" action="#.php">
                                <br/>
                                <img src="image/enveloppe.png" class="flottant" alt="image_enveloppe"/>

                                <br/>
            
                                <label for="Nom">Nom :</label>
                                <input type="text" name="nom" id="nom" placeholder="Ex : Jérémie" required  />
                                            <br/>
                                             <br/>
                                <label for="Email">Email :</label>
                                <input type="email" name="email" id="email" required />
                                             <br/>
                                             <br/>

                                 <label for="tel">Téléphone :</label>
                                <input type="tel" name="tel" id="tel" required/>
                                                <br/>
                                                 <br/>
                                                 
                                <label for="Message"><p class="message" >Message :</p></label>
                                <textarea name="message" id="message" rows="10" cols="50" required></textarea> 
                                                <br/>
                                                <br/>
                                <input class="envoyer" type="submit" value="Envoyer" />

                    </form>
                </td>
            </tr>
        </table>
                
        <div class="coord"><img src="image/coordonées2.png" alt="Photo des coordonnées"/>
        </div>
                
            

        </div>
      
        </section>
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>







