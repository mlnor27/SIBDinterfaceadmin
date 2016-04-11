<?php

Class horseequipement extends Controller
{

    var $models = array('MHorseEquipement');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseequipement'] = $this->MHorseEquipement->find();
        $d['columnshorseequipement'] = $this->MHorseEquipement->selectColumnsName('horseequipement');
        $d['privhorses'] = $this->MHorseEquipement->selectTablePriv();
        $this->set($d);
        $this->render('table');
    }

    function update($id) {

        $this->loadTable();
        $d['horseequipement'] = $this->MHorseEquipement->find(array(
            'conditions' => 'horseequipement_id='.$id
        ));
        $d['columnshorseequipement'] = $this->MHorseEquipement->selectColumnsName('horseequipement');
        $this->set($d);
        $this->render('update');
    }


    function delete($id)
    {
        $this->loadTable();
        $this->MHorseEquipement->del($id);
        header('Location:' . WEBROOT . 'horseequipement');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseEquipement->save($_POST);
            header('Location:' . WEBROOT . 'horseequipement');
        }else{
            header('Location:' . WEBROOT . 'horseequipement');
        }
    }

    function updateObject(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorseEquipement->save($_POST);
            header('Location:' . WEBROOT . 'horseequipement');
        }else{
            header('Location:' . WEBROOT);
        }
    }

}

?>