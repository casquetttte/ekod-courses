choice = "cask"
var currentUser

// récupération d'un utilisatateur
$.ajax({
    url: 'localhost:81/MAMP/WWW/chatv2/createUser',
    method: 'GET'
}).done(function (user) {
    currentUser = user;
    // récupération des messages
    $.ajax({
        url: 'localhost:81/MAMP/WWW/chatv2/changeUsername',
        method: 'POST',
        data: {
            authKey: currentUser.authKey,
            username: choice
              }
        }).done(function (user) {
            currentUsername = choice
        })
    getMessages();
})

// detection de la touche Enter sur la case message
document.getElementById('message').addEventListener('keypress', function (event) {
    if (event.key === "Enter") {
        // envoi du message vers l'API
        $.ajax({
            url: 'localhost:81/MAMP/WWW/chatv2/sendMessage',
            method: 'POST',
            data: {
                authKey: currentUser.authKey,
                text: document.getElementById('message').value,
                to: 0
            }
        })

        // on vide le champ message
        document.getElementById('message').value = '';
    }
})

// récupération des messages
var lastId = 0;

function getMessages() {
    // requête AJAX de récupération
    $.ajax({
        url: 'localhost:81/MAMP/WWW/chatv2/getMessages',
        method: 'POST',
        data: {
            authKey: currentUser.authKey,
            lastId: lastId
        }
    }).done(function (messages) {
        // traitement et affichage des messages reçus
        for (let i = 0; i < messages.length; i++) {
            // on garde le dernier id récupéré (pour ne pas récupérer les messages déjà reçus)
            lastId = messages[i].id
            // injection du message dans la page
            document.getElementById('list').innerHTML += '<p>' + messages[i].from.username + ': ' + messages[i].text + '</p>'
        }

        // on relance la récupération des messages dans 1 seconde
        setTimeout(getMessages, 1000)
    })
}
