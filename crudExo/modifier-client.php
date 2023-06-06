<?php
include('_include.php');
$manager = new ClientManager($cnx);
$client  = $manager->ReadClient($_GET['clientID']);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier client</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
    <div class="client">
        <p><a href="index.php">Retour à l'acceuil</a></p>
        <h2>Creer un nouveau client</h2>
        <form action="modifier-client-traitement.php" method="post">
            <input type="text" name="prenom" placeholder="Prénom" value="<?= $client->getPrenom(); ?>">
            <input type="text" name="nom" placeholder="Nom" value="<?= $client->getNom(); ?>">
            <input type="email" name="email" placeholder="Email" value="<?= $client->getEmail(); ?>">
            <input type="hidden" name="clientID" value="<?= $_GET['clientID']; ?>">
            <input type="submit" value="Modifier le client">
        </form>
    </div>
</body>
</html>