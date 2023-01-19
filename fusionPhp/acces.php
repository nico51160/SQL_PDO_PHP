<?php
session_start();


$fichier = 'ACCESCOMPTE';
include('_script.php');
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ergonomie/css/style.css">
    <title>Acces à votre comptre</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <?= $message; ?>
            <h1>Acces à votre comptre</h1>
            <input type="text" name="login" placeholder="login">
            <input type="password" name="pass" placeholder="password">
            <input type="submit" name="acces" value="Acces compte">
        </form>
        <a href="index.php">Creer compte</a>
    </section>
</body>
</html>