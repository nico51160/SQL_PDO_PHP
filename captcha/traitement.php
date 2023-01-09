<?php
session_start();

$code = $_POST['captcha'];
if(!empty($code) && $code == $_SESSION['captcha'] ) {
    $message = "Captcha ok";
} else {
    $message = "Captcha pas ok";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <h1>traitement</h1>
    <?= $message; ?>
</body>
</html>