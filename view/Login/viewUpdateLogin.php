<?php
$Lid=$oldLid->getLid();
?>
<form method="POST" action="index.php?controller=Login&action=updated&Lid=<?=$Lid?>">
  <fieldset>
     <legend>Modification d'une connexion </legend> 
	 <p>
		 <label for="Kd">Id</label> :
		 <input type="text" value= "<?=$Lid?>" name="Lid" id="Lid" required readonly/>
	 </p> 
	 <p>
		 <label for="username">Username</label> :
		 <input type="text" value= "<?=$up->getUsername()?>" name="username" id="username"  required/>
     </p> 
	 <p>
		 <label for="password">Password</label> :
		 <input type="password" value= "<?=$up->getPassword()?>" name="password" id="password"  required/>
     </p>
	 <p>
      <label for="date">Date de login</label> :
      <input type="date" value= "<?=$up->getDate()?>" name="date" id="date" min="2018-01-01" max="2030-12-31" required/>
  </p>
	<p>
		<input type="submit" value="Envoyer" />
	</p>
	</fieldset>
</form>