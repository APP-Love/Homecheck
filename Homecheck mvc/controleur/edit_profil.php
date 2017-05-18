 <?php 


 




 if($_GET['cible'] == 'edit') {
        
include 'modele/connexion_bdd.php';               

  $reponse = $bdd->query('SELECT * FROM utilisateur WHERE id=2');
$donnees = $reponse->fetch();


        include 'modele/edit_profil.php';


        if (isset($_POST['newnom'])){
             

        	$new=$_POST['newnom'];

                $sql  = ' UPDATE utilisateur 
                        SET nom  = "SUBLIME" WHERE id='.$_SESSION['id'].''  ;
                         

      

        
                $bdd->exec($sql);
       
       include("vue/MonProfil.php");
        }

        if (isset($_POST['newprenom'])){
                $edit=edit('prenom',$_POST['newprenom']);

        if (isset($_POST['newemail'])){
        	$edit=edit('mail',$_POST['newemail']);
                }
        }if (isset($_POST['newnaissance'])){
        	$edit=edit('naissance',$_POST['newnaissance']);
        }
        if (isset($_POST['newadresse'])){
        	$edit=edit('adresse',$_POST['newadresse']);
        }
        if (isset($_POST['newville'])){
        	$edit=edit('ville',$_POST['newville']);
        }
        if (isset($_POST['newpostal'])){
        	$edit=edit('postal',$_POST['newpostal']);
        }
        if (isset($_POST['newtel'])){
        	$edit=edit('tel',$_POST['newtel']);}

                                }

         
      
                ?>


