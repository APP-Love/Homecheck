
 <?php
require "commun.php";



 $entete= entete(3);

    ob_start();
    ?>

    <section>

    	<div class= "BObox">

    		<div>
    		<h1 class="BOtitre"> Information sur nos clients  </h1>
    		</div>

    		<br/>
    		<br/>


			<div>

    	<?php 

            include ( 'modele/connexion_bdd.php');

    		$sq = $bdd->query(" SELECT * FROM utilisateur ");
            $result = $sq->fetchAll();

		
           include ('modele/back.php');
          /* $result= resultutilisateur($bdd);
           $donnees= donneescapteuractionneur($bdd);*/
           $nb = count($result);
           
?>
           <table class="tablebo">    
                 	<tr >
                     	<td class="titrebo">  Prénon/Nom </td> 
                      	 
                     	<td class="titrebo" > Date de Naissance </td>

                     	<td class="titrebo"> telephone </td>
                     	<td class="titrebo"> mail </td> 
                    
                      	<td class="titrebo" > Adresse </td>  
                      	<td class="titrebo"> Nombre de capteurs </td>
                  

                   </tr>

			 

			        <?php 
			            for($i=0; $i< $nb; $i++){
$id=($result[$i]["id"]);
			            		$a=$_SESSION['id'];
			$sq2= $bdd->query("SELECT COUNT(*) FROM capteuractionneur c 
			INNER JOIN piece p ON c.id_piece=p.idp 
			INNER JOIN logement l ON p.id_logement=l.id
			INNER JOIN utilisateur u ON l.id_utilisateur=u.id
			WHERE u.id=".$id." ");
  			$donnees = $sq2->fetch();
            
			        	
			 			  	if($i==1){
			 			  		
			 			  	}
			    
			                else { echo "<tr >";
			                     	echo "<td >".($result[$i]["prenom"])." ".($result[$i]["nom"])."</td>" ; 
			                      	 
			                     	echo "<td >".($result[$i]["dateDEnaissance"])."</td>" ; 

			                     	echo "<td >".($result[$i]["telephone"])."</td>" ; 
			                     	echo "<td >".($result[$i]["mail"])."</td>" ; 
			                    
			                      	echo "<td>".($result[$i]["adresse"])." ".($result[$i]["codepostal"])." ".($result[$i]["ville"])."</td>" ;  
					                  
					                echo "<td >".($donnees[0])."</td>" ; 
			                    echo "</tr>";
			                }

						
			            }
			        ?>
         	</table>
         	<br/>
    		<br/>
            </div>
            


            <div>
    		<h2 class="BOtitre"> Création d'un nouveau compte </h2>
    		</div>

    		<br/>
    		<br/>

    		<div class="boform"> 
    			<form method="post" action="index.php?cible=NEWclient">
                                
                                <br/>
                                <img src="image/new_clients2.png" class="flottant2" alt="image_client"/>

                                <br/>
                                
            					
                                <table>
                                	<tr class="botr">
			                                 <td class="tdbo"><label for="Nom">Nom :</label> </td>
			                               <td class="tdbo"><input type="text" name="nom" id="nom"  required  /></td>
			                               
			                        </tr>
			                        <tr>

			                                <td class="tdbo"><label for="prenom">Prénom :</label></td>
			                                <td class="tdbo"><input type="text" name="prenom" id="prenom"  required  /></td>
			                                		
                                
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="identifiant">Identifiant :</label></td>
			                                <td class="tdbo"><input type="text" name="identifiant" id="identifiant" required  /></td>
			                        </tr>
			                        <tr>
			                               <td class="tdbo"> <label for="mdp"> Mot de passe :</label></td>
			                               <td class="tdbo"> <input type="text" name="mdp" id="mdp"  required  /></td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="dateDEnaissance"> Date de naissance :</label></td>
			                                <td class="tdbo"><input type="tel" name="dateDEnaissance" id="dateDEnaissance"   /></td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="telephone"> Téléphone :</label></td>
			                                <td class="tdbo"><input type="telephone" name="telephone" id="telephone"  required  /></td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="Email"> Email :</label></td>
			                                <td class="tdbo"><input type="email" name="mail" id="mail" required /></td>
			                        </tr>
			                        <tr>
			                                 <td class="tdbo"><label for="complement"> Adresse </label></td>
			                                 <td class="tdbo"><input type="text" name="adresse" id="adresse"  required /> </td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="Codepostal"> Code postal :</label></td>
			                                <td class="tdbo"><input type="tel" name="codepostal" id="codepostal"  required /> </td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="ville"> Ville :</label></td>
			                                <td class="tdbo"><input type="text" name="ville" id="ville"  required /> </td>
			                        </tr>
			                        <tr>
			                                <td class="tdbo"><label for="type"> Type : </label></td>
			                                <td class="tdbo"><input type="tel" name="type" id="type"  required /> </td>
			                        </tr>
			                        <tr> 
			                        <br/>
			                        <tr>
			                          		<td class="tdbo">
			                       			 </td >
			                       	</tr>
			                       	<tr>
			                          		<td class="tdbo">
			                       			 </td>
			                       	</tr>
			                                <td class="tdbo"> <input class="ENREGISTRER" type="submit" name='ENREGISTRER' value="Enregistrer" /></td>
			                        </tr>
			                    </table>
                    </form>

    		</div>
        </div>
    </section>
    <?php
    $contenu = ob_get_clean();

  
    include 'gabarit.php';
?>