## v1.0
```html
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="calculator.css">
  <script> 
    //fonction qui évalue le chiffre et renvoie la sortie
    function calculer() 
    { 
        let a = document.getElementById("result").value 
        let b = eval(a) 
        document.getElementById("result").value = b 
    } 
    //fonction qui affiche la valeur
    function afficher(val) 
    { 
        document.getElementById("result").value+=val
    } 
    //fonction qui efface l'écran 
    function effacer() 
    { 
        document.getElementById("result").value = "" 
    } 
 </script>
</head>
<body>
<div id="calculator">
  <input id="result"/>
  <div class="btn" onclick="afficher('+')">+</div>
  <div class="btn" onclick="afficher('-')">-</div>
  <div class="btn" onclick="afficher('/')">/</div>
  <div class="btn" onclick="afficher('*')">*</div>
  <div class="btn" onclick="afficher('1')">1</div>
  <div class="btn" onclick="afficher('2')">2</div>
  <div class="btn" onclick="afficher('3')">3</div>
  <div class="btn" onclick="afficher('0')">0</div>
  <div class="btn" onclick="afficher('4')">4</div>
  <div class="btn" onclick="afficher('5')">5</div>
  <div class="btn" onclick="afficher('6')">6</div>
  <div class="btn" onclick="effacer()">c</div>
  <div class="btn" onclick="afficher('7')">7</div>
  <div class="btn" onclick="afficher('8')">8</div>
  <div class="btn" onclick="afficher('9')">9</div>
  <div class="btn eq" onclick="calculer()">=</div>
</div>
</body>
</html>
```

## v1.1
```html
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="calculator.css">
</head>
<body>
<div id="calculator">
  <div id="result"></div>
  <div class="btn">+</div>
  <div class="btn">-</div>
  <div class="btn">/</div>
  <div class="btn">*</div>
  <div class="btn">1</div>
  <div class="btn">2</div>
  <div class="btn">3</div>
  <div class="btn">0</div>
  <div class="btn">4</div>
  <div class="btn">5</div>
  <div class="btn">6</div>
  <div class="btn">c</div>
  <div class="btn">7</div>
  <div class="btn">8</div>
  <div class="btn">9</div>
  <div class="btn eq">=</div>
</div>
<script src="calc.js"></script>
</body>
</html>
```
