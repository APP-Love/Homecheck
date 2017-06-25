<?php $log=$_SESSION
	include ("modele/connexion_bdd.php"); 
	?>


<div class="box4" >

<?php 
  $idboxadmin = $elem['id'];
  $nomboxadmin = $elem['nom'];
  $prenomboxadmin= $elem['prenom'];
  $typeboxadmin = $elem['type'];


	echo  $nomboxadmin ',' $prenomboxadmin ',' $typeboxadmin ; 
		
 ?>


 <?php echo "<a href='index.php?cible=autoCroix&id=".htmlentities($log)."'> <img class='plan' src='image/croix.png' alt='Supprimer automatisation'/></a>";?>



 


</div>