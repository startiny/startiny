<?php
?>
<form method="post" action="index.php?controller=Employer&action=created">
 <fieldset>
  <legend>Création d'une nouvelle employeur</legend>
<p>
  <label for="EMPid">id employeur</label> :
   <input type="text" placeholder="Ex : 12358TU569" name="EMPid"
    id="EMPid" required/>
</p>
<p>
  <label for="EMPncin">NCIN </label> :
    <input type="text"  name="EMPncin"  id="EMPncin" maxlength="8" required/>
</p> 
<p>
  <label for="n">Nom </label> :
     <input type="text"  name="n" id="n"  required/>
</p> 
<p>
  <label for="p">Prenom </label> :
    <input type="text" name="p" id="p"  required/>
</p> 
<p>
  <label for="d">Date de naissance </label> :
    <input type="date" name="d" id="d"    value="2018-07-22"
    min="1960-01-01" max="2005-12-31" required/>
</p>
<p>job</p>

<div>
  <input type="radio" id="1" name="job" value="1"
         checked>
  <label for="1">Community manager</label>
</div>

<div>
  <input type="radio" id="2" name="job" value="2">
  <label for="2">Web developper</label>
</div>

<div>
  <input type="radio" id="3" name="job" value="3">
  <label for="3">Graphic designer</label>
</div> 
<p>
  <label for="h">Hire date</label> :
    <input type="date" name="h" id="h"    value="2018-07-22"
    min="1960-01-01" max="2005-12-31" required/>
</p> 
<p>
  <input type="submit" value="Envoyer" /> 
  <input type="reset" value="reset" />
</p>
</fieldset>
</form>