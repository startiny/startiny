<form method="POST" action="index.php?controller=Client&action=created">
  <fieldset>
     <legend>Ajout d'un utilisateur </legend> 
	 <p>
     <label for="ncin">NCIN </label> :
     <input type="text"  name="ncin"  id="ncin" maxlength="8" required/>
     </p> 
	 <p>
		 <label for="nom">Nom </label> :
		 <input type="text"  name="nom" id="nom"  required/>
	  </p> 
	 <p>
     <label for="prenom">Prenom </label> :
     <input type="text" name="prenom" id="prenom"  required/>
     </p> 
     <p>
     <label for="email">Email </label> :
     <input type="email" name="email" id="email"  required/>
     </p> 
     <p>
     <label for="date_naissance">Date de naissance </label> :
     <input type="date" name="date_naissance" id="date_naissance"    value="2018-07-22"
        max="2020-12-31" required/>
     </p>
     <p>
     <label for="ville">ville</label> :
     <input type="text" name="ville" id="ville"  required/>
     </p> 
     <p>
     <label for="service">service</label> :
     <input type="text" name="service" id="service"  required/>
     </p> 
	 <p>
     <input type="submit" value="Envoyer" /> 
     <input type="reset" value="reset" />
	 </p>
   </fieldset> 
</form>
