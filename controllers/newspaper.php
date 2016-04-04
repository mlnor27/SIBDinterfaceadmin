<?php

Class newspaper extends Controller
{

    var $models = array('MNewspaper');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['newspaper'] = $this->MNewspaper->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MNewspaper->del($id);
        header('Location:' . WEBROOT . 'newspaper');
    }
}

?>