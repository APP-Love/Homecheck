<?php 
   session_start();
   
    if( !isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"])){ 
    // L'utilisateur n'est pas connectÃ©
     include  ("controleur/inscription.php");
      if($_GET['cible'] && $_GET['cible'] =="NEWformulaire" ){
                include("controleur/NEWformulaire.php");

            }
                                                        }/// On utilise un controleur secondaire pour eviter d'avoir un fichier index.php trop gros
     else {          // L'utilisateur est connectÃ©
        if(isset($_GET['cible'])) { // on regarde la page on le veut aller 
            
            if($_GET['cible'] == 'accueilco'){
                include("vue/AProposDeHomecheck.php");

            } else if ($_GET['cible'] == "monprofil"){
                include("vue/MonProfil.php");


            } else if ($_GET['cible'] == "editprofil"){
                include("vue/modifierMonProfil.php");

            } 

             else if ($_GET['cible'] == "gestionadmin"){
               echo "hhhh";
                include("vue/gestionadmin.php");

            } 
             else if ($_GET['cible'] == "edit"){
                include("controleur/edit_profil.php");

            } else if ($_GET['cible'] == "meslogements"){
                include("vue/Meslogements.php");

           } 
          else if ($_GET['cible'] == "logementchoisi"){
                include("vue/logementChoisi.php");

           }
           else if ($_GET['cible'] == "capteursparpiece"){
                include("vue/capteursParPiece.php");

           }else if ($_GET['cible'] == "automatisations"){
                include("vue/automatisations.php");

           }

           else if ($_GET['cible'] == "capteurt"){
                include("Vue/pagecapteurt.php");

           }else if ($_GET['cible'] == "capteurf"){
                include("vue/pagecapteurf.php");

           }else if ($_GET['cible'] == "capteurh"){
                include("vue/pagecapteurh.php");

           }else if ($_GET['cible'] == "ajoutcapteur"){
                include("vue/ajouterCapteur.php");

           }else if ($_GET['cible'] == "contactez"){
                include("vue/Contactez_nous.php");

           }
           else  if($_GET['cible'] == 'formulaire'){
                include("controleur/traitement.php");

            }




           else if ($_GET['cible'] == "deco"){
                // DÃ©truit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("vue/pageDaccueil.php");
            }
        } else { // affichage par dÃ©faut
                include("vue/AProposDeHomecheck.php");
        }
    }

  ?> 