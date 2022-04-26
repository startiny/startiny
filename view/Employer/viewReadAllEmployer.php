<?php
	foreach ($tab_v as $Employer){
		echo "<p> Nom : ".$u->getNom();
		echo " Prénom : ".$u->getPrenom();
		$ncin=$u->getEMPncin();
		echo " date de naissance: ".$u->getdate_naissance();
		echo " job : ".$u->getJob();
		echo " hire date : ".$u->getHire_date();
	  echo " Employeur : 
	  <a href='index.php?controller=Employer&action=read&ncin=$ncin'>$ncin</a>";

	  $id=$voiture->getEMPid();
	  echo " ID : 
	  <a href='index.php?controller=Employere&action=read&id=$id'>$id</a></p>";
	
	echo "<div class= 'updt'>
 		<a href='index.php?controller=Employere&action=update&id=$id'> Modifier </a>
 	</div>
 	<div class= 'supp'>
 		<a href='index.php?controller=Employer&action=delete&id=$id'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class= 'add'>
	<a href='index.php?controller=Employer&action=create'>Ajouter une nouvelle voiture</a>
</div>
