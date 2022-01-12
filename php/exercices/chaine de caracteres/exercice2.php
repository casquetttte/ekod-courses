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

$a = "Du TexTe aVEc des Majuscules ET des MINUsculES Un peu N'IMPORTE Où !";

// écrire le code permettant de retirer toutes les majuscules et de n'avoir plus que des minuscules dans le texte
// contenu dans la variable $a en utilisant la fonction strtolower()
// https://www.php.net/manual/fr/function.strtolower.php
?>
<!-- écrire le code après ce commentaire -->


<!-- écrire le code avant ce commentaire -->

<p><?php echo $a; ?></p>
<style>
    p::first-letter {
        text-transform: capitalize;
    }
</style>
</body>
</html>
