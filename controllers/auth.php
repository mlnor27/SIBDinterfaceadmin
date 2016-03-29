<?php


Class auth extends Controller {

    var $models = array('user');
    var $layout = 'default';

    function index()
    {
        if(isset($_SESSION['id'])) {
            header('Location:'.WEBROOT.'index');
            return;
        }
        $this->render('auth');
    }

    function login(){
        if (empty($_POST)){
            header('Location:'.WEBROOT);
        }
        else {
            $connect = $this->user->connection($_POST);  //test du login et mdp à faire
            if ($connect) {
                $_SESSION['id'] = 1;
                header('Location:' . WEBROOT . 'index');
            } else {
                header('Location:' . WEBROOT . 'auth');
            }
        }
    }

    function deconnect(){
        $_SESSION = array();
        session_destroy();
        header('Location:' . WEBROOT.'auth');
    }

}