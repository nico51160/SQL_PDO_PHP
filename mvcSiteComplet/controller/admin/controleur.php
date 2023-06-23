<?php
include('././model/admin/model.php');
function InsertArticle($cnx, $titre, $article) {
    $req = InsererArticle($cnx, $titre, $article);
    include('././view/admin/view.php');
}
