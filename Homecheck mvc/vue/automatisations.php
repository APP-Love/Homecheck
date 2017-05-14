  <?php
require "commun.php";
 

 $entete= entete(2);

    ob_start();
    ?>
         
         
        <Section>
            <div id="box"> 
                    <div class="automatisation"> Les automatisations </div>
                <div class="box1">
                    
                        <div class="Ajout" > Ajout d'automatisation : </div> 
                <div class="box2">
                    
                        <div class="intitulé"> Action </div> 
                        <div class="intitulé" > Pièces </div>
                        <div class="intitulé"> Conditions </div>
                        <div class="intitulé" > Récurrence </div> 
                    
                </div>

                <div class="box3">
                            

                        <table class="table2" >


                                <tr >
                                     <td class="td3"> Chauffage </td>
                                </tr>
                                <tr>
                                    <td class="td3" > Ouverture des volets </td>
                                </tr>
                                <tr>
                                    <td class="td3"> Fermeture des volets </td>
                                </tr>
                                <tr>
                                    <td class="td3" > Lumière </td>
                                </tr>
                    
                        </table>
                      
                        <table class="table2" >

                            <tr>
                                <td class="td3"> Salon </td>
                            </tr>
                            <tr>
                                <td class="td3" > Chambre 1  </td>
                            </tr>
                            <tr>
                                <td class="td3"> Chambre 2 </td>
                            </tr>
                            <tr>
                                <td class="td3"> Cuisine </td>
                            </tr>
                            <tr>
                                <td class="td3"> Salle de bain 1 </td>
                            </tr>
                            <tr>
                                <td class="td3"> Salle de bain 2 </td>
                            </tr>
                            <tr>
                                <td class="td3"> Garage </td>
                            </tr>
                            <tr>
                                <td class="td3"> Terrasse </td>
                            </tr>
                        </table>


                            
                        <nav1>
                            <ul >
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Température" ></label> 
                                        <input type="text" name="Température" id="Température" placeholder="Température..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de début" ></label> 
                                        <input type="text" name="Heure de début" id="Heure de début" placeholder="Heure de début..."/>
                                </form>
                                <form class="données" method="post" action="retour.php" >
                                        <label for=" Heure de fin" ></label> 
                                        <input type="text" name="Heure de fin" id="Heure de fin" placeholder="Heure de fin..."/>
                                </form>
                            </ul>
                        </nav1>
                            

                        <table class="table2" >
                            
                            <tr>
                                <td class="td3"> Lundi </td>    
                            </tr>
                            <tr>    
                                <td class="td3"> Mardi  </td>
                            </tr>
                            <tr>
                                <td class="td3"> Mercredi </td>
                            </tr>
                            <tr>
                                <td class="td3"> Jeudi </td>
                            </tr>
                            <tr>
                                <td class="td3"> Vendredi </td>
                            </tr>
                            <tr>
                                <td class="td3"> Samedi </td>
                            </tr>
                            <tr>
                                <td class="td3"> Dimanche </td>
                            </tr>
                        </table>
                </div>
                <div class="box5">
                    <a href="#"><div class="enre"> Enregistrer </div></a>
                </div>
                </div>
                <div class="box4">
                    <div class="A1"> A1 </div>
                    <div><a href="#"> <img class="croix1" src="image/croix.png" alt="supprimer automatisation" /></a></div>
                </div>

                <div class="box4">
                    <div class="A1"> A2 </div>
                    <div > <a href="#"> <img class="croix1" src="image/croix.png" alt="supprimer automatisation" /></a></div>
                </div>


            </div>
        </Section>
            
        
    <?php
    $contenu = ob_get_clean();

   
    
    

    include 'gabarit.php';
?>

