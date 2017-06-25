<?php $log=$_SESSION['logement'];
	include ("modele/connexion_bdd.php");
	
	$listadmin = $bdd->query('SELECT * FROM utilisateur u  INNER JOIN utilisateur_logement ul ON u.id=ul.id_utilisateur WHERE id_logement="'.$log.'"');
$infoadmin = $listadmin->fetchAll(PDO:: FETCH_ASSOC);
foreach($infoadmin as $elem){
	include 'vue/boxadmin.php';


		
 

 }
?>