<?php
function connect() {

    //$db = new PDO('mysql:host=localhost;dbname=turnkey', $_SESSION['name'], $_SESSION['mdp']);
    $db = new PDO('mysql:host=localhost;dbname=turnkey', 'root', '');
    return $db;

}

?>