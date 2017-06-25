<?php
require "commun.php";

	$entete= entete(2);

		ob_start();
?>

	<div id="polar2">
		 <p id="mention">Mentions légales</p>
		 	
		 			<p>Propriétaire de la marque : Domisep</p>
		 			<p>Propriétaire du nom du domaine : Domisep</p>
		 			<p>Siège : 10, Rue des Lavandins - 75006 Paris</p>
		 			<p>Téléphone : 09 00 00 00 00</p>
		 			<p>Fax : 01 00 00 00 00</p>
		 			<p>Responsable de la publication : Equipe G10D</p>

		 		<p>Le contenu de ce site est protégé par application des dispositions législatives et réglementaires applicables. Dans ces conditions, tout ou partie des noms, dénominations, logos, sigles, expressions, dessins, produits figurant au présent site constituent des marques ou des éléments déposés et protégés par le droit d'auteur</p>

		 		<p>En conséquence, toute reproduction, copie, adaptation, publication, distribution, diffusion et ou utilisation, sur quelque que soit, des dits éléments ou marques protégés qui n'aurait pas été au préable autorisé par "HomeCheck" est strictement interdite. LE non respect de ces règles pourra engager la responsabilité civile et pénale du contrevenant.</p>

		 		<p>En outre, "HomeCheck" rappelle qu'il ne dispose d'aucun contrôle et n'engage en aucune façon sa responsabilité quant à la création de liens vers des sites extérieurs à HomeCheck et quant au contenu desdits sites. L'accès à d'autres sites se fera sous la seule responsabilité de l'internaute et en aucun cas la société "HomeCheck" ne pourra être tenue responsable des dommages directs ou indirects résultant de l'usage de son site ou d'autres sites qui lui sont liés. POur limiter ce type de risque, l'inclusion d'un lien vers "HomeCheck" à partir  d'un site doit faire l'objet d'une autorisation de notre part.</p>
		 	
		 		<p>Finalité des cookies : Les cookies sont utilisés sur notre site pour assurer le bon fonctionnement de notre site et de pouvoir améliorer les fonctionnalités déjà existante afin de vous fournir un service de qualité. Tout utilisateaur de notre plateforme à un droit de regard sur les cookies utlisés sur notre site. Tout utilisateur de la plateforme HomeCheck à un droit d'opposition sur l'utilisation des cookies.</p>
		</div>

    <?php
    $contenu = ob_get_clean();

    include 'gabarit.php';
?>