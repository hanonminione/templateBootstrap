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
    <input class="button" type="submit" value="Bouton envoyer" />
    <input class="button" type="reset" value="Bouton reset" />
    <input class="button" type="button" value="Bouton classique" />
    <input class="button" type="button" value="Bouton désactivé" disabled="disabled" />
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
        <input type="text" id="text" value="" /> <br /><br />
        <label for='mdp'>Ceci est le titre d'un input contenant un mot de passe</label>
        <input type="password" id='mdp' name="" value="mot de passe" /><br /><br />
        <label for='invisible'>Ceci est le titre d'un input invisible</label>
        <input type="hidden" id='invisible' name="" value="J'suis invisible LOL !" /><br /><br />
        <label for='disabled'>Ceci est le titre d'un input désactivé</label>
        <input type="text" id='disabled' name="" value="Je suis grisé" disabled="disabled" /><br /><br />
        <label for='readonly'>Ceci est le titre d'un input qu'on ne peut pas modifier</label>
        <input type="text" id='readonly' name="" value="Tu ne me changeras pas !" readonly="readonly" /><br /><br />
        <label for='size'>Ceci est le titre d'un input dont la taille est modifiée</label>
        <input type="text" id='size' name="" value="" size="100" /><br /><br />
        <textarea name="" rows="10" cols="100"> Je suis une grande zone de texte modifiable
        </textarea>
        <textarea name="" rows="10" cols="100" disabled="disabled"> Je suis une grande zone de texte désactivée
        </textarea>
        <textarea name="" rows="10" cols="100" readonly="readonly"> Je suis une grande zone de texte non-modifiable
        </textarea>
    </fieldset>
    
    <fieldset>
        <legend>Ceci est fait pour sélectionner des fichiers depuis votre ordinateur</legend>
        <label for='select'> Sélectionnez un fichier</label>
        <input type="file" id='select' name="" value="" /> <br /><br />
        <label for='selectdisabled'>La sélection de fichier est désactivée</label>
        <input type="file" id='selectdisabled' name="" value="" disabled="disabled" /> 
    </fieldset>
    <br/>
    Voici la superbe photo d'un renard
    <img src="source/images/renard.jpg"/> <br/>
    <ol type="1">
        <li>Ceci est une liste</li>
        <li>(avec des numéros)</li>
    </ol>
    <ol type="a">
        <li>Ceci est une liste</li>
        <li>(en lettres minuscules)</li>
    </ol>
    <ol type="A">
        <li>Ceci est une liste</li>
        <li>(en lettres majuscules)</li>
    </ol>
    <ol type="i">
        <li>Ceci est une liste</li>
        <li>(en chiffres romains - minuscules)</li>
    </ol>
    <ol type="I">
        <li>Ceci est une liste</li>
        <li>(en chiffres romains - majuscules)</li>
    </ol>
    <ul type="disc">
        <li>Ceci est une liste</li>
        <li>(avec des ronds)</li>
    </ul>
    <ul type="circle">
        <li>Ceci est une liste</li>
        <li>(avec des cercles)</li>
    </ul>
    <ul type="square">
        <li>Ceci est une liste</li>
        <li>(avec des carrés)</li>
    </ul>
    <table border="0">
        <thead>
            <tr>
                <th>v</th>
                <th>o</th>
                <th>i</th>
                <th>c</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>i</td>
                <td>u</td>
                <td>n</td>
                <td>t</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <table border="1">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    
</form>
<?php

include 'footer.html';

?>
