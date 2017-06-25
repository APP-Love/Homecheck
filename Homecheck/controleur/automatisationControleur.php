

<?php



$mai=$_GET['id'];
include 'modele/connexion_bdd.php';

if(isset($_POST['enre'])){

	$temperature=$_POST['temperature'];
	$hdebut=$_POST['Hdebut'];
	$hfin=$_POST['Hfin'];
	$erreur=" ";

	if (empty($_POST['action'])||empty($_POST['room'])||empty($_POST['recurrence'])||empty($hdebut)||empty($hfin))
		
	 {
	 	$erreur="<font color=red size=5> <center> Automation has not been saved, please check all required options </center></font>";
	 	include 'vue_anglais/ENautomatisations.php';
	 	include 'vue_anglais/common.php';



	}
	
	if (empty ($_POST['action'])) {
		$action1="Veuillez choisir une action";
		
	}

	else if ($_POST['action']== 'chauffage')

	{		
		$action1='1';
	}

	

	else if ($_POST['action']== 'ouverturevolets')
	{
		$action1='2';		
	}

	else if ($_POST['action']== 'fermeturevolets')
	{
		$action1='3';		
	}

	else if ($_POST['action']== 'lumiere')
	{
		$action1='4';
	}

	if (empty ($_POST['room'])) {
	$piece1="Veuillez choisir une piece";


	}

	else if ($_POST['room']=='allroom')
	{
		$piece1='1';
	}

	else if ($_POST['room']=='chambres')
	{
		$piece1='2';
	}
	else if ($_POST['room']=='garageterrasse')
	{
		$piece1='3';
	}
	else if ($_POST['room']=='cuisinesalon')
	{
		$piece1='4';
	}
	else if ($_POST['room']=='sdb')
	{
		$piece1='5';
	}

	if (empty ($_POST['recurrence'])) {
		$recu1="Veuillez choisir une recurrence";
		
	}
	else if ($_POST['recurrence']=='alldays')
	{
		$recu1='1';
	}
	else if ($_POST['recurrence']=='lundivendredi')
	{
		$recu1='2';
	}
	else if ($_POST['recurrence']=='weekend')
		{
			$recu1='3';
		}


	$sql="INSERT INTO automatisations VALUES ('',".$mai.",".$action1.",'".$piece1."','".$recu1."','".$hdebut."','".$hfin."','".$temperature."')";

	try
		{
			$bdd->query($sql);
			include 'vue_anglais/ENautomatisations.php';
			
		}
	 catch (Exception $e) {
	            $e->getMessage();
	    } 

	

}

else if(isset($_POST['croix'])){

	/*include "controleur/supprimerAuto.php";
	$sql3="DELETE FROM automatisations WHERE id='".$boxID."' ";
	try
		{
			$bdd->query($sql3);

			
		}
	 catch (Exception $e) {
	            $e->getMessage();
	    } */
			include 'vue_anglais/ENautomatisations.php';


}