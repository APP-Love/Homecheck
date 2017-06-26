<?php  
     $_SESSION['logement']=$_GET['id'];
     $log=$_SESSION['logement'];
require "commun.php";
 

 $entete= entete(2);

    
    ob_start();
    ?>
       <link rel="stylesheet" type="text/css" href="styles/gestionadmin.css" />
    <div id="carre2"> 

     
  <h2> Gestion des administrateurs</h2>

     <a href="index.php?cible=logementchoisi"> <img class="croix" src="image/croix2.png" alt="fermeture" /> </a>
         <?php 
$sql16='SELECT * FROM utilisateur u  INNER JOIN utilisateur_logement ul ON u.id=ul.id_utilisateur WHERE id_logement="'.$log.'"';
$reponse16 = $bdd->query($sql16);
$infoadmin = $reponse16->fetchAll(PDO:: FETCH_ASSOC);;


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
          <h5> Ajout d'un administrateur : </h5>
<form action="index.php?cible=formulaireadmin" method="post">
              

            <div id="Nomblock">
             <label id="texti" for="Nom">Nom</label> :
             <input type="text" name="Nom" id="Nom" required>
             <span id="aideNom"></span>
            </div>

             
            <div id="Prenomblock">
             <label id="texti" for="Prenom">Prenom</label> :
             <input type="text" name="Prenom" id="Prenom" required>
             <span id="aideprenom"></span>
            </div>

            <div id="Identifiantblock">
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
              <select name="typeadmin" id="type">
                <option value="1" selected>Primaire</option>
                <option value="2">Secondaire</option>
                <option value="3">Tertiaire</option>
              </select>
            </div>
   </div>

    <div id="Options">
         <h6> Options de gestion : </h6>
         <div id="carreoption">

              <div id="modifierprofil">
                <label class="text1" for="modif">Modifier le profil </label> 
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
                <label class="text1" for="ajout">Ajout d'un logement </label> 
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
                <label class="text1" for="modif">Ajout/Suppression d'un capteur </label> 
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
                <label class="text1" for="modif">Actionner les actionneurs </label> 
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
                <label class="text1" for="modif">Gestion des automatisations </label> 
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
                <label class="text1" for="modif">Allumer/Eteindre un capteur</label> 
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
         <input type="hidden" name="idlog" value="<?php echo $log ; ?>"  />
      </div>
        </div>














  
   

         </div>
   </form>        

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>
