 <?php
	$Pid=$Projet->getPid();
	echo '<p>Id Projet : '.$Pid;
	echo '<br/>le responsable  : '.$Projet->getresp().' - start_date: '.$Projet->getStart_date().' - End_date: '.$Projet->getEnd_date().'</p>';
	echo '<div class= updt><a href="index.php?controller=Projet&action=update&Pid='.$Pid.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=Projet&action=delete&Pid='.$Pid.'">
	 Supprimer </a></div> ';
?>


