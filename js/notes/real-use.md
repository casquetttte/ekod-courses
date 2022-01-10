# Utilisation de JS avec du HTML

### 1er test
```html
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>zebi</title>
        <link href="wsh.css" rel="stylesheet">
    </head>
    <body>
        <div id="ma_div">
            <h1>cask</h1>
        </div>
        <script src="ekip.js"></script>
    </body>
</html>
```
```css
body {
    background-image: url(img.png);
    color: black;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
h1 {
    text-align: center;
    text-transform: uppercase;
}
```
```js
ma_balise = document.getElementById("ma_div") // Appel un élément (div) par son ID
console.log(ma_balise) // Détaille le délire dans la console

ma_balise.innerText = "wsh" // Remplace du texte dans la  html
ma_balise.innerText += " l'équipe" // Ajoute du texte dans la div

ma_balise.innerHTML += '<h1>WSH LE GANG !</h1>' // Ecrit une balise dans la div
ma_balise.style.backgroundColor='#0b0b0b' // Permet d'appliquer du style à la div
ma_balise.style.color="pink" // Permet d'appliquer du style à la div
```

2e test
```html
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>zebi</title>
        <link href="wsh.css" rel="stylesheet">

    </head>
    <body>
        <div id="ma_div">CASK</div>

            <input type="text" id="un_input">
        
        <script src="ekip.js"></script>
    </body>
</html>
```
```css
body {
    background-image: url(img.png);
    color: black;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
}
h1 {
    text-align: center;
    text-transform: uppercase;
}
```
```js
mon_input = document.getElementById("un_input")
console.log(mon_input.value) // Détaille la valeur de l'input dans la console
mon_input.value = "shesh" // Remplace la valeur de l'input

function ma_fonction(){ // Ajoute une fonction (ma_fonction)
    console.log("Salut") // Affiche "salut" dans la console
}
//document.addEventListener() // Ajoute un évènement pour déclencher une fonction/action
document.addEventListener("keydown", ma_fonction) // Ajoute un event lorsque que l'user presse une touche
mon_input.addEventListener("mousedown", ma_fonction) // Ajoute un event lorsque que l'user clique sur l'input
```
```js
document.getElementById('page').addEventListener('click', function() { // Ajoute un event lorsque la balise "page" est cliquée
    document.getElementById('balise1').style.backgroundColor = 'purple' // L'event change la couleur de la balise "balise1" en violet
};
```
