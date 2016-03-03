<?php
function connect() {

    $db = new PDO('mysql:host=localhost;dbname=turnkey', "root", "");
    return $db;

}

?>