<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3 PHP Partie 6</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) {
                echo 'La date de début correspond à : ' . $_GET['dateDebut'] . ' Et la date de fin correspond à : ' . $_GET['dateFin'];
            } else {
                echo 'Les paramètres dates dateDebut et dateFin ne sont pas renseignés!';
            }
            ?>
        </div>
    </body>
</html>
