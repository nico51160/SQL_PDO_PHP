<?php
require('cnx.php');
require('controleur.php');

if(isset($_GET['page'])) {

    if($_GET['page'] == 'AfficherVoiture') {
        AfficherVoiture($cnx);
    } elseif($_GET['page'] == 'AfficherLeDetail') {
        if(isset($_GET['voitID'])) {
            $voitID = $_GET['voitID'];
            AfficherLeDetail($cnx, $voitID);
        } else {
            echo 'Une erreur est survenue !';
        }
    }

} else {
    AfficherVoiture($cnx);
}