
<?php
require "common.php";
 
$mai=$_GET['id'];

 $entete= entete(2);

    ob_start();
    ?>
         
      <div class="carre2"> 

           
        <div class="formulaire">
 <?php echo "<a href='index2.php?cible=capteursparpiece&id=".htmlentities($mai)."'> <img class='croix2' src='image/croix2.png' alt='closing'/></a>";?>
            
            <span class=ajouttitre> Delete a sensor </span>
                <br/><br/><br/>
 <?php echo " <form method='post' action='index2.php?cible=supprimercapteur2&id=".htmlentities($mai)."'>";?>
        
        
        <div class="formulaire2">
                <div class="typecapteur">
                <label for="pays">Choose a type of sensor  <br/> <br/></label>
                 
                         <select name="supprimercapteur" id="supprimercapteur">
  <?php    include ("controleur/suppression_anglais.php"); ?> 
          
                    </select>

                      
                        
                </div> 
         </div>
       

        <div class="confirmation">
        </div> <br/><br/>

        
        <div class="valider"> 
        
<button type="submit">Validate</button>
</form>
        </div> 

         <br/> <br/> <br/>

        </div>

    </div>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>
