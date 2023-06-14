<?php
require('model.php');

function AfficherVoiture($cnx) {
    $req = AfficherListeVoiture($cnx);
    require('view.php');
}

function AfficherLeDetail($cnx, $voitID) {
    $data2 = AfficherDetail($cnx, $voitID);
    require('view-detail.php');
}