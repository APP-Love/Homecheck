<?php
require "commun.php";
 

 $entete= entete(2);

    
    ob_start();
    ?>
    <div id="carre2"> 
  <h2> Gestion des administrateurs</h2>
     <a href="index.php?cible=logementchoisi"> <img class="croix" src="image/croix2.png" alt="fermeture" /> </a>
     <div id="rectangle1">
       <div class="paragraphe">Jeremie Sublime &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Principale  </div> 
       <a href="gestionadmin.html"> <img class="croixgris" src="image/croixgris.png" alt="fermeture" /> </a>
     </div> 

     <div id="rectangle2">
        <div class="paragraphe">Arthur Chaix  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Secondaire  </div> 
      <a href="gestionadmin.html"> <img class="croixgris" src="image/croixgris.png" alt="fermeture" /> </a>
     </div>     
   
   <div id="formulaire">
          <h5> Ajout d'un administrateur : </h5>
            
            <div>
             <label id="texti" for="Identifiant">Identifiant</label> :
             <input type="text" name="Identifiant" id="Identifiant" required>
             <span id="aideIdentifiant"></span>
            </div>
            
            <div id="mdpblock">
             <label  for="mdp">Mot de passe</label> :
             <input type="password" name="mdp" id="mdp" required>
             <span id="aideMdp"></span>
            </div>


            <div id="email">
             <label  for="mail">Mail</label> :
             <input type="email" name="mail" id="mail" required placeholder="utilisateur@domaine.fr">
             <span id="aideMail"></span>
            </div>

            <div id="menuderoulant">
              <label for="type">Type :</label>
              <select name="type" id="type">
                <option value="1" selected>Primaire</option>
                <option value="2">Secondaire</option>
                <option value="3">Tertiaire</option>
              </select>
            </div>
   </div>

    <div id="Options">
         <h6> Options de gestion : </h6>
         <div id="carreoption">
               

              <div id="toutesoptions">
                <label class="text1" for="general">Toutes options </label> 
                <a href="#"> <img id="On1" src="image/check.png" alt="Oui" /></a>
                <a href="#"> <img id="Off1" src="image/croixboutton.png" alt="non" /></a>
              </div>

              <div id="modifierprofil">
                <label class="text1" for="modif">Modifier le profil </label> 
                <a href="#"> <img id="On2" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off2" src="image/croixboutton.png" alt="non" /></a>
                
              </div>

              <div id="ajoutlogement">
                <label class="text1" for="ajout">Ajout d'un logement </label> 
                <a href="#"> <img id="On3" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off3" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="ajoutcapteur">
                <label class="text1" for="modif">Ajout/Suppression d'un capteur </label> 
                <a href="#"> <img id="On4" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off4" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="actionner">
                <label class="text1" for="modif">Actionner les actionneurs </label> 
                <a href="#"> <img id="On5" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off5" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="modifierphoto">
                <label class="text1" for="modif">Modifier les photos </label> 
                <a href="#"> <img id="On6" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off6" src="image/croixboutton.png" alt="non" /></a>
              </div>

              <div id="gestionautomatisations">
                <label class="text1" for="modif">Gestion des automatisations </label> 
                <a href="#"> <img id="On7" src="image/check.png" alt="oui" /></a>
                <a href="#"> <img id="Off7" src="image/croixboutton.png" alt="non" /></a>
              </div>
              
              <div id="allumercapteur">
                <label class="text1" for="modif">Allumer/Eteindre un capteur</label> 
                <a href="#"> <img id="On8" src="image/check.png" alt="oui" /></a>
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

   
    
    

    include 'gabarit.php';
?>
