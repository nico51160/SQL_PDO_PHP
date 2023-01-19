<?php
$fichier = 'CREERCOMPTE';
include('_script.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ergonomie/css/style.css">
    <title>Creer votre compte</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <?= $message; ?>
            <h1>Creer votre compte</h1>
            <input type="text" name="login" placeholder="login">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="create" value="Creer mon compte">
        </form>
        <a href="acces.php">Acces compte</a>
    </section>
</body>
</html>