
<?php
require "commun.php";
  

 $entete= entete(2);

    ob_start();
    ?>
         
       


             <section class="logementchoisi">

         <div class="carre" >
            
               <a href="index.php?cible=capteursparpiece" > <img class=" plan" src="image/plan maison.jpg" alt="Plan de la maison" /></a>
          
              <ul class="liste"> 
                  <p> <?php

                  $id= $_SESSION['id'];
$sql="SELECT * FROM logement WHERE id_utilisateur='".$id."' ";
  $reponse = $bdd->query($sql);

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

?>

  <?php
            $a=$_SESSION['id'];
$sql1="SELECT COUNT(*) FROM piece p 
INNER JOIN logement l ON p.id_logement=l.id
INNER JOIN utilisateur u ON l.id_utilisateur=u.id
WHERE u.id= '".$a."'";

  $reponse1 = $bdd->query($sql1);
  $donnees1 = $reponse1->fetch();

?>
    
    



                   <p> <?php echo $donnees['adresse'] ." ". $donnees['code postal'] ." ". $donnees['ville']; ?> </p>
                  <p> <?php echo $donnees['superficie']; ?> mètres carrés</p>
                  <p> Nombre de pièces: <?php echo $donnees1[0]; ?> </p>
                
              </ul>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
           
            <a href="index.php?cible=gestionadmin" ><div class="admin"> <p class="texte"> Gestion des administrateurs </p></div></a>
             
         </div>

         </section>

         <section>
           <div class="bouton2">

                            <a href="index.php?cible=ajoutlogement" >  
                            <div class="ajouter">
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Ajouter un capteur ou un actionneur"/>
                           </div> 
                            </a>


                            
                    </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>




