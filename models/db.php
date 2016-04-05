<?php
function connect() {

    $db = new PDO('mysql:host=localhost;dbname=test_turnkey', "root", "");
    return $db;

}

?>