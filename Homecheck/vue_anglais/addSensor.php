<?php
require "common.php";
 $mai=$_GET['id'];
$idpiece=$_SESSION['choixp'];
 $entete= entete(2);

    ob_start();
    ?>
         
      <div class="carre2"> 

           
        <div class="formulaire">
         <?php echo "<a href='index2.php?cible=capteursparpiece&id=".htmlentities($mai)."'> <img class='croix2' src='image/croix2.png' alt='closing'/></a>";?>

            
            <span class=ajouttitre> Add a Sensor  </span>
                <br/><br/><br/>


        
        <div class="formulaire2">
                <div class="typecapteur">
                   <?php echo " <form method='post' action='index2.php?cible=ajoutercapteur&id=".htmlentities($mai)."'>";?>
                         <p>
                          <label for="pays">Choose a type of sensor <br/> <br/></label>
                         <select name="capteur" id="capteur">
                         <option value="humidité"> Humidity sensor</option>
                         <option value="lumiere">Light sensor</option>
                          <option value="fenêtre">Window sensor</option>
                           <option value="température">Temperature sensor</option>
                         <option value="autre">Others sensor </option>
          
                    </select>
                        </p>
                        
                </div> <br/>

                <div class="reference">
                        
                             <p>
                         <label>Reference of sensor <br/> </label>  <br/> <input type="text"  id="pseudo" name="pseudo" placeholder="Serial number..."/><br/><br/><br/><br/>
                            </p>
                            
                </div>
         </div>
       

        <div class="confirmation"><h3>You will receive a validation email confirming the requested addition.  <br/>  Thank you for your confidence. </h3> 
        </div> <br/><br/>

        
        
        
<button type="submit">Validate</button>
</form>

<?php  echo $erreur;?>
      

         <br/> <br/>    <br/> 


        </div>

    </div>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit_anglais.php';
?>
