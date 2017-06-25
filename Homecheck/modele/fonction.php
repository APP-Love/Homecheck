<?php

// Requete SQL SELECT
function selectionajoutcapteur() {
    
    $capteur = $bdd->query('SELECT * FROM capteuractionneur WHERE id_piece=1');
$donneescapteur = $capteur->fetchAll(PDO:: FETCH_ASSOC);
    return $donneescapteur;
}

function selectionajoutauto() {
    
    $auto2 = $bdd->query('SELECT * FROM automatisations');
$donneesAuto = $auto2->fetchAll(PDO:: FETCH_ASSOC);
    return $donneesAuto;
}



?>