<?php
	foreach ($tab_c as $Client){
		  $ncin=$Client->getNcin();
	  echo " ncin : 
	  <a href='index.php?controller=Client&action=read&ncin=$ncin'>$ncin</a></p>";
	  echo " Nom : ".$Client->getNom();
	  echo " Prénom : ".$Client->getPrenom();
	  echo " email: ".$Client->getEmail();
	  echo " date de naissance : ".$Client->getDate_naissance();
	  echo " ville : ".$Client->getVille();
	  echo " service : ".$Client->getService();

	
	echo "<div class= 'thumb'>
 		<a  href='index.php?controller=Client&action=update&ncin=$ncin'> Modifier </a>
 	</div>
 	<div class= 'thumb'>
 		<a  href='index.php?controller=Client&action=delete&ncin=$ncin'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div>
	<a href='index.php?controller=Client&action=create'>Ajouter un nouvel utilisateur</a>
</div>
