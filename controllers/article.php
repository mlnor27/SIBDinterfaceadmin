<?php

Class article extends Controller
{

    var $models = array('user');
    var $layout;

    function index()
    {
        $this->loadTable();
        $this->render('table');
    }

    function view($id)
    {
        return;
    }
}

?>