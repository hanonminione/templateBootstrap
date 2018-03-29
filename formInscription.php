<?php

include 'header.html';

?>

<h1>Inscription</h1>

<form>
      <label for="mail">Adresse e-mail * : </label>
      <input type="email" id="mail" placeholder="ex.exemple@exemple.fr">
      <br />
      <label for="mdp">Mot de passe * : </label>
      <input type="password" id="mdp" placeholder="Mot de passe">
      <br />
      <label for="mdp">Répétez le mot de passe * : </label>
      <input type="password" id="mdp" placeholder="Mot de passe">
      <br />
      <p>* Les champs avec une astérisque sont obligatoires !</p>
    <button type="submit">S'inscrire</button>
    
</form>

<?php

include 'footer.html';

?>


