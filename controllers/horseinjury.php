<?php

Class horseinjury extends Controller
{

    var $models = array('MHorseInjury');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseinjury'] = $this->MHorseInjury->find();
        $d['columnshorseinjury'] = $this->MHorseInjury->selectColumnsName('horseinjury');
        $d['privhorses'] = $this->MHorseInjury->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseinjury'] = $this->MHorseInjury->find(array(
            'conditions' => 'horseinjury_id='.$id
        ));
        $d['columnshorseinjury'] = $this->MHorseInjury->selectColumnsName('horseinjury');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseInjury->del($id);
        header('Location:' . WEBROOT . 'horseinjury');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseInjury->save($_POST);
            header('Location:' . WEBROOT . 'horseinjury');
        }else{
            header('Location:' . WEBROOT . 'horseinjury');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseInjury->save($_POST);
            header('Location:' . WEBROOT . 'horseinjury');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>