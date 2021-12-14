# Exercices

### Exercice 1
Demander la note de maths de l'élève <br/>
Demander la note de français de l'élève <br/>
Demander la note d'histoire de l'élève

Afficher la moyenne de l'élève
```js
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
resultat = maths + francais + histoire
alert(resultat / 3)
```
Correction
```js
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
alert((maths + francais + histoire) / 3)
```

### Exercice 2
Ecrire un algorithme pour afficher le temps de cuisson d'une viande en fonction du poids et de la cuisson souhaitée<br/>

Règles à appliquer : <br/>
Pour cuire 500g de boeuf, il faut :
 - bleu : 10 minutes
 - à point : 17 minutes
 - bien cuit : 25 minutes
Le temps de cuisson est proportionnel au poids <br/>

Exexmple : pour cuire 750g de boeuf bleu, il faut 15 minutes) <br/>

1/ Demander à l'utilisateur de saisir le poids de la viande à cuire en grammes <br/>
2/ Demander à l'utilisateur de saisir la cuisson souhaitée (bleu, à point, bien cuit) <br/>
3/ Afficher le temps de cuisson

```js
poids = parseInt(prompt("Saissiez le poids de votre viande"));
cuisson = prompt("Saisissez la cuisson souhaitée");

bleu = 0.02
point = 0.034
bien_cuit = 0.05

if(cuisson == "bleu"){
    alert(poids * bleu);
} else if(cuisson == "a point"){
    alert(poids * point);
} else if(cuisson == "bien cuit"){
    alert(poids * bien_cuit);
} else {
    alert("Ecrit mieux zebi")
}
```
Correction
```js
poids = parseInt(prompt("Quel poids souhaitez-vous cuire ?"));
cuisson_souhaitee = prompt("Quel cuisson souhaitez-vous ?");

if(cuisson_souhaitee == "bleu"){
    alert(poids * 0.02);
} else if(cuisson_souhaitee == "à point"){
    alert(poids * 0.034);
} else if(cuisson_souhaitee == "bien cuit"){
    alert(poids * 0.05);
}
```
### Exercice 2 (suite)

Pour cuire 400g de porc, il faut : <br/>
 - bleu : 15 minutes
 - à point : 25 minutes
 - bien cuit : 40 minutes

4/ Demander à l'utilisateur de saisir le poids de la viande à cuire en grammes <br/>
5/ Si l'utilisateur indique une mauvaise cuisson / une mauvaise viande, afficher un message d'erreur 

```js

```
Correction
```js
poids = parseInt(prompt("Quel poids souhaitez-vous cuire ?"));
cuisson_souhaitee = prompt("Quel cuisson souhaitez-vous ?");
type_de_viande = prompt("Type de viande à cuire ?")

if(cuisson_souhaitee == "bleu"){
    if(type_de_viande == "boeuf"){
    alert(0.02 * poids);
    } else if(type_de_viande == "porc"){
    alert (0.0375 * poids);
    } else {
    alert("Ecrit mieux zebi");
}
// Insérer la suite parce que j'ai la flemme
```

### Exercice 3
On a besoin d'un outil pour simplifier la vie d'un professeur principal d'une classe de première pour faire les appréciations du bulletin de notes du trimestre, 
créer un programme qui génèrera (et affichera) l'appréciation en fonction des notes du trimestre

Les fonctionnalités sont découpés en quatre parties à la difficulté progressive.
Finissez un lot avant de passer au suivant

#### 1/ Généréateur de commentaires simples
Dans un premier temps, on souhaite simplement choisir un des quatre messages prédéfinis en fonction de la moyenne générale obtenue à partir des notes de Math, Français, Histoire et Sport 

Fonctionnement attendu :
 - Demander la note de Maths
 - Demander la note de Français
 - Demander la note d'Histoire
 - Demander la note de Sport

Celon la moyenne, afficher une appreciation en suivant les règles ci-dessous

Si l'élève à moins de 5, afficher "Peut mieux faire"
Sinon, si l'élève à moins de 10, afficher "En bonne voie"
Sinon, si l'élève à moins de 15, afficher "Bien"
Sinon, afficher "Très bien"

#### 2/ Ajout d'une fonction de personnalisation
Afin de personnaliser un peu les commentaires, on souhaite ajouter le nom de l'élève dans le message

Fonctionnement attendu :
Après avoir demandé les notes à l'utilisateur, demander le nom de l'élève.
Intégrer (concatener) le nom dans les commentaires en remplçant les messages indiqué plus haut par ceux-ci:

```js
"NOM_ELEVE peut mieux faire"
"NOM_ELEVE est en bonne voie"
"Bien NOM_ELEVE"
"Très bien NOM_ELEVE"
```

#### 3/ Progression
Pour nuancer un peu plus les commentaire, on souhaite ajouter une mention sur la progression éventuelle de l'élève

Fonctionnement attendu :
Après avoir demandé les notes de l'élève, demander la moyenne du trimestre précédent
À la fin du programme, afficher "à progressé" si la moyenne du trimestre précédent est inférieure afficher "est capable de mieux" si la moyenne du trimestre précédent est supérieure

Bonus : ajouter (concatener les deux messages en un seul pour les afficher en une fois)

#### 4/ Coefficient
Les élèves sont en 1ère L, chaque matière n'a pas le même coefficient, on souhaite prendre ceci en compte dans notre programme,

Fonctionnement attendu :
Reprendre le fonctionnement actuel du programme mais modifier la formule permettant de calculer la moyenne afin de prendre en compte le coefficient de chaque matière.
Les coefficients des matières sont les suivants:
 - Math: 2
 - Français: 6
 - Histoire: 3
 - Sport: 1

```js
// #1 Généréateur de commentaires simples
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
sport = parseInt(prompt("Note de sport"))

moyenne = (maths + francais + histoire + sport) / 4

if(moyenne < 5){
    alert("Peut mieux faire");
} else if(moyenne < 10){
    alert("En bonne voie");
} else if(moyenne < 15){
    alert("Bien");
} else {
    alert("Très bien");
}

// #2 Ajout d'une fonction de personnalisation
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
sport = parseInt(prompt("Note de sport"))
eleve = (prompt("Nom de l'élève"))

moyenne = (maths + francais + histoire + sport) / 4

if(moyenne < 5){
    alert(eleve +" peut mieux faire");
} else if(moyenne < 10){
    alert(eleve +" est en bonne voie");
} else if(moyenne < 15){
    alert("Bien "+eleve);
} else {
    alert("Très bien "+eleve);
}

// #3 Progression
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
sport = parseInt(prompt("Note de sport"))
moyenne_precedente = parseInt(prompt("Moyenne précédente"))
eleve = (prompt("Nom de l'élève"))

moyenne = (maths + francais + histoire + sport) / 4

if(moyenne_precedente < moyenne){
    if(moyenne < 5){
        alert(eleve +" peut mieux faire mais a progressé");
    } else if(moyenne < 10){
        alert(eleve +" est en bonne voie et a progressé");
    } else if(moyenne < 15){
        alert("Bien "+eleve+" a progressé");
    } else {
        alert("Très bien "+eleve+" a progressé");
    }
} else {
    if(moyenne < 5){
        alert(eleve +" peut mieux faire et est capable de mieux");
    } else if(moyenne < 10){
        alert(eleve +" est en bonne voie et est capable de mieux");
    } else if(moyenne < 15){
        alert("Bien "+eleve+" mais est capable de mieux");
    } else {
        alert("Très bien "+eleve+" mais est capable de mieux");
    }
}

// #4 Coefficient
maths = parseInt(prompt("Note de maths"))
francais = parseInt(prompt("Note de français"))
histoire = parseInt(prompt("Note d'histoire"))
sport = parseInt(prompt("Note de sport"))
moyenne_precedente = parseInt(prompt("Moyenne précédente"))
eleve = (prompt("Nom de l'élève"))

moyenne = ((maths * 2) + (francais * 6) + (histoire * 2) + sport) / 4

if(moyenne_precedente < moyenne){
    if(moyenne < 5){
        alert(eleve +" peut mieux faire mais a progressé");
    } else if(moyenne < 10){
        alert(eleve +" est en bonne voie et a progressé");
    } else if(moyenne < 15){
        alert("Bien "+eleve+" a progressé");
    } else {
        alert("Très bien "+eleve+" a progressé");
    }
} else {
    if(moyenne < 5){
        alert(eleve +" peut mieux faire et est capable de mieux");
    } else if(moyenne < 10){
        alert(eleve +" est en bonne voie et est capable de mieux");
    } else if(moyenne < 15){
        alert("Bien "+eleve+" mais est capable de mieux");
    } else {
        alert("Très bien "+eleve+" mais est capable de mieux");
    }
}
```

### Exercice 4
Avec des boucles "while" ou "for".

1/ Afficher 10 fois le chiffre 3 <br/>
2/ Compter de 0 à 9 dans la console <br/>
3/ Afficher la table de 3 dans la console (de 0 x 3 à 9 x 3) <br/>
4/ Afficher la table de 7 dans la console (de 0 x 7 à 9 x 7) <br/>
5/ Demander un nombre à l'utilisateur (prompt), en affichant la table de multiplication <br/>

Pour ceux qui vont plus vite, afficher "proprementé les tables pour l'ex 5. <br/>
Exemple : si l'utilisateur choisi 8 : <br/>
 0 x 8 = 0 <br/>
 1 x 8 = 8 <br/>
 2 x 8 = 16 <br/>
 3 x 8 = 24 <br/>
 4 x 8 = 32 <br/>
 5 x 8 = 40 <br/>
 6 x 8 = 48 <br/>
 7 x 8 = 56 <br/>
 8 x 8 = 64 <br/>
 9 x 8 = 72 <br/>
 10 x 8 = 80 <br/>
 
 ```js
 // #1 Afficher 10 fois le chiffre 3
 compteur = 0
while (compteur<10){
    console.log("3");
    compteur++
}

// #2 Compter de 0 à 9 dans la console
compteur = 0
for (compteur=0;compteur<10;compteur++){
    console.log(compteur)
    compteur+1
}

// #3 Afficher la table de 3 dans la console (de 0 x 3 à 9 x 3)
compteur = 0
for(compteur=0;compteur<10;compteur++){
   console.log(compteur + " x 3 = " + compteur*3)
   compteur+1
}

// #4 Afficher la table de 7 dans la console (de 0 x 7 à 9 x 7)
compteur = 0
for(compteur=0;compteur<10;compteur++){
  console.log(compteur + " x 7 = " + compteur*7)
  compteur+1
}

// #5 Demander un nombre à l'utilisateur (prompt), en affichant la table de multiplication
compteur = 0
nombre = parseInt(prompt("table de ?"))
for(compteur=0;compteur<11;compteur++){
    console.log( compteur +" x "+nombre +" = "+compteur* nombre)
    compteur++
}
 ```

### Exercice 5
Ecrire le code d'un jeu ou le joueur doit deviner un nombre. <br/>

1/ Le programme choisit un nombre aleatoire compris entre 0 et 100 avec ce code: `nombre_aleatoire = Math.floor(Math.random()*101)` <br/>
Mais ne l'affiche pas à l'utilisateur.

2/ Le programme demande à l'utilisateur de saisir un nombre et lui répond :
 - C'est plus
 - C'est moins
 - Bravo la réponse était ...

3/ Le programme repete la question jusqu'à ce que le joueur trouve le bon nombre.

4/ Demander à l'utilisateur si il souhaite rejouer (sans quitter le programme).

5/ L'utilisateur dispose de 10 tentatives pour deviner le nombre.

Lorsqu'il dépasse 10 tentative le jeu se termine et indique :
 - Vous avez perdu

Puis demande à l'utilisateur si il souhaite rejouer.

```js
// #1
nombre_aleatoire = Math.floor(Math.random()*101);
console.log(nombre_aleatoire);

// #2 
nombre_aleatoire = Math.floor(Math.random()*101);
console.log(nombre_aleatoire);
nombre_joueur = parseInt(prompt("Choisissez un nombre entre 0 et 100"));

if(nombre_joueur<nombre_aleatoire){
    alert("C'est plus");
} else if(nombre_joueur>nombre_aleatoire) {
    alert("C'est moins");
} else {
    alert("Bravo la réponse était");
}

// #3
nombre_aleatoire = Math.floor(Math.random()*101);
console.log(nombre_aleatoire);
nombre_joueur = -1;

while(nombre_aleatoire!=nombre_joueur){
    nombre_joueur = parseInt(prompt("Choisissez un nombre entre 0 et 100"));
    if(nombre_joueur<nombre_aleatoire){
        alert("C'est plus");
    } else if(nombre_joueur>nombre_aleatoire) {
        alert("C'est moins");
    } else {
        alert("Bravo la réponse était "+nombre_aleatoire);
    }
}

// #4


// #5


```
Correction
```js

```
