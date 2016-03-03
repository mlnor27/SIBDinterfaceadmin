<?php

Class horses extends Controller {

    function index() {
        $this->loadModel('Horse');
        $d['horse'] = $this->Horse->selectAll();
        $this->set($d);
        $this->render('index');
    }

    function view($id) {
        echo $id;
    }

}