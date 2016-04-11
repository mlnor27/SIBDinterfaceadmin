<?php
function connect() {

    $db = new PDO('mysql:host=localhost;dbname=turnkey2', 'root', '');
    return $db;

}

?>