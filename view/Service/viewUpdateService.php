<?php
$Sid=$oldService->getSid();
?>
<form method="POST" action="index.php?controller=Service&action=updated&Sid=<?=$Sid?>">
  <fieldset>
     <legend>Modification d'une Service </legend> 
	 <p>
		 <label for="Sid">Sid</label> :
		 <input type="text" value= "<?=$Sid?>" name="Sid" id="Sid" required readonly/>
	 </p> 
	 <p>
		<label for="Snom">type de service/label> :
		<input type="text" value= "<?=$oldService->getSnom()?>" name="Snom" id="Snom" required/>
	</p>
	<p>
		<label for="emp">employeur</label> :
		<input type="text" value= "<?=$oldService->getemp()?>" name="emp" id="emp" required/>
	</p>

	<p>
		<input type="submit" value="Envoyer" />
		<input type="reset" value="reset" />
	</p>
	</fieldset>
</form>