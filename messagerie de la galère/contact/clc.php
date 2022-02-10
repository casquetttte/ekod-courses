<?php
// connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=test;port=3307', 'admin', 'admin');

// ajout d'un fruit en base de données
if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['telephone']) ) {
    $ajouterContact = $dbh->prepare("INSERT INTO contact (nom, prenom, email, telephone) 
                                            VALUES (:nom, :prenom, :email, :telephone)");
    $ajouterContact->execute([
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "email" => $_POST['email'],
        "telephone" => $_POST['telephone'],
    ]);

}

// selection de l'ensemble des fruits dans la base de données
$contacts = $dbh->prepare('SELECT * FROM contact');
$contacts->execute();

// affichage de la liste des fruits
while ($contact = $contacts->fetch() ) {
    echo "Nom : ".$contact['nom']." | Prénom : ".$contact['prenom']." | Email : ".$contact['email']." | Téléphone : ".$contact['telephone']. "<input type="submit" value="delete"><br>";
}
// affichage du formulaire d'ajout d'un fruit en base de données
?>