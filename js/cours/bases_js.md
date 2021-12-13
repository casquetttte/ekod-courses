# Javascript
En programmation, on interagi avec la machine à l'aide d'instruction simple, operation mathematiques, lecture et ecriture, boucles et conditions.

Ces possibilitées peuvent varier d'un langage à l'autre.
Par example, javascript permet d'interagir avec l'html (modifier les balises et le style, lire les donnees dans un formulaire)

## Interactions
Dans le cadre de ce cours, nous limitterons les interactions avec l'utilisateur à des popups pour demander des informations ou en afficher.
Les fonctions prompt et alert ne sont pas à utiliser sur de vrais sites car peu modifiables. On preffera interragire via une interface HTML  

### Afficher
`alert("Bonjour")`

### Demander
```js
prenom = prompt()
prenom = prompt("Quel est votre prénom?")
mon_nombre = parseInt(prompt("Choisissez un nombre")) // permet de demander un nombre 
```

## variables
### affectations
```js
mon_age = 22
alert(mon_age)
```
### types

3 types de variables:
 - `booleen` (vrai / faux)
 - `nombres`
 - `texte` (chaines de caracteres)(mettre entre guillemets: "Salut")

## Operations
 - addition: +
 - soustraction: -
 - multiplication: *
 - division: /
 - puissance: **
 - concatenation: +

Par defaut, l'ordinateur ne fait rien du resultat d'une operation
il faut lui indiquer quoi en faire:
 - l'afficher: `alert(5 + 3)`
 - le sauvegarder: `resultat = 5 + 3`


### variables dans des operations
```js
distance = 10
temps = 2
alert(distance / temps) // ici, distance est égal à 10, donc l'ordinateur remplace la variable par la valeur 10, idem pour temps
alert(distance / 2)
alert(10 / 2)
```

### example calcul age
```js
annee_naissance = prompt("Quel est votre année de naissance?")
annee_actuelle = 2021
age = annee_actuelle - annee_naissance
alert(age)
```

### example calcul de moyenne

**Consigne**

Demander la note de math de l'eleve
Demander la note de français de l'eleve
Demander la note d'histoire de l'eleve

afficher la moyenne dee l'eleve

**Programme possible**

```js
note_math = parseInt(prompt("Votre note de Math?"))
note_francais = parseInt(prompt("Votre note de Français?"))
note_histoire = parseInt(prompt("Votre note d'histoire?"))
alert((note_math + note_francais + note_histoire) / 3)
```

