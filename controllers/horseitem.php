<?php

Class horseitem extends Controller
{

    var $models = array('MHorseItem');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseitem'] = $this->MHorseItem->find();
        $d['columnshorseitem'] = $this->MHorseItem->selectColumnsName('horseitem');
        $d['privhorses'] = $this->MHorseItem->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseitem'] = $this->MHorseItem->find(array(
            'conditions' => 'horseitem_id='.$id
        ));
        $d['columnshorseitem'] = $this->MHorseItem->selectColumnsName('horseitem');
        $this->set($d);
        $this->render('update');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorseItem->del($id);
        header('Location:' . WEBROOT . 'horseitem');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseItem->save($_POST);
            header('Location:' . WEBROOT . 'horseitem');
        }else{
            header('Location:' . WEBROOT . 'horseitem');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseItem->save($_POST);
            header('Location:' . WEBROOT . 'horseitem');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>