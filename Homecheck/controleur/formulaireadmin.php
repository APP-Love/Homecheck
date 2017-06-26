<?php    

 include ("modele/connexion_bdd.php");
           $idlog=$_SESSION['logement'];
          $nomadmin=$_POST['Nom'];
          $prenomadmin=$_POST['Prenom'] ;
          $idadmin=$_POST['Identifiant'];              
          $mdpadmin=$_POST['mdp'];
          $mailadmin=$_POST['mail'];
          $typeadmin=$_POST['typeadmin'];
          if(isset($_POST['droitprofil']))  { 
               $droitprofil=$_POST['droitprofil'];
                 } 
          else { 
              $droitprofil='Off';
                } 
          if(isset($_POST['droitajoutlog']))  { 
               $droitajoutlog=$_POST['droitajoutlog'];
                 } 
          else { 
              $droitajoutlog='Off';
                } 
          if(isset($_POST['droitajoutcap']))  { 
               $droitajoutcap=$_POST['droitajoutcap'];
                 } 
          else { 
              $droitajoutcap='Off';
                } 
          if(isset($_POST['droitaction']))  { 
               $droitaction=$_POST['droitaction'];
                 } 
          else { 
              $droitaction='Off';
                } 
          if(isset($_POST['droitprofil']))  { 
               $droitprofil=$_POST['droitprofil'];
                 } 
          else { 
              $droitprofil='Off';
                } 
          if(isset($_POST['droitphoto']))  { 
               $droitphoto=$_POST['droitphoto'];
                 } 
          else { 
              $droitphoto='Off';
                } 
          if(isset($_POST['droitauto']))  { 
               $droitauto=$_POST['droitauto'];
                 } 
          else { 
              $droitauto='Off';
                } 
          if(isset($_POST['droitcapteur']))  { 
               $droitcapteur=$_POST['droitcapteur'];
                 } 
          else { 
              $droitcapteur='Off';
                }  
 
  $sql66 =  "INSERT INTO utilisateur (`id`, `nom`, `prenom`, `identifiant`, `mdp`, `dateDEnaissance`, `telephone`,`mail`, `adresse`, `codepostal`,`ville`, `type`,`message`, `droitprofil`,`droitajoutlog`, `droitajoutcap`,`droitaction`, `droitphoto`,`droitauto`, `droitcapteur`) VALUES ('', '".$nomadmin."', '".$prenomadmin."', '".$idadmin."', '".$mdpadmin."', '', '0XXXXXXXXXX', '".$mailadmin."','','','','".$typeadmin."','NEW','".$droitprofil."','".$droitajoutlog."','".$droitajoutcap."','".$droitaction."','".$droitphoto."','".$droitauto."','".$droitcapteur."')";
    																		

        $bdd->query($sql66);

  $sql67 = "SELECT id FROM utilisateur WHERE identifiant ='$idadmin' AND mail ='$mailadmin' AND mdp ='$mdpadmin'  ";
  $reponse67 = $bdd->query($sql67);
  $donnees67 = $reponse67->fetch();
  $idutil=$donnees67[0];


  $sql68 = "INSERT INTO utilisateur_logement (idu, id_logement, id_utilisateur) VALUES ('','".$idlog."','".$idutil."')";

      $bdd->query($sql68);
       															
        echo "Administrateur créé, n'oubliez pas de remplir les informations complémentaire du profil à la première connexion";


include "vue/logementChoisi.php" ;
