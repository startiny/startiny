<p>Login a bien été modifiée</p>
<?php
$Lid=$oldLid->getLid();
echo "<p> Login <a href='index.php?controller=Login&action=read&Lid=$Lid'> $Lid </a> </p>" ;
?>