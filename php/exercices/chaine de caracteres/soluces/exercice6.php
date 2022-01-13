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

$a = "12345 ";

// écrire le code permettant de répéter la chaine de caractères trois fois
// utiliser la fonction str_repeat de manière à ce que le contenu de la chaine de caractères soit répété:
// https://www.php.net/manual/fr/function.str-repeat.php
?>
<!-- écrire le code après ce commentaire -->

<?php
$a = str_repeat($a, 3);
?>

<!-- écrire le code avant ce commentaire -->
<style>
    pre {
        border: 1px solid black;
        display: inline;
    }
</style>
<p><?php echo $a; ?></p>
</body>
</html>
