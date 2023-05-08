<?php
//Affichage de la liste des voitures

function AfficherListeVoiture($cnx) {
    $sql = 'SELECT * FROM voiture';
    $req = $cnx->prepare($sql);
    $req->execute();

    return $req;

}