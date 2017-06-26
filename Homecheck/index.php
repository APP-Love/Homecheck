<?php 
   session_start();


   
    if( !isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"])){ 
    // L'utilisateur n'est pas connectÃ©
    
     include ("controleur/inscription.php");

 	}
    if(  !isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"]) && isset($_GET['cible']) && $_GET['cible'] == 'francais'){
             include("vue/pageDaccueil.php");
    }	

    if(!isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"])&& isset($_GET['cible']) && $_GET['cible'] =="NEWformulaire" ){
                include("controleur/NEWformulaire.php");

    }
    if (!isset($_SESSION["identifiant"]) && !isset($_SESSION["mdp"])&& isset($_GET['cible']) && $_GET['cible'] == 'mention'){
                include("vue/mention_legale.php");             

            }
		
                                                        /// On utilise un controleur secondaire pour eviter d'avoir un fichier index.php trop gros
     else {          // L'utilisateur est connectÃ©
        if(isset($_GET['cible'])) {

        		
        	if($_GET['cible'] == 'anglais'){
        		include("vue_anglais/AboutHomecheck.php");
        	}																																	 // on regarde la page on le veut aller

            if($_GET['cible'] == 'accueilco'){
                include("vue/AProposDeHomecheck.php");

            } else if ($_GET['cible'] == "monprofil"){
                include("vue/MonProfil.php");


            }
            else if ($_GET['cible'] == "trame"){
                include("controleur/trame.php");


            }
             else if ($_GET['cible'] == "editprofil"){
                include("vue/modifierMonProfil.php");

            } 

             else if ($_GET['cible'] == "gestionadmin"){
               echo " .";
                include("vue/gestionadmin.php");

            } 
             else if ($_GET['cible'] == "edit"){
                include("controleur/edit_profil.php");

            } else if ($_GET['cible'] == "edit_photo"){
                include("controleur/edit_photo.php");

            } 

            else if ($_GET['cible'] == "meslogements"){
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
                include("vue/pagecapteurt.php");

           }else if ($_GET['cible'] == "capteurf"){
                include("vue/pagecapteurf.php");

           }else if ($_GET['cible'] == "capteurh"){
                include("vue/pagecapteurh.php");

           }

           else if ($_GET['cible'] == "capteurl"){
                include("vue/pagecapteurl.php");/*PAS fini*/

           }else if ($_GET['cible'] == "contactez"){
                include("vue/Contactez_nous.php");

           }
           else  if($_GET['cible'] == 'formulaire'){
                include("controleur/traitement.php");

            }
            else  if($_GET['cible'] == 'insertionlogement'){
                include("controleur/insertionlogement.php");

            }

             else  if($_GET['cible'] == 'supprimercapteur2'){

                include("controleur/suppressioncapteur.php");

            }
else if ($_GET['cible'] == "ajoutcapteur"){
                include("vue/ajouterCapteur.php");

           }
             else  if($_GET['cible'] == 'ajoutercapteur'){
                include("controleur/formulaireajout2.php");

            }

            else  if($_GET['cible'] == 'admincroix'){
                include("controleur/supprimeradmin.php");             

            }

            
else  if($_GET['cible'] == 'formulaireadmin'){
                include("controleur/formulaireadmin.php");
            }

            else  if($_GET['cible'] == 'supprimercapteur'){
                include("vue/suprimer.php");
 
            }
          else  if($_GET['cible'] == 'ajoutlogement'){
                include("vue/ajouterlogement.php");

            }

             else  if($_GET['cible'] == 'ajoutpiece'){
                include("vue/ajoutpiece.php");

            }
            else  if($_GET['cible'] == 'insertionpiece'){
                
                include("controleur/insertionpiece.php");

            }
            else  if($_GET['cible'] == 'NEWclient'){
                include("controleur/newclient.php");             

            }

            else  if($_GET['cible'] == 'autoCroix'){
                include("controleur/supprimerAuto.php");

            }

             else  if($_GET['cible'] == 'action'){
                include("controleur/automatisationControleur.php");             

            }
             else  if($_GET['cible'] == 'auto'){
                include("controleur/automatisationControleur.php");             

            }
             else  if($_GET['cible'] == 'mention'){
                include("vue/mention_legale.php");             

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