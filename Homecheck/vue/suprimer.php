
<?php
require "commun.php";
 
$mai=$_GET['id'];

 $entete= entete(2);

    ob_start();
    ?>
         
      <div class="carre2"> 

           
        <div class="formulaire">
 <?php echo "<a href='index.php?cible=capteursparpiece&id=".htmlentities($mai)."'> <img class='croix2' src='image/croix2.png' alt='fermeture'/></a>";?>
            
            <span class=ajouttitre> Supprimer un capteur </span>
                <br/><br/><br/>
 <?php echo " <form method='post' action='index.php?cible=supprimercapteur2&id=".htmlentities($mai)."'>";?>
        
        
        <div class="formulaire2">
                <div class="typecapteur">
                <label for="pays">Choissiez un type de capteur <br/> <br/></label>
                 
                         <select name="supprimercapteur" id="supprimercapteur">
  <?php    include ("controleur/suppression.php"); ?> 
          
                    </select>

                      
                        
                </div> 
         </div>
       

        <div class="confirmation">
        </div> <br/><br/>

        
        <div class="valider"> 
        
<button type="submit">Valider</button>
</form>
        </div> 

         <br/> <br/> <br/>

        </div>

    </div>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>
