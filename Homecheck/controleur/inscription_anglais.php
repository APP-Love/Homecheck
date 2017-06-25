<!-- dans le controleur : connexion à la page d'accueil // !--> 


<?php 

 include("modele/connexion_bdd.php");



if(isset($_GET['cible']) && $_GET['cible']=="verif"){                                   // L'utilisateur vient de valider le formulaire de connexion
    if(!empty($_POST['identifiant']) && (!empty($_POST['mdp']))){ // L'utilisateur a rempli tous les champs du formulaire
        
        $reponse = $bdd->query('SELECT * FROM utilisateur WHERE mdp="'.$_POST['mdp'].'"');
        $max_row = $reponse->fetch(PDO:: FETCH_ASSOC);


        if($_POST['mdp']  == "admin" AND $_POST['identifiant'] == "administrateur@isep.fr"){                   // si mdp et identifiant bon 
               
               
               $_SESSION['mdp']=$max_row['mdp'];
               $_SESSION['nom']=$max_row['nom'];
                $_SESSION['id']=$max_row['id'];
               $_SESSION['mail']=$max_row['mail'];


                include("vue/backoffice.php");
        }


       else if($_POST['mdp'] == $max_row['mdp'] AND $_POST['identifiant']== $max_row['identifiant']){                   // si mdp et identifiant bon 
               
               $_SESSION['identifiant']=$max_row['identifiant'];
               $_SESSION['mdp']=$max_row['mdp'];
                $_SESSION['id']=$max_row['id'];


                 $_SESSION['nom']=$max_row['nom'];
               $_SESSION['prenom']=$max_row['prenom'];
                $_SESSION['date_de_naissance']=$max_row['dateDEnaissance'];

                 $_SESSION['tel']=$max_row['telephone'];
               $_SESSION['mail']=$max_row['mail'];
                $_SESSION['adresse']=$max_row['adresse'];

                 $_SESSION['code_postal']=$max_row['codepostal'];
               $_SESSION['ville']=$max_row['ville'];
                $_SESSION['type']=$max_row['type'];



                include("vue_anglais/AboutHomecheck.php");
        }

        else {                                               // identifiant ou mdp incorrecte
                $erreur = "Your username or password is incorrect.";                     
                include("vue_anglais/connection_error.php");
                
        }
           
    } 

    else {                                                // L'utilisateur n'a pas rempli tous les champs du formulaire
        $erreur = "please complete all fields";
        include("vue_anglais/connection_error.php");
    }

}
 
else {                                         // La page de connexion par défaut
             include("vue_anglais/welcomepage.php");
}

