<?php
//host = ip serveur (fourni par l'hebergeur)//
$dsn = 'mysql:host=localhost;dbname=PDO_CALL;charset=utf8';
//login d acces à la base de données (fourni également)//
$user ='root';
//mot de passe (fn)
$pass ='';


try{
    $cnx = new PDO($dsn, $user, $pass);
}catch(PDOException $e){
    echo 'Erreur de connexion';
}


