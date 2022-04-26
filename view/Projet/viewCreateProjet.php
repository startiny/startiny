<?php
?>
<form method="post" action="index.php?controller=Projet&action=created">
<fieldset>
<legend>Création d'un nouvelle Projet</legend>
<p>
<label for="Pid">Id</label> :
<input type="text" placeholder="Ex : 12358TU569" name="Pid"
id="Pid" required/>
</p>
<p>
<label for="NomProjet">nom de projet</label> :
<input type="text"  name="NomProjet" id="NomProjet" required/>
</p>
<p>
<label for="responsable">responsable</label> :
<input type="text" name="responsable" id="responsable" required/>
</p>
<p>
<label for="Start_date">Start_date</label> :
    <input type="date" name="Start_date" id="Start_date" required/>
</p>
<p>
<label for="End_date">End_date</label> :
    <input type="date" name="End_date" id="End_date" required/>
</p>
<p>
<input type="submit" value="Envoyer" />
<input type="reset" value="reset" />
</p>
</fieldset>
</form>