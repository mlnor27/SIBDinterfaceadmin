<?php

Class playerautotask extends Controller
{

    var $models = array('MPlayerAutoTask');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['playerautotask'] = $this->MPlayerAutoTask->find();
        $d['columnsplayerautotask'] = $this->MPlayerAutoTask->selectColumnsName('playerautotask');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();

        if (count($_POST)>0){
            $this->MPlayerAutoTask->del(array_shift(array_keys($_POST)));
            header('Location:' . WEBROOT . 'playerautotask');
        }else{
            $this->MPlayerAutoTask->del($id);
            header('Location:' . WEBROOT . 'playerautotask');
        }

    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MPlayerAutoTask->save($_POST);
            header('Location:' . WEBROOT . 'playerautotask');
        }else{
            header('Location:' . WEBROOT . 'playerautotask');
        }
    }
}

?>