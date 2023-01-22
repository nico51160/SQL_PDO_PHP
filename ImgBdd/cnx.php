<?php

$dsn  = 'mysql:host=localhost;dbname=pdo_call;charset=utf8';
$user = 'root';
$pass = '';

try {
    $cnx = new PDO($dsn, $user, $pass);
} catch(PDOExeption $e) {
    echo 'une erreur est survenue';
}
