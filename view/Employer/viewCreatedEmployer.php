<p>L'employeur a bien été créée</p>
<?php
$Empncin = $Employer->getEMPncin(); 
echo "<p> Employeur <a href='index.php?controller=Employer&action=read&ncin=$EMPncin'> $EMPncin </a> </p>" ;
?>