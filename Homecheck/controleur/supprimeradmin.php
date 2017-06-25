<?php 

include 'modele/connexion_bdd.php';

$lista = $bdd->query("SELECT id_utilisateur FROM utilisateur_logement WHERE id_logement='$log' ");
$listb = $lista->fetchAll(PDO:: FETCH_ASSOC);



$sql3="DELETE FROM utilisateur WHERE id='".$idboxadmin."' ";
	try
		{
			$bdd->query($sql3);

			
		}
	 catch (Exception $e) {
	            $e->getMessage();
	    } 
			include 'vue/gestionadmin.php';


}

	?>