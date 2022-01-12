```html
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <br><br><br>
↓↓↓
    <div id="lastmessagee"></div><br>↑↑↑<br><br>

    <input id="messagee" type="text"><br><br>
    <input id="fromm" type="text"> <br><br>
    <input id="too" type="text"> <br><br>
    <input id="messageeBtn" type="submit" value="Go">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            var utilisateur = {
                    "id": 9,
	                "authKey": "67ec96b5a3dfd77ff0c931ebec2e6013",
	                "username": "user8964",
	                "createdAt": 1641910696,
	                "lastMessageAt": 0
                }

                console.log(utilisateur.authKey);
            
		$.ajax({
                url: 'https://api.messenger.codecolliders.dev/changeUsername',
                method: 'POST',
                data: {
                    authKey: "67ec96b5a3dfd77ff0c931ebec2e6013",
                    username: "cask"
                      }
            	})  
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

    <br><br><br>

    <button id="refrech_btn" type="button">↑↓</i></button>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
                var utilisateur = {
                    "id": 9,
	                "authKey": "67ec96b5a3dfd77ff0c931ebec2e6013",
	                "username": "cask",
	                "createdAt": 1641910696,
	                "lastMessageAt": 0
                }

                $.ajax({
                url: 'https://api.messenger.codecolliders.dev/getMessages',
                method: 'POST',
                data: {
                    authKey: "67ec96b5a3dfd77ff0c931ebec2e6013",
                    lastId: 0
                }
            })  

            document.getElementById('refrech_btn').addEventListener('click', function () {
                $.ajax({
                url: 'https://api.messenger.codecolliders.dev/getMessages',
                method:'POST',
                data:{
                    authKey: user,
                    lastId : 0,
                }
            }).done(function (data) {
                for(i=0;i<data.length;i++) {
                    document.getElementById('msg_section').innerHTML += '<p> De '+data[i].from.username+' : '+data[i].text+'</p>';
                }
            });
            });
            
        </script>
    </body>
</html>
```
