<?php
include('ergonomie/cnx/cnx.php');
$message = '';

if($fichier == 'CREERCOMPTE') {

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

} elseif($fichier == 'ACCESCOMPTE') {
    if(isset($_POST['acces'])) {
        $login = $_POST['login'];
        $pass  = $_POST['pass'];
    
        if(!empty($login) && (!empty($pass))) {
            // existence logging checking & pass(start)
            $sql2 = 'SELECT * FROM usercripte
                     WHERE login = :login';
            $req2  = $cnx->prepare($sql2);
            $req2->execute(
                array(
                    ':login' => $login
                )
    
            );
            $data = $req2->fetch(PDO::FETCH_ASSOC);
    
            // existence logging checking & pass (end)
    
            if(password_verify($pass, $data['pass'])) {
                $_SESSION['userID'] = $data['userID'];
                header('location:admin/');
            } else {
                $message= '<span class="error"> Password incorect</span>';
            }
    
        } else {
            $message= '<span class="error">Merci de remplir tous les champs</span>';
        }
    
    }
}