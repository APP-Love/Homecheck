<?php
  ob_start();
    ?>
      <a href="index.php?cible=capteurh">
	<div class="capteurplace">
                                <div class="capteur_img"> 

                                      <img src="image/humi2.png" alt=" capteur" /> 
                                </div> 
                                <label class="switch">
                                    <input type="checkbox" checked>
                                <div class="slider round">
                                </div>
                              </label>
                    </div> 
                    </a>
     
        
    <?php
     $a = ob_get_clean();

   
    
    

  

?>