<?php
$Pid=$oldId->getPid();
?>
<form method="POST" action="index.php?controller=Projet&action=updated&Pid=<?=$Pid?>">
  <fieldset>
     <legend>Modification d'une Projet </legend> 
<p>
 <label for="Pid">Id</label> :
   <input type="text"value= "<?=$Pid?>" name="Pid"
    id="Pid" required/>
</p>
<p>
 <label for="NomProjet">nom de projet</label> :
   <input type="text" value= "<?=$oldProjet->$getNomProjet?>" name="NomProjet" id="NomProjet" required/>
</p>
<p>
  <label for="responsable">responsable</label> :
    <input type="text" value= "<?=$oldProjet->$getresp?>" name="responsable" id="responsable" required/>
</p>
<p>
  <label for="Start_date">Start_date</label> :
    <input type="date" value= "<?=$oldProjet->getStart_date()?>" name="Start_date" id="Start_date" required/>
</p>
<p>
 <label for="End_date">End_date</label> :
    <input type="date" value= "<?=$oldProjet->getEnd_date()?>" name="End_date" id="End_date" required/>
</p>
<p>
    <input type="submit" value="Envoyer" />
    <input type="reset" value="reset" />
</p>>
	</fieldset>
</form>