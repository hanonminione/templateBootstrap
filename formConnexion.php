<?php

include 'header.html';

?>

Ici se trouve le formulaire de connexion.

<form>
  <fieldset>
    <legend>Connexion</legend>
    <div>
    <div class="form-group">
      <label for="mail">Identifiant</label>
      <input type="email" id="mail" placeholder="ex.exemple@exemple.fr">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div class="form-group">
      <label for="exampleInputPassword1">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
    <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" checked="">
          Rester connecté
        </label>
      </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
  </fieldset>
</form>

<?php

include 'footer.html';

?>


