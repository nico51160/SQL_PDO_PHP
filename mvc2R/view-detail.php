<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <p><a href="index.php">Retour à la liste des voitures</a></p>
        <h1><?= ucfirst($data2['voiture']); ?></h1>
        <p><?= $data2['detail']; ?></p>
    </div>
</body>
</html>