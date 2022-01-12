### v1.0
```html
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messagerie</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <!--

<div id="chat-box">
    <h3 class="floatf">Envoyer un message</h3>
    <input type="text" id="message" class="send" placeholder="(min 3 caractères)">
    <h3>↓↓ Chat ↓↓</h3>
    <div id="list"></div>
</div>-->
<div class="chat-container">
    <h2 class="titre">WebCo Chat Box</h2>
    <div class="field has-addons">
      <div class="control is-expanded">
        <input id="message" class="input" type="text" placeholder="Ecrire un message...">
      </div>
      </div>

      <div class="chat-message">
        <div id="list"></div>
    </div>
    </div>
    
  </div>

<!--chargement de la librairie jQuery au travers d'un CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--chargement du script du client de messagerie-->
<script src="chat.js"></script>

</body>
</html>
```
### v1.1
```html
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messagerie</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<!--
<div id="chat-box">
    <h3 class="floatf">Envoyer un message</h3>
    <input type="text" id="message" class="send" placeholder="(min 3 caractères)">
    <h3>↓↓ Chat ↓↓</h3>
    <div id="list"></div>
</div>
-->

<div class="chat-container">
    <h2 class="titre">WebCo Chat Box</h2>
    <div class="chat-message">
        <div id="list"></div>
    </div>
    <div class="field has-addons">
      <div class="control is-expanded">
        <input id="message" class="input" type="text" placeholder="Ecrire un message...">
      </div>
      </div>
    </div>
<!--
  <div class="window">
    <div class="title"> <a> WebCo Chat IRC </a> </div>
    <div class="term"> <a style="color:lightgreen;"> root@WebCo: ~$ </a>
      <form id="let">
        <div class="chat-message">
            <div id="list"></div>
        </div>
        <div class="term1"> </div>
          ><input class="cmd" id="message" placeholder="Ecrire un message...">
        </div>
        
      </form>
      </div>
    </div>
      -->

<!--chargement de la librairie jQuery au travers d'un CDN-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--chargement du script du client de messagerie-->
<script src="chat.js"></script>

</body>
</html>
```
