<?php
include('cnx/cnx.php');
include('controller/admin/controleur.php');
include('controller/site/controleur.php');

if(isset($_GET['page'])) {
    if($_GET['page'] == 'insert-article') {
        if(empty($_POST['titre']) || empty($_POST['article'])){
            include('view/admin/insert.php');
        } else {
            InsertArticle($cnx, $_POST['titre'], $_POST['article']);
        }

    } elseif($_GET['page'] == 'afficher-article') {
        AfficherArticles($cnx);
    }
} else {
    AfficherArticles($cnx);
}
