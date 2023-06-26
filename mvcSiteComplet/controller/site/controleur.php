<?php

include('././model/model.php')
function AfficherArticles($cnx) {
    $req = AfficherTout($cnx);
    include('././view/site/view.php');
}