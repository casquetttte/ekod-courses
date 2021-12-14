On a besoin d'un outil simplifier la vie d'un professeur principal d'une classe de première pour faire les appreciations du bulletin de notes du trimestre, 
créer un programme qui génèrera (et affichera) l'appreciation en fonction des notes du trimestre

Les fonctionnalités sont découper en quatres parties à la difficulté progressive.
Finissez un lot avant de passer au suivant

# 1/ Généréateur de commentaires simples

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



# 2/ Ajout d'une fonction de personnalisation

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

# 3/ Progression

Pour nuancer un peu plus les commentaire, on souhaite ajouter une mention sur la progression éventuelle de l'élève

Fonctionnement attendu :

Après avoir demandé les notes de l'élève, demander la moyenne du trimestre précédent

À la fin du programme, afficher "à progressé" si la moyenne du trimestre précédent est inférieure afficher "est capable de mieux" si la moyenne du trimestre précédent est supérieure


Bonus : ajouter (concatener les deux messages en un seul pour les afficher en ue fois)

# 4/ Coefficient

Les élèves sont en 1ère L, chaque matière n'a pas le même coefficient, on souhaite prendre ceci en compte dans notre programme,


Fonctionnement attendu :

Reprendre le fonctionnement actuel du programme mais modifier la formule permettant de calculer la moyenne afin de prendreen compte le coefficient de chaque matière.
Les coefficients des matières sont les suivants:
 - Math: 2
 - Français: 6
 - Histoire: 3
 - Sport: 1
