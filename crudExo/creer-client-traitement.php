<?php
include('_include.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
<div class="client">
        <p><a href="index.php">Retour à l'acceuil</a> |
         <a href="creer-client.php">Créer un nouveau client</a></p>
        <h2>Creer un nouveau client</h2>
        <?php
        $client = new Client();
        $client->setPrenom($_POST['prenom']);
        $client->setNom($_POST['nom']);
        $client->setEmail($_POST['email']);

        $manager = new ClientManager($cnx);
        $manager->CreateClient($client);
        ?>
</div>
    
</body>
</html>