<?php
	foreach ($tab_v as $Login){
	  echo "Username : ".$Login->getUsernamer();
	  echo "Password : ".$Login->getPassword();
	  echo "Date : ".$Login->getDate();

	  $Lid=$Login->getLid();
	  echo " Id : 
	  <a href='index.php?controller=Login&action=read&Lid=$Lid'>$Lid</a>";

	
	echo "<div class= 'updt'>
 		<a href='index.php?controller=Login&action=update&Lid=$Lid'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=Lid&action=delete&Lid=$Lid'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=Login&action=create'>Ajouter une nouvelle voiture</a>
</div>
