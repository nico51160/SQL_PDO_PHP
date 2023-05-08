<?php
$dsn  = 'mysql:host=localhost;dbname=mvc2;charset=utf8';
$user = 'root';
$pass = '';

try {
    $cnx = new PDO($dsn,$user,$pass);
} catch(PDOException $e) {
    echo 'Un probleme est survenu !';
}