<?php   $_SESSION['maison']=$_GET['id'];
   $mai=$_SESSION['maison'];
 include 'modele/connexion_bdd.php';

 

     

   if(isset($_POST['choixpieces']))  { 
        $_SESSION['choixp']=$_POST['choixpieces'];            
      } 
     

    

  
/*$sql55='SELECT * FROM piece p 
                                                       
                         WHERE p.nom="SALON"  p.id_logement="'.$mai.'"';
  $reponse10 = $bdd->query($sql55);

$donneescapteur10 = $reponse10->fetchAll(PDO:: FETCH_ASSOC);
$piece=$donneescapteur10[0]
echo "'..'";*/



require "commun.php";

 

 $entete= entete(2);

    ob_start();
    ?>

          <div class="box8"> 

            <div class="plan_automatisation">
            
                 <div class="plan"> 
                        <img src="image/plan.jpg" alt="plan" title="votre plan"/> 
                </div> 
                    <br/>  

                 <?php echo "<a href='index.php?cible=automatisations&id=".htmlentities($mai)."'> ";?>
                <div class="automatisation"> Automatisation 
               </div> </a>

 <?php echo "<a href='index.php?cible=ajoutpiece&id=".htmlentities($mai)."'> ";?>
                
                <div class="automatisation"> Ajout de pièce  
               </div> </a>
               
               
            </div>
      
        <div class="info8">

            <div class="text8">
            <?php 
            $a=$_SESSION['id'];
$sql='SELECT COUNT(*) FROM capteuractionneur c 
INNER JOIN piece p ON c.id_piece=p.idp 
WHERE  p.id_logement="'.$mai.'"';

  $reponse = $bdd->query($sql);
  $donnees = $reponse->fetch();

?>
    
                     <p> Nombre de capteurs dans la maison : <?php  echo $donnees[0];   ?> <br/>
                        <br/>
                    </p>
             </div>




      <div class = listederoulante>
      <form action=<?php echo "index.php?cible=capteursparpiece&id=".htmlentities($mai)."" ;?> method="POST">
         



          <select name="choixpieces" id="idchoixpieces">
       
<?php
$a=$_SESSION['id'];
$sql48="SELECT nom,idp FROM piece WHERE id_logement = '".$mai."'";
$reponse48 = $bdd->query($sql48);
$sql89="SELECT nom,idp FROM piece WHERE id_logement = '".$mai."'"; 
           $reponse89 = $bdd->query($sql89);
           $donnees89 = $reponse89->fetch();
          

         if(isset($_SESSION['choixp']))  { 
        $idchoixpiece=$_SESSION['choixp'];            
      } 
      else { 
       $idchoixpiece=$donnees89;
      }
 if(isset($_SESSION['choixp']))  { 
        $nomchoixpiece=$_SESSION['choixpname'];            
      } 
      else { 
        
       $nomchoixpiece=$donnees89[0];
      } 




while ($donnees48 = $reponse48->fetch())
{          if ($donnees48[1]==$idchoixpiece[0]) {
?>
           <option selected="selected" value="<?php echo $donnees48[1]; ?>"> <?php echo $donnees48[0]; ?></option>
<?php
}
else {
?>
            <option  value="<?php echo $donnees48[1]; ?>"> <?php echo $donnees48[0]; ?></option>
<?php }}
 ?>
</select>
                   
                   <input type="hidden" name="id" value="<?php echo $mai; ?>"></input>
                                   <input type="submit" value="Changer">
        </form>                           
                   
        </div>
        <?php
           

    $sql87="SELECT nom FROM piece WHERE id_logement = '$mai' AND idp ='$idchoixpiece' "; 
    $reponse87 = $bdd->query($sql87);
    $donnees87 = $reponse87->fetch();
    $nompieceselect=$donnees87;

      ?>
              <div class="bloc">

                    <div class="bloc1"> 
                                 <div class="bloc2">
                                        <div class="text2"> 
                                                 <?php echo $nompieceselect[0];

                                                  ?>
                                        </div>             
                                              
                                </div>
         
                                <div class="text_piece">
                                        Nombre de capteurs dans la pièce:  <?php 
            



  
/* changer en fonction des pièce que lon demande, voir avec thomas crée une varible $_SESSION[piece] */





$sql1="SELECT COUNT(*) FROM capteuractionneur c WHERE c.id_piece='".$_SESSION['choixp']."'";

  $reponse1 = $bdd->query($sql1);
  $donnees1 = $reponse1->fetch();


                                         echo $donnees1[0];   ?> 
                                                <br/>
                                              
                                </div>

                    </div>

                                       <div class="capteur">
                                      
                                            <?php
                                              include 'controleur/ajout_capteur.php';
                                            ?>

                    </div>

     

                    






                    <div class="bouton2">
 <?php echo "<a href='index.php?cible=ajoutcapteur&id=".htmlentities($mai)."'> ";?>
                             
                            <div class="ajouter">
                            
                                 <img src="image/ajouter.jpg" alt="ajouter" title="Ajouter un capteur ou un actionneur"/>
                           </div> 
                            </a>

<?php echo "<a href='index.php?cible=supprimercapteur&id=".htmlentities($mai)."'> ";?>
                         
                            <div class="supprimer">
                                    <img src="image/supprimer.png" alt="Supprimer" title="Supprimer un capteur ou un actionneur"/>
                            </div>
                            </a>
                    </div>

            </div> <!-- div bloc !-->
             
    </div>  <!-- div info8 !-->
        
    </div>
          
      
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

