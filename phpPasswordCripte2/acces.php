<?php
include('ergonomie/cnx/cnx.php');
$message = '';

if(isset($_POST['acces'])) {
    $login = $_POST['login'];
    $pass  = $_POST['pass'];

    if(!empty($login) && (!empty($pass))) {
        // existence logging checking & pass(start)
        $sql2 = 'SELECT login, pass FROM usercripte
                 WHERE login = :login AND pass = :pass';
        $req2  = $cnx->prepare($sql2);
        $req2->execute(
            array(
                ':login' => $login,
                ':pass'  => $pass
                
            )

        );

        $count = $req2->rowcount();
       



        // existence logging checking & pass (end)

        if($count >0) {
            $message= '<span class="success">Acces OK</span>';
        } else {
            $message= '<span class="error">Erreur login ou Password</span>';
        }

    } else {
        $message= '<span class="error">Merci de remplir tous les champs</span>';
    }

}
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
            <input type="text" name="pass" placeholder="password">
            <input type="submit" name="acces" value="Acces compte">
        </form>
        <a href="index.php">Creer compte</a>
    </section>
</body>
</html>