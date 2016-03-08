<?php

session_start();


ini_set('display_errors', 0);

define('WEBROOT', str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));

require(ROOT.'core/model.php');
require(ROOT.'core/controller.php');

//$params = isset($_GET['p']) ? explode('/', $_GET['p']) : 'index';
if (empty($_GET['p'])){
    $params[0] = 'index';
    $params[1] = 'index';
}else{
    $params = explode('/', $_GET['p']);
}

if (!$_SESSION['co']){
    $params[0] = 'auth';
    $params[1] = 'index';
    //echo "<script>alert('2');</script>";
}

$controller = $params[0];
$action = isset($params[1]) ? $params[1] : 'index';

require('controllers/'.$controller.'.php');
$controller = new $controller();

if(method_exists($controller,$action)){
    unset($params[0]); unset($params[1]);
    call_user_func_array(array($controller,$action),$params);
    //$controller->$action();

}
else{
    include '404.html';
}

?>
