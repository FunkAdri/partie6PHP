<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 5 PHP Partie 6</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            if (isset($_GET['batiment']) AND isset($_GET['salle'])) {
                echo 'Vous êtes dans le batiment n° ' . $_GET['batiment'] . ' dans la salle ' . $_GET['salle'];
            } else {
                echo 'Les paramètres d\'url ne sont pas renseignés!';
            }
            ?>
        </div>
    </body>
</html>