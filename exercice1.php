<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 1 PHP Partie 6</title>
        <link rel="stylesheet" href="style.css">
        <!-- FIN DES STYLES -->
    </head>
    <body>
        <div class="oui">
            <!-- On utilise la variable GET qui est disponible dans tous les contextes du script (C'est une variable dite "superglobale" -->
            <?= 'Nom : ' . $_GET['nom'] . ' Prénom : ' . $_GET['prenom']; ?>
        </div>
    </body>
</html>