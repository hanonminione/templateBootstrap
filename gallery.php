<?php

include 'header.html';

?>

<h1>Galerie</h1>

<h1>Ceci est un h1</h1>
<h2>Ceci est un h2</h2>
<h3>Ceci est un h3</h3>
<h4>Ceci est un h4</h4>
<h5>Ceci est un h5</h5>
<h6>Ceci est un h6</h6>
<p>Ceci est un paragraphe</p>
<i>Ceci est en italique</i> <br />
<b>Ceci est en gras</b> <br />
<a href="#">Ceci est un lien</a> <br />

<form class="form">
    <legend>Ceci est un formulaire</legend>
    <input type="submit" value="Bouton envoyer" />
    <input type="reset" value="Bouton reset" />
    <input type="button" value="Bouton classique" />
    <fieldset>
        <legend>Ceci est un fieldset avec des checkbox</legend>
        <input type="checkbox" value="ON" /> Checkbox <br/>
        <input type="checkbox" value="ON" checked="checked" /> Checkbox sélectionné <br />
        <input type="checkbox" value="ON" disabled="disabled" /> Checkbox désactivé <br/>
    </fieldset>
    <fieldset>
        <legend>Ceci est un fieldset avec des boutons radio</legend>
        <input type="radio" name="Boutons radio" value="" />Bouton Radio<br/>
        <input type="radio" name="Boutons radio" value="" checked="checked" />Bouton Radio sélectionné<br/>
        <input type="radio" name="Boutons radio" value="" disabled="disabled" />Bouton Radio désactivé<br/>
    </fieldset>
    <select name="list">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <select name="" size="3">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <select name="" multiple="multiple">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    <select name="" disabled="disabled">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
    
</form>
<?php

include 'footer.html';

?>
