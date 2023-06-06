<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un nouveau client</title>
    <link rel="stylesheet" href="medias/style.css">
</head>
<body>
    <div class="client">
        <p><a href="index.php">Retour à l'acceuil</a></p>
        <h2>Creer un nouveau client</h2>
        <form action="creer-client-traitement.php" method="post">
            <input type="text" name="prenom" placeholder="Prénom">
            <input type="text" name="nom" placeholder="Nom">
            <input type="email" name="email" placeholder="Email">
            <input type="submit" value="Créer le client">
        </form>
    </div>
</body>
</html>