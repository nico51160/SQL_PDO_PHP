<?php

require('cnx.php');
require('model.php');

if(isset($_GET['voitID'])) {
    $data2 = AfficherDetail($cnx, $_GET['voitID']);
    require('view-detail.php');
} else {
    echo 'Une erreur est survenue !';
}
