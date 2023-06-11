<?php
require('cnx.php');
require('model.php');
$req = AfficherListeVoiture($cnx);
require('view.php');