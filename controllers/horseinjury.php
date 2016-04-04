<?php

Class horseinjury extends Controller
{

    var $models = array('MHorseInjury');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseinjury'] = $this->MHorseInjury->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseInjury->del($id);
        header('Location:' . WEBROOT . 'horseinjury');
    }
}

?>