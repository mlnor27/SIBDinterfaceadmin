<?php

Class news extends Controller
{

    var $models = array('MNews');
    var $layout;
    function index()
    {
        $this->loadTable();
        $d['news'] = $this->MNews->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNews->del($id);
        header('Location:' . WEBROOT . 'news');
    }
}

?>