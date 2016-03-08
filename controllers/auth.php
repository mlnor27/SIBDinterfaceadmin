<?php


Class auth extends Controller {

    var $models = array('user');
    var $layout = 'default';

    function index() {
        $this->render('index');
    }

    function view($id) {

        $d['horse'] = $this->models->find(array(
            'conditions' => 'horse_id='.$id
        ));
        $d['horse'] = $d['horse'][0];
        $this->set($d);
        $this->render('view');


    }

    function login(){
        $connect = true;
        //$connect = $this->user->connection($_POST);  //test du login et mdp à faire
        if ($connect){
            echo "<script>document.location.href = '".WEBROOT."index';</script>";
        }else{
            echo "<script>document.location.href = '".WEBROOT."auth';</script>";
        }
    }

    function deconnect(){
        session_destroy();
        echo "<script>document.location.href = '".WEBROOT."auth';</script>";
    }

}