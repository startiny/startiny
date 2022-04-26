<?php
$ncin=$up->getNcin();
?>
<form method="POST" action="index.php?controller=Clientr&action=updated&ncin=<?=$ncin?>">
  <fieldset>
     <legend>Modification d'un utilisateur </legend> 
	 <p>
		 <label for="ncin">ncin</label> :
		 <input type="text" value= "<?=$ncin?>" name="ncin" id="ncin" required readonly/>
	 </p> 
	 <p>
		 <label for="nom">Nom</label> :
		 <input type="text" value= "<?=$up->getNom()?>" name="nom" id="nom"  required/>
     </p> 
	 <p>
		 <label for="prenom">Prenom</label> :
		 <input type="text" value= "<?=$up->getPrenom()?>" name="prenom" id="prenom"  required/>
     </p>
	 <p>
      <label for="email">Email </label> :
      <input type="email"value= "<?=$up->getEmail()?>" name="email" id="email"   required/>
    </p> 
    <p>
      <label for="date_naissance">Date de naissance </label> :
      <input type="date" value= "<?=$up->getDate_naissance()?>" name="date_naissance" id="date_naissance" 
      min="2018-01-01" max="2030-12-31" required/>
  </p>
   <p>
      <label for="ville">ville</label> :
      <input type="text"value= "<?=$up->getVille()?>" name="ville" id="ville"  required/>
  </p> 
  <p>
     <label for="service">service</label> :
     <input type="text" value= "<?=$up->getService()?>" name="service" id="service"  required/>
  </p> 
	 <p>
     <input type="submit" value="Envoyer" /> 
     <input type="reset" value="reset" />
	 </p> 
   </fieldset> 
</form>
