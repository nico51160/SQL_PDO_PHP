<?php

$dsn = 'mysql:host=localhost;dbname=PDO_CALL;charset=utf8';
$user= 'root';
$pass= '';


try{
    $cnx = new PDO($dsn, $user, $pass);
} catch(PDOException $e) {
    echo 'une erreur est survenue !';
}
