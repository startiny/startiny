<?php
?>
<form method="post" action="index.php?controller=Login&action=created">
<fieldset>
<legend>Création d'une nouvelle Login</legend>
<p>
<label for="Lid">Id</label> :
<input type="text" placeholder="Ex : 12358TU569" name="Lid"
id="Lid" required/>
</p>
<p>
<label for="username">username</label> :
<input type="text" name="username" id="username" required/>
</p>
<p>
<label for="password">password</label> :
<input type="password" name="Password" id="password" required/>
</p>
<p>
<label for="date">date de login</label> :
<input type="date" name="date" id="date" required/>
</p>
<p>
<input type="submit" value="Envoyer" />
<input type="reset" value="reset" />
</p>
</fieldset>
</form>