<p>La Service a bien été créée</p>
<?php
$Sid = $Service->getSid(); 
echo "<p> Service <a href='index.php?controller=Service&action=read&Sid=$Sid'> $Sid </a> </p>" ;
?>