# Tableaux

```js
mon_tableau = ["zebi",5,true] // Ajoute des éléments dans le tableau séparés par une virgule
```

```js
le_tableau.push("Hello world!") // Ajoute un élément dans le tableau (individuellement)
le_tableau.push(5) // ""
le_tableau.push(true) // ""
```

```js
the_tableau = ["zebi",365]
the_tableau.push("Hello world!")
the_tableau.push(5)
the_tableau.push(true)
console.log(the_tableau) // Affiche le tableau dans la console
console.log(the_tableau[0]) // Permet d'afficher un élément précis du tableau (ici "zebi")
```

```js
table = ["zebi",365]
table.push("Hello world!")
table.push(5)
table.push(true)
console.log(table)
console.log(table[3])
table[3] = "shesh" // Change une valeur dans le tableau
console.log(table[3])
```

```js
notes = []

nombre_notes = parseInt(prompt("Nombre de notes à renseigner"))

for(i=0;i<nombre_notes;i++){ // "i<nombre_notes" : s'arrêtera quand l'utilisateur l'aura décidé
    new_note = parseInt(prompt("Rensigner une note"))
    notes.push(new_note)
}
console.log(notes)
```

```js
//merde
notes = []

nombre_notes = parseInt(prompt("Nombre de notes à renseigner"))

for(i=0;i<nombre_notes;i++){ // "i<nombre_notes" : s'arrêtera quand l'utilisateur l'aura décidé
    new_note = parseInt(prompt("Renseigner une note"))
    notes.push(new_note)
}
console.log(notes)

total_notes = 0
debugger;
for(i=0;i<5;i++){
    // console.log(notes[i])
    total_notes = total_notes + notes[i]
    // total_notes += notes[i]
}

console.log(total_notes / nombre_notes)
/*
notes [1]

mon_nombre = 1
notes[mon_nombre]
*/
```

```js
notes = []

notes_eleve = parseInt(prompt("Nombre de notes à renseigner"))

for(i=0;i<notes_eleve;i++){ // "i<nombre_notes" : s'arrêtera quand l'utilisateur l'aura décidé
    new_note = parseInt(prompt("Renseigner une note"))
    notes.push(new_note)
}
console.log(notes)

for(i=0;i<notes.length;i++){
    une_note = notes[i]
}

une_note = 3
console.log(notes)
```
