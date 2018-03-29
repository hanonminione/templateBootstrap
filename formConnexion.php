<?php

include 'header.html';

?>

<h1>Connexion</h1>

<form>
      <label for="mail">Identifiant : </label>
      <input type="email" id="mail" placeholder="ex.exemple@exemple.fr">
      <br />
      <label for="mdp">Mot de passe : </label>
      <input type="password" id="mdp" placeholder="Mot de passe">
    <div>
        <label>
          <input type="checkbox" id="ResterCo">Rester connecté
        </label>
    </div>
    <button type="submit">Connexion</button>
    <a href="formInscription.php">Pas encore inscrit ?</a>
</form>

<?php

include 'footer.html';

?>


