<?php

include 'modele/connexion_bdd.php';

if(isset($_POST['enre'])){

	$temperature=$_POST['temperature'];
	$hdebut=$_POST['Hdebut'];
	$hfin=$_POST['Hfin'];


if (empty ($_POST['action'])) {
	echo" Veuillez cocher toutes les options !";
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

	

	if ($_POST['room']=='allroom')
	{
		$piece1='1';
	}

	if ($_POST['room']=='chambres')
	{
		$piece1='2';
	}
	if ($_POST['room']=='garageterrasse')
	{
		$piece1='3';
	}
	if ($_POST['room']=='cuisinesalon')
	{
		$piece1='4';
	}
	if ($_POST['room']=='sdb')
	{
		$piece1='5';
	}


	if ($_POST['recurrence']=='alldays')
	{
		$recu1='1';
	}
	if ($_POST['recurrence']=='lundivendredi')
	{
		$recu1='2';
	}
	if ($_POST['recurrence']=='weekend')
		{
			$recu1='3';
		}


	$sql="INSERT INTO automatisations VALUES ('',".$action1.",'".$piece1."','".$recu1."','".$hdebut."','".$hfin."','".$temperature."')";

	try
		{
			$bdd->query($sql);
			
			echo "oh damned";
		}
	 catch (Exception $e) {
	            $e->getMessage();
	    } 

	

}