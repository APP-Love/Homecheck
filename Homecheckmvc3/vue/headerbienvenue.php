	


	<header>
			<div class="rectangle1">
				<div class="rectangle2">

					<a href="connexion.php" ><img class="logo" src="image/logo.png" alt="logo" /></a>
					<div class="texte1">
						<ul>
							<p class="Homecheck" > HomeCheck </p>
							<p class="Yourhouse" > Your house in your pocket </p>
						</ul>
					</div>
				
					<div id="inscription">
						<form class="inscription" method="post" action="AProposDeHomecheck.php" >
							<label for=" pseudo" > Votre pseudo : </label> 
							
							<input type="text" name="Pseudo" id="Pseudo" placeholder="Pseudo ou mail..."  />


							<label for="mdp"> Votre mot de passe : </label>
							
							<input type="password" name="mdp" id="mdp" placeholder="Mot de passe..." />
							<input type="submit" name="valider" value="s'enregistrer" />
						</form>
				
				<!-- <?php 
				//	if(isset($_POST['valider'])) { 

						   //  if(isset($_POST['Pseudo'])) { 

								//	print("jeremiesublime@isep.fr"); 
						//	} 

						//	if(!isset($_POST['Pseudo'])){

						//	}
					//		elseif (isset($_POST['mdp'])) { 

							//		print("Motdepasse"); 
                         //   } 

						//	else { 

				//					$user_name = $_POST['Pseudo']; 
				//					$user_pass = $_POST['mdp']; 

							// on se connecte à MySQL 
						//	$db = mysql_connect('localhost', 'Pseudo', 'mdp'); 

							// on sélectionne la base 
						//	mysql_select_db('homecheck',$db); 

						//	$req = ("INSERT INTO ta_table VALUES( '', '$_Pseudo', '$_mdp')"); 
						//	} 
					// }		 
				?> !-->  


					<?php

							if(!empty($_POST['pseudo']))  {

								$bdd = new PDO('mysql:host=localhost;dbname=homecheck;charset=utf8', 'root', '');

									$Pseudo = mysql_real_escape_string(htmlspecialchars($_POST['Pseudo']));
									$mdp = mysql_real_escape_string(htmlspecialchars($_POST['mdp']));

										// a completer ... // 
							}

					?>


					</div>
					<div class="langues">
					<a href="?" > <img class="francais" src="image/francais.gif" type="Français" alt="Français" /></a>
					<a href="?" > <img class="anglais" src="image/anglais.gif"  type="Anglais" alt="Anglais" /></a>
					</div>
				</div>
			</div>
	</header>