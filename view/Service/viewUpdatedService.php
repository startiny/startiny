<p>Le service a bien été modifiée</p>
<?php
$Sid=$oldservice->getSid();
echo "<p> service <a href='index.php?controller=service&action=read&Sid=$Sid'> $Sid </a> </p>" ;
?>