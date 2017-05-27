<? php
require "commun.php";

	$entete= entete(2);

		ob_start();
?>

	<Section>
		 <h1>Mentions légales</h1>
		 	<h2>Concernant l'entreprise</h2>
		 		<ul>
		 			<li>Nom de l'entreprise : Domisep</li>
		 			<li>Nom de la plateforme : Homecheck</li>
		 			<li>Siège : 10, Rue des Lavandins - 75006 Paris</li>
		 			<li>Téléphone : 09 00 00 00 00</li>
		 			<li>Fax : 01 00 00 00 00</li>
		 			<li>Responsable de la publication : Equipe G10D</li>
		 		</ul>>

		 	<h2>Concernant les cookies</h2>
		 		<ul>
		 			<li>Finalité des cookies : Les cookies sont utilisés sur notre site pour assurer le bon fonctionnement de notre site et de pouvoir améliorer les fonctionnalités déjà existante afin de vous fournir un service de qualité.</li>
		 			<li>Tout utilisateaur de notre plateforme à un droit de regard sur les cookies utlisés sur notre site</li>
		 			<li> Tout utilisateur de la plateforme HomeCheck à un droit d'opposition sur l'utilisation des cookies.</li>
		 		</ul>

    <?php
    $contenu = ob_get_clean();

    include 'gabarit.php';
?>