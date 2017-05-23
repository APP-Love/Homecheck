<?php
require "common.php";
 

 $entete= entete(1);

    ob_start();
    ?>
        
         <section class="accueil">  
        
                <img src="image/maison.jpg" id="image" alt="Welcoming Image"/>

        <br/>        
  
        <h1 class="img">Welcome in HomeCheck</h1>

        <p class="textec">
            HomeCheck is a society of home automation which can help you in your everyday life. Our society advocate the conofort of the client by letting them the personalization of their habitation : house or even appartment. HomeCheck will always be there in your life.
        </p>
        
        <p class="textec">
            Thanks to HomeCheck,you will have access to your accomodation anywhere in the world. Indeed, our platform is available in all around the world with a sufficient internet connection. HomeCheck has an international dimension , our platform can be configurated either in French or English.
        </p>
        
        <p class="textec"></p>



        <h2 class="img">Contact us !</h2> 
        <div class="contactez1">
          <table class="tdc1" >
            <tr>
                <td class="tdc">
                
                     <form method="post" action="#.php">
                                <br/>
                                <img src="image/enveloppe.png" class="flottant" alt="image_enveloppe"/>

                                <br/>
            
                                <label for="Nom">Last name :</label>
                                <input type="text" name="nom" id="nom" placeholder="Ex : Jérémie" required  />
                                            <br/>
                                             <br/>
                                <label for="Email">Mail :</label>
                                <input type="email" name="email" id="email" required />
                                             <br/>
                                             <br/>

                                 <label for="tel">Phone number :</label>
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
                
        <div class="contactez2"><img src="image/coordonées2.png" alt="Photo des coordonnées"/>
        </div>
                
            

        </div>
      
        </section>
      
        <script type="text/javascript" src="vue/dimensionnement.js"></script>
        
    <?php
    $contenu = ob_get_clean();

    include 'gabarit.php';
?>







