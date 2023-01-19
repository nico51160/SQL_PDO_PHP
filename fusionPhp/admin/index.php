<?php
session_start();
if(isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
} else {
    header('location:../acces.php');
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ergonomie/css/style.css">
    <title>Zone Admin</title>
</head>
<body>
    <section>
        <h1>Zone Admin</h1>
        <?= $userID; ?>
    </section>
</body>
</html>