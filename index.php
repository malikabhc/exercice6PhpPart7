<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice6/7</title>
    </head>
    <body>
        <p>
            <?php
            if (isset($_POST['submit'])) {
                if (!empty($_POST['civility'])) {
                    echo $_POST ['civility'];
                } else {
                    echo 'Veuillez entrer votre civilité';
                }
                if (!empty($_POST['lastname'])) {
                    echo $_POST ['lastname'];
                } else {
                    echo 'Veuillez entrer votre nom';
                }
                if (!empty($_POST['firstname'])) {
                    echo $_POST ['firstname'];
                } else {
                    echo 'Veuillez entrer votre prénom';
                }
            } else {
                ?>
            <form action="index.php" method="GET">
                <label for="civility">Civilité :</label>
                <select name="civility" id="civility">
                    <!-- option selected disabled pratique pour éviter de valider qqch par erreur dans une liste déroulante -->
                    <option selected disabled>Veuillez sélectionner une option</option> 
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
                <label for="lastname">Votre nom :</label>
                <input type="text" name="lastname" placeholder="Nom" />
                <label for="firstname">Votre prénom :</label>
                <input type="text" name="firstname" placeholder="Prénom" />
                <input type="submit" name="submit" value="Valider" />
            </form>
    <?php
        }
/* fermeture du else après le form pour inserer le html, ainsi le form est visible ms une
  fois les données entrée et validé il ne l est plus */
    ?>
    </p>
</body>
</html>