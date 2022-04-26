 <?php
	$Lid=$Login->getLid();
	echo '<p>Id de conexion : '.$Lid;
	echo '<br/>nom de client : '.$Login->getUsername().' - Password : '.$Login->getPassword().' - Date de la cnx: '.$Login->getDate().'</p>';
	echo '<div class= updt><a href="index.php?controller=Login&action=update&Lid='.$Lid.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=Login&action=delete&Lid='.$Lid.'">
	 Supprimer </a></div> ';
?>


