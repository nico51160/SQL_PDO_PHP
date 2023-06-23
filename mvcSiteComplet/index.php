<?php
include('cnx/cnx.php');
include('controller/admin/controleur.php');

if($_GET['page'] == 'insert-article') {
    if(empty($_POST['titre']) || empty($_POST['article'])){
        include('view/admin/insert.php');
    } else {
        InsertArticle($cnx, $_POST['titre'], $_POST['article']);
    }

}