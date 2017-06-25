<?php
require "common.php";
 

 $entete= entete(1);

    ob_start();
    ?>
        
         <section class="accueil">  
            <div class="bienvenue">
                <img src="image/maison.jpg" id="image" alt="Welcoming Image"/>
            </div>
        <br/>        
  
        <h1 class="img">Welcome in HomeCheck</h1>

        <p class="textec">
            HomeCheck is a product created by Domisep. This society tries to help you in your everyday life. This product advocate the conofort of the client by letting them the personalization of their habitation : house or even appartment. HomeCheck will always be there in your life.
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
                
                     <form method="post" action="index2.php?cible=NEWformulaire">
                                <br/>
                                <img src="image/enveloppe.png" class="flottant" alt="image_enveloppe"/>

                                <br/>
            
                                <label for="Nom">Last name :</label>
                                <input type="text" name="nom"  placeholder="Ex : SUBLIME" required  />
                                            <br/>
                                             <br/>
                                <label for="Email"> Email :</label>
                                <input type="email" name="email" required />
                                             <br/>
                                             <br/>

                                 <label for="tel">Phone number :</label>
                                <input type="tel" name="tel"  required/>
                                                <br/>
                                                 <br/>
                                                 
                                <label for="Message"><p class="message" >Message :</p></label>
                                <textarea name="message" rows="10" cols="50" required></textarea> 
                                                <br/>
                                                <br/>
                                <input class="envoyer" type="submit"  id="envoyer" name='envoyer' value="Envoyer" />

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

    include 'gabarit_anglais.php';
?>







