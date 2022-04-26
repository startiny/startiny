<?php
$id=$oldd->getEMPid();
?>
<form method="POST" action="index.php?controller=voiture&action=updated&immatriculation=<?=$immatriculation?>">
  <fieldset>
     <legend>Modification d'une employeur </legend> 
	 <p>
		 <label for="EMPid">Id</label> :
		 <input type="text" value= "<?=$EMPid?>" name="EMPid" id="EMPid" required readonly/>
	 </p> 
	 <p>
		 <label for="EMPncin">Ncin</label> :
		 <input type="text" value= "<?=$ncin?>" name="ncin" id="ncin" required readonly/>
	 </p> 
	 <p>
		 <label for="n">Nom</label> :
		 <input type="text" value= "<?=$up->getNom()?>" name="n" id="n"  required/>
     </p> 
	 <p>
		 <label for="p">Prenom</label> :
		 <input type="text" value= "<?=$up->getPrenom()?>" name="p" id="p"  required/>
     </p>
    <p>
      <label for="d">Date de naissance </label> :
      <input type="date" value= "<?=$up->getdate_naissance()?>" name="d" id="d" min="2018-01-01" max="2030-12-31" required/>
  </p>
  <p>
     <label for="j">job</label> :
     <input type="text" value= "<?=$up->getJob()?>" name="j" id="j"  required/>
  </p> 
	<p>
		<input type="submit" value="Envoyer" />
		<input type="reset" value="reset" />
	</p>
	</fieldset>
</form>