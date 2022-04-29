 <?php
	$ncin=$u->getNcin();
	echo '<p>NCIN Client : '.$ncin;
	echo '<br/>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'- email : '.$u->getEmail().'
	- date naissance : '.$u->getDate_naissance().'- ville : '.$u->getVille().'- service : '.$u->getService().'</p>';
	echo '<div class= updt><a href="index.php?controller=Client&action=update&ncin='.$ncin.'>
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=Client&action=delete&ncin='.$ncin.'>
	 Supprimer </a></div> ';
?>


