<?php

Class playerautotask extends Controller
{

    var $models = array('MPlayerAutoTask');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['playerautotask'] = $this->MPlayerAutoTask->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MPlayerAutoTask->del($id);
        header('Location:' . WEBROOT . 'playerautotask');
    }
}

?>