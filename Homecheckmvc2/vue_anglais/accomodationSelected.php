<?php
require "common.php";
  

 $entete= entete(2);

    ob_start();
    ?>
         
       


             <section class="logementchoisi">

         <div class="carre" >
            
               <a href="index2.php?cible=capteursparpiece" > <img class=" plan" src="image/plan maison.jpg" alt="Home map" /></a>
          
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
                  <p> <?php echo $donnees['superficie']; ?> Square meters</p>
                  <p> Number of room: <?php echo $donnees1[0]; ?> </p>
                  
              </ul>



<?php

$reponse->closeCursor(); // Termine le traitement de la requête
?>
           
           
            <a href="index2.php?cible=gestionadmin" ><div class="admin"> <p class="texte"> Management of administrator  </p></div></a>
             
         </div>

         </section> 
        
    <?php
    $contenu = ob_get_clean();

   
    
    







    

    include 'gabarit_anglais.php';
?>




