<?
  ob_start();
    ?>
     
     
         <div class="carre" >
            
               <a href="index.php?cible=capteursparpiece" > <img class=" plan" src="image/plan maison.jpg" alt="Plan de la maison" /></a>
          
              <ul class="liste"> 

                  <p>



  <?php
            $a=$_SESSION['id'];
$sql1="SELECT COUNT(*) FROM piece p 
INNER JOIN logement l ON p.id_logement=l.id
INNER JOIN utilisateur u ON l.id_utilisateur=u.id
WHERE u.id= '".$a."'";

  $reponse1 = $bdd->query($sql1);
  $donnees1 = $reponse1->fetch();

?>
    
                   <p> <?php echo $element['adresse'] ." ". $element['codepostal'] ." ". $element['ville']; ?> </p>
                  <p> <?php echo $element['superficie']; ?> mètres carrés</p>
                  <p> Nombre de pièces: <?php echo $donnees1[0]; ?> </p>
                
              </ul>




           
           
            <a href="index.php?cible=gestionadmin" ><div class="admin"> <p class="texte"> Gestion des administrateurs </p></div></a>
             
         </div>

        
    <?php
    
     $a = ob_get_clean();


     
   
    
    

  

?>