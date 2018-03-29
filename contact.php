<?php

include 'header.html';

?>

<h1>Contactez-nous</h1>

<form>
    <label for='sujet'>Sujet : </label>
    <select name='sujet' id='sujet'>
        <option selected>Vous êtes géniaux</option>
        <option>Vous êtes beaux</option>
        <option>Vous êtes intelligents</option>
        <option>Je veux vous donner de l'argent</option>
        <option>Autre</option>
    </select>
    <br /><br />
    <label for="contenu">Message : </label>
    <textarea name="contenu" rows="10" cols="20">
Tapez ici votre message...
    </textarea>
    <br />
    <button type="submit">Envoyer</button>
    
</form>

<?php

include 'footer.html';

?>


