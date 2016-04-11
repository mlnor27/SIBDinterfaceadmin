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
        $d['privhorses'] = $this->MHorseAction->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseaction'] = $this->MHorseAction->find(array(
            'conditions' => 'horseaction_id='.$id
        ));
        $d['columnshorseaction'] = $this->MHorseAction->selectColumnsName('horseaction');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseAction->del($id);
        header('Location:' . WEBROOT . 'horseaction');
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

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseAction->save($_POST);
            header('Location:' . WEBROOT . 'horseaction');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>