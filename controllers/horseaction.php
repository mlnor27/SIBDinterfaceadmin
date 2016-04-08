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
        if (count($_POST)>0){
            $this->MHorseAction->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'horseaction');
        }else{
            $this->MHorseAction->del($id);
            header('Location:' . WEBROOT . 'horseaction');
        }


    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseAction->save($_POST);
            header('Location:' . WEBROOT . 'horseaction');
        }else{
            header('Location:' . WEBROOT . 'horseaction');
        }
    }
}

?>