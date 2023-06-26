<?php

function AfficherTout() {
    $sql = 'SELECT * FROM article';
    $req = $cnx->prepare($sql);
    $req->execute();

    return $req;
}