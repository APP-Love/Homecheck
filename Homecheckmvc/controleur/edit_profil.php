 <?php 


 




 if($_GET['cible'] == 'edit') {
        
include 'modele/connexion_bdd.php';               

  


        include 'modele/edit_profil.php';


        if (isset($_POST['newnom']) && !empty($_POST['newnom'])){
             
                $_SESSION['nom']= $_POST['newnom'];
                $edit=edit('nom',$_POST['newnom']);  }
       
      
        

         if (isset($_POST['newprenom']) && !empty($_POST['newprenom'])){
            $_SESSION['prenom']= $_POST['newprenom'];
                $edit=edit('prenom',$_POST['newprenom']);}
                

         if (isset($_POST['newemail'])  && !empty($_POST['newemail'])){
             $_SESSION['mail']= $_POST['newemail'];
        	$edit=edit('mail',$_POST['newemail']);
                }
         if (isset($_POST['newnaissance'])){
             $_SESSION['date_de_naissance']= $_POST['newnaissance'];
        	$edit=edit('date de naissance',$_POST['newnaissance']);

        }
         if (isset($_POST['newadresse']) && !empty($_POST['newadressse'])){
             $_SESSION['adresse']= $_POST['newadresse'];
        	$edit=edit('adresse',$_POST['newadresse']);
        }
         if (isset($_POST['newville'])  && !empty($_POST['newville'])){
             $_SESSION['ville']= $_POST['newville'];
        	$edit=edit('ville',$_POST['newville']);
        }
         if (isset($_POST['newpostal'])){
             $_SESSION['code_postal']= $_POST['newpostal'];
        	$edit=edit('code postal',$_POST['newpostal']);
        }
        if (isset($_POST['newtel']) && !empty($_POST['newtel'])){
             $_SESSION['tel']= $_POST['newtel'];
        	$edit=edit('telephone',$_POST['newtel']);}

                                

          include("vue/MonProfil.php");
      }
               
                ?>


