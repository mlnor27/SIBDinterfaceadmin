<?php

Class horseplayer extends Controller
{

    var $models = array('MHorsePlayer');
    var $layout;

    function index()
    {
        $this->loadTable();
        $d['horseplayer'] = $this->MHorsePlayer->find();
        $d['columnshorseplayer'] = $this->MHorsePlayer->selectColumnsName('horseplayer');

        $this->set($d);
        $this->render('table');
    }

    function delete($id)
    {
        $this->loadTable();
        $this->MHorsePlayer->del($id);
        header('Location:' . WEBROOT . 'horseplayer');
    }

    function add(){
        if (count($_POST)>0) {
            $this->loadTable();
            $this->MHorsePlayer->save($_POST);
            header('Location:' . WEBROOT . 'horses');
        }else{
            header('Location:' . WEBROOT . 'horses');
        }
    }
}

?>