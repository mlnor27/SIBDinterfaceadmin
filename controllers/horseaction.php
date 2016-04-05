<?php

Class horseaction extends Controller
{

    var $models = array('MHorseAction');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseaction'] = $this->MHorseAction->find();
        $d['columnshorseaction'] = $this->MHorseAction->selectColumnsName('horseaction');
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseAction->del($id);
        header('Location:' . WEBROOT . 'horseaction');
    }
}

?>