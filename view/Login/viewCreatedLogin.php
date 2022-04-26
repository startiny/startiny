<p>New login</p>
<?php
$Lid = $Login->getLid(); 
echo "<p> Login <a href='index.php?controller=Login&action=read&Lid=$Lid'> $Lid </a> </p>" ;
?>