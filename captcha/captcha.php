<?php
session_start();

//creation d'un code aléatoire 

//$_SESSION['captcha'] = rand(10000, 99999);
$_SESSION['captcha'] = substr(md5(rand()),0,5);
$captcha = $_SESSION['captcha'];


// creation d une image virtuelle

$img      = imagecreate(55,25);
$imgcolor = imagecolorallocate($img, 0,0,0);

//Lier le code aléatoire à l'image

$textColor = imagecolorallocate($img, 255,255,255);
imagestring($img, 14, 5,5, $captcha, $textColor);

// afficher l'image virtuelle 
header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);


