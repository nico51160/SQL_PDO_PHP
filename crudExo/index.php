<?php
include('cnx/cnx.php');
spl_autoload_register( function($class){
    include('classes/'.$class.'.php');
});

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher la liste des clients</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
    <div class="client">
        <h2>Acceuil</h2>
        <p><a href="creer-client.php">Creer un nouveau client</a></p>
        <h2>liste des clients</h2>
        <ul>
        <?php
            $manager = new ClientManager($cnx);
            $clients = $manager->ReadAllClient();
            if(empty($clients)) {
                echo '<li>Il n\'y a pas de client</li>';
            } else {
                foreach($clients as $client) {
                    echo '<li>'. $client->getPrenom().' '.$client->getNom().' '.$client->getEmail().' [<a href="modifier-client.php?clientID='. $client->getClientID().'">modifier</a>] | [<a href="supprimer-client.php?clientID='. $client->getClientID().'">Supprimer</a>]</li>';
            }
            }
        ?>
        </ul>
</body>
</html>