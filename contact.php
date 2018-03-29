<?php

include 'header.html';

?>

<h1>Contactez-nous</h1>

<form>
    <select name="sujet" id='sujet'>
        <option>Vous êtes géniaux</option>
        <option>Vous êtes beaux</option>
        <option>Vous êtes intelligents</option>
        <option>Je veux vous donner de l'argent</option>
        <option>Autre</option>
    </select>
    <textarea name="contenu" rows="10" cols="20">
Tapez ici votre message...
    </textarea>
    <button type="submit">Envoyer</button>
    
</form>

<?php

include 'footer.html';

?>


