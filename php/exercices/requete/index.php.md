### Exercice 1
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble des fruits dans la base de données
$requetes = $dbh->prepare('SELECT * FROM zlitonian WHERE age >= 2000');
$requetes->execute();

// affichage de la liste des fruits
while ($requete = $requetes->fetch() ) {
    echo $requete['age']."<br>";
}
// affichage du formulaire d'ajout d'un fruit en base de données
?>
```
### Exercice 2
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble des fruits dans la base de données
$requetes = $dbh->prepare('SELECT * FROM zlitonian WHERE weight = 89.40');
$requetes->execute();

// affichage de la liste des fruits
while ($requete = $requetes->fetch() ) {
    echo "Pseudo : ".$requete['name']."<br>"."Poids : ".$requete['weight']."<br>";
}
// affichage du formulaire d'ajout d'un fruit en base de données
?>
```
### Exercice 3
```php
coming soon
```
