<?php

Class home extends Controller {

    var $models = array('MHorse');
    var $layout;

    function index() {


        $this->loadTable();
        $this->render('index');

    }

    function view() {

    }

}