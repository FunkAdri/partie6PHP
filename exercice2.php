<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 2 PHP Partie 6</title>
        <!-- ICI LES STYLES -->
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <?php
            echo 'Nom : ' . $_GET['nom'] . 'Prénom : ' . $_GET['prenom'];
            if (isset($_GET['age'])) {
                echo $_GET['age'];
            } else {
                ?>
                <?= ' Le paramètre âge n\'est pas renseigné!';
            }
            ?>
    </body>
</html>
