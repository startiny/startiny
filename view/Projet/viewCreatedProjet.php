<p>Le projet a bien été créée</p>
<?php
$Lid = $Projet->getLid(); 
echo "<p> Projet <a href='index.php?controller=Projet&action=read&Lid=$Lid'> $Lid </a> </p>" ;
?>