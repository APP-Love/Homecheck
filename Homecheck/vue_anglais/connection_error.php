 <?php
include "common.php";
    

    $entete = entete(1);

    ob_start();
    ?>
        <fieldset>
            <form method="POST" action="index2.php?cible=verif">
                Login
                <br/>
                <input type="text" name="identifiant"/>
                <br/>
                Password
                <br/>
                <input type="text" name="mdp"/>
                <br/>
                <input type='submit'/>
            </form>
        </fieldset>
    <?php
    $menu = ob_get_clean();
    $contenu = "<h2>Error in the connection form</h2>".$erreur;
    $pied = pied();

    include 'gabarit_anglais.php';
?>

  