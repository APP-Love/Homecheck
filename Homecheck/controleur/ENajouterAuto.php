



<?php 
    include ("modele/connexion_bdd.php");
    $mai=$_SESSION['maison'];
    $auto2 = $bdd->query('SELECT * FROM automatisations a WHERE a.id_piece="'.$mai.'"');
$donneesAuto = $auto2->fetchAll(PDO:: FETCH_ASSOC);
foreach($donneesAuto as $element){

    

    if ($element['action']==1)
     
     {

        $element['action']=" Regulate the temperature ";
    }


    else if ($element['action']==2)
     {

        $element['action']=" Openning shutter";
    }

    else if ($element['action']==3)
     {

        $element['action']=" Closing shutter ";
    }

    else if ($element['action']==4)
     {

        $element['action']=" Turn on the light ";
    }
    


    if ($element['pieces']==1)
    {
        $element['pieces']=" All rooms ";
    }

    else if ($element['pieces']==2)
    {
        $element['pieces']=" All Bedroom ";
    }

    else if ($element['pieces']==3)
    {
        $element['pieces']=" Garage and terace ";
    }

    else if ($element['pieces']==4)
    {
        $element['pieces']=" Kitchen and living room ";
    }

    else if ($element['pieces']==5)
    {
        $element['pieces']=" Bathroom ";
    }


    if ($element['recurrence']==1)
    {
        $element['recurrence']="All days ";
    }

    if ($element['recurrence']==2)
    {
        $element['recurrence']="Monday to Friday";
    }

    if ($element['recurrence']==3)
    {
        $element['recurrence']="Saturday and Sunday";
    }



    
    include 'vue_anglais/ENboxAutomatisation.php';


     // ."   "., $element['piece'],."   "., $element['recurrence'], ."  "., $element['heureDebut'], ."  "., $element['heureFin'], ."  "., $element['temperature'];
    
    



}
?>