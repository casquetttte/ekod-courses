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
console.log(ma_balise) // Détail le délire dans la console

ma_balise.innerText = "wsh" // Remplace du texte dans la  html
ma_balise.innerText += " l'équipe" // Ajoute du texte dans la div

ma_balise.innerHTML += '<h1>WSH LE GANG !</h1>' // Ecrit une balise dans la div
ma_balise.style.backgroundColor='#e3e3e3' // Permet d'appliquer du style à la div
```
