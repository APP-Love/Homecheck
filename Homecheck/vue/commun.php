<?php


include "modele/connexion_bdd.php";


ini_set('display_errors','off');    // A rajouter a la fin car j'ai une erreur chelou



// GÃ©nÃ¨re le code HTML de l'entÃªte
function entete( $page ){
    if ($page==1) {
         ob_start();
    ?>
        <div class="rectangle1">
                <div class="rectangle2">

                    <a href=""><img class="logo" src="image/logo.png" alt="logo" /></a>
                    <div class="texte1">
                        <ul>
                            <p class="Homecheck" > HomeCheck </p>
                            <p class="Yourhouse" > Your house in your pocket </p>
                        </ul>
                    </div>
                
                    <div id="inscription">
                        <form class="inscription" method="post" action="index.php?cible=verif" >
                            <label for=" pseudo" > Votre pseudo : </label> 
                            
                            <input type="text" name="identifiant" id="identifiant" placeholder="Pseudo ou mail..."  />


                            <label for="mdp"> Votre mot de passe : </label>
                            
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." />
                            <input type="submit" name="valider" value="Se connecter " />
                        </form>                  

                    </div>
                    <div class="langues">
                    <a href= "index.php?cible=francais"> <img class="francais" src="image/francais.gif" type="Français" alt="Français" /></a>
                    <a href= "index2.php?cible=anglais" > <img class="anglais" src="image/anglais.gif"  type="Anglais" alt="Anglais" /></a>
                    </div>
                </div>
            </div>
    <?php
    $entete = ob_get_clean();
    return $entete;
          
    }


   else if ($page==2) {
     ob_start();
    ?>
       <div class="rectangle1">
                <div class="rectangle2">

                    <a href="index.php?cible=accueilco " ><img class="logo" src="image/logo.png" alt="logo" /></a>
                    <div class="texte1">
                        <ul>
                            <p class="Homecheck" > HomeCheck </p>
                            <p class="Yourhouse" > Your house in your pocket </p>
                        </ul>
                    </div>
                    <div id="Admin">
                        <div><img class="PhotoAdmin" src="image/icon_homme.png" alt="PhotoAdmin" /></div>
                        <div class="barre" > <?php echo $_SESSION['prenom'] ?> <span class="nom"> <?php echo $_SESSION['nom'] ?> </span></div>
                        <a href="index.php?cible=deco" ><img class="deco" src="image/deconnexion.png" type="Déconnexion" alt="Deconnexion"></a>
                    </div>
                    <div class="langues">
                    <a href="index2.php?cible=francais" > <img class="francais" src="image/francais.gif" type="Français" alt="Français" /></a>
                    <a href="index.php?cible=anglais" > <img class="anglais" src="image/anglais.gif"  type="Anglais" alt="Anglais" /></a>
                    </div>

                </div>
                <div class=" rectangle3">
                    <table class="menu"> 
                        <tr class="tr2">
                            <td class="td2" onclick="location='index.php?cible=accueilco'" style="cursor:pointer" > A propos de HomeCheck </td>
                            <td class="td2" onclick="location= 'index.php?cible=meslogements'" style="cursor:pointer" > Mes logements </td>
                            <td class="td2" onclick="location='index.php?cible=monprofil'" style="cursor:pointer">  Mon profil </td>
                            <td class="td2" onclick="location='index.php?cible=contactez'" style="cursor:pointer"> Contactez-nous </td>
                        </tr>
                    </table>
                        

                </div>
            </div>
    <?php
    $entete = ob_get_clean();
    return $entete;
        
    }


    else if ($page==3) {
     ob_start();
    ?>
        <div class="rectangle1">
                <div class="rectangle2">

                    <a href="index.php?cible=BO"><img class="logo" src="image/logo.png" alt="logo" /></a>
                    <div class="texte1">
                        <ul>
                            <p class="Homecheck" > HomeCheck </p>
                            <p class="Yourhouse" > Your house in your pocket </p>
                        </ul>
                    </div>
                    
                     <div id="Admin">
                        <div class="barre" > <?php echo $_SESSION['nom'] ?></div>
                        <a href="index.php?cible=deco" ><img class="deco" src="image/deconnexion.png" type="Déconnexion" alt="Deconnexion"></a>
                    </div>
                    
                </div>
        </div>

    <?php
    $entete = ob_get_clean();
    return $entete;
        
    }
   
}





// GÃ©nÃ¨re le code HTML du pied de page
// mÃªme code pour toutes les pages
function pied(){
    ob_start();
    ?>
        <div>
         Tous droits réservés@  <a href="index.php?cible=mention"> Mentions légales </a>
        </div>
    <?php
    $pied = ob_get_clean();
    return $pied;
}



?>
