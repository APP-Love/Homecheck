<?php
	include ("modele/connexion_bdd.php"); 
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
	echo "h";
	echo ("<b> Jusqu'a :</b>");
	echo $element['heureFin'];
	echo "h";
	echo "<b> Temperature : </b>";
	if ( $element['action']!=" Regler la temperature " )
	{
		echo "/";
	}
	else if ($element['temperature']!=0){
	echo $element['temperature'];
	echo "°C";}	

	else if ($element['temperature']==0)
	{
		echo "/";
	};
	
	


 ?>

 <img class="croix1" src="image/croix.png" alt="supprimer automatisation" />

</div>








