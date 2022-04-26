<?php
	foreach ($tab_s as $Service){
	  echo "<p> service : ".$Service->getSnom();
	  echo " employeur : ".$Service->getemp();
	  $Sid=$Service->getSid();
	  echo " Id : 
	  <a href='index.php?controller=Service&action=read&Sid=$Sid'>$Sid</a></p>";
	
	echo "<div class= 'updt'>
 		<a href='index.php?controller=Service&action=update&Sid=$Sid'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=Service&action=delete&Sid=$Sid'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=Service&action=create'>Ajouter une nouvelle Service</a>
</div>
