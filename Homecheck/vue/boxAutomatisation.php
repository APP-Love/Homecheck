<?php 
	

$mai=$_SESSION['maison'];
  
$croixid=$element['id'] ;

	?>


<div class="box4" >

<?php 

	echo ("<b>Action : </b>  "); 
	echo  ($element['action']);
	echo ("<b> Piece(s) : </b>");
	echo $element['pieces'];
	echo ("<b> Recurrence: </b>");
	echo $element['recurrence'];
	echo ("<b> A partir de : </b>");
	echo $element['heureDebut'];
	echo ("<b> Jusqu'a :</b>");
	echo $element['heureFin'];
	echo "<b> Temperature : </b>";
	
if ( $element['temperature']!=0 ){echo $element['temperature'];
	echo "°C";}	
		

	if ($element['temperature']==0)
	{
		echo "/";
	}
	
	

	
 ?>

 

 <?php echo "<a href='index.php?cible=autoCroix&id=".htmlentities($croixid)."'> <img class='plan' src='image/croix.png' alt='Supprimer automatisation'/></a>";?>
</div>


 





