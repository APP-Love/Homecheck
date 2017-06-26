<?php
require "common.php";
 

 $entete= entete(2);

    
    ob_start();
    ?>
    
     <link rel="stylesheet" type="text/css" href="styles/gestionadmin.css" />
    <div id="carre2"> 
  <h2> Management of administrators</h2>
     <a href="index2.php?cible=logementchoisi"> <img class="croix" src="image/croix2.png" alt="fermeture" /> </a>
    <?php 
$sql16='SELECT * FROM utilisateur u  INNER JOIN utilisateur_logement ul ON u.id=ul.id_utilisateur WHERE id_logement="'.$log.'"';
$reponse16 = $bdd->query($sql16);
$infoadmin = $reponse16->fetch();


foreach($infoadmin as $elem){
?>

<div class="boxad" >

<?php 
  $idboxadmin = $elem['id'];
  $nomboxadmin = $elem['nom'];
  $prenomboxadmin= $elem['prenom'];
  $typeboxadmin = $elem['type'];


	echo  $nomboxadmin, $prenomboxadmin, $typeboxadmin; 
		
 ?>


 <?php echo "<a href='index.php?cible=admincroix&id=".htmlentities($log)."'> <img class='plan' src='image/croix.png' alt='Supprimer admin'/></a>";?>



 


</div>
<?php
        }
?>
   
   <div id="formulaire">
          <h5> Adding an Administrator :</h5>
            
          <form action="controleur/formulaireadmin_anglais.php" method="post">

            <div id="Nomblock">
             <label id="texti" for="Nom">Name</label> :
             <input type="text" name="Nom" id="Nom" required>
             <span id="aideNom"></span>
            </div>

             
            <div id="Prenomblock">
             <label id="texti" for="Prenom">First Name</label> :
             <input type="text" name="Prenom" id="Prenom" required>
             <span id="aideprenom"></span>
            </div>

             <div id="Identifiantblock">
             <label id="texti" for="Identifiant">Login</label> :
             <input type="text" name="Identifiant" id="Identifiant" required>
             <span id="aideIdentifiant"></span>
            </div>
            
            <div id="mdpblock">
             <label  for="mdp">Password</label> :
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
              <select name="typeadmin" id="type">
                <option value="1" selected>Main</option>
                <option value="2">Secondary</option>
                
              </select>
            </div>
   </div>

    <div id="Options">
         <h6> Management options : </h6>
         <div id="carreoption">

              <div id="modifierprofil">
                <label class="text1" for="modif"> Change the profile </label> 
            <input type="checkbox" name="droitprofil" id="check" checked>
<label for="check" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
                
              </div>

              <div id="ajoutlogement">
                <label class="text1" for="ajout">Add an accomodation  </label> 
<input type="checkbox"  name="droitajoutlog" id="check1" class="checkb" checked>
<label for="check1" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
              
              <div id="ajoutcapteur">
                <label class="text1" for="modif">Add/Delete a sensor  </label> 
 <input type="checkbox"  name="droitajoutcap" id="check2" class="checkb" checked>
<label for="check2" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
              </div>
              
              <div id="actionner">
                <label class="text1" for="modif">Activate actuators</label> 
 <input type="checkbox"  name="droitaction" id="check3"  class="checkb" checked>
<label for="check3" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
              </div>
              
              

              <div id="gestionautomatisations">
                <label class="text1" for="modif">Management of automations </label> 
 <input type="checkbox"  name="droitauto" id="check5" class="checkb" checked>
<label for="check5" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
              </div>
              
              <div id="allumercapteur">
                <label class="text1" for="modif">Switch On/ Switch off a sensor</label> 
 <input type="checkbox"  name="droitcapteur" class="checkb" id="check6" checked>
<label for="check6" class="loadcheck" id="loadcheck1">
  <span class="entypo-cancel">&#10008;</span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="load"></span>
  <span class="entypo-check">&#10004;</span>
</label>
              </div>

         </div>



    </div>
     
     <div id="envoyer">
         <input type="submit" value="Envoyer">
      </div>
        </div>



   

         </div>
   </form>        

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>