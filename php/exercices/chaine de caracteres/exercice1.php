<!DOCTYPE html>
<!-- Exercice PHP - CodeColliders 2020 - https://codecolliders.com -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice PHP</title>
</head>
<body>

    <?php

    $a = "  Bonjour le monde     ";
    
    // écrire le code permettant de supprimer les espaces contenus de chaque côté de la chaine de caractères
    // utiliser la fonction trim de manière à ce que la bordure noire touche le mot :
    // https://www.php.net/manual/fr/function.trim.php
    ?>
    <!-- écrire le code après ce commentaire -->
    
    <?php
    $a = trim($a)
    ?>
    <!-- écrire le code avant ce commentaire -->
    <style>
    pre {
        border: 1px solid black;
        display: inline;
    }
    </style>
    <pre><?php echo $a; ?></pre>
</body>
</html>
