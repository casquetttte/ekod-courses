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

