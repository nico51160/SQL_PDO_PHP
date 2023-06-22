<?php
function InserArticle($cnx, $titre, $article) {
    $sql = 'INSERT INTO article (titre, article) VALUES (:titre, :article)';
    $req = cnx->prepare($sql);
    $req->bindValue(':titre', $titre, PDO::PARAM_STR);
    $req->bindValue(':titre', $article, PDO::PARAM_STR);
    $req->execute();

    return $req;
}