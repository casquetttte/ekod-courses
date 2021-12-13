# Javascript


## Intéractions


### Afficher
```
alert("Hello world!")
```
### Demander
```
prenom = prompt()
prenom = prompt("Quel est votre prénom ?")
alert(prenom)
```
```
nombre1 = parseInt(prompt("Nombre 1"))
nombre2 = parseInt(prompt("Nombre 2"))
alert(nombre1 + nombre2)
mon_nombre = parseInt(prompt("Choisissez un nombre"))
```
## Variables


### Affectations
```
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
```
distance = 10
temps = 2
alert(distance / temps)
alert(distance / 2)
alert(10 / 2)
```

### Exercice 1
Demander la note de maths de l'élève <br/>
Demander la note de français de l'élève <br/>
Demander la note d'histoire de l'élève

Afficher la moyenne de l'élève
```
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
resultat = maths + francais + histoire
alert(resultat / 3)
```

### Opérateurs de comparaison :
 - `>` supérieur à
 - `<` inférieur à
 - `==` égal à
 - `!=` différent de
 - 
