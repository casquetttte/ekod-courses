# Javascript


## Intéractions


### Afficher
```js
alert("Hello world!")
```
### Demander
```js
prenom = prompt()
prenom = prompt("Quel est votre prénom ?")
alert(prenom)
```
```js
nombre1 = parseInt(prompt("Nombre 1"))
nombre2 = parseInt(prompt("Nombre 2"))
alert(nombre1 + nombre2)
mon_nombre = parseInt(prompt("Choisissez un nombre"))
```
## Variables


### Affectations
```js
freeze_corleone=667
alert(freeze_corleone)
```

### Types
3 Types de variables :
 - booleans (vrai / faux)
 - nombres
 - texte ("chaîne de caractères")

## Opérations
 - Addition : +
 - Soustraction : -
 - Multipication : *
 - Division : /
 - Puissance : **
 - Concaténation : +


Par défaut, l'ordinateur ne fait ren du résultat d'un opération. <br/>
Il faut lui indiquer quoi en faire :
 - l'afficher : alert(5 + 5)
 - le sauvegarder : resultat = 5 + 5

### Variables dans des opérations
```js
distance = 10
temps = 2
alert(distance / temps)
alert(distance / 2)
alert(10 / 2)
```

### Opérateurs de comparaison :
 - `>` supérieur à
 - `<` inférieur à
 - `==` égal à
 - `!=` différent de
 - `>=` supérieur ou égal à
 - `<=` inférieur ou égal à

### Conditions
```js
if(condition){
    // code à exectuer si condition est vraie
}
```
```js
heure_arrivee = parseFloat(prompt("Heure d'arrivée?"));
if(heure_arrivee <= 9){
    alert("vous êtes à l'heure");
} else if(heure_arrivee <= 10){
    alert("vous êtes en retard");
} else {
    alert("vous êtes très en retard");
}
```
