<p>Le client a bien été créé</p>
<?php
$ncin = $u->getNcin(); 
echo "<p> Client <a href='index.php?controller=Client&action=read&ncin=$ncin'> $ncin </a> </p>" ;
?>