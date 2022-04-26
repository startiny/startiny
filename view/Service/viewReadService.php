 <?php
	$Sid=$Service->getSid();
	echo '<p>Sid Service : '.$Sid;
	echo '<br/>service: '.$Service->getMSnom().' - employeur : '.$Service->getemp().' </p>';
	echo '<div class= updt><a href="index.php?controller=Service&action=update&Sid='.$Sid.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=Service&action=delete&Sid='.$Sid.'">
	 Supprimer </a></div> ';
?>


