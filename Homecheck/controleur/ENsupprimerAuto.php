<?php $mai=$_SESSION['maison'];
 		$idauto=$_GET['id'];


include 'modele/connexion_bdd.php';

$sql37 =  "DELETE FROM  automatisations  WHERE id = ".$idauto."";
    																				// on insère les informations du formulaire dans la table
            $bdd->query($sql37);

         

include ("vue_anglais/ENautomatisations.php");



	?>