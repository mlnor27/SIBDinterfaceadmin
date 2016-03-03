<?php

Class horses extends Controller {

    function index() {

        $this->loadModel('Horse');
        $d['horses'] = $this->Horse->selectAll();
        //sar_dump($d);
        $this->set($d);
        $this->render('index');
    }

}