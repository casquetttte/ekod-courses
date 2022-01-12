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

$a = "Je+suis+une+cha%C3%AEne+de+caract%C3%A8res+%21";

// écrire le code permettant de décoder la chaîne de caractères encodée
// utiliser la fonction urldecode de manière à décoder la chaîne de caractères :
// https://www.php.net/manual/fr/function.urldecode
?>

<!-- écrire le code après ce commentaire -->


<!-- écrire le code avant ce commentaire -->
<style>
    pre {
        border: 1px solid black;
        display: inline;
    }
</style>
<p><?php echo urldecode($a); ?></p>
</body>
</html>