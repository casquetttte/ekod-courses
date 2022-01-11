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
```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1 style="text-align: center;">Nom de la page</h1>
        
        <button onclick="myFunction()">Display/Hide "random"</button>
        <br><br>
        <div id="balise1" style="text-align: center;"></div>
        <br>
        <input type="button" id="btn1" value="random">
        
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
            $.ajax('https://swapi.dev/api/planets/').done(function(data) {
                for (i = 0 ; i < data.count ; i ++ ) {
                    //console.log(data.results[i].title)
                    document.getElementById('balise1').innerHTML += '<p>' + data.results[i].name + '</p>'
                    document.getElementById('balise1').innerHTML += '<p>' + data.results[i].climate + '</p>'
                }
            });
        });
        </script>
    </body>
</html>
```
```html

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo</title>
</head>
<body>
    
    Afficher la météo pour la ville : 
    <!-- balises HTML pour la recherche -->
    <input id="query" type="text"> 
    <input id="searchBtn" type="submit" value="Go">

    <!-- balises HTML pour accueilir les données qui proviennent de l'API -->
    <h1 id="name"></h1>
    <p id="coord"></p>
    <h2 id="temp"></h2>
    <h3 id="wind"></h3>

    <!-- import de la librairie jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // définition de l'action au clique sur le bouton Go
        document.getElementById('searchBtn').addEventListener('click', function () {
            // récupérer la requête saisie par l'utilisateur dans le champ de recherche
            var query = document.getElementById('query').value;

            // on effectue l'appel à l'API open weather map
            $.ajax('https://api.openweathermap.org/data/2.5/weather?q='+query+'&appid=aeced65d7ee8570df87f1e20ccf0af88&units=metric').done(function (data) {
                // injection des données reçues depuis l'API vers les balises HTML présentes dans la page
                document.getElementById('name').innerHTML = data.name
                document.getElementById('coord').innerHTML = '📌 '+data.coord.lat+', '+data.coord.lon
                document.getElementById('temp').innerHTML = data.main.temp+'°C - '+data.weather[0].main
                document.getElementById('wind').innerHTML = 'Vent: '+data.wind.speed+'km/h'
            })

        })
        


    </script>

</body>
</html>
```
