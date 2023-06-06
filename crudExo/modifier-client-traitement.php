<?php
include('_include.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un client</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
<div class="client">
        <p><a href="index.php">Retour à l'acceuil</a></p>
        <h2>Modifier un client</h2>
        <?php
            $client  = new Client();
            $client->setClientID($_POST['clientID']);
            $client->setPrenom($_POST['prenom']);
            $client->setNom($_POST['nom']);
            $client->setEmail($_POST['email']);

            $manager = new ClientManager($cnx);
            $manager->UpdateClient($client);
</body>
</html>