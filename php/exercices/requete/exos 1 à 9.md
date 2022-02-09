### Exercice 1
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT * FROM zlitonian WHERE age >= 2000');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo $requete['age']."<br>";
}
?>
```
### Exercice 2
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT * FROM zlitonian WHERE weight = 89.40');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo "Pseudo : ".$requete['name']."<br>"."Poids : ".$requete['weight']."<br>";
}
?>
```
### Exercice 3
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT * FROM chicken WHERE egg_total BETWEEN 500 AND 550');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo $requete['name']."<br>";
}
?>
```
### Exercice 4
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT * FROM users WHERE lvl >=3 AND gold < 1000 AND name LIKE "%a%" ORDER BY gold DESC LIMIT 10');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo $requete['name']."<br>";
}
?>
```
### Exercice 5
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT COUNT(*) AS age2 FROM zlitonian WHERE age > 1000');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo "Il y a : ".$requete['age2']." zlitoniens âgés de plus de 1000 ans"."<br>";
}
?>
```
### Exercice 6
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT AVG(milk_total) AS milk FROM vache');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo "La moyenne de lait produit par les vaches est de : ".$requete['milk']."<br>";
}
?>
```
### Exercice 7
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT SUM(weight) AS weight2 FROM vache');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo "La somme du poids de toute les vaches est de : ".$requete['weight2']."<br>";
}
?>
```
### Exercice 8
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT SUM(weight) AS weight2 FROM vache WHERE cleanliness = 95');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo "La somme du poids des vaches ayant leur propreté égale à : ".$requete['weight2']."<br>";
}
?>
```
### Exercice 9
```php
<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=requete;port=3307', 'admin', 'admin');

// selection de l'ensemble d'informations dans la base de données
$requetes = $dbh->prepare('SELECT COUNT(*) AS name2 FROM users WHERE name LIKE "%zli%"');
$requetes->execute();

// affichage de la requete
while ($requete = $requetes->fetch() ) {
    echo $requete['name2']."<br>";
}
?>
```
