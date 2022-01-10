```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1 style="text-align: center;">Nom de la page</h1>
        
        <button onclick="myFunction()">Display/Hide "perso random"</button>
        <br><br>
        <div id="balise1" style="text-align: center;">Nom personnage Star Wars aléatoire</div>
        <br>
        <input type="button" id="btn1" value="perso random">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

        function myFunction() {
            var x = document.getElementById("btn1");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        } 
            
        liste = ['https://swapi.dev/api/people/1/','https://swapi.dev/api/people/3/','https://swapi.dev/api/people/4/','https://swapi.dev/api/people/5/','https://swapi.dev/api/people/10/','https://swapi.dev/api/people/11/','https://swapi.dev/api/people/13/']
        //liste = ['http://pastebin.fr/100534','http://pastebin.fr/100535','http://pastebin.fr/100536']
        
        document.getElementById('btn1').addEventListener('click', function () {
            aleatoire = liste[Math.floor(Math.random()* liste.length)]
            $.ajax(aleatoire).done(function(data) {
                document.getElementById('balise1').innerHTML = data.name
                    
            });
        });
        </script>
    </body>
</html>
```
```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1 style="text-align: center;">Nom de la page</h1>
        
        <button onclick="myFunction()">Display/Hide "perso random"</button>
        <br><br>
        <div id="balise1" style="text-align: center;">Liste films star wars</div>
        <br>
        <input type="button" id="btn1" value="perso random">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>

        function myFunction() {
            var x = document.getElementById("btn1");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        } 
            
        document.getElementById('btn1').addEventListener('click', function () {
            $.ajax('https://swapi.dev/api/films/').done(function(data) {
                for (i = 0 ; i < data.count ; i ++ ) {
                    console.log(data.results[i].title)
                    document.getElementById('balise1').innerHTML += '<p>' + data.results[i].title + '</p>'
                }
            });
        });
        </script>
    </body>
</html>
```
