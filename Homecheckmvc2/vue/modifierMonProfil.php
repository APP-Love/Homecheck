<?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
           <div>
          <div class="box7">
            
            <div method="post" action="MonProfil.php">
                <p class="modif_photo">
                    <form name="upload" method="post" action="index.php?cible=edit_photo" enctype="multipart/form-data">
                    <!-- <img src= "<?php echo 'uploads/' . basename($_FILES['ficher_upload']['name']); ?> " /> !-->
                            <input type="file" name="fichier_upload" id="fichier_upload"><br>
                            <input type="submit" name="Submit" value="Uploader">

                    </form>
                  
            </div>

            <form method="post" action="index.php?cible=edit">
                <p class="modif">
                <table class="modifier">
                    <tr>
                        <td class="td3"><label for="nom">Nom </label></td>
                        <td class="td3"><input type="text" name="newnom" id="newnom" placeholder= <?php echo ($_SESSION['nom']); ?> /></td>
                    </tr>
                    <tr>

                        <td class="td3"><label for="prenom">Prénom </label></td>
                        <td class="td3"><input type="text" name="newprenom" id="newprenom" placeholder= <?php echo ($_SESSION['prenom']); ?> /></td>
                    </tr>
                    <tr>
                
                        <td class="td3"><label for="date">Date de naissance </label></td>
                        <td class="td3"><input type="tel" name="newdate" id="date" placeholder= <?php echo ($_SESSION['date_de_naissance']); ?> /></td>
                    </tr>
                    <tr>
                        <td class="td3"><label for="tel">Téléphone </label></td>
                        <td class="td3"><input type="tel" name="newtel" id="tel" placeholder= <?php echo ($_SESSION['tel']); ?>  /></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="Email">Email </label></td>
                        <td class="td3"><input type="email" name="newemail" id="email" placeholder= <?php echo ($_SESSION['mail']); ?> /></td>
                    </tr>
                  
                  
                    <tr>
                        <td class="td3"><label for="complement"> Adresse </label></td>
                        <td class="td3"><input type="text" name="newadresse" id="adresse" placeholder= <?php echo ($_SESSION['adresse']); ?> /></td>
                    </tr>
                   
                    <tr>
                        <td class="td3"><label for="code_postal"> Code postal </label></td>
                        <td class="td3"><input type="tel" name="newcode" id="code" placeholder= <?php echo ($_SESSION['code_postal']); ?> /></td>
                    </tr>
                  
                    <tr>
                        <td class="td3"><label for="ville">Ville </label></td>
                        <td class="td3"><input type="texte" name="newville" id="ville" placeholder= <?php echo ($_SESSION['ville']); ?> /></td>
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



