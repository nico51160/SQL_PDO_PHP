<?php
$dsn  ='mysql:host=localhost;dbname=exo;charset=utf8';
$user ='root';
$pass = '';


try{
    $cnx = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
    echo 'Une erreur est survenue';
}
