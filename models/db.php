<?php
function connect() {


    $db = new PDO('mysql:host=localhost;dbname=turnkey', $_SESSION['name'], $_SESSION['mdp'], array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //$db = new PDO('mysql:host=localhost;dbname=turnkey', 'root', '', array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    return $db;

}

?>