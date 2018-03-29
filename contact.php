<?php

include 'header.html';

?>

<h1>Contactez-nous</h1>

<<<<<<< HEAD
<form class="form">
    
    <label for="sujet">Sujet : </label>
    <select name="sujet" id='sujet'>
=======
<form>
    <label for='sujet'>Sujet : </label>
    <select name='sujet' id='sujet'>
>>>>>>> 84006dae321aa3d63c636a5e37ddbd69115d9f37
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


