<?php


function edit($attribut,$value){
	global $bdd, $_SESSION;

	$new = htmlspecialchars($value);
	$new= "'" . $new . "'";
	$query = ' UPDATE utilisateur 
			SET ' . $attribut . ' = ' . $new . 
			' WHERE id = '.$_SESSION['id']. '';


	$donnees = $bdd->prepare($query);
	return $donnees->execute();
}



?>