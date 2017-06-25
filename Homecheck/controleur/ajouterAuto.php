<?php 
	include ("modele/connexion_bdd.php");
	$mai=$_SESSION['maison'];
	$auto2 = $bdd->query('SELECT * FROM automatisations a WHERE a.id_piece="'.$mai.'"');
$donneesAuto = $auto2->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneesAuto as $element){

	

	if ($element['action']==1)
	 
	 {

	 	$element['action']=" Regler la temperature ";
	}


	else if ($element['action']==2)
	 {

	 	$element['action']=" Ouvrir les volets";
	}

	else if ($element['action']==3)
	 {

	 	$element['action']=" Fermer les volets ";
	}

	else if ($element['action']==4)
	 {

	 	$element['action']=" Allumer la lumiere ";
	}
	


	if ($element['pieces']==1)
	{
		$element['pieces']=" Toutes les pieces ";
	}

	else if ($element['pieces']==2)
	{
		$element['pieces']=" Toutes les chambres ";
	}

	else if ($element['pieces']==3)
	{
		$element['pieces']=" Garage et terrasse ";
	}

	else if ($element['pieces']==4)
	{
		$element['pieces']=" Cuisine et salon ";
	}

	else if ($element['pieces']==5)
	{
		$element['pieces']=" Salle de bain ";
	}


	if ($element['recurrence']==1)
	{
		$element['recurrence']="Tous les jours";
	}

	if ($element['recurrence']==2)
	{
		$element['recurrence']="Lundi au vendredi";
	}

	if ($element['recurrence']==3)
	{
		$element['recurrence']="Samedi et Dimanche";
	}



	
	include 'vue/boxAutomatisation.php';


	 // ."   "., $element['piece'],."   "., $element['recurrence'], ."  "., $element['heureDebut'], ."  "., $element['heureFin'], ."  "., $element['temperature'];
	
	



}
?>