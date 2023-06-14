<?php
//Affichage de la liste des voitures
function AfficherListeVoiture($cnx) {
    $sql = 'SELECT * FROM voiture';
    $req = $cnx->prepare($sql);
    $req->execute();

    return $req;
}

//Affichage de detail d'une voiture

function AfficherDetail($cnx, $voitID) {
    $sql2 = 'SELECT * FROM voiture AS v
            JOIN detail AS d
            ON v.voitID = d.voitID
            WHERE v.voitID = :voitID';
    $req2 = $cnx->prepare($sql2);
    $req2-> bindValue(':voitID', $voitID, PDO::PARAM_INT);
    $req2->execute();
    $data2 = $req2->fetch(PDO::FETCH_ASSOC);
    return $data2;
}