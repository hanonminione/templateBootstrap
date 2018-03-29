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
    <input type="button" value="Bouton désactivé" disabled="disabled" />
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
    
    <fieldset>
        <legend>Ceci est un fieldset contenant des listes</legend>
        <select name="list">
            <option>Ceci est un select avec un seul choix possible</option>
            <option>autre choix</option>
            <option>autre choix</option>
            <option>autre choix</option>
            <option>autre choix</option>
        </select> <br /> <br />
        <select name="" size="3">
            <option>Ceci est un select </option>
            <option>avec un seul choix possible</option>
            <option>mais on peut en voir plusieurs en même temps</option>
            <option>autre choix</option>
            <option>autre choix</option>
        </select> <br /> <br />
        <select name="" multiple="multiple">
            <option>Ceci est un select</option>
            <option>avec plusieurs choix possibles</option>
            <option>(avec CTRL)</option>
            <option>autre choix</option>
            <option>autre choix</option>
        </select> <br /> <br />
        <select name="" disabled="disabled">
            <option>Ceci est un select désactivé</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </fieldset>
    
    <fieldset>
        <legend>Ceci est un fieldset contenant des zones de texte</legend>
        <label for='text'>Ceci est le titre d'un input contenant du texte</label>
        <input type="text" id="text" value="" /> <br />
        <label for='mdp'>Ceci est le titre d'un input contenant un mot de passe</label>
        <input type="password" id='mdp' name="" value="mot de passe" /><br />
        <label for='invisible'>Ceci est le titre d'un input invisible</label>
        <input type="hidden" id='invisible' name="" value="" /><br />
        <label for='disabled'>Ceci est le titre d'un input désactivé</label>
        <input type="text" id='disabled' name="" value="" disabled="disabled" /><br />
        <label for='text'>Ceci est le titre d'un input contenant du texte</label>
        <input type="text" name="" value="" readonly="readonly" /><br />
        <label for='text'>Ceci est le titre d'un input contenant du texte</label>
        <input type="text" name="" value="" size="100" /><br />
    </fieldset>
    
</form>
<?php

include 'footer.html';

?>
