<?php

function resultutilisateur($bdd){
	$sq = $bdd->query(" SELECT * FROM utilisateur ");
    $result = $sq->fetchAll();
    return $result;
}

function donneescapteuractionneur($bdd){
$sq2 = $bdd->query(" SELECT COUNT(*) FROM capteuractionneur c 
	INNER JOIN piece p ON c.id_piece=p.id 
	INNER JOIN logement l ON p.id_logement=l.id		
	INNER JOIN utilisateur u ON l.id_utilisateur=u.id
	 WHERE u.id= '".$a."'");
    $donnees = $sq2->fetch();
    return $donnees;
}