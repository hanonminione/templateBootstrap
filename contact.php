<?php

include 'header.html';

?>

<h1>Contactez-nous</h1>

<form class="form">
    <table border="0">
        <thead>
            <tr>
                <td>
                    <label for="sujet">Sujet : </label>
                </td>
                <td>
                    <select name="sujet" id='sujet'>
                        <option selected>Vous êtes géniaux</option>
                        <option>Vous êtes beaux</option>
                        <option>Vous êtes intelligents</option>
                        <option>Je veux vous donner de l'argent</option>
                        <option>Autre</option>
                    </select>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label for="contenu">Message : </label>
                </td>
                <td>
                    <textarea name="contenu" rows="10" cols="20" id='contenu'></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Envoyer</button>
                </td>
            </tr>
        </tbody>
    </table>

</form>

<?php

include 'footer.html';

?>


