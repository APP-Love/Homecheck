



<?php 



$mai=$_SESSION['maison'];
  
$croixid=$element['id'] ;


?>

<div class="box4" >

<?php 

	echo ("<b>Action : </b>  "); 
	echo  ($element['action']);
	echo ("<b> Room(s) : </b>");
	echo $element['pieces'];
	echo ("<b> Recurrence: </b>");
	echo $element['recurrence'];
	echo ("<b> From : </b>");
	echo $element['heureDebut'];
	echo ("<b> To :</b>");
	echo $element['heureFin'];
	echo "<b> Temperature : </b>";
	if ( $element['temperature']!=0 ){echo $element['temperature'];
	echo "°C";}	
		

	if ($element['temperature']==0)
	{
		echo "/";
	}	 

	 
	

	
 ?>

 

 <?php echo "<a href='index2.php?cible=autoCroix&id=".htmlentities($croixid)."'> <img class='plan' src='image/croix.png' alt='Delete automation'/></a>";?>
</div>
