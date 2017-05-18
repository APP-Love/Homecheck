<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
           <div>
          <div class="box7">
            
            <div method="post" action="MonProfil.php">
                <p class="modif_photo">
                    <label for="photo_profil"></label>
                    <input type="image" src="image/Msublime.jpg" title="Modifier la photo de profil" alt="Photo de profil" />
                </p>

            </div>
            <form method="post" action="index.php?cible=edit">
                <p class="modif">
                <table class="modifier">
                    <tr>
                        <td class="td3"><label for="nom">Nom </label></td>
                        <td class="td3"><input type="text" name="newnom" id="newnom"/></td>
                    </tr>
                    <tr>

                        <td class="td3"><label for="prenom">Prénom </label></td>
                        <td class="td3"><input type="text" name="newprenom" id="newprenom"/></td>
                    </tr>
                    <tr>
                
                        <td class="td3"><label for="date">Date de naissance </label></td>
                        <td class="td3"><input type="tel" name="newdate" id="date"/></td>
                    </tr>
                    <tr>
                        <td class="td3"><label for="tel">Téléphone </label></td>
                        <td class="td3"><input type="tel" name="newtel" id="tel"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="Email">Email </label></td>
                        <td class="td3"><input type="email" name="newemail" id="email"/></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="adresse">Numéro de rue </label></td>
                        <td class="td3"><input type="text" name="newnumeroDeRue" id="NumeroDeRue"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="complement"> Adresse </label></td>
                        <td class="td3"><input type="text" name="newadresse" id="adresse"/></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="code_postal"> Code postal </label></td>
                        <td class="td3"><input type="tel" name="newcode" id="code"/></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="ville">Ville </label></td>
                        <td class="td3"><input type="texte" name="newville" id="ville"/></td>
                    </tr>
                 </table>
                    <br/>
                    <br/>
                     <input class="enregistrer" type="submit" name="enregistrer" value="Enregistrer" />
                </p>
          </form>
           
          </div>
    
     </div>

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>



