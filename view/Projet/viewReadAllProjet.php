<?php
	foreach ($tab_p as $Login){
	  echo "<p> Project name: ".$Login->getNomProjet();
	  echo " resp : ".$Login->getresp();
	  $Pid=$Login->getPid();
	  echo " Id : 
	  <a href='index.php?controller=Projrt&action=read&ncin=$ncin'>$ncin</a>";

	  $Start_date=$Login->getStart_date();
	  echo " Start_date : 
	  <a href='index.php?controller=Login&action=read&Start_date=$Start_date'>$Start_date</a></p>";
	  $End_date=$Login->getEnd_date();
	  echo " End_date : 
	  <a href='index.php?controller=Login&action=read&End_date=$End_date'>$End_date</a></p>";
	

	echo "<div class= 'updt'>
 		<a href='index.php?controller=Login&action=update&Pid=$iPid'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=Login&action=delete&Pid=$Pid'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=Login&action=create'>Ajouter une nouvelle Projet</a>
</div>
