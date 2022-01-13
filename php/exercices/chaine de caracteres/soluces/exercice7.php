<!DOCTYPE html>
<!-- Exercice PHP - CodeColliders 2020 - https://codecolliders.com -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        p {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body>

<ul>
    <li><a href="?mot=Bonjour">mot 1</a></li>
    <li><a href="?mot=Chat">mot 2</a></li>
    <li><a href="?mot=Etoile">mot 3</a></li>
    <li><a href="?mot=Dromadaire">mot 4</a></li>
</ul>

<?php

// en utilisant la variable : $_GET['mot'] qui permet de récupérer la variable d'url "mot",
// afficher dans la page le mot venant de l'url dans un paragraphe ayant pour police Open Sans :
// https://fonts.google.com/specimen/Open+Sans

?>
<!-- écrire le code après ce commentaire -->

<p><?php echo $_GET['mot']; ?></p>

<!-- écrire le code avant ce commentaire -->

</body>
</html>
