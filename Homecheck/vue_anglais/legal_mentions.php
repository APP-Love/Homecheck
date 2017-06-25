<?php
require "common.php";

	$entete= entete(2);

		ob_start();
?>

	<div id="polar2">
		 <p id="mention">Legal Notice</p>
		 	
		 			<p>Owner of the mark: Domisep</p>
		 			<p>Domain Name Owner: Domisep</p>
		 			<p>Head Office : 10, Rue des Lavandins - 75006 Paris</p>
		 			<p>Phone number : 09 00 00 00 00</p>
		 			<p>Fax : 01 00 00 00 00</p>
		 			<p>Responsible for publication: Team G10D</p>

		 		<p>The content of this site is protected by applicable laws and regulations. In these conditions, all or part of the names, denominations, logos, abbreviations, expressions, drawings, products appearing on this site constitute marks or elements deposited and protected by the copyright.</p>

		 		<p>Accordingly, any reproduction, copying, adaptation, publication, distribution, dissemination and / or use of any of the protected elements or marks which have not been authorized by "HomeCheck" is strictly prohibited. Failure to comply with these rules may result in the civil and criminal liability of the offender.</p>

		 		<p>In addition, "HomeCheck" recalls that it has no control and does not assume in any way its responsibility for the creation of links to sites outside of HomeCheck and the content of these sites. Access to other sites will be under the sole responsibility of the user and in no case will the company "HomeCheck" be held liable for any direct or indirect damage resulting from the use of its site or other sites which are linked to it. To limit this type of risk, the inclusion of a link to "HomeCheck" from a site must be authorized by us.</p>
		 	
		 		<p>Purpose of cookies: Cookies are used on our site to ensure the proper functioning of our site and to be able to improve the already existing functionalities in order to provide you a quality service. Any user of our platform has a right of view on the cookies used on our site. Any user of the HomeCheck platform has a right to object to the use of cookies.
                </p>
		</div>

    <?php
    $contenu = ob_get_clean();

    include 'gabarit_anglais.php';
?>