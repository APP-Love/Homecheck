<?php
include ("modele/connexion_bdd.php");

$data_tab = file_get_contents('http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=010D');
$trame = str_split($data_tab ,33);
$size=count($trame);
for($i=0 ; $i<$size-1; $i++){
 $tram = $trame[$i];


list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) =
sscanf($tram,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");


if ($v == 1111){
	$v= 1 ;
}
if ($v == 0000){
	$v= 0 ;
}
if ($c == 5 ){
	$type = 4; 
	$nom="Capteur lumière";
	if ($v == 1){
	$donnees= 1 ;
	}
	else if ($v == 0){
	$donnees= 0 ;
	}
	
}
 if ($c == 4 ){
	$type = 2; 
	$donnees= $v[2].$v[3].'%';
	$nom="Capteur humidité";
}
if ($c == 3 ){
	$type = 1; 
	$donnees=$v[1].$v[2].','.$v[3].'C°';
	$nom="Capteur température";
}






$temps=0;
$sql1000 =  "INSERT INTO information (id, id_piece, type, donneesphysiques ,temps, nom ) VALUES ('', '".$temps."', '".$type."', '".$donnees."','".$temps."' , '".$nom."')";
                                            // on insère les informations du formulaire dans la table
    
        $bdd->exec($sql1000);
                                          // on affiche le résultat pour le visiteur
       
  
  

}
