<?php
	foreach ($tab_c as $u){
	  echo "<p> Nom : ".$u->getNom();
	  echo " Prénom : ".$u->getPrenom();
	  $ncin=$u->getncin();
	  echo " email: ".$u->getEmail();
	  echo " date de naissance : ".$u->getDate_naissance();
	  echo " ville : ".$u->getVille();
	  echo " service : ".$u->getService();
	  echo " ncin : 
	  <a href='index.php?controller=Client&action=read&ncin=$ncin'>$ncin</a></p>";
	echo "<div class= 'thumb'>
 		<a  href='index.php?controller=Client&action=update&ncin=$ncin'> Modifier </a>
 	</div>
 	<div class= 'thumb'>
 		<a  href='index.php?controller=Client&action=delete&ncin=$ncin'> Supprimer </a>
 	</div><hr/>";
	}
?>
<div class="scroll-to-section">
	<a href='index.php?controller=Client&action=create'>Ajouter un nouvel utilisateur</a>
</div>
