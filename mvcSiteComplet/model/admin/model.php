<?php
function InsererArticle($cnx, $titre, $article) {
    $sql = 'INSERT INTO article (titre, article) VALUES (:titre, :article)';
    $req = $cnx->prepare($sql);
    $req->bindValue(':titre', $titre, PDO::PARAM_STR);
    $req->bindValue(':article', $article, PDO::PARAM_STR);
    $req->execute();

    return $req;
}