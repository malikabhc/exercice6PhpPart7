<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice6/7</title>
  </head>
  <body>
      <?php
      if(empty($_POST) && empty($_GET)){
      ?>
    <form action="index.php" method="get">
        <select name="civility">
            <option>Monsieur</option>
            <option>Madame</option>
        </select>
      <label for="lastname">Votre nom : </label><input type="text" name="lastname" placeholder="Nom" />
      <label for="firstname">Votre prénom : </label><input type="text" name="firstname" placeholder="Prénom" />
      <input type="submit" value="Valider" />
    </form>
      <?php
      }
      ?>
  <?php
    if(isset($_GET['civility']) && ($_GET['firstname']) && isset($_GET['lastname'])){
        echo $_GET['civility'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
    }
    elseif(isset($_POST['civility']) && ($_POST['firstname']) && isset($_POST['lastname'])){
        echo $_POST['civility'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'];
    }
  ?>
  </body>
</html>
