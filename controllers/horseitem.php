<?php

Class horseitem extends Controller
{

    var $models = array('MHorseItem');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseitem'] = $this->MHorseItem->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseItem->del($id);
        header('Location:' . WEBROOT . 'horseitem');
    }
}

?>