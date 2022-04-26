 <?php
	$id=$Employer->getEMPid();
	echo '<p>Id Employeur : '.$id;
	echo'<p>Ncin : '.$u->getEMPncin();
	echo '<br/>Nom : '.$u->getNom().'      - Prenom :   '.$u->getPrenom() .'      - date naissance : '.$u->getdate_naissance().'- job : '.$u->getJob().'- service : '.$u->getHire_date().'</p>';
	echo '<div class= updt><a href="index.php?controller=Employer&action=update&id='.$id.'">
	 Modifier </a></div>';
	echo '<div class= supp><a href="index.php?controller=Employer&action=delete&id='.$id.'">
	 Supprimer </a></div> ';
?>


