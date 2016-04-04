<?php

Class horseequipement extends Controller
{

    var $models = array('MHorseEquipement');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseequipement'] = $this->MHorseEquipement->find();
        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseEquipement->del($id);
        header('Location:' . WEBROOT . 'horseequipement');
    }
}

?>