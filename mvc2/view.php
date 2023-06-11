<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des voitures</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Liste des voitures</h1>
        <ol>
            <?php
            while($data = $req->fetch(PDO::FETCH_ASSOC)){   
            ?>
            <li><a href="controleur-detail.php?voitID=<?= $data['voitID']; ?>"><?= $data['voiture']; ?></a></li>
            <?php
            }
            ?>
        </ol>
    </div>
</body>
</html>