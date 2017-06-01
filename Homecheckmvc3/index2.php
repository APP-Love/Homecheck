
<?php 
  session_start();
   
    if( !isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"])){ 
    // L'utilisateur n'est pas connectÃ©
     include  ("controleur/inscription_anglais.php");
    }
    if(!isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"]) && isset($_GET['cible'])  && $_GET['cible'] == 'anglais'){
        		include("vue_anglais/welcomepage.php");
    }

    if(!isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"]) && isset($_GET['cible']) && $_GET['cible'] =="NEWformulaire" ){        
                include("controleur/NEWformulaire_anglais.php");

    }
    																					/// On utilise un controleur secondaire pour eviter d'avoir un fichier index.php trop gros
    else {          // L'utilisateur est connectÃ©
        if(isset($_GET['cible'])) { // on regarde la page on le veut aller 
            

            if($_GET['cible'] == 'francais'){
        		include("vue/AProposDeHomecheck.php");
        	}	
            if($_GET['cible'] == 'accueilco'){
                include("vue_anglais/AboutHomecheck.php");
            } 
            else if ($_GET['cible'] == "monprofil"){
                include("vue_anglais/MyProfil.php");
            } 
            else if ($_GET['cible'] == "editprofil"){
                include("vue_anglais/editMyProfil.php");
            } 
            else if ($_GET['cible'] == "gestionadmin"){
               echo " .";
                include("vue_anglais/managementAdmin.php");       // creer page !?? 
            } 
             else if ($_GET['cible'] == "edit"){
                include("controleur/edit_profil_anglais.php");
            } 
            else if ($_GET['cible'] == "edit_photo"){
                include("controleur/edit_photo_anglais.php");            // a creer la page ! des que ca marchera 

            }
            else if ($_GET['cible'] == "meslogements"){
                include("vue_anglais/Myaccomodations.php");
           } 
          else if ($_GET['cible'] == "logementchoisi"){
                include("vue_anglais/accomodationSelected.php");
           }
           else if ($_GET['cible'] == "capteursparpiece"){
                include("vue_anglais/sensorPerRoom.php");
           }
           else if ($_GET['cible'] == "automatisations"){
                include("vue_anglais/automatization.php");
           }
           else if ($_GET['cible'] == "capteurt"){
                include("vue_anglais/sensorpaget.php");
}
                 else if ($_GET['cible'] == "capteurl"){
                include("vue_anglais/sensorpagel.php");/*PAS fini*/

           
           }
           else if ($_GET['cible'] == "capteurf"){
                include("vue_anglais/sensorpagef.php");
           }
           else if ($_GET['cible'] == "capteurh"){
                include("vue_anglais/sensorpageh.php");
           }
           else if ($_GET['cible'] == "ajoutcapteur"){
                include("vue_anglais/addSensor.php");
           }
           else if ($_GET['cible'] == "contactez"){
                include("vue_anglais/contact_us.php");
           }
           else  if($_GET['cible'] == 'formulaire'){
                include("controleur/traitement_angais.php");         // a verifier !

            }

               else  if($_GET['cible'] == 'ajoutercapteur'){
                include("controleur/formulaireajout_anglais.php");

            }
           else if ($_GET['cible'] == "deco"){
                // DÃ©truit toutes les variables de session
                $_SESSION = array();
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time()-42000, '/');
                }
                session_destroy();
                include("vue_anglais/welcomepage.php");
            }
        } else { // affichage par dÃ©faut
                include("vue_anglais/AboutHomecheck.php");
        }
    }
  ?> 