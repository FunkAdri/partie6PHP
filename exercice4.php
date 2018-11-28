<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 4 PHP Partie 6</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            if (isset($_GET['langage']) AND isset($_GET['serveur'])) {
                echo 'Le langage est : ' . $_GET['langage'] . ' Le serveur est : ' . $_GET['serveur'];
            } else {
                echo 'Les paramètres d\'url ne sont pas renseignés';
            }
            ?>
        </div>
    </body>
</html>