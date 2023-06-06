<?php
include('cnx/cnx.php');
spl_autoload_register( function($class){
    include('classes/'.$class.'.php');
});