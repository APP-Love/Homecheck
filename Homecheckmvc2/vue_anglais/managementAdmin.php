<?php
require "common.php";
 

 $entete= entete(2);

    
    ob_start();
    ?>
    <div id="carre2"> 
  <h2> Management of administrators</h2>
     <a href="index2.php?cible=logementchoisi"> <img class="croix" src="image/croix2.png" alt="fermeture" /> </a>
     <div id="rectangle1">
       <div class="paragraphe">Jeremie Sublime &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Main  </div> 
       <a href="gestionadmin.html"> <img class="croixgris" src="image/croixgris.png" alt="fermeture" /> </a>
     </div> 

     <div id="rectangle2">
        <div class="paragraphe">Arthur Chaix  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Secondary  </div> 
      <a href="gestionadmin.html"> <img class="croixgris" src="image/croixgris.png" alt="fermeture" /> </a>
     </div>     
   
   <div id="formulaire">
          <h5> Adding an Administrator :</h5>
            
            <div>
             <label id="texti" for="Identifiant">Login </label> :
             <input type="text" name="Identifiant" id="Identifiant" required>
             <span id="aideIdentifiant"></span>
            </div>
            
            <div id="mdpblock">
             <label  for="mdp">Password</label> :
             <input type="password" name="mdp" id="mdp" required>
             <span id="aideMdp"></span>
            </div>


            <div id="email">
             <label  for="mail">Email</label> :
             <input type="email" name="mail" id="mail" required placeholder="utilisateur@domaine.fr">
             <span id="aideMail"></span>
            </div>

            <div id="menuderoulant">
              <label for="type">Type :</label>
              <select name="type" id="type">
                <option value="1" selected>Main</option>
                <option value="2">Secondary</option>
                <option value="3">Tertiary</option>
              </select>
            </div>
   </div>

    <div id="Options">
         <h6> Management options : </h6>
         <div id="carreoption">
               

              <div id="toutesoptions">
                <label class="text1" for="general">All options </label> 
                <a href="#"> <img id="On1" src="image/check.png" alt="Oui" /></a>
                <a href="#"> <img id="Off1" src="image/croixboutton.png" alt="non" /></a>
              </div>

              <div id="modifierprofil">
                <label class="text1" for="modif">Modify the profile </label> 
                <a href="#"> <img id="OnA2" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off2" src="image/croixboutton.png" alt="non" /></a>
                
              </div>

              <div id="ajoutlogement">
                <label class="text1" for="ajout">Adding an accomodation </label> 
                <a href="#"> <img id="OnA3" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off3" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="ajoutcapteur">
                <label class="text1" for="modif">Adding / Removing a sensor </label> 
                <a href="#"> <img id="OnA4" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off4" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="actionner">
                <label class="text1" for="modif">Actuating actuators</label> 
                <a href="#"> <img id="OnA5" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off5" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="modifierphoto">
                <label class="text1" for="modif">Edit photos</label> 
                <a href="#"> <img id="OnA6" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off6" src="image/croixboutton.png" alt="non" /></a>
              </div>

              <div id="gestionautomatisations">
                <label class="text1" for="modif">Automation management</label> 
                <a href="#"> <img id="OnA7" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off7" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="allumercapteur">
                <label class="text1" for="modif">Turning on / off a sensor</label> 
                <a href="#"> <img id="OnA8" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off8" src="image/croixboutton.png" alt="non" /></a>
              </div>

         </div>



    </div>
     
     <div id="envoyer">
         <input type="submit" value="Envoyer">
      </div>
        </div>














  
   

         </div>


        <script type="text/javascript" src="vue/boutton.js"></script>        

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>
