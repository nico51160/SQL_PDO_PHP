<?php
include('ergonomie/cnx/cnx.php');
$message = '';

if(isset($_POST['create'])) {
    $login = $_POST['login'];
    $pass  = $_POST['pass'];

    if(!empty($login) && (!empty($pass))) {
        // existence logging checking (start)
        $sql2 = 'SELECT login FROM usercripte
                 WHERE login = :login';
        $req2  = $cnx->prepare($sql2);
        $req2->execute(
            array(
                ':login' => $login
            )

        );
        $count = $req2->rowcount();



        // existence logging checking (end)

        if($count <=0) {

            //add new users (start)
            $sql = 'INSERT INTO usercripte 
            (login, pass) VALUES
            (:login, :pass)';
            $req = $cnx->prepare($sql);
            $req->execute(
                array(
                ':login' => $login,
                ':pass'  => password_hash($pass,PASSWORD_DEFAULT)
                )
                );
            $message= '<span class="success">Votre compte a bien été crée</span><a href="acces.php">Acces compte</a>';
            //add new users (end)
        } else {
            $message= '<span class="error">Ce login est deja present</span>';
        }
    } else {
        $message= '<span class="error">Merci de remplir tous les formulaires</span>';
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
    <title>Creer votre compte</title>
</head>
<body>
    <section>
        <form action="" method="post">
            <?= $message; ?>
            <h1>Creer votre compte</h1>
            <input type="text" name="login" placeholder="login">
            <input type="text" name="pass" placeholder="password">
            <input type="submit" name="create" value="Creer mon compte">
        </form>
        <a href="acces.php">Acces compte</a>
    </section>
</body>
</html>