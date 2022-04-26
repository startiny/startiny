<?php
?>
<form method="post" action="index.php?controller=Service&action=created">
<fieldset>
<legend>Création d'une nouvelle Service</legend>
<p>
  <label for="Sid">Id</label> :
    <input type="text" placeholder="Ex : 12358TU569" name="Sid"
      id="Sid" required/>
</p>
<p>
  <label for="Snom">Nom de service </label> :
    <input type="text"  name="Snom" id="Snom" required/>
</p>
<p>
   <label for="emp">employeur</label> :
<input type="text" name="emp" id="emp" required/>
</p>
<p>
<input type="submit" value="Envoyer" />
</p>
</fieldset>
</form>