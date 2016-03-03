<?php
function connect() {

    $db = new PDO('mysql:host=localhost;dbname=turnkey', "root", "mysql");
    return $db;

}

?>