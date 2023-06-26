<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article ajouté</title>
    <link rel="stylesheet" href="././public/css/style.css">
</head>
<body>
    <div class="box">
        <h1>Liste des articles</h1>
        <ol>
            <?php
            while($req->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <Li> <a href="index.php?page=afficher-article"><?= $data['titre']; ?></a></Li>
            <?php
            }
            ?>
        </ol>

        <p><a href="index.php?page=insert-article">Ajouter un article</a></p>
    </div>
</body>
</html>