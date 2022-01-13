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

$a = "administrateur@enssop.com";

// Écrire le code permettant de compter le nombre de lettres dans le nom de domaine de l'adresse email

// Utiliser la fonction explode afin de scinder la chaîne de caractères au niveau du symbole @ à l'aide de
// la fonction explode https://www.php.net/manual/fr/function.explode.php
// ensuite, compter et afficher le nombre de caractères du nom de domaine
?>
<!-- écrire le code après ce commentaire -->
<?php
$a = explode("@", $a);
$a = strlen($a[1]);
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
</html><?php
