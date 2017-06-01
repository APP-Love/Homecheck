 <?php
require "commun.php";
 

 $entete= entete(3);

    ob_start();
    ?>
















    <?php
    $contenu = ob_get_clean();

   

    include 'gabarit.php';
?>
