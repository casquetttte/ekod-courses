<?php
echo $_SERVER['REQUEST_URI'].'<br><br>';
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=messagerie;port=3307', 'admin', 'admin');

if ( isset($_POST['username']) ) {
    $ajouterContact = $dbh->prepare("INSERT INTO users (username) 
                                            VALUES (:username)");
    $ajouterContact->execute([
        "username" => $_POST['username'],
    ]);

}

?>