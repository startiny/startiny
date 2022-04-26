<p>L'utilisateur a bien été modifié</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Utilisateur <a href='index.php?controller=Client&action=read&ncin=$ncin'> $ncin </a> </p>" ;
?>