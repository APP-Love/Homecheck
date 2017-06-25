<?php

 include("modele/connexion_bdd.php");


if(isset($_GET['cible']) && $_GET['cible']=="verif"){                                   // L'utilisateur vient de valider le formulaire de connexion 
        try
          { 
            //connexion à la base de donnée
          $bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          }
        catch (Exception $e)
        {
          //En cas d'erreur, on affiche un message et on arrête tout
          die ('Erreur :' .$e->getMessage());
        }        


    if(!empty($_POST['identifiant']) && (!empty($_POST['mdp']))){                      // L'utilisateur a rempli tous les champs du formulaire

        $_POST['identifiant'] = htmlentities($_POST['identifiant']);
        $_POST['mdp'] = htmlentities($_POST['mdp']);


        //Hashage dans la base de données

                  /*-------Phase de sélection----------*/
        $selection=$bdd->query('SELECT mdp FROM utilisateur WHERE mdp = "'.$_POST['mdp'].'"');
        $donnees = $selection->fetch();
        //echo $donnees['mdp'];

                  /*-------Phase de hashage-------------*/
        $hash=sha1($donnees['mdp']);
        //echo $hash;

                  /*-------Phase de modification dans la base de données----------*/
        
        $bdd->exec('UPDATE utilisateur SET mdp = "'.$hash.'" WHERE mdp = "'.$_POST['mdp'].'"');

        //Après hashage 
        $_POST['mdp']=sha1($_POST['mdp']);
        //echo $_POST['mdp'];

        $reponse = $bdd->prepare("SELECT * FROM utilisateur WHERE identifiant = :identifiant AND mdp = :mdp");
        $reponse -> execute(array('identifiant' => $_POST['identifiant'],'mdp' => $_POST['mdp']));
        $max_row = $reponse->fetch();

        if (!$max_row)
        {

          $erreur = "Votre identifiant ou votre mot de passe est incorrect";
          include("vue/connetion_error.php");
        }

        else 
        {

          if($_POST['mdp']  == sha1('admin') AND $_POST['identifiant'] == "administrateur@isep.fr"){                   // si mdp et identifiant bon pour administrateur
               
               $_SESSION['id']="2";
               $_SESSION['mdp']=$max_row['mdp'];
               $_SESSION['nom']=$max_row['nom'];
               $_SESSION['mail']=$max_row['mail'];


                include("vue/backoffice.php");
               }

          

          else if ($_POST['mdp']  != sha1('admin') AND $_POST['identifiant'] != "administrateur@isep.fr" AND $_POST['mdp'] == $max_row['mdp'] AND $_POST['identifiant'] == $max_row['identifiant'] ) {
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

        }

    

                   
    }

      else if (empty($_POST['identifiant']) || (empty($_POST['mdp']))){                                                // L'utilisateur n'a pas rempli tous les champs du formulaire
        $erreur = "Veuillez remplir tous les champs";
        include("vue_anglais/connection_error.php");
    }

}
 
    else {                                         // La page de connexion par défaut
             include("vue_anglais/welcomepage.php");
    }

?>