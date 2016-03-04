<?php

Class horses extends Controller {

    function index() {

        $this->loadModel('Horse');

        $d['horse'] = $this->Horse->find();
        $this->set($d);
        $this->render('index');
    }

    function view($id) {
        $this->loadModel('Horse');

    }

}