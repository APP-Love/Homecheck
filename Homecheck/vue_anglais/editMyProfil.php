<?php
require "common.php";
 

 $entete= entete(2);

    ob_start();
    ?>
           <div>
          <div class="box7">
            
            <div method="post" action="MyProfil.php">
                <p class="modif_photo">
                    <input type="image" src="image/icon_homme.png"  alt="Profil picture" />
                    
                </p>

            </div>
            <form method="post" action="index2.php?cible=edit">
                <p class="modif">
                <table class="modifier">
                    <tr>
                        <td class="td3"><label for="nom">Last name </label></td>
                        <td class="td3"><input type="text" name="newnom" id="newnom" placeholder= <?php echo ($_SESSION['nom']); ?> /></td>
                    </tr>
                    <tr>

                        <td class="td3"><label for="prenom">Name </label></td>
                        <td class="td3"><input type="text" name="newprenom" id="newprenom" placeholder= <?php echo ($_SESSION['prenom']); ?> /></td>
                    </tr>
                    <tr>
                
                        <td class="td3"><label for="date">Date of birth </label></td>
                        <td class="td3"><input type="tel" name="newdate" id="date" placeholder= <?php echo ($_SESSION['date_de_naissance']); ?> /></td>
                    </tr>
                    <tr>
                        <td class="td3"><label for="tel">Phone number </label></td>
                        <td class="td3"><input type="tel" name="newtel" id="tel" placeholder= <?php echo ($_SESSION['tel']); ?>  /></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="Email">Mail </label></td>
                        <td class="td3"><input type="email" name="newemail" id="email" placeholder= <?php echo ($_SESSION['mail']); ?> /></td>
                    </tr>

                    <tr>
                        <td class="td3"><label for="Identifiant"> Login </label></td>
                        <td class="td3"><input type="text" name="newidentifiant" id="identifiant" placeholder= <?php echo ($_SESSION['identifiant']); ?> /></td>
                    </tr>

                    <tr>
                        <td class="td3"><label for="mdp"> Password </label></td>
                        <td class="td3"><input type="password" name="newmdp" id="mdp" placeholder= <?php echo ($_SESSION['mdp']); ?> /></td>
                    </tr>
                  
                  
                    <tr>
                        <td class="td3"><label for="complement"> Address </label></td>
                        <td class="td3"><input type="text" name="newadresse" id="adresse" placeholder= <?php echo ($_SESSION['adresse']); ?> /></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="code_postal"> Postal code </label></td>
                        <td class="td3"><input type="tel" name="newcode" id="code" placeholder= <?php echo ($_SESSION['code_postal']); ?> /></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="ville">City </label></td>
                        <td class="td3"><input type="texte" name="newville" id="ville" placeholder= <?php echo ($_SESSION['ville']); ?> /></td>
                    </tr>
                 </table>
                    <br/>
                    <br/>
                     <input class="enregistrer" type="submit" name="enregistrer" value="Register" />
                </p>
          </form>
           
          </div>
    
     </div>

        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>



